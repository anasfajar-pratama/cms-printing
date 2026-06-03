<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- SEO --}}
    <title>{{ $settings['meta_title'] ?? ($settings['site_name'] ?? 'DZ Jersey Pro') }}</title>
    <meta name="description" content="{{ $settings['meta_description'] ?? '' }}" />

    {{-- Open Graph --}}
    <meta property="og:title"       content="{{ $settings['meta_title'] ?? ($settings['site_name'] ?? 'DZ Jersey Pro') }}" />
    <meta property="og:description" content="{{ $settings['meta_description'] ?? '' }}" />
    <meta property="og:url"         content="{{ url('/') }}" />
    <meta property="og:type"        content="website" />
    @if(!empty($settings['og_image']))
    <meta property="og:image"       content="{{ asset('storage/' . $settings['og_image']) }}" />
    @endif

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url('/') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary:      #1a56db;
            --primary-dark: #1e429f;
            --accent:       #f59e0b;
            --dark:         #111827;
            --gray:         #6b7280;
            --light:        #f9fafb;
            --white:        #ffffff;
        }

        body { font-family: 'Inter', sans-serif; color: var(--dark); background: var(--white); }

        /* ───────── NAVBAR ───────── */
        nav {
            position: fixed; top: 0; width: 100%; z-index: 1000;
            background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);
            box-shadow: 0 1px 10px rgba(0,0,0,0.08);
            padding: 0 5%;
            display: flex; align-items: center; justify-content: space-between;
            height: 68px;
        }
        .nav-logo { font-size: 1.4rem; font-weight: 800; color: var(--primary); text-decoration: none; }
        .nav-logo span { color: var(--accent); }
        .nav-links { display: flex; gap: 2rem; list-style: none; }
        .nav-links a { color: var(--dark); text-decoration: none; font-weight: 500; font-size: 0.95rem; transition: color .2s; }
        .nav-links a:hover { color: var(--primary); }
        .nav-cta {
            background: var(--primary); color: var(--white);
            padding: .5rem 1.2rem; border-radius: 8px;
            text-decoration: none; font-weight: 600; font-size: .9rem;
            transition: background .2s;
        }
        .nav-cta:hover { background: var(--primary-dark); }

        /* ───────── COMMON ───────── */
        section { padding: 5rem 5%; }
        .section-tag {
            display: inline-block; background: #dbeafe; color: var(--primary);
            font-size: .78rem; font-weight: 700; letter-spacing: .08em;
            text-transform: uppercase; padding: .3rem .9rem; border-radius: 20px; margin-bottom: 1rem;
        }
        .section-title { font-size: 2rem; font-weight: 800; line-height: 1.3; margin-bottom: .8rem; }
        .section-sub   { color: var(--gray); font-size: 1rem; max-width: 600px; }
        .center        { text-align: center; }
        .center .section-sub { margin: 0 auto; }

        /* ───────── HERO ───────── */
        #hero {
            min-height: 100vh; padding-top: 100px;
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 50%, #e0e7ff 100%);
            display: flex; align-items: center; gap: 4rem;
        }
        .hero-text { flex: 1; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: .5rem;
            background: var(--white); border: 1px solid #bfdbfe;
            border-radius: 30px; padding: .4rem 1rem; font-size: .85rem;
            font-weight: 600; color: var(--primary); margin-bottom: 1.5rem;
        }
        .hero-title { font-size: 3rem; font-weight: 900; line-height: 1.15; margin-bottom: 1.2rem; }
        .hero-title span { color: var(--primary); }
        .hero-desc { color: var(--gray); font-size: 1.1rem; margin-bottom: 2rem; max-width: 520px; }
        .hero-btns { display: flex; gap: 1rem; flex-wrap: wrap; }
        .btn-primary {
            background: var(--primary); color: var(--white);
            padding: .85rem 2rem; border-radius: 10px;
            font-weight: 700; font-size: 1rem; text-decoration: none;
            display: inline-flex; align-items: center; gap: .5rem;
            transition: background .2s, transform .15s;
        }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-2px); }
        .btn-outline {
            border: 2px solid var(--primary); color: var(--primary);
            padding: .85rem 2rem; border-radius: 10px;
            font-weight: 700; font-size: 1rem; text-decoration: none;
            display: inline-flex; align-items: center; gap: .5rem;
            transition: all .2s;
        }
        .btn-outline:hover { background: var(--primary); color: var(--white); }
        .hero-stats { display: flex; gap: 2rem; margin-top: 2.5rem; flex-wrap: wrap; }
        .hero-stat strong { display: block; font-size: 1.6rem; font-weight: 900; color: var(--primary); }
        .hero-stat span   { font-size: .85rem; color: var(--gray); }
        .hero-image { flex: 1; text-align: center; }
        .hero-image img { max-width: 100%; border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,0.15); }

        /* ───────── TRUST BAR ───────── */
        #trust-bar {
            background: var(--primary); padding: 2rem 5%;
            display: flex; align-items: center; justify-content: center;
            gap: 3rem; flex-wrap: wrap;
        }
        .trust-item { display: flex; align-items: center; gap: .8rem; color: var(--white); }
        .trust-item i      { font-size: 1.4rem; color: var(--accent); }
        .trust-item strong { display: block; font-size: 1rem; }
        .trust-item span   { font-size: .8rem; opacity: .85; }

        /* ───────── ABOUT ───────── */
        #about { background: var(--white); }
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; }
        .about-img img { width: 100%; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); }
        .about-points { display: flex; flex-direction: column; gap: .8rem; margin-top: 1.5rem; }
        .about-point   { display: flex; align-items: flex-start; gap: .8rem; }
        .about-point i { color: var(--primary); margin-top: .2rem; flex-shrink: 0; }

        /* ───────── LAYANAN ───────── */
        #services { background: var(--light); }
        .services-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem; margin-top: 3rem;
        }
        .service-card {
            background: var(--white); border-radius: 16px; padding: 2rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            transition: transform .2s, box-shadow .2s;
        }
        .service-card:hover { transform: translateY(-4px); box-shadow: 0 8px 30px rgba(0,0,0,0.1); }
        .service-icon {
            width: 56px; height: 56px; background: #dbeafe; border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem; color: var(--primary); margin-bottom: 1.2rem;
        }
        .service-card h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: .6rem; }
        .service-card p  { color: var(--gray); font-size: .9rem; line-height: 1.6; margin-bottom: 1rem; }
        .service-price   { color: var(--primary); font-weight: 700; font-size: .95rem; }

        /* ───────── KALKULATOR ───────── */
        #calculator { background: var(--primary); color: var(--white); }
        #calculator .section-title { color: var(--white); }
        #calculator .section-sub   { color: rgba(255,255,255,.75); }
        .calc-box {
            background: var(--white); border-radius: 20px; padding: 2.5rem;
            margin-top: 2.5rem; color: var(--dark);
            max-width: 800px; margin-left: auto; margin-right: auto;
        }
        .calc-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
        .form-group { display: flex; flex-direction: column; gap: .5rem; }
        .form-group label { font-weight: 600; font-size: .9rem; }
        .form-group select,
        .form-group input {
            padding: .75rem 1rem; border: 2px solid #e5e7eb; border-radius: 10px;
            font-size: .95rem; font-family: inherit; outline: none; transition: border-color .2s;
        }
        .form-group select:focus,
        .form-group input:focus { border-color: var(--primary); }
        .calc-result {
            background: #eff6ff; border: 2px solid #bfdbfe;
            border-radius: 12px; padding: 1.5rem; margin-top: 1.5rem; text-align: center;
        }
        .calc-result-label { font-size: .9rem; color: var(--gray); margin-bottom: .3rem; }
        .calc-result-price { font-size: 2rem; font-weight: 900; color: var(--primary); }
        .calc-btn {
            width: 100%; padding: 1rem; background: var(--primary); color: var(--white);
            border: none; border-radius: 10px; font-size: 1rem; font-weight: 700;
            cursor: pointer; margin-top: 1rem; transition: background .2s;
        }
        .calc-btn:hover { background: var(--primary-dark); }

        /* ───────── PORTFOLIO ───────── */
        #portfolio { background: var(--white); }
        .portfolio-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem; margin-top: 2.5rem;
        }
        .portfolio-card { border-radius: 14px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.08); position: relative; }
        .portfolio-card img { width: 100%; height: 220px; object-fit: cover; display: block; transition: transform .3s; }
        .portfolio-card:hover img { transform: scale(1.05); }
        .portfolio-overlay {
            position: absolute; bottom: 0; left: 0; right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.75));
            padding: 1.5rem 1rem 1rem; color: var(--white);
        }
        .portfolio-overlay h4   { font-weight: 700; font-size: 1rem; }
        .portfolio-overlay span { font-size: .8rem; opacity: .85; }

        /* ───────── TESTIMONIALS ───────── */
        #testimonials { background: var(--light); }
        .testimonials-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem; margin-top: 2.5rem;
        }
        .testimonial-card {
            background: var(--white); border-radius: 16px; padding: 1.8rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        }
        .testimonial-stars { color: #f59e0b; margin-bottom: .8rem; }
        .testimonial-text  { color: var(--gray); font-size: .95rem; line-height: 1.7; margin-bottom: 1.2rem; font-style: italic; }
        .testimonial-author { display: flex; align-items: center; gap: .8rem; }
        .author-avatar {
            width: 44px; height: 44px; border-radius: 50%; background: #dbeafe;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; color: var(--primary); font-size: 1rem; flex-shrink: 0;
            overflow: hidden;
        }
        .author-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .author-name { font-weight: 700; font-size: .95rem; }
        .author-info { font-size: .8rem; color: var(--gray); }

        /* ───────── AREA LAYANAN ───────── */
        #area { background: var(--white); }
        .area-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 1rem; margin-top: 2.5rem;
        }
        .area-card {
            background: var(--light); border: 2px solid #e5e7eb; border-radius: 12px;
            padding: 1.2rem; text-align: center; transition: all .2s;
        }
        .area-card:hover { border-color: var(--primary); background: #eff6ff; }
        .area-card i  { font-size: 1.5rem; color: var(--primary); margin-bottom: .5rem; display: block; }
        .area-card h4 { font-weight: 700; font-size: .95rem; margin-bottom: .2rem; }
        .area-card p  { font-size: .78rem; color: var(--gray); }

        /* ───────── TRUST FEATURES ───────── */
        #features { background: var(--light); }
        .features-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem; margin-top: 2.5rem;
        }
        .feature-card {
            background: var(--white); border-radius: 14px; padding: 1.8rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .feature-icon {
            width: 50px; height: 50px; background: #dbeafe; border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem; color: var(--primary); margin-bottom: 1rem;
        }
        .feature-card h3 { font-size: 1rem; font-weight: 700; margin-bottom: .5rem; }
        .feature-card p  { color: var(--gray); font-size: .875rem; line-height: 1.6; }

        /* ───────── CONTACT ───────── */
        #contact { background: var(--primary); color: var(--white); text-align: center; }
        #contact .section-title { color: var(--white); }
        #contact .section-sub   { color: rgba(255,255,255,.8); margin: 0 auto 2.5rem; }
        .contact-cards {
            display: flex; justify-content: center; gap: 1.5rem;
            flex-wrap: wrap; margin-bottom: 2.5rem;
        }
        .contact-card {
            background: rgba(255,255,255,.12); border: 1px solid rgba(255,255,255,.2);
            border-radius: 14px; padding: 1.5rem 2rem; color: var(--white);
            text-align: center; min-width: 180px;
        }
        .contact-card i      { font-size: 1.8rem; margin-bottom: .6rem; color: var(--accent); display: block; }
        .contact-card strong { display: block; font-size: .85rem; margin-bottom: .3rem; opacity: .8; }
        .contact-card a      { color: var(--white); text-decoration: none; font-weight: 700; }
        .cta-buttons { display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; }
        .btn-white {
            background: var(--white); color: var(--primary);
            padding: .9rem 2rem; border-radius: 10px; font-weight: 700;
            text-decoration: none; display: inline-flex; align-items: center; gap: .5rem;
            transition: transform .15s;
        }
        .btn-white:hover  { transform: translateY(-2px); }
        .btn-accent {
            background: var(--accent); color: var(--dark);
            padding: .9rem 2rem; border-radius: 10px; font-weight: 700;
            text-decoration: none; display: inline-flex; align-items: center; gap: .5rem;
            transition: transform .15s;
        }
        .btn-accent:hover { transform: translateY(-2px); }

        /* ───────── FOOTER ───────── */
        footer {
            background: var(--dark); color: rgba(255,255,255,.7);
            padding: 3rem 5% 1.5rem; font-size: .875rem;
        }
        .footer-grid {
            display: grid; grid-template-columns: 2fr 1fr 1fr;
            gap: 3rem; margin-bottom: 2rem;
        }
        .footer-brand       { color: var(--white); font-size: 1.3rem; font-weight: 800; margin-bottom: .8rem; }
        .footer-brand span  { color: var(--accent); }
        .footer-desc        { line-height: 1.7; margin-bottom: 1rem; }
        .footer-socials     { display: flex; gap: .8rem; }
        .footer-socials a {
            width: 36px; height: 36px; background: rgba(255,255,255,.1); border-radius: 8px;
            display: flex; align-items: center; justify-content: center; color: var(--white);
            text-decoration: none; transition: background .2s;
        }
        .footer-socials a:hover { background: var(--primary); }
        .footer-col h4 { color: var(--white); font-weight: 700; margin-bottom: 1rem; }
        .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: .5rem; }
        .footer-col a  { color: rgba(255,255,255,.7); text-decoration: none; transition: color .2s; }
        .footer-col a:hover { color: var(--white); }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.1);
            padding-top: 1.5rem; text-align: center;
        }

        /* ───────── FLOATING WA ───────── */
        .wa-float {
            position: fixed; bottom: 2rem; right: 2rem; z-index: 999;
            display: flex; flex-direction: column; gap: .5rem; align-items: flex-end;
        }
        .wa-btn {
            background: #25d366; color: var(--white);
            width: 56px; height: 56px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.6rem; box-shadow: 0 4px 20px rgba(37,211,102,.4);
            text-decoration: none; transition: transform .2s;
        }
        .wa-btn:hover { transform: scale(1.1); }
        .wa-label {
            background: var(--dark); color: var(--white);
            padding: .3rem .8rem; border-radius: 6px; font-size: .8rem; font-weight: 600;
        }

        /* ───────── RESPONSIVE ───────── */
        @media (max-width: 768px) {
            #hero { flex-direction: column; text-align: center; padding-top: 90px; }
            .hero-title  { font-size: 2rem; }
            .hero-btns   { justify-content: center; }
            .hero-stats  { justify-content: center; }
            .hero-image  { display: none; }
            .about-grid  { grid-template-columns: 1fr; }
            .about-img   { display: none; }
            .calc-grid   { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
            .contact-cards { flex-direction: column; align-items: center; }
            #trust-bar   { flex-direction: column; gap: 1.5rem; text-align: center; }
        }
    </style>
</head>
<body>

{{-- ══════════════════════════════════
     NAVBAR
══════════════════════════════════ --}}
<nav>
    <a href="#" class="nav-logo">
        {{ $settings['site_name'] ?? 'DZ Jersey' }}<span>Pro</span>
    </a>
    <ul class="nav-links">
        <li><a href="#services">Layanan</a></li>
        <li><a href="#calculator">Kalkulator</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#testimonials">Testimoni</a></li>
        <li><a href="#contact">Kontak</a></li>
    </ul>
    <a href="https://wa.me/{{ $settings['wa_jersey'] ?? '6281382805858' }}"
       class="nav-cta" target="_blank">
        <i class="fab fa-whatsapp"></i> Chat Sekarang
    </a>
</nav>

{{-- ══════════════════════════════════
     HERO
══════════════════════════════════ --}}
<section id="hero">
    <div class="hero-text">
        <div class="hero-badge">
            <i class="fas fa-shield-check"></i>
            Produsen Jersey #1 di Jawa Barat
        </div>
        <h1 class="hero-title">
            {{ $settings['hero_title'] ?? 'Custom Jersey &' }}
            <span>{{ $settings['hero_title_highlight'] ?? 'Textile Printing Berkualitas' }}</span>
        </h1>
        <p class="hero-desc">
            {{ $settings['hero_desc'] ?? 'Produksi jersey, kaos, hijab, dan textile printing custom dengan teknologi terkini. MOQ rendah, pengiriman ke seluruh Indonesia.' }}
        </p>
        <div class="hero-btns">
            <a href="https://wa.me/{{ $settings['wa_jersey'] ?? '6281382805858' }}"
               class="btn-primary" target="_blank">
                <i class="fab fa-whatsapp"></i> Order Sekarang
            </a>
            <a href="#calculator" class="btn-outline">
                <i class="fas fa-calculator"></i> Hitung Harga
            </a>
        </div>

        {{-- Statistik dinamis dari DB --}}
        <div class="hero-stats">
            @forelse($statistics as $stat)
                <div class="hero-stat">
                    <strong>{{ $stat->nilai }}{{ $stat->suffix }}</strong>
                    <span>{{ $stat->label }}</span>
                </div>
            @empty
                <div class="hero-stat"><strong>500+</strong><span>Pelanggan Puas</span></div>
                <div class="hero-stat"><strong>10K+</strong><span>Produk Terkirim</span></div>
                <div class="hero-stat"><strong>5 Tahun</strong><span>Pengalaman</span></div>
            @endforelse
        </div>
    </div>

    <div class="hero-image">
        @if(!empty($settings['hero_image']))
            <img src="{{ asset('storage/' . $settings['hero_image']) }}" alt="DZ Jersey Pro" />
        @else
            <img src="https://placehold.co/520x400/1a56db/ffffff?text=DZ+Jersey+Pro" alt="DZ Jersey Pro" />
        @endif
    </div>
</section>

{{-- ══════════════════════════════════
     TRUST BAR
══════════════════════════════════ --}}
<div id="trust-bar">
    @forelse($trustFeatures->take(4) as $tf)
        <div class="trust-item">
            <i class="{{ $tf->icon ?? 'fas fa-check-circle' }}"></i>
            <div>
                <strong>{{ $tf->judul }}</strong>
                <span>{{ $tf->deskripsi_singkat ?? Str::limit($tf->deskripsi, 40) }}</span>
            </div>
        </div>
    @empty
        <div class="trust-item"><i class="fas fa-truck"></i><div><strong>Gratis Ongkir</strong><span>Syarat & Ketentuan berlaku</span></div></div>
        <div class="trust-item"><i class="fas fa-award"></i><div><strong>Bergaransi</strong><span>Kualitas dijamin</span></div></div>
        <div class="trust-item"><i class="fas fa-clock"></i><div><strong>Tepat Waktu</strong><span>Produksi on-schedule</span></div></div>
        <div class="trust-item"><i class="fas fa-headset"></i><div><strong>24/7 Support</strong><span>Siap bantu kapanpun</span></div></div>
    @endforelse
</div>

{{-- ══════════════════════════════════
     ABOUT
══════════════════════════════════ --}}
<section id="about">
    <div class="about-grid">
        <div class="about-img">
            @if(!empty($settings['about_image']))
                <img src="{{ asset('storage/' . $settings['about_image']) }}" alt="Tentang Kami" />
            @else
                <img src="https://placehold.co/520x400/1a56db/ffffff?text=Workshop+DZ+Jersey" alt="Workshop" />
            @endif
        </div>
        <div class="about-content">
            <span class="section-tag">Tentang Kami</span>
            <h2 class="section-title">
                {{ $settings['about_title'] ?? 'Produsen Jersey & Textile Terpercaya' }}
            </h2>
            <p style="color: var(--gray); line-height: 1.8; margin-bottom: 1.5rem;">
                {{ $settings['about_desc'] ?? 'DZ Jersey Pro adalah produsen jersey dan textile printing custom yang berpengalaman lebih dari 5 tahun. Kami menggunakan teknologi printing terkini dengan bahan berkualitas premium untuk menghasilkan produk terbaik.' }}
            </p>
            <div class="about-points">
                <div class="about-point"><i class="fas fa-check-circle"></i><span>Teknologi sublimasi digital terkini</span></div>
                <div class="about-point"><i class="fas fa-check-circle"></i><span>Bahan breathable &amp; anti-bau</span></div>
                <div class="about-point"><i class="fas fa-check-circle"></i><span>MOQ rendah, cocok untuk komunitas &amp; UMKM</span></div>
                <div class="about-point"><i class="fas fa-check-circle"></i><span>Tim desainer profesional in-house</span></div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     LAYANAN
══════════════════════════════════ --}}
<section id="services">
    <div class="center">
        <span class="section-tag">Layanan Kami</span>
        <h2 class="section-title">Produk &amp; Layanan Lengkap</h2>
        <p class="section-sub">Dari jersey tim hingga hijab printing, semua tersedia dengan kualitas premium dan harga kompetitif.</p>
    </div>
    <div class="services-grid">
        @forelse($layanan as $layanan)
            <div class="service-card">
                <div class="service-icon">
                    <i class="{{ $layanan->icon ?? 'fas fa-tshirt' }}"></i>
                </div>
                <h3>{{ $layanan->nama }}</h3>
                <p>{{ $layanan->deskripsi }}</p>
                @if($layanan->harga_mulai)
                    <div class="service-price">
                        Mulai Rp {{ number_format($layanan->harga_mulai, 0, ',', '.') }}/pcs
                    </div>
                @endif
            </div>
        @empty
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-tshirt"></i></div>
                <h3>Jersey Futsal &amp; Sepak Bola</h3>
                <p>Custom jersey tim dengan printing sublimasi full warna, bahan polyester breathable premium.</p>
                <div class="service-price">Mulai Rp 75.000/pcs</div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-star-and-crescent"></i></div>
                <h3>Hijab Printing Custom</h3>
                <p>Hijab segi empat &amp; pashmina dengan motif custom, bahan voal &amp; maxmara premium.</p>
                <div class="service-price">Mulai Rp 35.000/pcs</div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-print"></i></div>
                <h3>Kaos Custom</h3>
                <p>Kaos printing DTF &amp; sublimasi, cocok untuk seragam kerja, merchandise, dan komunitas.</p>
                <div class="service-price">Mulai Rp 50.000/pcs</div>
            </div>
        @endforelse
    </div>
</section>

{{-- ══════════════════════════════════
     KALKULATOR HARGA
══════════════════════════════════ --}}
<section id="calculator">
    <div class="center">
        <span class="section-tag" style="background:rgba(255,255,255,.2);color:var(--white);">Kalkulator Harga</span>
        <h2 class="section-title">Hitung Estimasi Harga Sekarang</h2>
        <p class="section-sub">Dapatkan estimasi harga instan sebelum konsultasi dengan tim kami.</p>
    </div>
    <div class="calc-box">
        <div class="calc-grid">
            <div class="form-group">
                <label for="calcService">Jenis Produk</label>
                <select id="calcService" onchange="updateMaterials()">
                    <option value="jersey">Jersey / Kaos</option>
                    <option value="hijab">Hijab Printing</option>
                    <option value="textile">Textile / Kain</option>
                </select>
            </div>
            <div class="form-group">
                <label for="calcMaterial">Material</label>
                <select id="calcMaterial">
                    <option value="">Memuat material...</option>
                </select>
            </div>
            <div class="form-group">
                <label for="calcQty">Jumlah Pcs</label>
                <input type="number" id="calcQty" value="12" min="1" placeholder="Contoh: 12" />
            </div>
            <div class="form-group">
                <label for="calcSize">Ukuran</label>
                <select id="calcSize">
                    <option value="S">S</option>
                    <option value="M" selected>M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
        </div>
        <button class="calc-btn" onclick="hitungHarga()">
            <i class="fas fa-calculator"></i> Hitung Estimasi Harga
        </button>
        <div class="calc-result" id="calcResult" style="display:none;">
            <div class="calc-result-label">Estimasi Total Harga</div>
            <div class="calc-result-price" id="resultPrice">-</div>
            <div id="resultDetail" style="color:var(--gray);font-size:.85rem;margin-top:.5rem;"></div>
            <a id="resultWa" href="#"
               class="btn-primary" style="margin-top:1rem;justify-content:center;" target="_blank">
                <i class="fab fa-whatsapp"></i> Order via WhatsApp
            </a>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     PORTFOLIO
══════════════════════════════════ --}}
<section id="portfolio">
    <div class="center">
        <span class="section-tag">Portfolio</span>
        <h2 class="section-title">Hasil Karya Terbaik Kami</h2>
        <p class="section-sub">Ribuan produk telah kami hasilkan untuk pelanggan dari berbagai daerah di Indonesia.</p>
    </div>
    <div class="portfolio-grid">
        @forelse($portfolios as $porto)
            <div class="portfolio-card">
                <img src="{{ asset('storage/' . $porto->gambar) }}" alt="{{ $porto->judul }}" />
                <div class="portfolio-overlay">
                    <h4>{{ $porto->judul }}</h4>
                    <span>{{ $porto->kategori }}</span>
                </div>
            </div>
        @empty
            <div class="portfolio-card">
                <img src="https://placehold.co/400x220/1a56db/ffffff?text=Jersey+Tim" alt="Portfolio" />
                <div class="portfolio-overlay"><h4>Jersey Tim Futsal</h4><span>Jersey Custom</span></div>
            </div>
            <div class="portfolio-card">
                <img src="https://placehold.co/400x220/1e429f/ffffff?text=Hijab+Printing" alt="Portfolio" />
                <div class="portfolio-overlay"><h4>Hijab Printing Motif</h4><span>Hijab Custom</span></div>
            </div>
            <div class="portfolio-card">
                <img src="https://placehold.co/400x220/f59e0b/111827?text=Kaos+Komunitas" alt="Portfolio" />
                <div class="portfolio-overlay"><h4>Kaos Komunitas</h4><span>Kaos Custom</span></div>
            </div>
        @endforelse
    </div>
</section>

{{-- ══════════════════════════════════
     TESTIMONIALS
══════════════════════════════════ --}}
<section id="testimonials">
    <div class="center">
        <span class="section-tag">Testimoni</span>
        <h2 class="section-title">Yang Pelanggan Katakan</h2>
        <p class="section-sub">Kepuasan pelanggan adalah prioritas utama kami.</p>
    </div>
    <div class="testimonials-grid">
        @forelse($testimonials as $testi)
            <div class="testimonial-card">
                <div class="testimonial-stars">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star" style="{{ $i > $testi->rating ? 'opacity:.25' : '' }}"></i>
                    @endfor
                </div>
                <p class="testimonial-text">"{{ $testi->isi }}"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        @if($testi->foto)
                            <img src="{{ asset('storage/' . $testi->foto) }}" alt="{{ $testi->nama }}" />
                        @else
                            {{ strtoupper(substr($testi->nama, 0, 1)) }}
                        @endif
                    </div>
                    <div>
                        <div class="author-name">{{ $testi->nama }}</div>
                        <div class="author-info">{{ $testi->asal ?? $testi->jabatan ?? '' }}</div>
                    </div>
                </div>
            </div>
        @empty
            <div class="testimonial-card">
                <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="testimonial-text">"Kualitas jersey sangat bagus, jahitan rapi, warna tidak luntur. Sudah 3x order dan selalu puas!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">A</div>
                    <div><div class="author-name">Ahmad Fauzi</div><div class="author-info">Ketua Tim Futsal Bandung</div></div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="testimonial-text">"Hijab printingnya cantik banget! Motifnya detail, bahan lembut. Pengiriman cepat ke Surabaya."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">S</div>
                    <div><div class="author-name">Siti Rahma</div><div class="author-info">Owner Butik Online</div></div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="testimonial-text">"Responsif, harga bersaing, kualitas premium. Cocok untuk kebutuhan seragam komunitas kami."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">B</div>
                    <div><div class="author-name">Budi Santoso</div><div class="author-info">Koordinator Komunitas</div></div>
                </div>
            </div>
        @endforelse
    </div>
</section>

{{-- ══════════════════════════════════
     AREA LAYANAN
══════════════════════════════════ --}}
<section id="area">
    <div class="center">
        <span class="section-tag">Jangkauan</span>
        <h2 class="section-title">Area Layanan Kami</h2>
        <p class="section-sub">Melayani pengiriman ke seluruh Indonesia dengan ekspedisi terpercaya.</p>
    </div>
    <div class="area-grid">
        @forelse($areaLayanan as $area)
            <div class="area-card">
                <i class="{{ $area->icon ?? 'fas fa-map-marker-alt' }}"></i>
                <h4>{{ $area->nama }}</h4>
                @if($area->keterangan ?? false)
                    <p>{{ $area->keterangan }}</p>
                @endif
            </div>
        @empty
            @foreach(['Bandung','Jakarta','Surabaya','Yogyakarta','Medan','Makassar','Semarang','Palembang'] as $kota)
                <div class="area-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>{{ $kota }}</h4>
                    <p>Pengiriman 2-3 hari</p>
                </div>
            @endforeach
        @endforelse
    </div>
</section>

{{-- ══════════════════════════════════
     TRUST FEATURES (Keunggulan)
══════════════════════════════════ --}}
@if($trustFeatures->isNotEmpty())
<section id="features">
    <div class="center">
        <span class="section-tag">Keunggulan</span>
        <h2 class="section-title">Mengapa Pilih DZ Jersey Pro?</h2>
        <p class="section-sub">Kami berkomitmen memberikan produk dan layanan terbaik untuk setiap pelanggan.</p>
    </div>
    <div class="features-grid">
        @foreach($trustFeatures as $tf)
            <div class="feature-card">
                <div class="feature-icon"><i class="{{ $tf->icon ?? 'fas fa-star' }}"></i></div>
                <h3>{{ $tf->judul }}</h3>
                <p>{{ $tf->deskripsi }}</p>
            </div>
        @endforeach
    </div>
</section>
@endif

{{-- ══════════════════════════════════
     CONTACT / CTA
══════════════════════════════════ --}}
<section id="contact">
    <span class="section-tag" style="background:rgba(255,255,255,.2);color:var(--white);">Hubungi Kami</span>
    <h2 class="section-title">Siap Mulai Order?</h2>
    <p class="section-sub">Tim kami siap membantu konsultasi desain dan harga. Hubungi sekarang!</p>

    <div class="contact-cards">
        @if(!empty($settings['wa_jersey']))
        <div class="contact-card">
            <i class="fab fa-whatsapp"></i>
            <strong>WhatsApp Jersey</strong>
            <a href="https://wa.me/{{ $settings['wa_jersey'] }}" target="_blank">
                +{{ $settings['wa_jersey'] }}
            </a>
        </div>
        @endif

        @if(!empty($settings['wa_hijab']))
        <div class="contact-card">
            <i class="fab fa-whatsapp"></i>
            <strong>WhatsApp Hijab</strong>
            <a href="https://wa.me/{{ $settings['wa_hijab'] }}" target="_blank">
                +{{ $settings['wa_hijab'] }}
            </a>
        </div>
        @endif

        @if(!empty($settings['email']))
        <div class="contact-card">
            <i class="fas fa-envelope"></i>
            <strong>Email</strong>
            <a href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a>
        </div>
        @endif

        @if(!empty($settings['instagram']))
        <div class="contact-card">
            <i class="fab fa-instagram"></i>
            <strong>Instagram</strong>
            <a href="https://instagram.com/{{ $settings['instagram'] }}" target="_blank">
                @{{ $settings['instagram'] }}
            </a>
        </div>
        @endif
    </div>

    <div class="cta-buttons">
        <a href="https://wa.me/{{ $settings['wa_jersey'] ?? '6281382805858' }}?text={{ urlencode('Halo, saya mau order jersey custom') }}"
           class="btn-white" target="_blank">
            <i class="fab fa-whatsapp"></i> Order Jersey
        </a>
        <a href="https://wa.me/{{ $settings['wa_hijab'] ?? '6282345556927' }}?text={{ urlencode('Halo, saya mau order hijab printing') }}"
           class="btn-accent" target="_blank">
            <i class="fab fa-whatsapp"></i> Order Hijab
        </a>
    </div>
</section>

{{-- ══════════════════════════════════
     FOOTER
══════════════════════════════════ --}}
<footer>
    <div class="footer-grid">
        <div>
            <div class="footer-brand">
                {{ $settings['site_name'] ?? 'DZ Jersey' }}<span>Pro</span>
            </div>
            <p class="footer-desc">
                {{ $settings['about_desc_short'] ?? 'Produsen jersey dan textile printing custom berkualitas premium. Melayani seluruh Indonesia.' }}
            </p>
            <div class="footer-socials">
                @if(!empty($settings['instagram']))
                <a href="https://instagram.com/{{ $settings['instagram'] }}" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                @endif
                @if(!empty($settings['wa_jersey']))
                <a href="https://wa.me/{{ $settings['wa_jersey'] }}" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                @endif
                <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Layanan</h4>
            <ul>
                @forelse($layanan->take(5) as $layanan)
                    <li><a href="#services">{{ $layanan->nama }}</a></li>
                @empty
                    <li><a href="#services">Jersey Custom</a></li>
                    <li><a href="#services">Hijab Printing</a></li>
                    <li><a href="#services">Kaos Custom</a></li>
                @endforelse
            </ul>
        </div>

        <div class="footer-col">
            <h4>Informasi</h4>
            <ul>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#calculator">Kalkulator Harga</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>
            &copy; {{ date('Y') }} {{ $settings['site_name'] ?? 'DZ Jersey Pro' }}.
            All rights reserved. | Made with <i class="fas fa-heart" style="color:#ef4444;"></i> in Bandung
        </p>
    </div>
</footer>

{{-- ══════════════════════════════════
     FLOATING WHATSAPP
══════════════════════════════════ --}}
<div class="wa-float">
    <span class="wa-label">Chat Kami!</span>
    <a href="https://wa.me/{{ $settings['wa_jersey'] ?? '6281382805858' }}"
       class="wa-btn" target="_blank" title="Chat WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

{{-- ══════════════════════════════════
     SCRIPTS
══════════════════════════════════ --}}
<script>
    const waNumber = "{{ $settings['wa_jersey'] ?? '6281382805858' }}";

    /* ── Smooth scroll ── */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    /* ── Navbar shadow on scroll ── */
    window.addEventListener('scroll', () => {
        document.querySelector('nav').style.boxShadow =
            window.scrollY > 10 ? '0 2px 20px rgba(0,0,0,0.12)' : '0 1px 10px rgba(0,0,0,0.08)';
    });

    /* ── Kalkulator: load material dari API ── */
    async function updateMaterials() {
        const service = document.getElementById('calcService').value;
        const sel     = document.getElementById('calcMaterial');

        // Fallback data jika API belum tersedia
        const fallback = {
            jersey:  [{ nama: 'Polyester Standar', harga_per_pcs: 75000 }, { nama: 'Dri-Fit Premium', harga_per_pcs: 95000 }, { nama: 'Hyget', harga_per_pcs: 60000 }],
            hijab:   [{ nama: 'Voal Premium',      harga_per_pcs: 35000 }, { nama: 'Maxmara',          harga_per_pcs: 55000 }, { nama: 'Sifon',   harga_per_pcs: 40000 }],
            textile: [{ nama: 'Kain Katun',         harga_per_pcs: 45000 }, { nama: 'Kain PE',          harga_per_pcs: 40000 }, { nama: 'Fleece',  harga_per_pcs: 70000 }],
        };

        try {
            const res  = await fetch(`/api/materials?service=${service}`);
            if (!res.ok) throw new Error('API error');
            const data = await res.json();
            sel.innerHTML = data.map(m =>
                `<option value="${m.harga_per_pcs}">${m.nama} — Rp ${Number(m.harga_per_pcs).toLocaleString('id-ID')}/pcs</option>`
            ).join('');
        } catch {
            sel.innerHTML = (fallback[service] || []).map(m =>
                `<option value="${m.harga_per_pcs}">${m.nama} — Rp ${m.harga_per_pcs.toLocaleString('id-ID')}/pcs</option>`
            ).join('');
        }
    }

    /* ── Kalkulator: hitung harga ── */
    function hitungHarga() {
        const qty     = Math.max(1, parseInt(document.getElementById('calcQty').value) || 1);
        const harga   = parseInt(document.getElementById('calcMaterial').value) || 75000;
        const service = document.getElementById('calcService').value;
        const size    = document.getElementById('calcSize').value;

        // Diskon progresif
        let diskon = 0;
        if      (qty >= 100) diskon = 0.15;
        else if (qty >= 50)  diskon = 0.10;
        else if (qty >= 24)  diskon = 0.05;

        const hargaFinal = Math.round(harga * (1 - diskon));
        const total      = hargaFinal * qty;

        const priceEl  = document.getElementById('resultPrice');
        const detailEl = document.getElementById('resultDetail');
        const waEl     = document.getElementById('resultWa');
        const resultEl = document.getElementById('calcResult');

        priceEl.textContent  = `Rp ${hargaFinal.toLocaleString('id-ID')}/pcs × ${qty} = Rp ${total.toLocaleString('id-ID')}`;
        detailEl.textContent = diskon > 0
            ? `Termasuk diskon ${(diskon * 100).toFixed(0)}% untuk pemesanan ${qty}+ pcs`
            : 'Pesan 24+ pcs untuk mendapatkan diskon lebih hemat';

        const pesan = `Halo, saya mau order *${service}* ukuran *${size}* sebanyak *${qty} pcs*. Estimasi harga Rp ${hargaFinal.toLocaleString('id-ID')}/pcs. Bisa dibantu konfirmasi harganya?`;
        waEl.href = `https://wa.me/${waNumber}?text=${encodeURIComponent(pesan)}`;

        resultEl.style.display = 'block';
        resultEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    // Init saat halaman load
    updateMaterials();
</script>

</body>
</html>
