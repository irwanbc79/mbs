<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Software ERP Pabrik Kelapa Sawit (PKS) & Digital Timbangan — Mora Bangun Solutions</title>
<meta name="description" content="Sistem ERP Pabrik Kelapa Sawit (PKS) terintegrasi IoT Jembatan Timbang anti-kecurangan, Digital Sortasi TBS, Kalkulator Rendemen (OER/KER) real-time & Ketertelusuran EUDR/ISPO.">
<link rel="canonical" href="https://morabangun.com/solusi/pabrik-kelapa-sawit">
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌴</text></svg>">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<meta property="og:title" content="Software ERP Pabrik Kelapa Sawit (PKS) & Digital Timbangan IoT">
<meta property="og:description" content="Hilangkan kebocoran tonase timbang, pantau OER & KER real-time, dan penuhi audit EUDR/ISPO secara otomatis.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://morabangun.com/solusi/pabrik-kelapa-sawit">
<meta property="og:locale" content="id_ID">
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Product",
  "name": "ERP Pabrik Kelapa Sawit (PKS) by Mora Bangun Solutions",
  "description": "Sistem informasi manajemen pabrik kelapa sawit terintegrasi IoT jembatan timbang, sortasi TBS, dan ketertelusuran EUDR/ISPO.",
  "brand": {"@@type": "Organization", "name": "Mora Bangun Solutions", "url": "https://morabangun.com"},
  "offers": {"@@type": "AggregateOffer", "priceCurrency": "IDR", "lowPrice": "15000000", "highPrice": "45000000"}
}
</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Apakah indikator jembatan timbang merek lama kami bisa dihubungkan?","acceptedAnswer":{"@@type":"Answer","text":"Bisa. Sistem MBS mendukung berbagai indikator timbangan digital populer (Avery Weigh-Tronix, RICE LAKE, GSC, Sonic, Toledo, Dini Argeo) via RS-232, RS-485, maupun Converter Modbus/IP."}},
    {"@@type":"Question","name":"Bagaimana jika koneksi internet di lokasi pabrik (PKS) terputus?","acceptedAnswer":{"@@type":"Answer","text":"Sistem dilengkapi arsitektur Hybrid Offline-First Sync. Timbangan & E-Karcis tetap beroperasi 100% lancar secara lokal, dan data otomatis disinkronkan ke Cloud begitu internet kembali stabil."}},
    {"@@type":"Question","name":"Apakah sistem ini sudah mendukung kepatuhan regulasi EUDR & ISPO?","acceptedAnswer":{"@@type":"Answer","text":"Ya. Modul Traceability kami mencakup pemetaan koordinat geolokasi polygon kebun asal (Kebun Inti, Plasma, Swadaya), sertifikat ISPO/RSPO supplier, dan dokumen melacak rantai pasok CPO."}},
    {"@@type":"Question","name":"Berapa lama proses instalasi dan implementasi di PKS?","acceptedAnswer":{"@@type":"Answer","text":"Implementasi standar siap beroperasi dalam 14–21 hari kerja termasuk pemasangan converter hardware timbangan, setting master data supplier, dan pelatihan operator timbang."}}
  ]
}
</script>
<style>
  :root{
    --bg:#030712; --surface:#0b1120; --card:#0f172a; --border:#1e293b;
    --text:#e2e8f0; --muted:#94a3b8; --dim:#64748b;
    --accent:#10b981; --accent-soft:rgba(16,185,129,.14);
    --green:#34d399; --amber:#fbbf24; --red:#f87171; --cyan:#06b6d4;
  }
  *{margin:0;padding:0;box-sizing:border-box}
  html{scroll-behavior:smooth}
  body{background:var(--bg);color:var(--text);font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;line-height:1.6;overflow-x:hidden}
  a{color:inherit;text-decoration:none}
  .container{max-width:1120px;margin:0 auto;padding:0 24px}
  section{padding:88px 0}
  .eyebrow{display:inline-block;font-size:.78rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--accent);background:var(--accent-soft);border:1px solid rgba(16,185,129,.3);padding:6px 14px;border-radius:999px;margin-bottom:20px}
  h1{font-size:clamp(2rem,5vw,3.3rem);line-height:1.15;font-weight:800;letter-spacing:-.02em}
  h2{font-size:clamp(1.6rem,3.5vw,2.3rem);font-weight:750;letter-spacing:-.01em;margin-bottom:14px}
  .sub{color:var(--muted);font-size:1.08rem;max-width:680px}
  .center{text-align:center}.center .sub{margin:0 auto}
  .btn{display:inline-flex;align-items:center;gap:9px;padding:14px 28px;border-radius:12px;font-weight:650;font-size:1rem;transition:.2s;cursor:pointer;border:none}
  .btn-primary{background:var(--accent);color:#041a12;box-shadow:0 8px 30px rgba(16,185,129,.35)}
  .btn-primary:hover{transform:translateY(-2px);box-shadow:0 12px 36px rgba(16,185,129,.45)}
  .btn-ghost{background:transparent;color:var(--text);border:1px solid var(--border)}
  .btn-ghost:hover{border-color:var(--accent);color:var(--accent)}
  .btn-wa{background:#16a34a;color:#fff}
  .btn-wa:hover{transform:translateY(-2px)}
  
  /* NAV */
  nav{position:sticky;top:0;z-index:50;background:rgba(3,7,18,.85);backdrop-filter:blur(12px);border-bottom:1px solid var(--border)}
  .nav-inner{display:flex;align-items:center;justify-content:space-between;min-height:66px;gap:12px;padding:10px 0;flex-wrap:wrap}
  .logo{display:flex;align-items:center;gap:10px;font-weight:750;font-size:1.05rem;flex-shrink:0;white-space:nowrap}
  .logo-text{display:flex;flex-direction:column;line-height:1.15}
  .logo-sub{font-size:.62rem;font-weight:500;color:var(--dim);letter-spacing:.06em;text-transform:uppercase}
  .logo-mark{width:34px;height:34px;flex-shrink:0;filter:drop-shadow(0 0 6px var(--accent-soft));transition:filter .2s}
  .logo:hover .logo-mark{filter:drop-shadow(0 0 12px var(--accent))}
  .logo-mark img{width:100%;height:100%;object-fit:contain}
  .nav-links{display:flex;align-items:center;gap:18px;font-size:.87rem;color:var(--muted);flex-wrap:wrap}
  .nav-links a:hover{color:var(--text)}
  .nav-sep{width:1px;height:16px;background:var(--border);display:inline-block}
  .nav-links a[data-i18n^="cross"]{color:var(--dim);font-size:.82rem}
  .nav-links a[data-i18n^="cross"]:hover{color:var(--accent)}
  .nav-right{display:flex;align-items:center;gap:10px;flex-shrink:0}
  .lang-btn{display:flex;align-items:center;gap:6px;background:var(--card);border:1px solid var(--border);color:var(--muted);padding:7px 12px;border-radius:99px;font-size:.8rem;font-weight:700;cursor:pointer}
  .lang-btn:hover{color:var(--text);border-color:var(--accent)}
  .lang-btn svg{width:16px;height:12px;border-radius:2px;flex-shrink:0}
  .lang-btn .flag-en{display:none}
  @media(max-width:820px){.nav-links{display:none}}

  /* HERO */
  .hero{padding:80px 0 60px;position:relative}
  .hero::before{content:'';position:absolute;top:-200px;left:50%;transform:translateX(-50%);width:900px;height:600px;background:radial-gradient(ellipse,var(--accent-soft),transparent 65%);pointer-events:none}
  .hero-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:56px;align-items:center;position:relative}
  @media(max-width:920px){.hero-grid{grid-template-columns:1fr}}
  .hero h1 .hl{color:var(--accent);background:linear-gradient(90deg,var(--accent),#34d399);-webkit-background-clip:text;background-clip:text;color:transparent}
  .hero .sub{margin:22px 0 30px}
  .hero-ctas{display:flex;gap:14px;flex-wrap:wrap}
  .trust{display:flex;gap:22px;margin-top:34px;flex-wrap:wrap}
  .trust div{font-size:.85rem;color:var(--dim)}
  .trust b{display:block;color:var(--text);font-size:1.2rem;font-weight:750}
  .hero-visual{background:var(--card);border:1px solid var(--border);border-radius:18px;padding:16px;box-shadow:0 30px 80px rgba(0,0,0,.5);transform:rotate(1deg)}

  /* CARDS & PAIN */
  .cards3{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:44px}
  @media(max-width:820px){.cards3{grid-template-columns:1fr}}
  .pain-card{background:var(--card);border:1px solid var(--border);border-radius:16px;padding:28px}
  .pain-card .ico{font-size:1.7rem;margin-bottom:14px}
  .pain-card h3{font-size:1.08rem;margin-bottom:8px}
  .pain-card p{color:var(--muted);font-size:.93rem}
  .pain-card .fix{margin-top:14px;padding-top:14px;border-top:1px dashed var(--border);font-size:.88rem;color:var(--green);font-weight:600}

  /* DEMO INTERAKTIF */
  .demo-wrap{background:var(--surface);border:1px solid var(--border);border-radius:20px;overflow:hidden;margin-top:44px;box-shadow:0 40px 100px rgba(0,0,0,.45)}
  .demo-toolbar{display:flex;align-items:flex-end;justify-content:space-between;gap:16px;padding:14px 20px;background:var(--card);border-bottom:1px solid var(--border);flex-wrap:wrap;text-align:left}
  .lbl{font-size:.72rem;color:var(--dim);text-transform:uppercase;letter-spacing:.08em;font-weight:700}
  .swatches{display:flex;gap:8px;margin-top:6px}
  .swatch{width:28px;height:28px;border-radius:8px;cursor:pointer;border:2px solid transparent;transition:.15s;padding:0}
  .swatch.active{border-color:#fff;transform:scale(1.08)}
  .tenant-input{background:var(--surface);border:1px solid var(--border);color:var(--text);padding:8px 14px;border-radius:9px;font-size:.9rem;width:220px;margin-top:6px}
  .wa-hint{font-size:.7rem;color:var(--green);margin-top:5px}
  .demo-app{display:grid;grid-template-columns:220px 1fr;min-height:460px;text-align:left}
  .demo-side{background:var(--card);border-right:1px solid var(--border);padding:18px 12px}
  .tenant-badge{display:flex;align-items:center;gap:10px;padding:8px;margin-bottom:16px}
  .tenant-avatar{width:34px;height:34px;border-radius:9px;background:var(--accent);display:grid;place-items:center;font-weight:750;font-size:.78rem;color:#041a12;flex-shrink:0}
  .tenant-badge b{font-size:.85rem;display:block}
  .tenant-badge small{color:var(--dim);font-size:.68rem}
  .side-item{display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:9px;color:var(--muted);font-size:.86rem;cursor:pointer;margin-bottom:3px;background:none;border:none;width:100%;text-align:left;font-family:inherit}
  .side-item:hover{background:var(--surface)}
  .side-item.active{background:var(--accent-soft);color:var(--accent);font-weight:600}
  .side-item .bdg{margin-left:auto;background:var(--accent);color:#041a12;font-size:.6rem;font-weight:750;border-radius:999px;padding:1px 7px}
  @media(max-width:820px){
    .demo-app{grid-template-columns:1fr}
    .demo-side{border-right:none;border-bottom:1px solid var(--border);display:flex;gap:6px;overflow-x:auto;padding:10px 12px;align-items:center}
    .tenant-badge{margin-bottom:0;padding:4px 6px;flex-shrink:0}
    .tenant-badge b{font-size:.72rem;white-space:nowrap}
    .tenant-badge small{display:none}
    .side-item{width:auto;white-space:nowrap;padding:8px 12px;flex-shrink:0;font-size:.8rem;margin-bottom:0}
  }
  .demo-main{padding:24px 26px;background:var(--bg);overflow-x:auto}
  .demo-main h4{font-size:1.15rem;margin-bottom:2px}
  .demo-date{font-size:.78rem;color:var(--dim);margin-bottom:18px}
  .scr{display:none}.scr.on{display:block}
  .kpis{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-bottom:18px}
  @media(max-width:768px){.kpis{grid-template-columns:repeat(2,1fr)}}
  .kpi{background:var(--card);border:1px solid var(--border);border-radius:12px;padding:14px}
  .kpi small{font-size:.68rem;color:var(--dim);text-transform:uppercase;letter-spacing:.05em;font-weight:700}
  .kpi b{display:block;font-size:1.3rem;margin:3px 0 1px}
  .kpi span{font-size:.72rem;font-weight:600}
  .up{color:var(--green)}.warn{color:var(--amber)}.due{color:var(--red)}
  .dtable{background:var(--card);border:1px solid var(--border);border-radius:12px;overflow:hidden}
  .dtable .tt{padding:12px 16px;font-weight:650;font-size:.88rem;border-bottom:1px solid var(--border);display:flex;justify-content:space-between;align-items:center}
  .scrollx{overflow-x:auto}
  table{width:100%;border-collapse:collapse;font-size:.8rem;min-width:440px}
  th{text-align:left;padding:9px 16px;color:var(--dim);font-size:.64rem;text-transform:uppercase;letter-spacing:.06em;border-bottom:1px solid var(--border)}
  td{padding:10px 16px;border-bottom:1px solid var(--border);color:var(--muted)}
  td:first-child{color:var(--text);font-weight:600}
  tr:last-child td{border-bottom:none}
  .pill{font-size:.62rem;padding:3px 9px;border-radius:999px;font-weight:650;white-space:nowrap}
  .pill-b{background:rgba(59,130,246,.15);color:#60a5fa}
  .pill-a{background:rgba(251,191,36,.13);color:var(--amber)}
  .pill-g{background:rgba(52,211,153,.13);color:var(--green)}
  .pill-r{background:rgba(248,113,113,.13);color:var(--red)}
  .pbar{height:8px;background:var(--surface);border:1px solid var(--border);border-radius:999px;overflow:hidden;margin-top:7px}
  .pbar i{display:block;height:100%;background:var(--accent);border-radius:999px}
  .dl{color:var(--accent);font-size:.78rem;font-weight:600;cursor:pointer}
  .dl:hover{text-decoration:underline}
  .ann{display:flex;justify-content:space-between;align-items:center;gap:10px;padding:11px 16px;border-bottom:1px solid var(--border);font-size:.8rem}
  .ann:last-child{border-bottom:none}
  .ann b{color:var(--text);display:block;font-size:.82rem}
  .ann small{color:var(--dim);font-size:.68rem}
  .demo-note{padding:13px 20px;background:var(--card);border-top:1px solid var(--border);font-size:.82rem;color:var(--dim);text-align:center}
  .demo-note b{color:var(--accent)}

  /* FITUR GRID */
  .feat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:44px}
  @media(max-width:820px){.feat-grid{grid-template-columns:1fr}}
  .feat{background:var(--card);border:1px solid var(--border);border-radius:15px;padding:24px;transition:.2s}
  .feat:hover{border-color:var(--accent);transform:translateY(-3px)}
  .feat .ico{width:42px;height:42px;border-radius:11px;background:var(--accent-soft);display:grid;place-items:center;font-size:1.2rem;margin-bottom:14px}
  .feat h3{font-size:1rem;margin-bottom:6px}
  .feat p{font-size:.88rem;color:var(--muted)}

  /* ROI BOX */
  .roi-box{background:var(--card);border:1px solid var(--border);border-radius:20px;padding:32px;margin-top:44px}
  .roi-grid{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center}
  @media(max-width:820px){.roi-grid{grid-template-columns:1fr}}

  /* PRICING */
  .price-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:48px;align-items:stretch}
  @media(max-width:920px){.price-grid{grid-template-columns:1fr}}
  .price{background:var(--card);border:1px solid var(--border);border-radius:18px;padding:32px 28px;display:flex;flex-direction:column;position:relative}
  .price.popular{border-color:var(--accent);box-shadow:0 20px 60px rgba(16,185,129,.18)}
  .badge-pop{position:absolute;top:-13px;left:50%;transform:translateX(-50%);background:var(--accent);color:#041a12;font-size:.72rem;font-weight:700;padding:5px 16px;border-radius:999px;letter-spacing:.04em}
  .price h3{font-size:1.1rem}
  .price .for{font-size:.82rem;color:var(--dim);margin:4px 0 18px;min-height:2.4em}
  .amount{font-size:2rem;font-weight:800;letter-spacing:-.02em}
  .amount small{font-size:.85rem;color:var(--dim);font-weight:500}
  .monthly{font-size:.88rem;color:var(--muted);margin:4px 0 22px}
  .monthly b{color:var(--accent)}
  .price ul{list-style:none;margin-bottom:26px;flex:1}
  .price li{padding:7px 0;font-size:.89rem;color:var(--muted);display:flex;gap:10px}
  .price li::before{content:'✓';color:var(--green);font-weight:700;flex-shrink:0}

  /* PROOF & TESTIMONIAL */
  .proof{background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
  .proof-grid{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
  @media(max-width:820px){.proof-grid{grid-template-columns:1fr}}
  .quote{background:var(--card);border:1px solid var(--border);border-radius:16px;padding:28px}
  .quote p{font-style:italic;color:var(--text);font-size:1rem;margin-bottom:18px}
  .quote .who{display:flex;align-items:center;gap:13px}
  .quote .who .av{width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#10b981,#34d399);display:grid;place-items:center;font-weight:750;color:#041a12;font-size:.78rem;text-align:center}
  .quote .who b{display:block;font-size:.92rem}
  .quote .who small{color:var(--dim);font-size:.78rem}
  .proof-stats{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:26px}
  .pstat{background:var(--card);border:1px solid var(--border);border-radius:13px;padding:18px}
  .pstat b{font-size:1.4rem;display:block}
  .pstat small{color:var(--dim);font-size:.8rem}

  /* FAQ */
  .faq{max-width:760px;margin:44px auto 0}
  details{background:var(--card);border:1px solid var(--border);border-radius:13px;margin-bottom:12px;overflow:hidden}
  summary{padding:18px 22px;cursor:pointer;font-weight:600;font-size:.95rem;list-style:none;display:flex;justify-content:space-between;align-items:center}
  summary::after{content:'+';font-size:1.3rem;color:var(--accent);transition:.2s}
  details[open] summary::after{transform:rotate(45deg)}
  details p{padding:0 22px 18px;color:var(--muted);font-size:.92rem}

  /* FINAL CTA */
  .final{text-align:center;position:relative}
  .final::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at center,var(--accent-soft),transparent 70%);pointer-events:none}
  .final .btn{margin-top:28px}
  .final .micro{margin-top:16px;font-size:.83rem;color:var(--dim)}

  /* FOOTER */
  footer{border-top:1px solid var(--border);padding:56px 0 30px;font-size:.85rem;color:var(--dim);background:var(--surface)}
  .foot-grid{display:grid;grid-template-columns:1.6fr 1fr 1fr 1.2fr;gap:36px;margin-bottom:40px}
  @media(max-width:820px){.foot-grid{grid-template-columns:1fr 1fr}}
  @media(max-width:560px){.foot-grid{grid-template-columns:1fr}}
  .foot-logo{display:flex;align-items:center;gap:12px;margin-bottom:14px}
  .foot-logo img{width:44px;height:33px;object-fit:contain;filter:drop-shadow(0 0 8px var(--accent-soft))}
  .foot-brand-name{font-weight:750;font-size:1.1rem;color:var(--text)}
  .foot-brand-sub{font-size:.68rem;letter-spacing:.16em;color:var(--dim);margin-top:1px}
  .foot-desc{font-size:.85rem;color:var(--muted);line-height:1.6;max-width:30ch;margin-bottom:18px}
  .foot-social{display:flex;gap:10px}
  .foot-social a{width:34px;height:34px;border-radius:9px;border:1px solid var(--border);display:grid;place-items:center;color:var(--dim);transition:.2s}
  .foot-social a:hover{border-color:var(--accent);color:var(--accent)}
  .foot-social svg{width:15px;height:15px}
  .foot-col h4{font-size:.7rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:16px}
  .foot-col ul{list-style:none;display:grid;gap:10px}
  .foot-col a{font-size:.85rem;color:var(--dim)}
  .foot-col a:hover{color:var(--text)}
  .foot-contact-list li{display:flex;align-items:center;gap:9px;font-size:.83rem;color:var(--dim)}
  .foot-contact-list svg{width:15px;height:15px;flex-shrink:0;color:var(--accent)}
  .foot-addr{align-items:flex-start !important}
  .foot-addr svg{margin-top:2px}
  .foot-bottom{padding-top:26px;border-top:1px solid var(--border);display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px;font-size:.78rem}
  .foot-badges{display:flex;gap:10px;align-items:center;flex-wrap:wrap;color:var(--dim);font-size:.76rem}
  .foot-dot{opacity:.5}

  /* FAB & SCROLL TOP */
  .fab-wa{position:fixed;bottom:24px;right:24px;z-index:60;width:56px;height:56px;border-radius:50%;background:#16a34a;display:grid;place-items:center;box-shadow:0 10px 30px rgba(22,163,74,.45);font-size:1.5rem}
  .scroll-top{position:fixed;bottom:92px;right:24px;z-index:60;width:48px;height:48px;border-radius:50%;background:var(--card);border:1px solid var(--border);display:grid;place-items:center;box-shadow:0 8px 20px rgba(0,0,0,.35);color:var(--dim);cursor:pointer;opacity:0;pointer-events:none;transform:scale(.8);transition:opacity .2s,transform .2s,color .2s,border-color .2s}
  .scroll-top.show{opacity:1;pointer-events:auto;transform:scale(1)}
  .scroll-top:hover{color:var(--accent);border-color:var(--accent);transform:translateY(-2px) scale(1.04)}
  .scroll-top svg{width:20px;height:20px}
</style>
</head>
<body>

<nav>
  <div class="container nav-inner">
    <a class="logo" href="https://morabangun.com">
      <span class="logo-mark"><img src="/images/brand/mbs-symbol-160.png" alt="MBS" width="160" height="118"></span>
      <span class="logo-text">Mora <span style="color:var(--accent)">Bangun</span><span class="logo-sub">Solutions</span></span>
    </a>
    <div class="nav-links">
      <a href="https://morabangun.com" data-i18n="crossHome">Beranda</a>
      <a href="/solusi" data-i18n="navSolusi">Solusi</a>
      <a href="#demo" data-i18n="nav1">Demo</a>
      <a href="#fitur" data-i18n="nav2">Fitur</a>
      <a href="#harga" data-i18n="nav3">Harga</a>
      <a href="#faq">FAQ</a>
      <span class="nav-sep"></span>
      <a href="https://morabangun.com/#portfolio" data-i18n="crossPortfolio">Portfolio</a>
      <a href="https://morabangun.com/#tech" data-i18n="crossTech">Teknologi</a>
      <a href="https://morabangun.com/#testimonials" data-i18n="crossTesti">Testimoni</a>
      <a href="https://morabangun.com/#contact" data-i18n="crossContact">Kontak</a>
      <a href="https://morabangun.com/blog" data-i18n="crossBlog">Blog</a>
    </div>
    <div class="nav-right">
      <button class="lang-btn" id="langBtn" onclick="toggleLang()" aria-label="Switch language">
        <svg class="flag-id" viewBox="0 0 20 14" fill="none"><rect width="20" height="7" fill="#CE1126"/><rect y="7" width="20" height="7" fill="#FFFFFF"/></svg>
        <svg class="flag-en" viewBox="0 0 20 14"><rect width="20" height="14" fill="#012169"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#fff" stroke-width="2.8"/><path d="M10,0 V14 M0,7 H20" stroke="#fff" stroke-width="4.5"/><path d="M10,0 V14 M0,7 H20" stroke="#C8102E" stroke-width="2.8"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#C8102E" stroke-width="1.5"/></svg>
        <span id="langLabel">EN</span>
      </button>
      <a class="btn btn-primary" style="padding:10px 20px;font-size:.9rem" href="#demo" data-i18n="navCta">Coba Demo →</a>
    </div>
  </div>
</nav>

<header class="hero">
  <div class="container hero-grid">
    <div>
      <span class="eyebrow" data-i18n="eyebrowPks">🌴 Pabrik Kelapa Sawit (PKS) · ERP Timbangan · Yield OER</span>
      <h1 data-i18n="h1Pks">Digitalisasi PKS: <span class="hl">Timbangan IoT, Sortasi TBS &amp; Rendemen Real-Time</span></h1>
      <p class="sub" data-i18n="hsubPks">Hilangkan kebocoran tonase timbang, hitung OER &amp; KER per shift secara otomatis, serta penuhi kepatuhan EUDR &amp; ISPO dalam satu portal cloud modern.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="#demo" data-i18n="ctaDemo">▶ Lihat Demo Langsung</a>
        <a class="btn btn-wa" data-wa data-pkg="Pabrik Kelapa Sawit (PKS)" data-pos="hero" href="https://wa.me/6281399997132" target="_blank" rel="noopener" data-i18n="ctaWa">💬 Konsultasi Gratis</a>
      </div>
      <div class="trust">
        <div><b>Timbangan IoT</b><span>tanpa ketik manual</span></div>
        <div><b>Rendemen OER/KER</b><span>kalkulasi real-time</span></div>
        <div><b>EUDR &amp; ISPO</b><span>traceability polygon</span></div>
      </div>
    </div>
    <div class="hero-visual">
      <img src="/images/solusi/pabrik-kelapa-sawit-hero.webp" alt="ERP Pabrik Kelapa Sawit (PKS) &amp; Timbangan IoT" width="1448" height="1086" loading="eager" fetchpriority="high" style="width:100%;height:auto;display:block;border-radius:10px">
    </div>
  </div>
</header>

<!-- PAIN POINTS -->
<section>
  <div class="container center">
    <span class="eyebrow" data-i18n="painEye">Tantangan Operasional PKS</span>
    <h2>Mengapa Banyak PKS Mengalami Kebocoran &amp; Audit Gagal?</h2>
    <p class="sub">Metode pencatatan manual di jembatan timbang dan lembar sortasi kertas menjadi celah utama kebocoran finansial di pabrik kelapa sawit.</p>
    <div class="cards3" style="text-align:left">
      <div class="pain-card">
        <div class="ico">⚖️</div>
        <h3>Kecurangan &amp; Selisih Timbangan</h3>
        <p>Angka timbang diketik manual oleh operator, rawan manipulasi tonase TBS masuk maupun CPO keluar yang merugikan ratusan juta per bulan.</p>
        <div class="fix">✓ Solusi: IoT Timbangan Otomatis terkunci pada angka terstabil tanpa opsi ketik manual.</div>
      </div>
      <div class="pain-card">
        <div class="ico">🔍</div>
        <h3>Potongan Sortasi Tidak Objektif</h3>
        <p>Penilaian kriteria buah mentah, tangkai panjang, atau sampah tidak standar, memicu komplain supplier TBS atau klaim kerugian pabrik.</p>
        <div class="fix">✓ Solusi: Form Digital Grading Sortasi dengan foto bukti &amp; rumus penalti kalkulasi otomatis.</div>
      </div>
      <div class="pain-card">
        <div class="ico">📜</div>
        <h3>Ancaman Regulasi EUDR &amp; ISPO</h3>
        <p>Buyer CPO global menolak pasokan tanpa data ketertelusuran koordinat kebun (Traceability) dan dokumen sertifikasi legalitas.</p>
        <div class="fix">✓ Solusi: Modul Geolocation Mapping polygon kebun &amp; paspor sertifikasi supplier TBS.</div>
      </div>
    </div>
  </div>
</section>

<!-- DEMO INTERAKTIF -->
<section id="demo" style="padding-top:40px">
  <div class="container center">
    <span class="eyebrow" data-i18n="demoEye">Demo Interaktif — Coba Sekarang</span>
    <h2 data-i18n="demoH2">Ini Sistem yang Akan Dipakai Pengguna Anda</h2>
    <div id="demo-pks">
      <div class="demo-wrap" id="dw-pks">
        <div class="demo-toolbar">
          <div>
            <span class="lbl">White-label: warna perusahaan Anda</span>
            <div class="swatches">
              <button class="swatch active" style="background:#10b981" onclick="setSw('pks','#10b981',this)" aria-label="hijau"></button>
              <button class="swatch" style="background:#0284c7" onclick="setSw('pks','#0284c7',this)" aria-label="biru"></button>
              <button class="swatch" style="background:#dc2626" onclick="setSw('pks','#dc2626',this)" aria-label="merah"></button>
              <button class="swatch" style="background:#f97316" onclick="setSw('pks','#f97316',this)" aria-label="oranye"></button>
              <button class="swatch" style="background:#8b5cf6" onclick="setSw('pks','#8b5cf6',this)" aria-label="ungu"></button>
            </div>
          </div>
          <div>
            <span class="lbl">Nama perusahaan Anda</span><br>
            <input class="tenant-input" value="PT Sawit Mandiri Utama" oninput="setTenant('pks',this.value)">
            <div class="wa-hint">↳ nama ini otomatis masuk ke chat WA Anda</div>
          </div>
        </div>
        <div class="demo-app">
          <aside class="demo-side">
            <div class="tenant-badge"><div class="tenant-avatar" id="av-pks">SM</div><div><b class="tn-pks">PT Sawit Mandiri Utama</b><small>Portal ERP PKS</small></div></div>
            <button class="side-item active" onclick="go('pks','dash',this)">📊 Ringkasan</button>
            <button class="side-item" onclick="go('pks','timbangan',this)">⚖️ Timbangan IoT</button>
            <button class="side-item" onclick="go('pks','sortasi',this)">🔍 Sortasi TBS</button>
            <button class="side-item" onclick="go('pks','rendemen',this)">📊 Rendemen OER</button>
            <button class="side-item" onclick="go('pks','dispatch',this)">🚛 Dispatch CPO <span class="bdg">LIVE</span></button>
          </aside>
          <main class="demo-main">
            <!-- TAB 1: RINGKASAN -->
            <div class="scr on" id="pks-dash">
              <h4>Pabrik PKS Unit 1 — Kapasitas 45 Ton/Jam</h4>
              <div class="ddate jdate"></div>
              <div class="kpis">
                <div class="kpi"><small>TBS Masuk</small><b id="kpiTbs" style="color:var(--text)">485,20 Ton</b><span class="up">38 Truk Ditimbang</span></div>
                <div class="kpi"><small>Rendemen OER</small><b id="kpiOer" style="color:var(--accent)">21,85 %</b><span class="up">Target &gt; 21.5%</span></div>
                <div class="kpi"><small>Rendemen KER</small><b style="color:var(--cyan)">5,12 %</b><span class="up">Kernel Optimal</span></div>
                <div class="kpi"><small>Dispatch CPO</small><b style="color:var(--amber)">6 Tangki</b><span class="up">148,50 Ton CPO</span></div>
              </div>
              <div class="dtable">
                <div class="tt">Aktivitas Penimbangan Terbaru <button class="btn btn-primary" style="padding:5px 12px;font-size:.75rem" onclick="timbangSimulasi()">⚡ Simulasi Timbang Truk Masuk</button></div>
                <div id="logTimbang">
                  <div class="ann"><div><b>Truck #BK-8842-YL (Koperasi Sawit Sejahtera)</b><small>TBS Masuk · Gross: 24.120 kg · Netto: 14.850 kg · Sortasi: 2.5%</small></div><span class="pill pill-g">Timbang Masuk OK</span></div>
                  <div class="ann"><div><b>Truck #BK-9102-CT (PT Perkebunan Nusantara)</b><small>TBS Masuk · Gross: 28.450 kg · Netto: 18.200 kg · Sortasi: 1.8%</small></div><span class="pill pill-g">Timbang Masuk OK</span></div>
                  <div class="ann"><div><b>Tangki CPO #BK-7711-WX (PT Wilmar Nabari)</b><small>Dispatch CPO · Netto: 25.100 kg · Segel #SG-90812</small></div><span class="pill pill-b">Dispatched</span></div>
                </div>
              </div>
            </div>
            <!-- TAB 2: TIMBANGAN IOT -->
            <div class="scr" id="pks-timbangan">
              <h4>Jembatan Timbang Digital — Avery Weigh-Tronix RS-232 Direct</h4>
              <div class="ddate">Koneksi Hardware IoT direct link tanpa ketik manual — anti-kecurangan</div>
              <div class="dtable"><div class="tt">Sinyal Indikator Live: STABLE</div>
                <div style="padding:20px;display:grid;grid-template-columns:repeat(3,1fr);gap:14px;text-align:center">
                  <div style="background:var(--surface);padding:14px;border-radius:12px;border:1px solid var(--border)"><small style="color:var(--dim)">GROSS WEIGHT</small><b style="font-size:1.5rem;display:block;color:var(--text)">24.120 kg</b></div>
                  <div style="background:var(--surface);padding:14px;border-radius:12px;border:1px solid var(--border)"><small style="color:var(--dim)">TARE WEIGHT</small><b style="font-size:1.5rem;display:block;color:var(--muted)">9.270 kg</b></div>
                  <div style="background:var(--surface);padding:14px;border-radius:12px;border:1px solid var(--border)"><small style="color:var(--dim)">NETTO WEIGHT</small><b style="font-size:1.5rem;display:block;color:var(--accent)">14.850 kg</b></div>
                </div>
                <div style="padding:0 20px 20px;text-align:right">
                  <button class="btn btn-primary" onclick="openKarcisModal('#BK-8842-YL', '14.850 kg')">📄 Cetak E-Karcis Barcode &amp; Kirim WA</button>
                </div>
              </div>
            </div>
            <!-- TAB 3: SORTASI TBS -->
            <div class="scr" id="pks-sortasi">
              <h4>Grading &amp; Potongan Sortasi TBS</h4>
              <div class="ddate">Kalkulasi otomatis penalti harga berdasarkan fraksi mutu buah</div>
              <div class="dtable"><div class="tt">Hasil Grading Lot #SPB-99021</div>
                <div class="scrollx"><table>
                  <thead><tr><th>Kriteria Buah</th><th>Persentase</th><th>Potongan Penalti</th><th>Status</th></tr></thead>
                  <tbody>
                    <tr><td>Buah Matang (Fractions 2-3)</td><td>88.5%</td><td>0%</td><td><span class="pill pill-g">Sesuai Standard</span></td></tr>
                    <tr><td>Buah Mentah (Fraction 0)</td><td>4.2%</td><td>-2.5%</td><td><span class="pill pill-a">Penalti Potongan</span></td></tr>
                    <tr><td>Tangkai Panjang (&gt; 2cm)</td><td>3.1%</td><td>-1.0%</td><td><span class="pill pill-a">Penalti Potongan</span></td></tr>
                    <tr><td>Sampah / Pasir / Air</td><td>4.2%</td><td>-4.2%</td><td><span class="pill pill-r">Dipotong Berat</span></td></tr>
                  </tbody>
                </table></div>
              </div>
            </div>
            <!-- TAB 4: RENDEMEN OER -->
            <div class="scr" id="pks-rendemen">
              <h4>Kalkulator Rendemen OER &amp; KER Real-Time</h4>
              <div class="ddate">Perhitungan persentase ekstraksi minyak kelapa sawit per shift kerja</div>
              <div class="dtable"><div class="tt">Rendemen Produksi Shift 1</div>
                <div style="padding:20px;display:grid;gap:14px">
                  <div>
                    <div style="display:flex;justify-content:space-between;font-size:.85rem;margin-bottom:4px"><span>Oil Extraction Rate (OER)</span><b style="color:var(--accent)">21.85% (Optimal)</b></div>
                    <div class="pbar"><i style="width:87%"></i></div>
                  </div>
                  <div>
                    <div style="display:flex;justify-content:space-between;font-size:.85rem;margin-bottom:4px"><span>Kernel Extraction Rate (KER)</span><b style="color:var(--cyan)">5.12% (Sesuai Target)</b></div>
                    <div class="pbar"><i style="width:78%;background:var(--cyan)"></i></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TAB 5: DISPATCH CPO -->
            <div class="scr" id="pks-dispatch">
              <h4>Dispatch CPO &amp; Surat Jalan Digital</h4>
              <div class="ddate">Kontrak Penjualan, Segel Tangki, &amp; Kuota Delivery Order (DO)</div>
              <div class="dtable"><div class="tt">Pengiriman Tangki CPO Hari Ini</div>
                <div class="ann"><div><b>Tangki #BK-7711-WX — PT Wilmar Nabati Indonesia</b><small>DO #DO-2026-0881 · Netto: 25.100 kg · Segel #SG-90812</small></div><span class="dl" onclick="openKarcisModal('#BK-7711-WX', '25.100 kg CPO')">📄 Surat Jalan QR</span></div>
                <div class="ann"><div><b>Tangki #BK-9912-FA — PT Musim Mas</b><small>DO #DO-2026-0882 · Netto: 24.800 kg · Segel #SG-90813</small></div><span class="dl" onclick="openKarcisModal('#BK-9912-FA', '24.800 kg CPO')">📄 Surat Jalan QR</span></div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
    <div class="demo-note" data-i18n="demoNote">ℹ️ Ini <b>demo interaktif live</b>. Anda dapat mengubah nama perusahaan, warna branding, menguji simulasi timbang, dan melihat E-Karcis Barcode.</div>
  </div>
</section>

<!-- FITUR LENGKAP -->
<section id="fitur" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container center">
    <span class="eyebrow" data-i18n="featEye">Fitur Lengkap PKS</span>
    <h2 data-i18n="featH2">Setiap Modul Dibangun dari Operasional Pabrik Sawit Sungguhan</h2>
    <p class="sub" data-i18n="featSub">Dirancang dari alur penerimaan TBS hingga pengapalan CPO ke buyer global.</p>
    <div class="feat-grid" style="text-align:left">
      <div class="feat">
        <div class="ico">⚖️</div>
        <h3>1. IoT Digital Weighbridge</h3>
        <p>Integrasi langsung ke indikator timbangan (Avery, Rice Lake, Toledo). E-Karcis barcode &amp; WA otomatis ke supir/supplier.</p>
      </div>
      <div class="feat">
        <div class="ico">🔍</div>
        <h3>2. Digital Sortasi &amp; Penalti TBS</h3>
        <p>Input persentase buah mentah, lewat matang, busuk, &amp; potongan air/sampah. Otomatis memotong pembayaran SPB.</p>
      </div>
      <div class="feat">
        <div class="ico">📊</div>
        <h3>3. Real-Time OER &amp; KER Rendemen</h3>
        <p>Monitoring rasio ekstraksi minyak kelapa sawit (OER) &amp; inti sawit (KER) per shift kerja &amp; per penyuplai.</p>
      </div>
      <div class="feat">
        <div class="ico">🚛</div>
        <h3>4. Dispatch CPO &amp; Surat Jalan QR</h3>
        <p>Manajemen Kontrak Penjualan, Kuota DO, Segel Truk Tangki CPO, &amp; Cetak Surat Jalan digital terlindungi QR Code.</p>
      </div>
      <div class="feat">
        <div class="ico">🗺️</div>
        <h3>5. EUDR &amp; ISPO Traceability</h3>
        <p>Pemetaan polygon lokasi kebun asal TBS (Kebun Inti, Plasma, Swadaya) untuk memenuhi audit ekspor CPO Uni Eropa.</p>
      </div>
      <div class="feat">
        <div class="ico">📲</div>
        <h3>6. Portal Supplier &amp; Koperasi TBS</h3>
        <p>Supplier &amp; Koperasi Mitra dapat mengecek riwayat tonase, rekap potongan sortasi, &amp; rincian pembayaran dari HP.</p>
      </div>
    </div>
  </div>
</section>

<!-- ROI CALCULATOR -->
<section>
  <div class="container">
    <div class="roi-box">
      <div class="roi-grid">
        <div>
          <span class="eyebrow" style="background:rgba(52,211,153,.1);color:var(--green)">KALKULATOR EFISIENSI PKS</span>
          <h2>Berapa Banyak Kebocoran yang Bisa Dicegah?</h2>
          <p style="color:var(--muted);font-size:.95rem;margin-top:10px">Geser kapasitas olah pabrik Anda untuk melihat estimasi penghematan dari eliminasi kebocoran timbangan &amp; optimasi rendemen.</p>
        </div>
        <div>
          <div style="background:var(--bg);padding:24px;border-radius:16px;border:1px solid var(--border)">
            <label style="font-size:.8rem;color:var(--dim);font-weight:700;display:block;margin-bottom:8px">KAPASITAS OLAH TBS (TON / HARI)</label>
            <input type="range" id="tbsCapacity" min="100" max="1500" step="50" value="450" style="width:100%;accent-color:var(--accent)" oninput="calcPksRoi()">
            <div style="display:flex;justify-content:space-between;margin-top:6px;font-size:.85rem;font-weight:700">
              <span>100 Ton</span>
              <span id="capVal" style="color:var(--accent);font-size:1.1rem">450 Ton/Hari</span>
              <span>1.500 Ton</span>
            </div>

            <div style="margin-top:20px;padding-top:16px;border-top:1px dashed var(--border);display:grid;grid-template-columns:1fr 1fr;gap:14px">
              <div>
                <small style="color:var(--dim);font-size:.7rem">PENCEGAHAN KEBOCORAN (0.3%)</small>
                <b id="savingsVal" style="font-size:1.2rem;color:var(--green);display:block">Rp 3.375.000 /Hari</b>
                <span style="font-size:.75rem;color:var(--muted)">± Rp 101 Jt /Bulan</span>
              </div>
              <div>
                <small style="color:var(--dim);font-size:.7rem">EFISIENSI WAKTU TIMBANG</small>
                <b id="timeVal" style="font-size:1.2rem;color:var(--cyan);display:block">3,5 Jam /Hari</b>
                <span style="font-size:.75rem;color:var(--muted)">Antrean Truk Lebih Cepat</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section id="harga">
  <div class="container center">
    <span class="eyebrow" data-i18n="prEye">Investasi</span>
    <h2 data-i18n="prH2">Harga Khusus untuk Pabrik Kelapa Sawit</h2>
    <p class="sub" data-i18n="prSub">Pilih paket sesuai skala kapasitas olah dan kebutuhan integrasi pabrik kelapa sawit Anda.</p>
    <div class="price-grid" style="text-align:left">
      <div class="price">
        <h3>Starter PKS</h3>
        <div class="for">Untuk PKS Skala Kecil / Mandiri (&lt; 30 Ton/Jam)</div>
        <div class="amount">Rp 15jt <small>setup</small></div>
        <div class="monthly">+ <b>Rp 1,5jt/bulan</b> <span>hosting &amp; maintenance</span></div>
        <ul>
          <li>1 Jembatan Timbang IoT Direct Link</li>
          <li>Cetak E-Karcis Barcode Timbang</li>
          <li>Laporan Tonase Harian TBS &amp; CPO</li>
          <li>Master Data Supplier &amp; Supir</li>
          <li>Backup Data Otomatis Harian</li>
        </ul>
        <a class="btn btn-ghost" data-wa data-pkg="paket Starter PKS" data-pos="pricing" href="https://wa.me/6281399997132" target="_blank" rel="noopener">Pilih Starter</a>
      </div>

      <div class="price popular">
        <span class="badge-pop">PALING LARIS</span>
        <h3>Professional PKS</h3>
        <div class="for">Untuk PKS Komersial &amp; Kemitraan (30–60 Ton/Jam)</div>
        <div class="amount" style="color:var(--accent)">Rp 25jt <small>setup</small></div>
        <div class="monthly">+ <b>Rp 2,5jt/bulan</b> <span>hosting &amp; maintenance</span></div>
        <ul>
          <li>Multi-Jembatan Timbang (Masuk &amp; Keluar)</li>
          <li>Modul Digital Sortasi &amp; Rumus Potongan</li>
          <li>Dashboard Rendemen Real-time (OER/KER)</li>
          <li>Notifikasi WA Otomatis ke Supplier</li>
          <li>Dispatch Truk Tangki CPO &amp; Surat Jalan QR</li>
          <li>Portal Akses Supplier &amp; Koperasi Kebun</li>
        </ul>
        <a class="btn btn-primary" data-wa data-pkg="paket Professional PKS" data-pos="pricing" href="https://wa.me/6281399997132" target="_blank" rel="noopener">Pilih Professional</a>
      </div>

      <div class="price">
        <h3>Enterprise PKS</h3>
        <div class="for">Untuk Grup Perkebunan &amp; Ekspor CPO (&gt; 60 Ton/Jam)</div>
        <div class="amount">Rp 45jt+ <small>custom</small></div>
        <div class="monthly">langganan sesuai SLA &amp; modul</div>
        <ul>
          <li>Semua Fitur Paket Professional</li>
          <li>EUDR &amp; ISPO Geolocation Traceability</li>
          <li>Modul Maintenance &amp; Sparepart Mesin</li>
          <li>Accounting &amp; General Ledger PKS</li>
          <li>Offline-First Hybrid Sync (Anti Runtuh)</li>
          <li>Custom Development &amp; On-Site Training</li>
        </ul>
        <a class="btn btn-ghost" data-wa data-pkg="paket Enterprise PKS" data-pos="pricing" href="https://wa.me/6281399997132" target="_blank" rel="noopener">Diskusi Kebutuhan</a>
      </div>
    </div>
  </div>
</section>

<!-- PROOF -->
<section class="proof">
  <div class="container proof-grid">
    <div>
      <span class="eyebrow" data-i18n="prfEye">Bukti, Bukan Janji</span>
      <h2 data-i18n="prfH2">Teruji Dalam Operasional Industri &amp; Logistik Berat</h2>
      <p class="sub">Bukan software prototype. Fondasi IoT timbangan &amp; integrasi kami teruji menangani arus data berat secara real-time.</p>
      <div class="proof-stats">
        <div class="pstat"><b>IoT Direct</b><small>Direct RS-232 &amp; Modbus</small></div>
        <div class="pstat"><b>0% Typing</b><small>Bypass ketik manual operator</small></div>
        <div class="pstat"><b>EUDR Ready</b><small>Traceability polygon kebun</small></div>
        <div class="pstat"><b>Hybrid Sync</b><small>Tetap jalan saat internet mati</small></div>
      </div>
    </div>
    <div class="quote">
      <p>"Kebocoran 0,5% di jembatan timbang PKS tampak kecil, tetapi untuk pabrik berkapasitas 500 Ton/hari itu setara Rp 15 Juta kebocoran per hari. Sistem IoT MBS mengunci angka timbang secara sah dan transparan."</p>
      <div class="who">
        <div class="av">MB</div>
        <div><b>Tim Mora Bangun Solutions</b><small>Spesialis ERP &amp; Automation Industri, Medan</small></div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="container center">
    <span class="eyebrow" data-i18n="faqEye">Pertanyaan Umum</span>
    <h2 data-i18n="faqH2">Yang Sering Ditanyakan Manajerial PKS</h2>
    <div class="faq" style="text-align:left">
      <details><summary>Apakah indikator jembatan timbang merek lama kami bisa dihubungkan?</summary><p>Bisa. Sistem MBS mendukung berbagai indikator timbangan digital populer (Avery Weigh-Tronix, RICE LAKE, GSC, Sonic, Toledo, Dini Argeo) via RS-232, RS-485, maupun Converter Modbus/IP.</p></details>
      <details><summary>Bagaimana jika koneksi internet di lokasi pabrik (PKS) terputus?</summary><p>Sistem dilengkapi arsitektur Hybrid Offline-First Sync. Timbangan &amp; E-Karcis tetap beroperasi 100% lancar secara lokal, dan data otomatis disinkronkan ke Cloud begitu internet kembali stabil.</p></details>
      <details><summary>Apakah sistem ini sudah mendukung kepatuhan regulasi EUDR &amp; ISPO?</summary><p>Ya. Modul Traceability kami mencakup pemetaan koordinat geolokasi polygon kebun asal (Kebun Inti, Plasma, Swadaya), sertifikat ISPO/RSPO supplier, dan dokumen melacak rantai pasok CPO.</p></details>
      <details><summary>Berapa lama proses instalasi dan implementasi di PKS?</summary><p>Implementasi standar siap beroperasi dalam 14–21 hari kerja termasuk pemasangan converter hardware timbangan, setting master data supplier, dan pelatihan operator timbang.</p></details>
    </div>
  </div>
</section>

<!-- ARTIKEL TERKAIT BLOG -->
<x-related-articles vertical="pabrik-kelapa-sawit" />

<!-- FINAL CTA -->
<section class="final">
  <div class="container">
    <span class="eyebrow" data-i18n="finEye">Langkah Berikutnya</span>
    <h2>Tingkatkan Akurasi Rendemen &amp; Cegah Kebocoran PKS Anda</h2>
    <p class="sub" style="margin:16px auto 0">Konsultasi 30 menit gratis — tim spesialis kami siap memetakan alur timbang &amp; sortasi di pabrik Anda.</p>
    <a class="btn btn-wa" style="font-size:1.05rem;padding:16px 36px" data-wa data-pkg="Pabrik Kelapa Sawit (PKS)" data-pos="final" href="https://wa.me/6281399997132" target="_blank" rel="noopener">💬 Jadwalkan Konsultasi PKS via WhatsApp</a>
    <div class="micro">Tanpa komitmen · Balasan &lt; 1 jam di jam kerja · Medan &amp; Seluruh Sumatera/Kalimantan/Indonesia</div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand">
        <div class="foot-logo">
          <img src="/images/brand/mbs-symbol-160.png" alt="MBS" width="64" height="47" loading="lazy">
          <div>
            <div class="foot-brand-name">Mora <span style="color:var(--accent)">Bangun</span></div>
            <div class="foot-brand-sub">SOLUTIONS</div>
          </div>
        </div>
        <p class="foot-desc" data-i18n="footDesc">Partner transformasi digital berbasis AI dari Medan. Spesialis ERP, CRM, Corporate Portal &amp; Workflow Automation untuk Indonesia.</p>
        <div class="foot-social">
          <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
          <a href="mailto:info@morabangun.com" aria-label="Email"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></a>
          <a href="https://wa.me/6281399997132" target="_blank" rel="noopener" aria-label="WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg> +62 813-9999-7132</a></li>
          <li class="foot-addr"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg> <span data-i18n="footAddr">Medan, Sumatera Utara,<br>Indonesia 20111</span></li>
        </ul>
      </div>
    </div>
    <div class="foot-bottom">
      <p data-i18n="ft1">© 2026 Mora Bangun Solutions · morabangun.com — Spesialis ERP &amp; Automation Pabrik Kelapa Sawit, Medan, Indonesia</p>
      <div class="foot-badges">
        <span data-i18n="footSsl">🔒 SSL Secured</span><span class="foot-dot">·</span>
        <span data-i18n="footProd">● Production Ready</span><span class="foot-dot">·</span>
        <span data-i18n="footMade">🇮🇩 Made in Indonesia</span>
      </div>
    </div>
  </div>
</footer>

<!-- E-KARCIS MODAL -->
<div id="karcisModal" style="display:none;position:fixed;inset:0;z-index:999;background:rgba(3,7,18,.85);backdrop-filter:blur(10px);align-items:center;justify-content:center;padding:20px">
  <div style="background:var(--card);border:1px solid var(--border);border-radius:20px;max-width:500px;width:100%;padding:24px;position:relative;box-shadow:0 25px 60px rgba(0,0,0,.8);text-align:center">
    <button onclick="closeKarcisModal()" style="position:absolute;top:18px;right:18px;background:none;border:none;color:var(--muted);font-size:1.4rem;cursor:pointer">✕</button>
    <div style="font-size:2rem;margin-bottom:8px">📄</div>
    <h3 style="font-size:1.15rem;margin-bottom:4px">E-Karcis Barcode Timbangan</h3>
    <small style="color:var(--dim);display:block;margin-bottom:16px">Verifikasi IoT Hardware Direct Link</small>
    <div style="background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:16px;font-family:monospace;font-size:.85rem;text-align:left;margin-bottom:18px;color:var(--green)">
      <div>REG: #WEIGH-2026-0982</div>
      <div id="karcisTruck">TRUCK: #BK-8842-YL</div>
      <div id="karcisWeight">NETTO: 14.850 kg</div>
      <div>SUPPLIER: Koperasi Sawit Sejahtera</div>
      <div>STATUS: IoT Locked ✓ (Anti-Ketik)</div>
    </div>
    <button class="btn btn-primary" onclick="closeKarcisModal();showToast('💬 E-Karcis berhasil dikirim ke WhatsApp Supir &amp; Pengurus Koperasi!')" style="width:100%;justify-content:center">💬 Kirim Ulang via WhatsApp</button>
  </div>
</div>

<!-- TOAST NOTIFICATION CONTAINER -->
<div id="toast" style="position:fixed;bottom:90px;left:50%;transform:translateX(-50%);background:var(--card);border:1px solid var(--accent);color:var(--text);padding:14px 28px;border-radius:14px;box-shadow:0 12px 40px rgba(0,0,0,.7);z-index:999;display:none;font-weight:600;font-size:.9rem;align-items:center;gap:10px"></div>

<!-- FAB WA & SCROLL TOP -->
<a class="fab-wa" data-wa data-pkg="Pabrik Kelapa Sawit (PKS)" data-pos="fab" href="https://wa.me/6281399997132" target="_blank" rel="noopener" aria-label="WhatsApp">💬</a>
<button class="scroll-top" id="scrollTopBtn" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Kembali ke atas" title="Kembali ke atas">
  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/></svg>
</button>

<script>
  var tenantName = 'PT Sawit Mandiri Utama';
  function setTenant(pre, name){
    var v = name.trim() || 'Perusahaan Anda';
    tenantName = v;
    document.querySelectorAll('.tn-'+pre).forEach(function(e){e.textContent=v});
    var initials = v.replace(/^(PT|CV|UD|TB|Ponpes|Yayasan)\.?\s+/i,'').split(/\s+/).map(function(w){return w[0]||''}).join('').slice(0,2).toUpperCase();
    var av = document.getElementById('av-'+pre); if(av) av.textContent = initials || 'PA';
    refreshWa();
  }

  function showToast(msg) {
    var t = document.getElementById('toast');
    t.innerHTML = msg;
    t.style.display = 'flex';
    setTimeout(function(){ t.style.display = 'none'; }, 4000);
  }

  function openKarcisModal(truck, weight) {
    document.getElementById('karcisTruck').innerText = 'TRUCK: ' + truck;
    document.getElementById('karcisWeight').innerText = 'NETTO: ' + weight;
    document.getElementById('karcisModal').style.display = 'flex';
  }

  function closeKarcisModal() {
    document.getElementById('karcisModal').style.display = 'none';
  }

  var simulatedTrucks = 38;
  var simulatedTon = 485.20;

  function timbangSimulasi() {
    simulatedTrucks++;
    simulatedTon += 15.40;
    document.getElementById('kpiTbs').innerText = simulatedTon.toFixed(2).replace('.', ',') + ' Ton';
    
    var log = document.getElementById('logTimbang');
    var newRow = document.createElement('div');
    newRow.className = 'ann';
    newRow.innerHTML = '<div><b>Truck #BK-' + Math.floor(1000 + Math.random() * 9000) + '-SU (' + tenantName + ')</b><small>TBS Masuk · Gross: 24.800 kg · Netto: 15.400 kg · Sortasi: 1.5%</small></div><span class="pill pill-g">Timbang Masuk OK</span>';
    log.insertBefore(newRow, log.firstChild);
    
    showToast('⚡ <b>Simulasi Timbang IoT Berhasil!</b> Tonase ter-update: ' + simulatedTon.toFixed(2).replace('.', ',') + ' Ton (' + simulatedTrucks + ' Truk).');
  }

  function calcPksRoi() {
    var cap = parseInt(document.getElementById('tbsCapacity').value);
    document.getElementById('capVal').innerText = cap.toLocaleString('id-ID') + ' Ton/Hari';
    
    var tbsPrice = 2500000;
    var dailySavings = cap * tbsPrice * 0.003;
    var timeHours = (cap / 125).toFixed(1);
    
    document.getElementById('savingsVal').innerText = 'Rp ' + Math.round(dailySavings).toLocaleString('id-ID') + ' /Hari';
    document.getElementById('timeVal').innerText = timeHours.replace('.', ',') + ' Jam /Hari';
  }
  calcPksRoi();

  /* ===== BILINGUAL TRANSLATIONS ===== */
  var lang = 'id';
  var EN = {
    'navSolusi': 'Solutions',
    'nav1': 'Demo',
    'nav2': 'Features',
    'nav3': 'Pricing',
    'navCta': 'Try the Demo &rarr;',
    'crossHome': 'Home',
    'crossPortfolio': 'Portfolio',
    'crossTech': 'Technology',
    'crossTesti': 'Testimonials',
    'crossContact': 'Contact',
    'crossBlog': 'Blog',
    'eyebrowPks': '🌴 Palm Oil Mill (PKS) · Weighbridge ERP · Yield OER',
    'h1Pks': 'Palm Oil Mill Digitization: <span class="hl">IoT Weighbridge, FFB Grading &amp; Real-Time Yield</span>',
    'hsubPks': 'Eliminate weighbridge tonnage leakage, calculate OER &amp; KER per shift automatically, and ensure EUDR &amp; ISPO compliance in one modern cloud portal.',
    'ctaDemo': '&#9654; See Live Demo',
    'ctaWa': '&#128172; Free Consultation',
    'painEye': 'Operational Challenges of PKS',
    'demoEye': 'Interactive Demo &mdash; Try It Now',
    'demoH2': 'This Is the System Your Team Will Use',
    'demoNote': 'ℹ️ This is a <b>live interactive demo</b>. You can customize the company name, brand colors, test weighing simulation, and view E-Tickets.',
    'featEye': 'Complete Features',
    'featH2': 'Every Module Built From Real Palm Oil Mill Operations',
    'featSub': 'Designed from FFB reception to CPO shipment to global buyers.',
    'prEye': 'Investment',
    'prH2': 'Pricing Built for Palm Oil Mills',
    'prSub': 'Choose a plan tailored to your processing capacity and integration needs.',
    'prfEye': 'Proof, Not Promises',
    'prfH2': 'Tested in Heavy Industrial &amp; Logistics Operations',
    'faqEye': 'Frequently Asked Questions',
    'faqH2': 'Common Questions from PKS Management',
    'finEye': 'Next Step'
  };

  function applyLang(target, persist){
    lang = target;
    document.documentElement.setAttribute('lang', lang);
    var btn = document.getElementById('langBtn');
    if(btn){
      btn.querySelector('.flag-id').style.display = lang === 'id' ? '' : 'none';
      btn.querySelector('.flag-en').style.display = lang === 'en' ? '' : 'none';
      document.getElementById('langLabel').textContent = lang === 'id' ? 'ID' : 'EN';
    }
    document.querySelectorAll('[data-i18n]').forEach(function(el){
      var k = el.dataset.i18n;
      if(lang === 'en'){
        if(el.dataset.orig === undefined) el.dataset.orig = el.innerHTML;
        if(EN[k]) el.innerHTML = EN[k];
      } else if(el.dataset.orig !== undefined){
        el.innerHTML = el.dataset.orig;
      }
    });
    if(persist){
      try { localStorage.setItem('mbs_locale', lang); } catch(e){}
    }
  }

  function toggleLang(){
    applyLang(lang === 'id' ? 'en' : 'id', true);
  }

  (function(){
    var saved = null;
    try { saved = localStorage.getItem('mbs_locale'); } catch(e){}
    if(saved === 'en') applyLang('en', false);
  })();

  /* ===== FIX: tanggal dinamis ===== */
  (function(){
    var d = new Date().toLocaleDateString('id-ID',{weekday:'long',day:'numeric',month:'long',year:'numeric'});
    document.querySelectorAll('.jdate').forEach(function(e){e.textContent=d});
  })();

  /* ===== FIX: WA prefill ===== */
  function refreshWa(){
    document.querySelectorAll('[data-wa]').forEach(function(a){
      var pkg = a.dataset.pkg || document.title;
      var pos = a.dataset.pos || '';
      var txt = 'Halo MBS, saya dari '+tenantName+', tertarik '+pkg+(pos?' ['+pos+']':'');
      a.href = 'https://wa.me/6281399997132?text='+encodeURIComponent(txt);
    });
  }

  /* ===== FIX: scroll-to-top ===== */
  (function(){
    var btn = document.getElementById('scrollTopBtn');
    if (!btn) return;
    window.addEventListener('scroll', function(){
      btn.classList.toggle('show', window.scrollY > 400);
    });
  })();

  function go(pre, screen, el){
    var scr = document.getElementById(pre+'-'+screen);
    if(!scr) return;
    scr.parentElement.querySelectorAll('.scr').forEach(function(s){s.classList.remove('on')});
    scr.classList.add('on');
    el.closest('.demo-side').querySelectorAll('.side-item').forEach(function(i){i.classList.remove('active')});
    el.classList.add('active');
  }

  function setSw(pre, color, el){
    document.documentElement.style.setProperty('--accent', color);
    var rgb = hexRgb(color);
    document.documentElement.style.setProperty('--accent-soft', 'rgba('+rgb+',.14)');
    el.parentElement.querySelectorAll('.swatch').forEach(function(s){s.classList.remove('active')});
    el.classList.add('active');
  }

  function hexRgb(h){var n=parseInt(h.slice(1),16);return ((n>>16)&255)+','+((n>>8)&255)+','+(n&255);}

  refreshWa();
</script>
</body>
</html>
