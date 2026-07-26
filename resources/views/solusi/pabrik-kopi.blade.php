<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Software ERP Pabrik Pengolahan Kopi & Roastery — Mora Bangun Solutions</title>
<meta name="description" content="Sistem ERP Pabrik Pengolahan Kopi (Roastery & Ekspor) terintegrasi Lot Traceability Petani, Roasting Yield Loss Tracker, Cupping Score, dan Ketertelusuran EUDR Uni Eropa.">
<link rel="canonical" href="https://morabangun.com/solusi/pabrik-kopi">
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>☕</text></svg>">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<meta property="og:title" content="Software ERP Pabrik Pengolahan Kopi & Roastery Ekspor">
<meta property="og:description" content="Lacak asal-usul lot single origin dari kebun, kontrol penyusutan bobot sangrai, dan terbitkan paspor EUDR ekspor.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://morabangun.com/solusi/pabrik-kopi">
<meta property="og:locale" content="id_ID">
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Product",
  "name": "ERP Pabrik Pengolahan Kopi by Mora Bangun Solutions",
  "description": "Sistem informasi manajemen pabrik pengolahan kopi & roastery ekspor terintegrasi lot kebun, roasting yield, dan kepatuhan EUDR.",
  "brand": {"@@type": "Organization", "name": "Mora Bangun Solutions", "url": "https://morabangun.com"},
  "offers": {"@@type": "AggregateOffer", "priceCurrency": "IDR", "lowPrice": "12000000", "highPrice": "40000000"}
}
</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Apakah sistem ini mendukung pencatatan penyusutan bobot sangrai (Roasting Shrinkage)?","acceptedAnswer":{"@@type":"Answer","text":"Ya. Sistem memiliki kalkulator khusus Roasting Yield Loss untuk memantau persen susut berat hijau (Green Bean) ke roasted bean per batch profile secara real-time."}},
    {"@@type":"Question","name":"Bagaimana sistem ini membantu kepatuhan regulasi ekspor EUDR Uni Eropa?","acceptedAnswer":{"@@type":"Answer","text":"Modul Traceability kami menyimpan data koordinat geolokasi polygon kebun asal biji kopi, tanggal panen, sertifikasi petani, serta menghasilkan Paspor Digital EUDR untuk dokumen ekspor."}},
    {"@@type":"Question","name":"Apakah bisa diintegrasikan dengan timbangan digital gudang dan mesin sangrai?","acceptedAnswer":{"@@type":"Answer","text":"Bisa. Timbangan penerimaan Green Bean dan timbangan kemasan dapat terhubung via RS-232/Bluetooth, serta mendukung pencatatan parameter suhu & waktu sangrai."}},
    {"@@type":"Question","name":"Berapa lama proses implementasi sistem di pabrik kopi/roastery kami?","acceptedAnswer":{"@@type":"Answer","text":"Implementasi standar selesai dalam 10–14 hari kerja termasuk migrasi master data lot kebun, profil roaster, dan pelatihan tim operasional."}}
  ]
}
</script>
<style>
  :root{
    --bg:#030712; --surface:#0b1120; --card:#0f172a; --border:#1e293b;
    --text:#e2e8f0; --muted:#94a3b8; --dim:#64748b;
    --accent:#d97706; --accent-soft:rgba(217,119,6,.14);
    --green:#34d399; --amber:#fbbf24; --red:#f87171; --cyan:#06b6d4;
  }
  *{margin:0;padding:0;box-sizing:border-box}
  html{scroll-behavior:smooth}
  body{background:var(--bg);color:var(--text);font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;line-height:1.6;overflow-x:hidden}
  a{color:inherit;text-decoration:none}
  .container{max-width:1120px;margin:0 auto;padding:0 24px}
  section{padding:88px 0}
  .eyebrow{display:inline-block;font-size:.78rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--accent);background:var(--accent-soft);border:1px solid rgba(217,119,6,.3);padding:6px 14px;border-radius:999px;margin-bottom:20px}
  h1{font-size:clamp(2rem,5vw,3.3rem);line-height:1.15;font-weight:800;letter-spacing:-.02em}
  h2{font-size:clamp(1.6rem,3.5vw,2.3rem);font-weight:750;letter-spacing:-.01em;margin-bottom:14px}
  .sub{color:var(--muted);font-size:1.08rem;max-width:680px}
  .center{text-align:center}.center .sub{margin:0 auto}
  .btn{display:inline-flex;align-items:center;gap:9px;padding:14px 28px;border-radius:12px;font-weight:650;font-size:1rem;transition:.2s;cursor:pointer;border:none}
  .btn-primary{background:var(--accent);color:#fff;box-shadow:0 8px 30px rgba(217,119,6,.35)}
  .btn-primary:hover{transform:translateY(-2px);box-shadow:0 12px 36px rgba(217,119,6,.45)}
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
  .hero h1 .hl{color:var(--accent);background:linear-gradient(90deg,var(--accent),#fbbf24);-webkit-background-clip:text;background-clip:text;color:transparent}
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
  .tenant-avatar{width:34px;height:34px;border-radius:99px;background:var(--accent);display:grid;place-items:center;font-weight:750;font-size:.78rem;color:#fff;flex-shrink:0}
  .tenant-badge b{font-size:.85rem;display:block}
  .tenant-badge small{color:var(--dim);font-size:.68rem}
  .side-item{display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:9px;color:var(--muted);font-size:.86rem;cursor:pointer;margin-bottom:3px;background:none;border:none;width:100%;text-align:left;font-family:inherit}
  .side-item:hover{background:var(--surface)}
  .side-item.active{background:var(--accent-soft);color:var(--accent);font-weight:600}
  .side-item .bdg{margin-left:auto;background:var(--accent);color:#fff;font-size:.6rem;font-weight:750;border-radius:999px;padding:1px 7px}
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
  .price.popular{border-color:var(--accent);box-shadow:0 20px 60px rgba(217,119,6,.18)}
  .badge-pop{position:absolute;top:-13px;left:50%;transform:translateX(-50%);background:var(--accent);color:#fff;font-size:.72rem;font-weight:700;padding:5px 16px;border-radius:999px;letter-spacing:.04em}
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
  .quote .who .av{width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#d97706,#fbbf24);display:grid;place-items:center;font-weight:750;color:#fff;font-size:.78rem;text-align:center}
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
      <span class="eyebrow" data-i18n="eyebrowKopi">☕ Pabrik Pengolahan Kopi · Roastery ERP · EUDR Ready</span>
      <h1 data-i18n="h1Kopi">Digitalisasi Pabrik Kopi: <span class="hl">Lot Traceability Kebun, Roasting Yield &amp; Kepatuhan EUDR</span></h1>
      <p class="sub" data-i18n="hsubKopi">Lacak asal-usul single origin dari kebun, kontrol penyusutan bobot sangrai (15-20%), serta terbitkan dokumen ekspor &amp; paspor EUDR dalam satu portal cloud modern.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="#demo" data-i18n="ctaDemo">▶ Lihat Demo Langsung</a>
        <a class="btn btn-wa" data-wa data-pkg="Pabrik Kopi & Roastery ERP" data-pos="hero" href="https://wa.me/6281399997132" target="_blank" rel="noopener" data-i18n="ctaWa">💬 Konsultasi Gratis</a>
      </div>
      <div class="trust">
        <div><b>Lot Traceability</b><span>petani ke kontainer</span></div>
        <div><b>Roasting Shrinkage</b><span>yield loss tracker</span></div>
        <div><b>EUDR Compliant</b><span>paspor ekspor digital</span></div>
      </div>
    </div>
    <div class="hero-visual">
      <img src="/images/solusi/pabrik-kopi-hero.webp" alt="ERP Pabrik Pengolahan Kopi &amp; Roastery Ekspor" width="1448" height="1086" loading="eager" fetchpriority="high" style="width:100%;height:auto;display:block;border-radius:10px">
    </div>
  </div>
</header>

<!-- PAIN POINTS -->
<section>
  <div class="container center">
    <span class="eyebrow" data-i18n="painEye">Tantangan Industri Kopi &amp; Roastery</span>
    <h2>Mengapa Industri Kopi Sering Mengalami Susut Tinggi &amp; Hambatan Ekspor?</h2>
    <p class="sub">Metode manual pencatatan lot kebun dan kurangnya kontrol suhu sangrai memicu kerugian bahan baku serta risiko penolakan buyer internasional.</p>
    <div class="cards3" style="text-align:left">
      <div class="pain-card">
        <div class="ico">📉</div>
        <h3>Susut Sangrai (Roasting Shrinkage) Tak Terkontrol</h3>
        <p>Penyusutan bobot green bean ke roasted bean (normal 15-20%) sering membengkak tanpa terdeteksi batch mana yang mengalami over-roasting.</p>
        <div class="fix">✓ Solusi: Automated Roasting Yield Loss Tracker per profile &amp; per roaster master.</div>
      </div>
      <div class="pain-card">
        <div class="ico">🌱</div>
        <h3>Dispute Asal-Usul Lot (Single Origin Dispute)</h3>
        <p>Klaim varietas Arabica Gayo, Toraja, atau Kintamani diragukan buyer karena tidak ada bukti pencatatan lot petani &amp; tanggal panen.</p>
        <div class="fix">✓ Solusi: Tagging Barcode Digital dari Koperasi Kebun hingga kemasan ekspor.</div>
      </div>
      <div class="pain-card">
        <div class="ico">📜</div>
        <h3>Regulasi EUDR (EU Deforestation Regulation)</h3>
        <p>Buyer Uni Eropa menolak kontainer kopi tanpa sertifikat polygon geolocation lahan kebun bebas deforestasi.</p>
        <div class="fix">✓ Solusi: Modul Paspor Digital EUDR &amp; Geolocation Map Koordinat Kebun Kopi.</div>
      </div>
    </div>
  </div>
</section>

<!-- DEMO INTERAKTIF -->
<section id="demo" style="padding-top:40px">
  <div class="container center">
    <span class="eyebrow" data-i18n="demoEye">Demo Interaktif — Coba Sekarang</span>
    <h2 data-i18n="demoH2">Ini Sistem yang Akan Dipakai Pengguna Anda</h2>
    <div id="demo-kopi">
      <div class="demo-wrap" id="dw-kopi">
        <div class="demo-toolbar">
          <div>
            <span class="lbl">White-label: warna perusahaan Anda</span>
            <div class="swatches">
              <button class="swatch active" style="background:#d97706" onclick="setSw('kopi','#d97706',this)" aria-label="cokelat"></button>
              <button class="swatch" style="background:#10b981" onclick="setSw('kopi','#10b981',this)" aria-label="hijau"></button>
              <button class="swatch" style="background:#0284c7" onclick="setSw('kopi','#0284c7',this)" aria-label="biru"></button>
              <button class="swatch" style="background:#dc2626" onclick="setSw('kopi','#dc2626',this)" aria-label="merah"></button>
              <button class="swatch" style="background:#8b5cf6" onclick="setSw('kopi','#8b5cf6',this)" aria-label="ungu"></button>
            </div>
          </div>
          <div>
            <span class="lbl">Nama perusahaan Anda</span><br>
            <input class="tenant-input" value="PT Sumatra Specialty Coffee" oninput="setTenant('kopi',this.value)">
            <div class="wa-hint">↳ nama ini otomatis masuk ke chat WA Anda</div>
          </div>
        </div>
        <div class="demo-app">
          <aside class="demo-side">
            <div class="tenant-badge"><div class="tenant-avatar" id="av-kopi">SC</div><div><b class="tn-kopi">PT Sumatra Specialty Coffee</b><small>Portal Roastery ERP</small></div></div>
            <button class="side-item active" onclick="go('kopi','dash',this)">📊 Ringkasan</button>
            <button class="side-item" onclick="go('kopi','kebun',this)">🌱 Lot Kebun &amp; Petani</button>
            <button class="side-item" onclick="go('kopi','roasting',this)">🔥 Profiling Sangrai</button>
            <button class="side-item" onclick="go('kopi','cupping',this)">📦 Stok &amp; Cupping Score</button>
            <button class="side-item" onclick="go('kopi','eudr',this)">📜 Paspor EUDR Ekspor <span class="bdg">PASSPORT</span></button>
          </aside>
          <main class="demo-main">
            <!-- TAB 1: RINGKASAN -->
            <div class="scr on" id="kopi-dash">
              <h4>Pabrik Processing &amp; Roastery Unit Medan</h4>
              <div class="ddate jdate"></div>
              <div class="kpis">
                <div class="kpi"><small>Stok Green Bean</small><b id="kpiGreen" style="color:var(--text)">8.450 kg</b><span class="up">12 Lot Terverifikasi</span></div>
                <div class="kpi"><small>Roasting Yield</small><b id="kpiYield" style="color:var(--accent)">83,8 %</b><span class="up">Susut Sangrai 16,2%</span></div>
                <div class="kpi"><small>Cupping Average</small><b style="color:var(--cyan)">86,5 Poin</b><span class="up">Specialty Grade</span></div>
                <div class="kpi"><small>Ekspor EUDR</small><b style="color:var(--green)">100% Valid</b><span class="up">Polygon Kebun Checked</span></div>
              </div>
              <div class="dtable">
                <div class="tt">Batch Sangrai Terbaru <button class="btn btn-primary" style="padding:5px 12px;font-size:.75rem" onclick="simulasiRoasting()">⚡ Simulasi Batch Roasting Kopi</button></div>
                <div id="logRoasting">
                  <div class="ann"><div><b>Batch #ROAST-8821 — Aceh Gayo Arabica Single Origin</b><small>Green Bean: 50,0 kg ➔ Roasted Bean: 41,8 kg · Susut: 16,4% · Profile: Medium Roast</small></div><span class="pill pill-g">Yield OK</span></div>
                  <div class="ann"><div><b>Batch #ROAST-8820 — Mandheling Specialty Grade 1</b><small>Green Bean: 60,0 kg ➔ Roasted Bean: 50,4 kg · Susut: 16,0% · Profile: Dark Roast</small></div><span class="pill pill-g">Yield OK</span></div>
                  <div class="ann"><div><b>Lot #LOT-GY-0982 — Koperasi Kebun Bener Meriah</b><small>Tiba Gudang · Moisture: 11.8% · Defect Rate: 1.2%</small></div><span class="pill pill-b">Lolos QC</span></div>
                </div>
              </div>
            </div>
            <!-- TAB 2: LOT KEBUN -->
            <div class="scr" id="kopi-kebun">
              <h4>Tracking Lot Asal-Usul Kebun (Single Origin)</h4>
              <div class="ddate">Pencatatan data petani, altitude, varietas, &amp; metode proses (Full Wash, Natural, Honey)</div>
              <div class="dtable"><div class="tt">Master Lot Green Bean Terdaftar</div>
                <div class="scrollx"><table>
                  <thead><tr><th>Lot ID</th><th>Asal Kebun / Koperasi</th><th>Varietas</th><th>Altitude</th><th>Status EUDR</th></tr></thead>
                  <tbody>
                    <tr><td>#LOT-GY-0982</td><td>Bener Meriah, Aceh Gayo</td><td>Ateng Super</td><td>1.450 mdpl</td><td><span class="pill pill-g">Polygon Verified</span></td></tr>
                    <tr><td>#LOT-MND-0412</td><td>Mandheling, Sumut</td><td>Tim-Tim</td><td>1.300 mdpl</td><td><span class="pill pill-g">Polygon Verified</span></td></tr>
                    <tr><td>#LOT-KT-0771</td><td>Kintamani, Bali</td><td>Bourbon</td><td>1.250 mdpl</td><td><span class="pill pill-b">Dalam Proses</span></td></tr>
                  </tbody>
                </table></div>
              </div>
            </div>
            <!-- TAB 3: PROFILING SANGRAI -->
            <div class="scr" id="kopi-roasting">
              <h4>Monitoring Profiling Sangrai (Roasting Curve)</h4>
              <div class="ddate">Pencatatan suhu drum, waktu first crack, &amp; persentase susut bobot</div>
              <div class="dtable"><div class="tt">Profil Mesin Roaster 30kg — Batch Active</div>
                <div style="padding:20px;display:grid;gap:14px">
                  <div>
                    <div style="display:flex;justify-content:space-between;font-size:.85rem;margin-bottom:4px"><span>Suhu Drum Sangrai (Target 215°C)</span><b style="color:var(--accent)">208°C (First Crack Approaching)</b></div>
                    <div class="pbar"><i style="width:85%"></i></div>
                  </div>
                  <div>
                    <div style="display:flex;justify-content:space-between;font-size:.85rem;margin-bottom:4px"><span>Estimasi Yield Loss (Batas Toleransi &lt; 18%)</span><b style="color:var(--green)">16,2% (Efisien)</b></div>
                    <div class="pbar"><i style="width:68%;background:var(--green)"></i></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TAB 4: CUPPING SCORE -->
            <div class="scr" id="kopi-cupping">
              <h4>Stok Roasted Bean &amp; Cupping Score SCA</h4>
              <div class="ddate">Penilaian Fragrance, Flavor, Aftertaste, Acidity, Body, Balance &amp; Overall Score</div>
              <div class="dtable"><div class="tt">Hasil Evaluation Cupping Q-Grader</div>
                <div class="ann"><div><b>Batch #ROAST-8821 — Gayo Natural Anaerob</b><small>Fragrance: 8.75 · Acidity: 8.50 · Body: 8.25 · Total Score: 87.25</small></div><span class="pill pill-g">Specialty Grade</span></div>
                <div class="ann"><div><b>Batch #ROAST-8820 — Mandheling Honey Process</b><small>Fragrance: 8.50 · Acidity: 8.25 · Body: 8.50 · Total Score: 85.75</small></div><span class="pill pill-g">Specialty Grade</span></div>
              </div>
            </div>
            <!-- TAB 5: PASPOR EUDR EKSPOR -->
            <div class="scr" id="kopi-eudr">
              <h4>Paspor Digital EUDR &amp; Geolocation Polygon Lahan</h4>
              <div class="ddate">Penerbitan dokumen melacak rantai pasok untuk memenuhi EU Deforestation Regulation</div>
              <div class="dtable"><div class="tt">Sertifikat Kelayakan Ekspor Uni Eropa</div>
                <div style="padding:20px;text-align:center">
                  <div style="font-size:2rem;margin-bottom:6px">🗺️</div>
                  <b style="color:var(--text);font-size:1.1rem">EUDR Traceability Passport Verified</b>
                  <p style="color:var(--dim);font-size:.82rem;margin:6px 0 16px">Koordinat Kebun: 4.6788° N, 96.8124° E (Bener Meriah, Aceh) · Deforestation-Free Certified</p>
                  <button class="btn btn-primary" onclick="openKarcisModal('#PASSPORT-EUDR-8891', 'Aceh Gayo 18,5 Ton Container')">📜 Terbitkan Paspor Digital EUDR Ekspor</button>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
    <div class="demo-note" data-i18n="demoNote">ℹ️ Ini <b>demo interaktif live</b>. Anda dapat mengubah nama perusahaan, warna branding, menguji simulasi batch roasting, dan melihat Paspor EUDR.</div>
  </div>
</section>

<!-- FITUR LENGKAP -->
<section id="fitur" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container center">
    <span class="eyebrow" data-i18n="featEye">Fitur Lengkap Pabrik Kopi</span>
    <h2 data-i18n="featH2">Setiap Modul Dibangun dari Operasional Roastery &amp; Eksportir Kopi Sungguhan</h2>
    <p class="sub" data-i18n="featSub">Dirancang dari penerimaan Green Bean di kebun hingga pengapalan kontainer kopi ke pasar internasional.</p>
    <div class="feat-grid" style="text-align:left">
      <div class="feat">
        <div class="ico">🌱</div>
        <h3>1. Single-Origin Lot Tagging</h3>
        <p>Barcode tagging per petani, varietas, altitude, &amp; tanggal panen. Mencegah pencampuran lot secara tak terdaftar.</p>
      </div>
      <div class="feat">
        <div class="ico">🔥</div>
        <h3>2. Roasting Yield Loss Tracker</h3>
        <p>Kalkulasi persentase susut sangrai (Green Bean ➔ Roasted Bean) per batch profile untuk mencegah over-roasting.</p>
      </div>
      <div class="feat">
        <div class="ico">☕</div>
        <h3>3. SCA Cupping Score Module</h3>
        <p>Form standar Q-Grader untuk menilai Fragrance, Acidity, Body, Balance, &amp; Overall Score batch kopi.</p>
      </div>
      <div class="feat">
        <div class="ico">🗺️</div>
        <h3>4. EUDR Geolocation Traceability</h3>
        <p>Pemetaan polygon lokasi lahan kebun kopi untuk menerbitkan paspor digital EU Deforestation Regulation.</p>
      </div>
      <div class="feat">
        <div class="ico">📦</div>
        <h3>5. Inventory FEFO &amp; Moisture Control</h3>
        <p>Monitoring kadar air (Moisture Content %) &amp; rotasi stok First-Expired First-Out di gudang penyiapan.</p>
      </div>
      <div class="feat">
        <div class="ico">📜</div>
        <h3>6. Dokumen Ekspor &amp; Packing List</h3>
        <p>Cetak Bill of Lading, Packing List Kemasan Jute Bag / Vacuum, Certificate of Origin, &amp; integrasi CEISA 4.0.</p>
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
          <span class="eyebrow" style="background:rgba(217,119,6,.1);color:var(--accent)">KALKULATOR EFISIENSI PABRIK KOPI</span>
          <h2>Berapa Nilai Efisiensi yang Bisa Dihemat?</h2>
          <p style="color:var(--muted);font-size:.95rem;margin-top:10px">Geser kapasitas produksi sangrai kopi Anda untuk melihat estimasi pencegahan susut berlebih &amp; optimasi harga jual specialty.</p>
        </div>
        <div>
          <div style="background:var(--bg);padding:24px;border-radius:16px;border:1px solid var(--border)">
            <label style="font-size:.8rem;color:var(--dim);font-weight:700;display:block;margin-bottom:8px">KAPASITAS SANGRAI KOPI (KG / HARI)</label>
            <input type="range" id="kopiCapacity" min="50" max="2000" step="50" value="300" style="width:100%;accent-color:var(--accent)" oninput="calcKopiRoi()">
            <div style="display:flex;justify-content:space-between;margin-top:6px;font-size:.85rem;font-weight:700">
              <span>50 Kg</span>
              <span id="kopiCapVal" style="color:var(--accent);font-size:1.1rem">300 Kg/Hari</span>
              <span>2.000 Kg</span>
            </div>

            <div style="margin-top:20px;padding-top:16px;border-top:1px dashed var(--border);display:grid;grid-template-columns:1fr 1fr;gap:14px">
              <div>
                <small style="color:var(--dim);font-size:.7rem">PENCEGAHAN OVER-ROAST SUSUT (1.5%)</small>
                <b id="kopiSavingsVal" style="font-size:1.2rem;color:var(--green);display:block">Rp 675.000 /Hari</b>
                <span style="font-size:.75rem;color:var(--muted)">± Rp 20,2 Jt /Bulan</span>
              </div>
              <div>
                <small style="color:var(--dim);font-size:.7rem">KONSISTENSI CUPPING SCORE</small>
                <b id="kopiScoreVal" style="font-size:1.2rem;color:var(--cyan);display:block">+1,8 Poin SCA</b>
                <span style="font-size:.75rem;color:var(--muted)">Premium Price Premium</span>
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
    <h2 data-i18n="prH2">Harga Khusus untuk Pabrik &amp; Roastery Kopi</h2>
    <p class="sub" data-i18n="prSub">Pilih paket sesuai skala roastery dan kebutuhan dokumen ekspor pabrik Anda.</p>
    <div class="price-grid" style="text-align:left">
      <div class="price">
        <h3>Starter Roastery</h3>
        <div class="for">Untuk Roastery Mandiri &amp; Micro-Lot (&lt; 100 Kg/Hari)</div>
        <div class="amount">Rp 12jt <small>setup</small></div>
        <div class="monthly">+ <b>Rp 1,2jt/bulan</b> <span>hosting &amp; maintenance</span></div>
        <ul>
          <li>Tracking Single-Origin Lot Kebun</li>
          <li>Kalkulator Roasting Yield Loss</li>
          <li>SCA Cupping Score Digital</li>
          <li>Stok Green Bean &amp; Roasted Bean</li>
          <li>Backup Data Otomatis Harian</li>
        </ul>
        <a class="btn btn-ghost" data-wa data-pkg="paket Starter Pabrik Kopi" data-pos="pricing" href="https://wa.me/6281399997132" target="_blank" rel="noopener">Pilih Starter</a>
      </div>

      <div class="price popular">
        <span class="badge-pop">PALING LARIS</span>
        <h3>Professional ERP</h3>
        <div class="for">Untuk Pabrik Processing &amp; Roastery Komersial (100–500 Kg/Hari)</div>
        <div class="amount" style="color:var(--accent)">Rp 22jt <small>setup</small></div>
        <div class="monthly">+ <b>Rp 2,2jt/bulan</b> <span>hosting &amp; maintenance</span></div>
        <ul>
          <li>Multi-Lot Barcode Scanning</li>
          <li>Roasting Curve &amp; Yield Tracker</li>
          <li>Modul Paspor Digital EUDR Ekspor</li>
          <li>Notifikasi WA Otomatis ke Petani/Koperasi</li>
          <li>Integrasi Timbangan Gudang &amp; Packing</li>
          <li>Portal Akses Koperasi Mitra Kebun</li>
        </ul>
        <a class="btn btn-primary" data-wa data-pkg="paket Professional Pabrik Kopi" data-pos="pricing" href="https://wa.me/6281399997132" target="_blank" rel="noopener">Pilih Professional</a>
      </div>

      <div class="price">
        <h3>Enterprise Export</h3>
        <div class="for">Untuk Eksportir Kopi Skala Kontainer (&gt; 500 Kg/Hari)</div>
        <div class="amount">Rp 40jt+ <small>custom</small></div>
        <div class="monthly">langganan sesuai SLA &amp; modul</div>
        <ul>
          <li>Semua Fitur Paket Professional</li>
          <li>EUDR Geolocation Polygon Full Mapping</li>
          <li>Integrasi Dokumen Ekspor CEISA 4.0</li>
          <li>Accounting &amp; Multi-Warehouse Sync</li>
          <li>Custom Integration dengan Mesin Roaster</li>
          <li>On-Site Training &amp; Dedicated Support</li>
        </ul>
        <a class="btn btn-ghost" data-wa data-pkg="paket Enterprise Pabrik Kopi" data-pos="pricing" href="https://wa.me/6281399997132" target="_blank" rel="noopener">Diskusi Kebutuhan</a>
      </div>
    </div>
  </div>
</section>

<!-- PROOF -->
<section class="proof">
  <div class="container proof-grid">
    <div>
      <span class="eyebrow" data-i18n="prfEye">Bukti, Bukan Janji</span>
      <h2 data-i18n="prfH2">Dipercaya Dalam Industri Komoditas &amp; Pengolahan Ekspor</h2>
      <p class="sub">Fondasi sistem kami teruji mengolah rantai pasok komoditas dari petani hingga kontainer ekspor secara transparan.</p>
      <div class="proof-stats">
        <div class="pstat"><b>SCA Standard</b><small>Cupping score terstruktur</small></div>
        <div class="pstat"><b>EUDR Ready</b><small>Paspor geolocation kebun</small></div>
        <div class="pstat"><b>Yield Loss</b><small>Kontrol susut sangrai</small></div>
        <div class="pstat"><b>Traceability</b><small>Lot kebun ke kontainer</small></div>
      </div>
    </div>
    <div class="quote">
      <p>"Penyusutan bobot kopi saat roaster adalah variabel biaya terbesar yang jarang dihitung presisi. Dengan Roasting Yield Loss Tracker MBS, kami dapat menekan kerugian susut hingga 1.5% dan menjaga konsistensi profil rasa."</p>
      <div class="who">
        <div class="av">MB</div>
        <div><b>Tim Mora Bangun Solutions</b><small>Spesialis ERP &amp; Automation Komoditas Ekspor, Medan</small></div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="container center">
    <span class="eyebrow" data-i18n="faqEye">Pertanyaan Umum</span>
    <h2 data-i18n="faqH2">Yang Sering Ditanyakan Pengusaha Kopi &amp; Roastery</h2>
    <div class="faq" style="text-align:left">
      <details><summary>Apakah sistem ini mendukung pencatatan penyusutan bobot sangrai (Roasting Shrinkage)?</summary><p>Ya. Sistem memiliki kalkulator khusus Roasting Yield Loss untuk memantau persen susut berat hijau (Green Bean) ke roasted bean per batch profile secara real-time.</p></details>
      <details><summary>Bagaimana sistem ini membantu kepatuhan regulasi ekspor EUDR Uni Eropa?</summary><p>Modul Traceability kami menyimpan data koordinat geolokasi polygon kebun asal biji kopi, tanggal panen, sertifikasi petani, serta menghasilkan Paspor Digital EUDR untuk dokumen ekspor.</p></details>
      <details><summary>Apakah bisa diintegrasikan dengan timbangan digital gudang dan mesin sangrai?</summary><p>Bisa. Timbangan penerimaan Green Bean dan timbangan kemasan dapat terhubung via RS-232/Bluetooth, serta mendukung pencatatan parameter suhu &amp; waktu sangrai.</p></details>
      <details><summary>Berapa lama proses implementasi sistem di pabrik kopi/roastery kami?</summary><p>Implementasi standar selesai dalam 10–14 hari kerja termasuk migrasi master data lot kebun, profil roaster, dan pelatihan tim operasional.</p></details>
    </div>
  </div>
</section>

<!-- ARTIKEL TERKAIT BLOG -->
<x-related-articles vertical="pabrik-kopi" />

<!-- FINAL CTA -->
<section class="final">
  <div class="container">
    <span class="eyebrow" data-i18n="finEye">Langkah Berikutnya</span>
    <h2>Tingkatkan Yield Sangrai &amp; Penuhi Kepatuhan EUDR Kopi Anda</h2>
    <p class="sub" style="margin:16px auto 0">Konsultasi 30 menit gratis — tim spesialis kami siap memetakan alur lot &amp; roastery di pabrik Anda.</p>
    <a class="btn btn-wa" style="font-size:1.05rem;padding:16px 36px" data-wa data-pkg="Pabrik Pengolahan Kopi & Roastery ERP" data-pos="final" href="https://wa.me/6281399997132" target="_blank" rel="noopener">💬 Jadwalkan Konsultasi Pabrik Kopi via WhatsApp</a>
    <div class="micro">Tanpa komitmen · Balasan &lt; 1 jam di jam kerja · Medan, Aceh, Toraja &amp; Seluruh Indonesia</div>
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
      <p data-i18n="ft1">© 2026 Mora Bangun Solutions · morabangun.com — Spesialis ERP &amp; Automation Pabrik Pengolahan Kopi, Medan, Indonesia</p>
      <div class="foot-badges">
        <span data-i18n="footSsl">🔒 SSL Secured</span><span class="foot-dot">·</span>
        <span data-i18n="footProd">● Production Ready</span><span class="foot-dot">·</span>
        <span data-i18n="footMade">🇮🇩 Made in Indonesia</span>
      </div>
    </div>
  </div>
</footer>

<!-- PASPOR / KARCIS MODAL -->
<div id="karcisModal" style="display:none;position:fixed;inset:0;z-index:999;background:rgba(3,7,18,.85);backdrop-filter:blur(10px);align-items:center;justify-content:center;padding:20px">
  <div style="background:var(--card);border:1px solid var(--border);border-radius:20px;max-width:520px;width:100%;padding:24px;position:relative;box-shadow:0 25px 60px rgba(0,0,0,.8);text-align:center">
    <button onclick="closeKarcisModal()" style="position:absolute;top:18px;right:18px;background:none;border:none;color:var(--muted);font-size:1.4rem;cursor:pointer">✕</button>
    <div style="font-size:2rem;margin-bottom:8px">🗺️</div>
    <h3 style="font-size:1.15rem;margin-bottom:4px">Paspor Digital EUDR Ekspor Kopi</h3>
    <small style="color:var(--dim);display:block;margin-bottom:16px">Deforestation-Free Polygon Verification</small>
    <div style="background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:16px;font-family:monospace;font-size:.85rem;text-align:left;margin-bottom:18px;color:var(--green)">
      <div>PASSPORT: #EUDR-COFFEE-2026-091</div>
      <div id="karcisTruck">LOT: Aceh Gayo Single Origin</div>
      <div id="karcisWeight">SHIPMENT: 18,5 Ton Container</div>
      <div>POLYGON: 4.6788° N, 96.8124° E</div>
      <div>STATUS: EUDR Compliant ✓ (Zero-Deforestation)</div>
    </div>
    <button class="btn btn-primary" onclick="closeKarcisModal();showToast('💬 Paspor EUDR Kopi berhasil diterbitkan &amp; dikirim via WA ke Buyer!')" style="width:100%;justify-content:center">💬 Kirim Dokumen via WhatsApp</button>
  </div>
</div>

<!-- TOAST NOTIFICATION CONTAINER -->
<div id="toast" style="position:fixed;bottom:90px;left:50%;transform:translateX(-50%);background:var(--card);border:1px solid var(--accent);color:var(--text);padding:14px 28px;border-radius:14px;box-shadow:0 12px 40px rgba(0,0,0,.7);z-index:999;display:none;font-weight:600;font-size:.9rem;align-items:center;gap:10px"></div>

<!-- FAB WA & SCROLL TOP -->
<a class="fab-wa" data-wa data-pkg="Pabrik Kopi & Roastery ERP" data-pos="fab" href="https://wa.me/6281399997132" target="_blank" rel="noopener" aria-label="WhatsApp">💬</a>
<button class="scroll-top" id="scrollTopBtn" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Kembali ke atas" title="Kembali ke atas">
  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/></svg>
</button>

<script>
  var tenantName = 'PT Sumatra Specialty Coffee';
  function setTenant(pre, name){
    var v = name.trim() || 'Perusahaan Anda';
    tenantName = v;
    document.querySelectorAll('.tn-'+pre).forEach(function(e){e.textContent=v});
    var initials = v.replace(/^(PT|CV|UD|TB|Ponpes|Yayasan)\.?\s+/i,'').split(/\s+/).map(function(w){return w[0]||''}).join('').slice(0,2).toUpperCase();
    var av = document.getElementById('av-'+pre); if(av) av.textContent = initials || 'SC';
    refreshWa();
  }

  function showToast(msg) {
    var t = document.getElementById('toast');
    t.innerHTML = msg;
    t.style.display = 'flex';
    setTimeout(function(){ t.style.display = 'none'; }, 4000);
  }

  function openKarcisModal(doc, info) {
    document.getElementById('karcisTruck').innerText = 'DOCUMENT: ' + doc;
    document.getElementById('karcisWeight').innerText = 'INFO: ' + info;
    document.getElementById('karcisModal').style.display = 'flex';
  }

  function closeKarcisModal() {
    document.getElementById('karcisModal').style.display = 'none';
  }

  var greenStock = 8450;
  var roastBatchCount = 8821;

  function simulasiRoasting() {
    roastBatchCount++;
    greenStock -= 50;
    document.getElementById('kpiGreen').innerText = greenStock.toLocaleString('id-ID') + ' kg';
    
    var log = document.getElementById('logRoasting');
    var newRow = document.createElement('div');
    newRow.className = 'ann';
    newRow.innerHTML = '<div><b>Batch #ROAST-' + roastBatchCount + ' — Toraja Sapan Specialty (' + tenantName + ')</b><small>Green Bean: 50,0 kg ➔ Roasted Bean: 42,1 kg · Susut: 15,8% · Profile: Light-Medium</small></div><span class="pill pill-g">Yield OK</span>';
    log.insertBefore(newRow, log.firstChild);
    
    showToast('⚡ <b>Simulasi Roasting Berhasil!</b> Yield: 42.1 kg (Susut 15.8%). Stok Green Bean: ' + greenStock.toLocaleString('id-ID') + ' kg.');
  }

  function calcKopiRoi() {
    var cap = parseInt(document.getElementById('kopiCapacity').value);
    document.getElementById('kopiCapVal').innerText = cap.toLocaleString('id-ID') + ' Kg/Hari';
    
    var greenPrice = 150000;
    var dailySavings = cap * greenPrice * 0.015;
    
    document.getElementById('kopiSavingsVal').innerText = 'Rp ' + Math.round(dailySavings).toLocaleString('id-ID') + ' /Hari';
    document.getElementById('kopiScoreVal').innerText = '+1,8 Poin SCA';
  }
  calcKopiRoi();

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
    'eyebrowKopi': '☕ Coffee Processing Mill · Roastery ERP · EUDR Ready',
    'h1Kopi': 'Coffee Processing Digitization: <span class="hl">Lot Traceability, Roasting Yield &amp; EUDR</span>',
    'hsubKopi': 'Track single origin lot from farm, control roasting weight shrinkage (15-20%), and issue digital EUDR export passport in one modern cloud portal.',
    'ctaDemo': '&#9654; See Live Demo',
    'ctaWa': '&#128172; Free Consultation',
    'painEye': 'Challenges of Coffee Industry',
    'demoEye': 'Interactive Demo &mdash; Try It Now',
    'demoH2': 'This Is the System Your Team Will Use',
    'demoNote': 'ℹ️ This is a <b>live interactive demo</b>. You can customize company name, brand colors, test roasting simulation, and view EUDR passports.',
    'featEye': 'Complete Features',
    'featH2': 'Every Module Built From Real Coffee Mill &amp; Roastery Operations',
    'featSub': 'Designed from Green Bean reception to coffee container export.',
    'prEye': 'Investment',
    'prH2': 'Pricing Built for Coffee Mills &amp; Roasteries',
    'prSub': 'Choose a plan tailored to your roasting scale and export documentation needs.',
    'prfEye': 'Proof, Not Promises',
    'prfH2': 'Trusted in Export Commodity Processing Industry',
    'faqEye': 'Frequently Asked Questions',
    'faqH2': 'Common Questions from Coffee Mill Owners',
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
