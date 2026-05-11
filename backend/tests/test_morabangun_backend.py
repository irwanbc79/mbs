"""
Backend tests for Morabangun Solutions Laravel app.
Tests:
  - GET / returns HTTP 200 with all required sections + data-testids + csrf-token
  - POST /contact validation (422 on missing fields)
  - POST /contact happy path -> {success:true} + writes [MORABANGUN_CONTACT_LEAD] to laravel.log
  - POST /api/contact alias works identically
  - Mocked mailer writes "To: info@morabangun.com" body in laravel.log
"""
import os
import re
import time
import pytest
import requests

BASE_URL = os.environ.get("REACT_APP_BACKEND_URL", "https://7d1ac202-8808-4950-ac95-2edd96b49e64.preview.emergentagent.com").rstrip("/")
LOG_PATH = "/app/storage/logs/laravel.log"


# ------------ shared session + csrf fixture ------------
@pytest.fixture(scope="module")
def session_with_csrf():
    s = requests.Session()
    r = s.get(f"{BASE_URL}/", timeout=30)
    assert r.status_code == 200, f"GET / failed: {r.status_code}"
    m = re.search(r'<meta name="csrf-token" content="([^"]+)"', r.text)
    assert m, "csrf-token meta tag not found on /"
    token = m.group(1)
    s.headers.update({
        "X-CSRF-TOKEN": token,
        "X-Requested-With": "XMLHttpRequest",
        "Accept": "application/json",
        "Content-Type": "application/json",
        "Referer": BASE_URL + "/",
        "Origin": BASE_URL,
    })
    return s, r.text


# ============== Landing page render ==============
class TestLanding:
    def test_landing_returns_200(self, session_with_csrf):
        _s, html = session_with_csrf
        assert "Mora Bangun" in html or "morabangun" in html.lower()

    def test_landing_has_csrf_meta(self, session_with_csrf):
        _s, html = session_with_csrf
        assert '<meta name="csrf-token"' in html

    def test_landing_has_all_sections(self, session_with_csrf):
        _s, html = session_with_csrf
        for sec_id in ["services", "portfolio", "testimonials", "contact"]:
            assert f'id="{sec_id}"' in html, f"missing section #{sec_id}"

    def test_landing_portfolio_testids(self, session_with_csrf):
        _s, html = session_with_csrf
        for tid in [
            "portfolio-m2b", "portfolio-portal-m2b", "portfolio-dira",
            "portfolio-indoplas", "portfolio-gma", "portfolio-ladaik",
        ]:
            assert f'data-testid="{tid}"' in html, f"missing data-testid={tid}"

    def test_landing_contact_form_testids(self, session_with_csrf):
        _s, html = session_with_csrf
        for tid in [
            "contact-name", "contact-email", "contact-phone",
            "contact-company", "contact-industry", "contact-message",
            "contact-submit",
        ]:
            assert f'data-testid="{tid}"' in html, f"missing data-testid={tid}"

    def test_landing_nav_and_hero_testids(self, session_with_csrf):
        _s, html = session_with_csrf
        for tid in ["lang-toggle", "nav-cta-btn", "hero-cta-primary", "hero-cta-secondary"]:
            assert f'data-testid="{tid}"' in html, f"missing data-testid={tid}"

    def test_landing_whatsapp_placeholder(self, session_with_csrf):
        _s, html = session_with_csrf
        # WhatsApp placeholder must NOT be a real number
        assert "+62 812-XXXX-XXXX" in html, "WhatsApp placeholder missing"

    def test_landing_portfolio_live_links(self, session_with_csrf):
        _s, html = session_with_csrf
        for dom in ["m2b.co.id", "portal.m2b.co.id", "dira.co.id",
                    "indoplas.co.id", "gma-world.co.id", "ladaik.store"]:
            assert dom in html, f"portfolio link {dom} not present"


# ============== Contact POST endpoints ==============
class TestContactPost:
    VALID = {
        "name": "TEST_Sandi Tester",
        "email": "TEST_sandi@example.com",
        "phone": "+62 812-1234-5678",
        "company": "TEST_PT Backend Sandbox",
        "industry": "tech",
        "message": "TEST_Halo, ini pesan otomatis dari pytest.",
    }

    # ---- /contact ----
    def test_contact_validation_missing_required(self, session_with_csrf):
        s, _ = session_with_csrf
        r = s.post(f"{BASE_URL}/contact", json={"name": "only name"})
        assert r.status_code == 422, f"expected 422, got {r.status_code}: {r.text[:200]}"
        body = r.json()
        assert body.get("success") is False
        assert "errors" in body
        # email, company, message must be flagged
        errs = body["errors"]
        for f in ["email", "company", "message"]:
            assert f in errs, f"expected error key '{f}' in {errs}"

    def test_contact_validation_invalid_email(self, session_with_csrf):
        s, _ = session_with_csrf
        bad = dict(self.VALID, email="not-an-email")
        r = s.post(f"{BASE_URL}/contact", json=bad)
        assert r.status_code == 422
        assert "email" in r.json().get("errors", {})

    def test_contact_happy_path_and_log_persistence(self, session_with_csrf):
        s, _ = session_with_csrf
        marker_company = f"TEST_PT_Marker_{int(time.time())}"
        payload = dict(self.VALID, company=marker_company)
        r = s.post(f"{BASE_URL}/contact", json=payload)
        assert r.status_code == 200, f"expected 200, got {r.status_code}: {r.text[:300]}"
        body = r.json()
        assert body.get("success") is True
        assert isinstance(body.get("message"), str) and len(body["message"]) > 0

        # Verify Laravel log captured the lead + mocked mail body
        time.sleep(0.3)
        assert os.path.exists(LOG_PATH), f"laravel.log not found at {LOG_PATH}"
        with open(LOG_PATH, "r", encoding="utf-8", errors="ignore") as f:
            # read tail
            f.seek(0, 2)
            size = f.tell()
            f.seek(max(0, size - 20000))
            tail = f.read()
        assert "[MORABANGUN_CONTACT_LEAD]" in tail, "lead marker missing in laravel.log"
        assert marker_company in tail, "submitted company not found in laravel.log"
        # mocked mail
        assert "info@morabangun.com" in tail, "mocked mail recipient not found in laravel.log"

    # ---- /api/contact alias ----
    def test_api_contact_alias_validation(self, session_with_csrf):
        s, _ = session_with_csrf
        r = s.post(f"{BASE_URL}/api/contact", json={})
        assert r.status_code == 422
        errs = r.json().get("errors", {})
        for f in ["name", "email", "company", "message"]:
            assert f in errs, f"expected error key '{f}' in {errs}"

    def test_api_contact_alias_happy_path(self, session_with_csrf):
        s, _ = session_with_csrf
        marker_company = f"TEST_API_Marker_{int(time.time())}"
        payload = dict(self.VALID, company=marker_company)
        r = s.post(f"{BASE_URL}/api/contact", json=payload)
        assert r.status_code == 200, f"expected 200, got {r.status_code}: {r.text[:300]}"
        body = r.json()
        assert body.get("success") is True

        time.sleep(0.3)
        with open(LOG_PATH, "r", encoding="utf-8", errors="ignore") as f:
            f.seek(0, 2); size = f.tell(); f.seek(max(0, size - 20000)); tail = f.read()
        assert marker_company in tail
