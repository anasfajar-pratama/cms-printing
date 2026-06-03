<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ Jersey Pro & Double Z Scarve - Produsen Jersey Custom Premium</title>
    <meta name="description" content="Produsen Jersey Custom, Textile Printing dan Hijab Printing premium. Brand resmi terdaftar DJKI. Amanah, bergaransi, melayani seluruh Indonesia.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        /* ============================================================
           CSS RESET & BASE
        ============================================================ */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }

        /* ============================================================
           WARM EARTH DESIGN TOKENS
        ============================================================ */
        :root {
            --bg:          #f9f7f4;   /* cream */
            --bg-card:     #fdfcfa;
            --fg:          #2c1a14;   /* deep brown */
            --fg-muted:    #6b4f44;
            --primary:     #c2714f;   /* terracotta */
            --primary-fg:  #ffffff;
            --secondary:   #e8ddd5;   /* sand */
            --border:      #ddd0c8;
            --muted:       #efe8e2;
            --font-sans:   'Inter', sans-serif;
            --font-serif:  'Playfair Display', serif;
            --radius:      0.5rem;
            --shadow-sm:   0 1px 3px rgba(44,26,20,.08);
            --shadow:      0 4px 16px rgba(44,26,20,.10);
            --shadow-lg:   0 12px 40px rgba(44,26,20,.14);
            --wa-green:    #25D366;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--bg);
            color: var(--fg);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4 { font-family: var(--font-serif); line-height: 1.15; }

        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; display: block; }
        button { cursor: pointer; font-family: var(--font-sans); border: none; }

        /* ============================================================
           LAYOUT HELPERS
        ============================================================ */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 5rem;
        }
        .section-header h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .divider {
            width: 5rem;
            height: 4px;
            background: var(--primary);
            margin: 0 auto 1.25rem;
            border-radius: 2px;
        }
        .divider-left { margin-left: 0; }
        .section-header p {
            font-size: 1.1rem;
            color: var(--fg-muted);
        }

        /* ============================================================
           NAVBAR
        ============================================================ */
        #navbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            padding: 1.5rem 0;
            transition: all .3s ease;
        }
        #navbar.scrolled {
            background: rgba(249,247,244,.95);
            backdrop-filter: blur(12px);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
        }
        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .nav-logo {
            font-family: var(--font-serif);
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--fg);
        }
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        .nav-links a {
            font-size: .9rem;
            font-weight: 500;
            color: rgba(44,26,20,.8);
            transition: color .2s;
        }
        .nav-links a:hover { color: var(--primary); }

        .nav-toggle {
            display: none;
            background: transparent;
            color: var(--fg);
            padding: .4rem;
        }
        .nav-toggle svg { display: block; }

        .mobile-menu {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%;
            background: var(--bg-card);
            border-bottom: 1px solid var(--border);
            padding: 6rem 1.5rem 2rem;
            z-index: 999;
            box-shadow: var(--shadow);
        }
        .mobile-menu.open { display: block; }
        .mobile-menu ul { list-style: none; display: flex; flex-direction: column; gap: .5rem; }
        .mobile-menu a {
            display: block;
            padding: .75rem 0;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--fg);
            border-bottom: 1px solid var(--border);
            transition: color .2s;
        }
        .mobile-menu a:hover { color: var(--primary); }

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .nav-toggle { display: block; }
        }

        /* ============================================================
           HERO
        ============================================================ */
        #beranda {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 7rem 0 4rem;
            overflow: hidden;
            background-color: var(--bg);
        }
        .hero-bg {
            position: absolute;
            inset: 0;
            opacity: .45;
            background:
                radial-gradient(circle at 80% 10%, var(--secondary) 0%, transparent 40%),
                radial-gradient(circle at 10% 90%, var(--muted) 0%, transparent 40%);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 56rem;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .5rem 1.25rem;
            border-radius: 9999px;
            border: 1px solid rgba(194,113,79,.25);
            background: rgba(194,113,79,.06);
            color: var(--primary);
            font-size: .875rem;
            font-weight: 600;
            letter-spacing: .04em;
        }
        .hero-badge svg { flex-shrink: 0; }
        .hero-title {
            font-size: clamp(2.5rem, 7vw, 4.5rem);
            font-weight: 700;
            color: var(--fg);
            line-height: 1.1;
        }
        .hero-sub {
            font-size: clamp(1rem, 2vw, 1.2rem);
            color: rgba(44,26,20,.75);
            max-width: 38rem;
            line-height: 1.7;
        }
        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: 1rem 2rem;
            background: var(--primary);
            color: var(--primary-fg);
            border-radius: 9999px;
            font-size: 1rem;
            font-weight: 600;
            transition: all .3s;
            box-shadow: 0 4px 20px rgba(194,113,79,.3);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(194,113,79,.4);
            background: #b5633e;
        }
        .btn-primary svg { transition: transform .2s; }
        .btn-primary:hover svg { transform: translateX(3px); }
        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: 1rem 2rem;
            background: rgba(232,221,213,.5);
            color: var(--fg);
            border-radius: 9999px;
            font-size: 1rem;
            font-weight: 600;
            transition: background .2s;
        }
        .btn-secondary:hover { background: var(--secondary); }

        /* ============================================================
           ABOUT
        ============================================================ */
        #tentang {
            padding: 6rem 0;
            background: var(--bg-card);
        }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        .about-title {
            font-size: clamp(1.8rem, 3vw, 2.8rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .about-desc { font-size: 1.05rem; color: var(--fg-muted); line-height: 1.8; margin-bottom: 1.5rem; }
        .mission-box {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 1rem;
            padding: 1.5rem;
            display: flex;
            gap: 1rem;
            align-items: flex-start;
            margin-bottom: 1.25rem;
            box-shadow: var(--shadow-sm);
        }
        .icon-circle {
            width: 3rem; height: 3rem;
            border-radius: 9999px;
            background: rgba(194,113,79,.1);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--primary);
        }
        .mission-box h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: .35rem; }
        .mission-box p { font-size: .95rem; color: var(--fg-muted); }
        .cert-badge {
            display: inline-flex;
            align-items: center;
            gap: .6rem;
            background: rgba(194,113,79,.05);
            color: var(--primary);
            padding: .75rem 1rem;
            border-radius: .5rem;
            font-weight: 600;
            font-size: .95rem;
            margin-bottom: 1.5rem;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border);
        }
        .stat-label {
            display: flex;
            align-items: center;
            gap: .35rem;
            font-size: .75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .07em;
            color: var(--fg-muted);
            margin-bottom: .25rem;
        }
        .stat-value { font-size: 1.8rem; font-weight: 800; color: var(--fg); }
        .about-image-wrap {
            position: relative;
        }
        .about-image-box {
            aspect-ratio: 4/3;
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .about-image-box img { width: 100%; height: 100%; object-fit: cover; }
        .about-image-placeholder {
            color: var(--fg-muted);
            font-size: 1rem;
            font-style: italic;
        }
        .deco-blob-1 {
            position: absolute;
            bottom: -1.5rem; right: -1.5rem;
            width: 12rem; height: 12rem;
            background: rgba(194,113,79,.1);
            border-radius: 9999px;
            filter: blur(2rem);
            z-index: -1;
        }
        .deco-blob-2 {
            position: absolute;
            top: -1.5rem; left: -1.5rem;
            width: 8rem; height: 8rem;
            background: var(--secondary);
            border-radius: 9999px;
            filter: blur(1.5rem);
            z-index: -1;
        }

        @media (max-width: 900px) {
            .about-grid { grid-template-columns: 1fr; }
            .about-image-wrap { order: -1; }
        }

        /* ============================================================
           PRODUCTS / LAYANAN
        ============================================================ */
        #produk {
            padding: 6rem 0;
            background: var(--bg);
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }
        .product-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: all .4s;
        }
        .product-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
        }
        .product-img {
            position: relative;
            aspect-ratio: 4/3;
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .product-img img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform .6s;
        }
        .product-card:hover .product-img img { transform: scale(1.05); }
        .product-img-placeholder { color: var(--fg-muted); opacity: .3; }
        .product-badge {
            position: absolute;
            top: 1rem; right: 1rem;
            background: var(--primary);
            color: white;
            font-size: .75rem;
            font-weight: 700;
            padding: .35rem .85rem;
            border-radius: 9999px;
        }
        .product-icon-wrap {
            position: absolute;
            top: 1rem; left: 1rem;
            background: rgba(249,247,244,.9);
            backdrop-filter: blur(4px);
            padding: .5rem;
            border-radius: .75rem;
            color: var(--primary);
        }
        .product-body { padding: 1.75rem; }
        .product-cat {
            font-size: .75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--primary);
            margin-bottom: .35rem;
        }
        .product-name {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: .75rem;
        }
        .product-desc { font-size: .95rem; color: var(--fg-muted); line-height: 1.7; margin-bottom: 1rem; }
        .product-features { list-style: none; margin-bottom: 1.25rem; display: flex; flex-direction: column; gap: .4rem; }
        .product-features li {
            display: flex;
            align-items: center;
            gap: .5rem;
            font-size: .875rem;
            color: rgba(44,26,20,.8);
        }
        .dot {
            width: 6px; height: 6px;
            background: var(--primary);
            border-radius: 9999px;
            flex-shrink: 0;
        }
        .product-min {
            border-top: 1px solid var(--border);
            padding-top: 1rem;
            font-size: .875rem;
        }
        .product-min span { color: var(--fg-muted); margin-right: .35rem; }

        @media (max-width: 900px) { .products-grid { grid-template-columns: 1fr; } }
        @media (min-width: 640px) and (max-width: 900px) { .products-grid { grid-template-columns: 1fr 1fr; } }

        /* ============================================================
           FEATURES / KEUNGGULAN
        ============================================================ */
        #keunggulan {
            padding: 6rem 0;
            background: var(--bg-card);
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem 3.5rem;
        }
        .feature-item {
            display: flex;
            gap: 1.25rem;
        }
        .feature-icon {
            width: 4rem; height: 4rem;
            border-radius: 1rem;
            background: var(--bg);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--primary);
            box-shadow: var(--shadow-sm);
            transition: all .3s;
        }
        .feature-item:hover .feature-icon {
            background: var(--primary);
            color: white;
        }
        .feature-title {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: .5rem;
            transition: color .2s;
        }
        .feature-item:hover .feature-title { color: var(--primary); }
        .feature-desc { font-size: .9rem; color: var(--fg-muted); line-height: 1.7; }

        @media (max-width: 900px) { .features-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 560px) { .features-grid { grid-template-columns: 1fr; } }

        /* ============================================================
           GALLERY
        ============================================================ */
        #galeri {
            padding: 6rem 0;
            background: var(--bg);
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: 220px;
            gap: 1rem;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            background: var(--secondary);
        }
        .gallery-item.wide { grid-column: span 2; }
        .gallery-item.tall { grid-row: span 2; }
        .gallery-item img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform .6s;
        }
        .gallery-item:hover img { transform: scale(1.1); }
        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,.75) 0%, rgba(0,0,0,.15) 50%, transparent 100%);
            opacity: 0;
            transition: opacity .3s;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.25rem;
        }
        .gallery-item:hover .gallery-overlay { opacity: 1; }
        .gallery-overlay span { color: rgba(255,255,255,.8); font-size: .7rem; font-weight: 700; text-transform: uppercase; letter-spacing: .08em; margin-bottom: .25rem; }
        .gallery-overlay p { color: white; font-weight: 600; font-size: .9rem; }
        .gallery-empty {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--fg-muted);
            font-style: italic;
        }

        @media (max-width: 768px) {
            .gallery-grid { grid-template-columns: 1fr 1fr; grid-auto-rows: 180px; }
            .gallery-item.wide { grid-column: span 1; }
        }

        /* ============================================================
           PROCESS STEPS
        ============================================================ */
        #proses {
            padding: 6rem 0;
            background: var(--bg-card);
        }
        .steps-wrap { max-width: 860px; margin: 0 auto; position: relative; }
        .steps-line {
            position: absolute;
            left: 50%;
            top: 0; bottom: 0;
            width: 2px;
            background: rgba(194,113,79,.2);
            transform: translateX(-50%);
        }
        .step-row {
            display: flex;
            margin-bottom: 3rem;
        }
        .step-row:last-child { margin-bottom: 0; }
        .step-row.right { flex-direction: row-reverse; }
        .step-col { width: 50%; }
        .step-col.pad-right { padding-right: 3.5rem; }
        .step-col.pad-left { padding-left: 3.5rem; }
        .step-row.right .step-col.pad-right { padding-right: 0; padding-left: 3.5rem; }
        .step-row.right .step-col.pad-left { padding-left: 0; padding-right: 3.5rem; text-align: right; }

        .step-card {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 1.25rem;
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            position: relative;
            transition: box-shadow .2s;
        }
        .step-card:hover { box-shadow: var(--shadow); }
        .step-watermark {
            position: absolute;
            top: .5rem; right: 1rem;
            font-size: 4rem;
            font-weight: 900;
            color: rgba(232,221,213,.6);
            line-height: 1;
            pointer-events: none;
            user-select: none;
        }
        .step-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: .75rem;
        }
        .step-icon {
            width: 3rem; height: 3rem;
            background: rgba(194,113,79,.1);
            color: var(--primary);
            border-radius: .75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .step-card h3 { font-size: 1.1rem; font-weight: 700; }
        .step-card p { font-size: .9rem; color: var(--fg-muted); line-height: 1.7; position: relative; z-index: 1; }
        .step-dot {
            position: absolute;
            top: 50%;
            width: 1.25rem; height: 1.25rem;
            border-radius: 9999px;
            background: var(--bg);
            border: 4px solid var(--primary);
            transform: translateY(-50%);
        }
        .step-row:not(.right) .step-card .step-dot { right: -4.2rem; }
        .step-row.right .step-card .step-dot { left: -4.2rem; }

        @media (max-width: 700px) {
            .steps-line { display: none; }
            .step-row, .step-row.right { flex-direction: column; }
            .step-col { width: 100%; padding: 0 !important; text-align: left !important; }
            .step-col.pad-right { display: none; }
            .step-dot { display: none; }
        }

        /* ============================================================
           PRICING
        ============================================================ */
        #harga {
            padding: 6rem 0;
            background: var(--bg);
            overflow: hidden;
            position: relative;
        }
        .pricing-bg-top {
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 12rem;
            background: var(--bg-card);
            border-radius: 0 0 60px 60px;
            z-index: 0;
        }
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            max-width: 960px;
            margin: 0 auto;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        .pricing-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: var(--shadow-sm);
            position: relative;
        }
        .pricing-card.popular {
            border-color: var(--primary);
            box-shadow: 0 12px 40px rgba(194,113,79,.15);
            transform: translateY(-1rem);
        }
        .popular-badge {
            position: absolute;
            top: -1rem;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary);
            color: white;
            padding: .3rem 1rem;
            border-radius: 9999px;
            font-size: .8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: .3rem;
            white-space: nowrap;
        }
        .pricing-name { text-align: center; font-size: 1.4rem; font-weight: 700; margin-bottom: 1rem; }
        .pricing-price-wrap { text-align: center; margin-bottom: 1.75rem; }
        .pricing-price { font-size: 2.2rem; font-weight: 900; color: var(--primary); }
        .pricing-unit { font-size: .9rem; color: var(--fg-muted); }
        .pricing-features { list-style: none; margin-bottom: 2rem; display: flex; flex-direction: column; gap: 1rem; }
        .pricing-features li {
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            font-size: .9rem;
            color: rgba(44,26,20,.8);
        }
        .check-circle {
            width: 1.25rem; height: 1.25rem;
            border-radius: 9999px;
            background: rgba(194,113,79,.12);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: .1rem;
            color: var(--primary);
        }
        .btn-pricing {
            display: block;
            width: 100%;
            text-align: center;
            padding: .85rem;
            border-radius: .875rem;
            font-size: .95rem;
            font-weight: 600;
            transition: all .2s;
        }
        .btn-pricing.primary {
            background: var(--primary);
            color: white;
        }
        .btn-pricing.primary:hover {
            background: #b5633e;
            box-shadow: 0 6px 20px rgba(194,113,79,.3);
        }
        .btn-pricing.outline {
            background: var(--secondary);
            color: var(--fg);
        }
        .btn-pricing.outline:hover { background: #d9cdc4; }

        @media (max-width: 900px) { .pricing-grid { grid-template-columns: 1fr; max-width: 400px; } .pricing-card.popular { transform: none; } }

        /* ============================================================
           TESTIMONIALS
        ============================================================ */
        #testimoni {
            padding: 6rem 0;
            background: rgba(232,221,213,.3);
        }
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            max-width: 1100px;
            margin: 0 auto;
        }
        .testi-card {
            background: var(--bg-card);
            border: 1px solid rgba(221,208,200,.5);
            border-radius: 1.5rem;
            padding: 2rem;
            position: relative;
            box-shadow: var(--shadow-sm);
            transition: box-shadow .2s;
        }
        .testi-card:hover { box-shadow: var(--shadow); }
        .testi-quote-icon {
            position: absolute;
            top: 1.25rem; right: 1.5rem;
            color: rgba(194,113,79,.07);
        }
        .stars { display: flex; gap: .25rem; margin-bottom: 1.25rem; }
        .star-filled { color: var(--primary); }
        .star-empty { color: var(--muted); }
        .testi-msg {
            font-size: .95rem;
            color: rgba(44,26,20,.8);
            font-style: italic;
            line-height: 1.75;
            margin-bottom: 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .testi-author { display: flex; align-items: center; gap: 1rem; }
        .testi-avatar {
            width: 3rem; height: 3rem;
            border-radius: 9999px;
            background: rgba(194,113,79,.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-weight: 700;
            font-size: 1.1rem;
            flex-shrink: 0;
            border: 2px solid var(--bg);
        }
        .testi-author img {
            width: 3rem; height: 3rem;
            border-radius: 9999px;
            object-fit: cover;
            border: 2px solid var(--bg);
        }
        .testi-name { font-weight: 700; font-size: .95rem; }
        .testi-meta { font-size: .78rem; color: var(--fg-muted); margin-top: .15rem; }

        @media (max-width: 900px) { .testimonials-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 580px) { .testimonials-grid { grid-template-columns: 1fr; } }

        /* ============================================================
           CONTACT
        ============================================================ */
        #kontak {
            padding: 6rem 0;
            background: var(--bg-card);
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            max-width: 1080px;
            margin: 0 auto;
            align-items: center;
        }
        .contact-title { font-size: clamp(1.8rem, 3vw, 2.8rem); font-weight: 700; margin-bottom: 1rem; }
        .contact-desc { font-size: 1.05rem; color: var(--fg-muted); margin-bottom: 2.5rem; line-height: 1.75; }
        .contact-items { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2.5rem; }
        .contact-item { display: flex; gap: 1rem; align-items: flex-start; }
        .contact-icon {
            width: 3rem; height: 3rem;
            border-radius: .75rem;
            background: rgba(194,113,79,.1);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--primary);
        }
        .contact-icon.sand {
            background: var(--secondary);
            color: var(--fg-muted);
        }
        .contact-label {
            font-size: .75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .07em;
            color: var(--fg-muted);
            margin-bottom: .2rem;
        }
        .contact-value { font-size: 1.05rem; font-weight: 700; }
        .btn-wa {
            display: inline-flex;
            align-items: center;
            gap: .6rem;
            padding: 1rem 2rem;
            background: var(--wa-green);
            color: white;
            border-radius: 9999px;
            font-size: 1rem;
            font-weight: 600;
            box-shadow: 0 6px 24px rgba(37,211,102,.3);
            transition: all .3s;
        }
        .btn-wa:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(37,211,102,.4);
        }
        .btn-wa svg { transition: transform .2s; }
        .btn-wa:hover svg { transform: translateX(3px); }
        .map-box {
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border);
            min-height: 420px;
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .map-box iframe { display: block; border: none; }
        .map-placeholder { color: var(--fg-muted); font-style: italic; }

        @media (max-width: 900px) { .contact-grid { grid-template-columns: 1fr; } }

        /* ============================================================
           FOOTER
        ============================================================ */
        footer {
            background: var(--fg);
            color: rgba(249,247,244,.85);
            padding: 4rem 0 2rem;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }
        .footer-brand-name {
            font-family: var(--font-serif);
            font-size: 1.4rem;
            font-weight: 700;
            color: white;
            margin-bottom: .5rem;
        }
        .footer-tagline { font-size: .9rem; color: rgba(249,247,244,.6); max-width: 18rem; margin-bottom: 1.5rem; }
        .social-links { display: flex; gap: .75rem; }
        .social-link {
            width: 2.5rem; height: 2.5rem;
            border-radius: 9999px;
            background: rgba(249,247,244,.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(249,247,244,.8);
            transition: all .2s;
        }
        .social-link:hover { background: var(--primary); color: white; }
        .footer-col-title {
            font-size: .75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: white;
            margin-bottom: 1.25rem;
        }
        .footer-links { list-style: none; display: flex; flex-direction: column; gap: .75rem; }
        .footer-links a {
            font-size: .9rem;
            color: rgba(249,247,244,.6);
            transition: color .2s;
        }
        .footer-links a:hover { color: var(--primary); }
        .footer-bottom {
            padding-top: 1.5rem;
            border-top: 1px solid rgba(249,247,244,.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
            font-size: .85rem;
            color: rgba(249,247,244,.4);
        }

        @media (max-width: 768px) { .footer-grid { grid-template-columns: 1fr; gap: 2rem; } .footer-bottom { flex-direction: column; text-align: center; } }

        /* ============================================================
           ANIMATE ON SCROLL (minimal AOS)
        ============================================================ */
        .aos { opacity: 0; transform: translateY(24px); transition: opacity .7s ease, transform .7s ease; }
        .aos.visible { opacity: 1; transform: none; }
        .aos-delay-1 { transition-delay: .1s; }
        .aos-delay-2 { transition-delay: .2s; }
        .aos-delay-3 { transition-delay: .3s; }
        .aos-delay-4 { transition-delay: .4s; }
        .aos-delay-5 { transition-delay: .5s; }
    </style>
</head>
<body>

<!-- ================================================================
     NAVBAR
================================================================ -->
<header id="navbar">
    <div class="container nav-inner">
        <a href="#beranda" class="nav-logo">DZ Jersey Pro & Double Z Scarve</a>
        <nav>
            <ul class="nav-links">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#produk">Layanan</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#harga">Harga</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </nav>
        <button class="nav-toggle" id="menuBtn" aria-label="Toggle menu">
            <svg id="iconMenu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
            <svg id="iconClose" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
    </div>
</header>

<div class="mobile-menu" id="mobileMenu">
    <ul>
        <li><a href="#beranda" onclick="closeMobile()">Beranda</a></li>
        <li><a href="#tentang" onclick="closeMobile()">Tentang</a></li>
        <li><a href="#produk" onclick="closeMobile()">Layanan</a></li>
        <li><a href="#galeri" onclick="closeMobile()">Galeri</a></li>
        <li><a href="#harga" onclick="closeMobile()">Harga</a></li>
        <li><a href="#kontak" onclick="closeMobile()">Kontak</a></li>
    </ul>
</div>


<!-- ================================================================
     HERO
================================================================ -->
<section id="beranda">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                Brand Resmi Terdaftar DJKI
            </div>
            <h1 class="hero-title">Wujudkan Jersey &amp; Tekstil Impian Anda</h1>
            <p class="hero-sub">Produsen Jersey Custom, Textile Printing &amp; Hijab Premium. Brand resmi terdaftar DJKI. Amanah, bergaransi, melayani seluruh Indonesia.</p>
            <div class="hero-actions">
                <a href="https://wa.me/6281234567890?text=Halo+DZ+Jersey+Pro,+saya+ingin+konsultasi+pesanan" target="_blank" class="btn-primary">
                    Pesan Sekarang via WhatsApp
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="#produk" class="btn-secondary">Lihat Katalog Produk</a>
            </div>
        </div>
    </div>
</section>


<!-- ================================================================
     ABOUT
================================================================ -->
<section id="tentang">
    <div class="container">
        <div class="about-grid">
            <div class="aos">
                <h2 class="about-title">Tentang DZ Jersey Pro &amp; Double Z Scarve</h2>
                <div class="divider divider-left"></div>
                <p class="about-desc">Kami adalah produsen jersey custom dan textile printing yang telah melayani ribuan pelanggan di seluruh Indonesia. Dengan pengalaman lebih dari 8 tahun, kami menghadirkan produk tekstil berkualitas premium dengan harga yang terjangkau dan layanan yang amanah.</p>

                <div class="mission-box">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                    </div>
                    <div>
                        <h3>Visi &amp; Misi</h3>
                        <p>Menghadirkan produk tekstil berkualitas tinggi dengan harga terjangkau, layanan amanah, dan hasil bergaransi untuk setiap pelanggan di seluruh Indonesia.</p>
                    </div>
                </div>

                <div class="cert-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Brand resmi terdaftar DJKI (Direktorat Jenderal Kekayaan Intelektual)
                </div>

                <div class="stats-grid">
                    <div>
                        <div class="stat-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            Berdiri Sejak
                        </div>
                        <div class="stat-value">2016</div>
                    </div>
                    <div>
                        <div class="stat-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            Klien Puas
                        </div>
                        <div class="stat-value">5.000+</div>
                    </div>
                    <div>
                        <div class="stat-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            Produk Selesai
                        </div>
                        <div class="stat-value">50.000+</div>
                    </div>
                    <div>
                        <div class="stat-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            Kota Terlayani
                        </div>
                        <div class="stat-value">100+</div>
                    </div>
                </div>
            </div>

            <div class="about-image-wrap aos">
                <div class="about-image-box">
                    {{-- Ganti src dengan gambar workshop Anda --}}
                    <div class="about-image-placeholder">📸 Gambar Workshop</div>
                </div>
                <div class="deco-blob-1"></div>
                <div class="deco-blob-2"></div>
            </div>
        </div>
    </div>
</section>


<!-- ================================================================
     PRODUCTS / LAYANAN
================================================================ -->
<section id="produk">
    <div class="container">
        <div class="section-header aos">
            <h2>Layanan Kami</h2>
            <div class="divider"></div>
            <p>Kualitas premium dalam setiap jahitan dan cetakan, disesuaikan dengan kebutuhan Anda.</p>
        </div>

        <div class="products-grid">

            <!-- Jersey Custom -->
            <div class="product-card aos aos-delay-1">
                <div class="product-img">
                    {{-- Ganti src dengan foto jersey Anda --}}
                    <div class="product-img-placeholder">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.57a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.57a2 2 0 0 0-1.34-2.23z"/></svg>
                    </div>
                    <div class="product-badge">Terlaris</div>
                    <div class="product-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.57a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.57a2 2 0 0 0-1.34-2.23z"/></svg>
                    </div>
                </div>
                <div class="product-body">
                    <div class="product-cat">Jersey Custom</div>
                    <h3 class="product-name">Jersey Custom</h3>
                    <p class="product-desc">Jersey olahraga custom berkualitas premium dengan teknologi sublim printing. Cocok untuk tim futsal, sepak bola, voli, basket, dan olahraga lainnya.</p>
                    <ul class="product-features">
                        <li><span class="dot"></span>Bahan premium polyester</li>
                        <li><span class="dot"></span>Sublim printing full color</li>
                        <li><span class="dot"></span>Desain bebas / custom</li>
                        <li><span class="dot"></span>Jahitan rapi dan kuat</li>
                        <li><span class="dot"></span>Anti-pudar &amp; anti-kusut</li>
                        <li><span class="dot"></span>Garansi kualitas</li>
                    </ul>
                    <div class="product-min">
                        <span>Minimal Order:</span> Minimal 10 pcs
                    </div>
                </div>
            </div>

            <!-- Textile Printing -->
            <div class="product-card aos aos-delay-2">
                <div class="product-img">
                    <div class="product-img-placeholder">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/></svg>
                    </div>
                    <div class="product-badge">Populer</div>
                    <div class="product-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/></svg>
                    </div>
                </div>
                <div class="product-body">
                    <div class="product-cat">Textile Printing</div>
                    <h3 class="product-name">Textile Printing</h3>
                    <p class="product-desc">Layanan cetak kain tekstil berkualitas tinggi untuk berbagai kebutuhan. Menggunakan mesin printing terbaru dengan hasil warna tajam dan tahan lama.</p>
                    <ul class="product-features">
                        <li><span class="dot"></span>Cetak kain premium</li>
                        <li><span class="dot"></span>Hasil warna tajam &amp; cerah</li>
                        <li><span class="dot"></span>Tahan lama &amp; waterproof</li>
                        <li><span class="dot"></span>Berbagai pilihan kain</li>
                        <li><span class="dot"></span>Cocok untuk seragam &amp; promosi</li>
                        <li><span class="dot"></span>Pengerjaan cepat</li>
                    </ul>
                    <div class="product-min">
                        <span>Minimal Order:</span> Minimal 5 meter
                    </div>
                </div>
            </div>

            <!-- Hijab Printing -->
            <div class="product-card aos aos-delay-3">
                <div class="product-img">
                    <div class="product-img-placeholder">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                    </div>
                    <div class="product-badge">Brand DJKI</div>
                    <div class="product-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                    </div>
                </div>
                <div class="product-body">
                    <div class="product-cat">Hijab Printing</div>
                    <h3 class="product-name">Hijab Printing (Double Z Scarve)</h3>
                    <p class="product-desc">Produk hijab printing premium dari brand Double Z Scarve. Menggunakan bahan berkualitas tinggi dengan motif cetak yang indah dan warna yang tahan lama.</p>
                    <ul class="product-features">
                        <li><span class="dot"></span>Bahan halus &amp; nyaman</li>
                        <li><span class="dot"></span>Motif cetak premium</li>
                        <li><span class="dot"></span>Warna tidak pudar</li>
                        <li><span class="dot"></span>Brand terdaftar DJKI</li>
                        <li><span class="dot"></span>Cocok untuk reseller</li>
                        <li><span class="dot"></span>Harga grosir tersedia</li>
                    </ul>
                    <div class="product-min">
                        <span>Minimal Order:</span> Minimal 12 pcs
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ================================================================
     FEATURES / KEUNGGULAN
================================================================ -->
<section id="keunggulan">
    <div class="container">
        <div class="section-header aos">
            <h2>Mengapa Memilih Kami</h2>
            <div class="divider"></div>
            <p>Dedikasi kami pada kualitas dan kepuasan pelanggan menjadikan kami pilihan terpercaya.</p>
        </div>
        <div class="features-grid">

            <div class="feature-item aos aos-delay-1">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Kualitas Premium</h3>
                    <p class="feature-desc">Kami menggunakan bahan dan tinta berkualitas tinggi yang menghasilkan produk tahan lama dengan warna cerah dan tajam.</p>
                </div>
            </div>

            <div class="feature-item aos aos-delay-2">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Amanah &amp; Bergaransi</h3>
                    <p class="feature-desc">Setiap pesanan dilindungi garansi kepuasan. Jika ada cacat produksi, kami tanggung penuh penggantiannya.</p>
                </div>
            </div>

            <div class="feature-item aos aos-delay-3">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Brand Terdaftar DJKI</h3>
                    <p class="feature-desc">DZ Jersey Pro dan Double Z Scarve adalah brand resmi yang telah terdaftar di Direktorat Jenderal Kekayaan Intelektual.</p>
                </div>
            </div>

            <div class="feature-item aos aos-delay-1">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Desain Custom Bebas</h3>
                    <p class="feature-desc">Tim desainer kami siap membantu mewujudkan desain impian Anda dari nol, atau Anda bisa upload desain sendiri.</p>
                </div>
            </div>

            <div class="feature-item aos aos-delay-2">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12C2 6.5 6.5 2 12 2a10 10 0 0 1 8 4"/><path d="M5 19.5C5.5 18 6 15 6 12c0-.7.12-1.37.34-2"/><path d="M17.29 21.02c.12-.6.43-2.3.5-3.02"/><path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4"/><path d="M8.65 22c.21-.66.45-1.32.57-2"/><path d="M14 13.12c0 2.38 0 6.38-1 8.88"/><path d="M2 16h.01"/><path d="M21.8 16c.2-2 .131-5.354 0-6"/><path d="M9 6.8a6 6 0 0 1 9 5.2v2"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Harga Terjangkau</h3>
                    <p class="feature-desc">Kami menawarkan harga kompetitif tanpa mengorbankan kualitas. Tersedia juga harga khusus untuk pemesanan dalam jumlah besar.</p>
                </div>
            </div>

            <div class="feature-item aos aos-delay-3">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3"/><rect width="13" height="8" x="9" y="13" rx="1"/><path d="M23 15h-5"/><path d="M23 19h-5"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Pengiriman Seluruh Indonesia</h3>
                    <p class="feature-desc">Melayani pengiriman ke seluruh wilayah Indonesia dengan jasa pengiriman terpercaya. Produk dikemas rapi dan aman.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ================================================================
     GALLERY
================================================================ -->
<section id="galeri">
    <div class="container">
        <div class="section-header aos">
            <h2>Galeri Karya</h2>
            <div class="divider"></div>
            <p>Jejak dedikasi kami dalam setiap karya yang dihasilkan untuk pelanggan.</p>
        </div>

        {{-- Jika ada gambar, ganti div placeholder di bawah dengan tag <img> --}}
        <div class="gallery-grid">
            <div class="gallery-item wide tall aos">
                <div class="gallery-empty" style="height:100%;width:100%;display:flex;align-items:center;justify-content:center;">
                    <span style="color:#c2714f;font-size:1rem;">📸 Upload foto produk Anda di sini</span>
                </div>
            </div>
            <div class="gallery-item aos aos-delay-1"><div class="gallery-empty" style="height:100%"></div></div>
            <div class="gallery-item aos aos-delay-2"><div class="gallery-empty" style="height:100%"></div></div>
            <div class="gallery-item aos aos-delay-1"><div class="gallery-empty" style="height:100%"></div></div>
            <div class="gallery-item aos aos-delay-2"><div class="gallery-empty" style="height:100%"></div></div>
            <div class="gallery-item wide tall aos aos-delay-3"><div class="gallery-empty" style="height:100%"></div></div>
        </div>
        {{--
            CARA MENAMBAHKAN GAMBAR:
            Ganti div.gallery-empty dengan:
            <img src="{{ asset('images/gallery/foto1.jpg') }}" alt="Deskripsi">
            <div class="gallery-overlay">
                <span>Jersey</span>
                <p>Jersey Custom Tim Futsal</p>
            </div>
        --}}
    </div>
</section>


<!-- ================================================================
     PROCESS STEPS
================================================================ -->
<section id="proses">
    <div class="container">
        <div class="section-header aos">
            <h2>Proses Pemesanan</h2>
            <div class="divider"></div>
            <p>Langkah mudah untuk mewujudkan jersey dan kain impian Anda bersama kami.</p>
        </div>

        <div class="steps-wrap">
            <div class="steps-line"></div>

            <!-- Step 1 - kanan (default) -->
            <div class="step-row aos">
                <div class="step-col pad-right">
                    <div class="step-card">
                        <div class="step-dot"></div>
                        <div class="step-watermark">1</div>
                        <div class="step-header">
                            <div class="step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                            </div>
                            <h3>Hubungi Kami</h3>
                        </div>
                        <p>Hubungi kami via WhatsApp untuk konsultasi gratis. Ceritakan kebutuhan dan jumlah pesanan Anda.</p>
                    </div>
                </div>
                <div class="step-col pad-left"></div>
            </div>

            <!-- Step 2 - kiri -->
            <div class="step-row right aos">
                <div class="step-col pad-right"></div>
                <div class="step-col pad-left">
                    <div class="step-card">
                        <div class="step-dot"></div>
                        <div class="step-watermark">2</div>
                        <div class="step-header">
                            <div class="step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                            </div>
                            <h3>Kirim Desain</h3>
                        </div>
                        <p>Kirim desain Anda atau minta bantuan tim desainer kami. Kami akan siapkan preview desain untuk persetujuan.</p>
                    </div>
                </div>
            </div>

            <!-- Step 3 - kanan -->
            <div class="step-row aos">
                <div class="step-col pad-right">
                    <div class="step-card">
                        <div class="step-dot"></div>
                        <div class="step-watermark">3</div>
                        <div class="step-header">
                            <div class="step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <h3>Konfirmasi &amp; DP</h3>
                        </div>
                        <p>Setujui desain final dan lakukan pembayaran DP 50% untuk memulai proses produksi.</p>
                    </div>
                </div>
                <div class="step-col pad-left"></div>
            </div>

            <!-- Step 4 - kiri -->
            <div class="step-row right aos">
                <div class="step-col pad-right"></div>
                <div class="step-col pad-left">
                    <div class="step-card">
                        <div class="step-dot"></div>
                        <div class="step-watermark">4</div>
                        <div class="step-header">
                            <div class="step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                            </div>
                            <h3>Produksi</h3>
                        </div>
                        <p>Tim produksi kami mengerjakan pesanan dengan teliti menggunakan mesin dan bahan berkualitas tinggi.</p>
                    </div>
                </div>
            </div>

            <!-- Step 5 - kanan -->
            <div class="step-row aos">
                <div class="step-col pad-right">
                    <div class="step-card">
                        <div class="step-dot"></div>
                        <div class="step-watermark">5</div>
                        <div class="step-header">
                            <div class="step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21 21-6-6m6 6v-4.808c0-3.976-3.582-7.192-8-7.192s-8 3.216-8 7.192V21"/><path d="M3 3h.01"/></svg>
                            </div>
                            <h3>Quality Control</h3>
                        </div>
                        <p>Setiap produk melewati pengecekan kualitas ketat sebelum dikemas dan siap dikirim.</p>
                    </div>
                </div>
                <div class="step-col pad-left"></div>
            </div>

            <!-- Step 6 - kiri -->
            <div class="step-row right aos">
                <div class="step-col pad-right"></div>
                <div class="step-col pad-left">
                    <div class="step-card">
                        <div class="step-dot"></div>
                        <div class="step-watermark">6</div>
                        <div class="step-header">
                            <div class="step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m4 3v7m-4-4 4 4 4-4"/></svg>
                            </div>
                            <h3>Pengiriman</h3>
                        </div>
                        <p>Pesanan dikemas rapi dan dikirim ke alamat Anda. Pelunasan dilakukan setelah barang diterima.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ================================================================
     PRICING
================================================================ -->
<section id="harga">
    <div class="pricing-bg-top"></div>
    <div class="container">
        <div class="section-header aos" style="position:relative;z-index:1">
            <h2>Paket Harga</h2>
            <div class="divider"></div>
            <p>Investasi terbaik untuk kualitas premium. Transparan tanpa biaya tersembunyi.</p>
        </div>

        <div class="pricing-grid">

            <!-- Starter -->
            <div class="pricing-card aos">
                <div class="pricing-name">Starter</div>
                <div class="pricing-price-wrap">
                    <div class="pricing-price">Rp 75.000</div>
                    <div class="pricing-unit">/ pcs (min. 10 pcs)</div>
                </div>
                <ul class="pricing-features">
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Jersey sublim premium</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Desain custom</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>1x revisi desain</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Pengerjaan 7-10 hari</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Free logo/nama</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Garansi kualitas</li>
                </ul>
                <a href="#kontak" class="btn-pricing outline">Pesan Sekarang</a>
            </div>

            <!-- Standard (Popular) -->
            <div class="pricing-card popular aos aos-delay-1">
                <div class="popular-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    Paling Diminati
                </div>
                <div class="pricing-name">Standard</div>
                <div class="pricing-price-wrap">
                    <div class="pricing-price">Rp 65.000</div>
                    <div class="pricing-unit">/ pcs (min. 25 pcs)</div>
                </div>
                <ul class="pricing-features">
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Jersey sublim premium</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Desain custom</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>2x revisi desain</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Pengerjaan 5-7 hari</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Free logo/nama/nomor</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Garansi kualitas</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Diskon ongkir</li>
                </ul>
                <a href="#kontak" class="btn-pricing primary">Pilih Paket Ini</a>
            </div>

            <!-- Grosir -->
            <div class="pricing-card aos aos-delay-2">
                <div class="pricing-name">Grosir</div>
                <div class="pricing-price-wrap">
                    <div class="pricing-price" style="font-size:1.5rem">Hubungi Kami</div>
                    <div class="pricing-unit">(min. 50 pcs)</div>
                </div>
                <ul class="pricing-features">
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Jersey sublim premium</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Desain custom</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Revisi unlimited</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Pengerjaan 5 hari</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Free penomoran lengkap</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Ongkir gratis Jawa</li>
                    <li><div class="check-circle"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Harga terbaik</li>
                </ul>
                <a href="https://wa.me/6281234567890?text=Saya+ingin+konsultasi+paket+grosir" target="_blank" class="btn-pricing outline">Konsultasi Gratis</a>
            </div>

        </div>
    </div>
</section>


<!-- ================================================================
     TESTIMONIALS
================================================================ -->
<section id="testimoni">
    <div class="container">
        <div class="section-header aos">
            <h2>Kata Mereka</h2>
            <div class="divider"></div>
            <p>Kepercayaan pelanggan adalah bukti nyata kualitas layanan kami.</p>
        </div>

        <div class="testimonials-grid">

            <div class="testi-card aos aos-delay-1">
                <svg class="testi-quote-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testi-msg">"Pesanan jersey untuk tim futsal saya sudah datang. Kualitas luar biasa! Warnanya tajam, bahannya adem, dan jahitannya rapi. Tim kami sangat puas. Pasti order lagi!"</p>
                <div class="testi-author">
                    <div class="testi-avatar">A</div>
                    <div>
                        <div class="testi-name">Ahmad Fauzi</div>
                        <div class="testi-meta">Jersey Custom - 25 pcs • Surabaya, Jawa Timur</div>
                    </div>
                </div>
            </div>

            <div class="testi-card aos aos-delay-2">
                <svg class="testi-quote-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testi-msg">"Alhamdulillah, hijab printing dari Double Z Scarve benar-benar premium. Bahannya halus, motifnya cantik, dan warnanya tidak pudar setelah dicuci berkali-kali. Recommended banget!"</p>
                <div class="testi-author">
                    <div class="testi-avatar">S</div>
                    <div>
                        <div class="testi-name">Siti Rahayu</div>
                        <div class="testi-meta">Hijab Printing - 30 pcs • Bandung, Jawa Barat</div>
                    </div>
                </div>
            </div>

            <div class="testi-card aos aos-delay-3">
                <svg class="testi-quote-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testi-msg">"Sudah 3x order jersey di sini untuk komunitas olahraga kami. Selalu memuaskan. Responsif, desain sesuai request, dan pengerjaan tepat waktu. Harga juga sangat kompetitif."</p>
                <div class="testi-author">
                    <div class="testi-avatar">B</div>
                    <div>
                        <div class="testi-name">Budi Santoso</div>
                        <div class="testi-meta">Jersey Custom - 40 pcs • Jakarta Selatan</div>
                    </div>
                </div>
            </div>

            <div class="testi-card aos">
                <svg class="testi-quote-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testi-msg">"Textile printing untuk seragam acara kantor kami hasilnya memuaskan. Warna cerah dan bahan nyaman dipakai seharian. Proses pemesanan juga mudah dan admin sangat membantu."</p>
                <div class="testi-author">
                    <div class="testi-avatar">D</div>
                    <div>
                        <div class="testi-name">Dewi Kurniawati</div>
                        <div class="testi-meta">Textile Printing - 50 meter • Yogyakarta</div>
                    </div>
                </div>
            </div>

            <div class="testi-card aos aos-delay-1">
                <svg class="testi-quote-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testi-msg">"Order dari Medan, barang sampai dalam kondisi perfect! Packaging rapi dan produk sesuai dengan yang dijanjikan. Pelayanannya ramah dan profesional. Highly recommended!"</p>
                <div class="testi-author">
                    <div class="testi-avatar">R</div>
                    <div>
                        <div class="testi-name">Rizky Pratama</div>
                        <div class="testi-meta">Jersey Custom - 15 pcs • Medan, Sumatera Utara</div>
                    </div>
                </div>
            </div>

            <div class="testi-card aos aos-delay-2">
                <svg class="testi-quote-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="star-filled"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testi-msg">"Brand hijab saya makin berkembang berkat kerjasama dengan Double Z Scarve. Kualitas konsisten dan harga grosir sangat membantu bisnis saya. Tim yang amanah dan terpercaya."</p>
                <div class="testi-author">
                    <div class="testi-avatar">N</div>
                    <div>
                        <div class="testi-name">Nur Aisyah</div>
                        <div class="testi-meta">Hijab Printing - 60 pcs • Makassar, Sulawesi Selatan</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ================================================================
     CONTACT
================================================================ -->
<section id="kontak">
    <div class="container">
        <div class="contact-grid">
            <div class="aos">
                <h2 class="contact-title">Hubungi Kami</h2>
                <div class="divider divider-left"></div>
                <p class="contact-desc">Konsultasikan kebutuhan jersey dan tekstil Anda. Tim kami siap membantu memberikan solusi terbaik dengan layanan ramah dan profesional.</p>

                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 8a16 16 0 0 0 7.91 7.91l.71-.71a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <div class="contact-label">WhatsApp</div>
                            <div class="contact-value">+62 812-3456-7890</div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon sand">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <div class="contact-label">Email</div>
                            <div class="contact-value">info@dzjerseypro.com</div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon sand">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <div class="contact-label">Lokasi Workshop</div>
                            <div class="contact-value">Jl. Tekstil No. 45, Kawasan Industri Konveksi<br>Bandung, Jawa Barat</div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon sand">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <div class="contact-label">Jam Operasional</div>
                            <div class="contact-value">Senin – Sabtu: 08.00 – 17.00 WIB</div>
                        </div>
                    </div>
                </div>

                <a href="https://wa.me/6281234567890?text=Halo+DZ+Jersey+Pro,+saya+ingin+konsultasi+pesanan" target="_blank" class="btn-wa">
                    Chat via WhatsApp
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            <div class="aos aos-delay-2">
                <div class="map-box">
                    {{-- Ganti src dengan embed URL Google Maps lokasi Anda --}}
                    {{-- Contoh: src="https://www.google.com/maps/embed?pb=..." --}}
                    <div class="map-placeholder" style="padding:2rem;text-align:center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" style="margin:0 auto 1rem;opacity:.4"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                        <p>Tambahkan Google Maps embed di sini.<br>Edit di resources/views/landing.blade.php bagian #kontak</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ================================================================
     FOOTER
================================================================ -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div>
                <div class="footer-brand-name">DZ Jersey Pro &amp; Double Z Scarve</div>
                <p class="footer-tagline">Produsen Jersey Custom &amp; Textile Printing Premium</p>
                <div class="social-links">
                    <a href="https://www.instagram.com/dzjerseypro" target="_blank" class="social-link" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="footer-col-title">Navigasi</h4>
                <ul class="footer-links">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#produk">Layanan</a></li>
                    <li><a href="#galeri">Galeri Karya</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-col-title">Informasi</h4>
                <ul class="footer-links">
                    <li><a href="#proses">Proses Pemesanan</a></li>
                    <li><a href="#harga">Paket Harga</a></li>
                    <li><a href="#testimoni">Testimoni</a></li>
                    <li><a href="#kontak">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} DZ Jersey Pro &amp; Double Z Scarve. All rights reserved.</p>
            <p>Terdaftar resmi di DJKI (Direktorat Jenderal Kekayaan Intelektual)</p>
        </div>
    </div>
</footer>


<!-- ================================================================
     JAVASCRIPT
================================================================ -->
<script>
    // --- Navbar Scroll ---
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 20);
    });

    // --- Mobile Menu ---
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const iconMenu = document.getElementById('iconMenu');
    const iconClose = document.getElementById('iconClose');
    let menuOpen = false;

    menuBtn.addEventListener('click', () => {
        menuOpen = !menuOpen;
        mobileMenu.classList.toggle('open', menuOpen);
        iconMenu.style.display = menuOpen ? 'none' : 'block';
        iconClose.style.display = menuOpen ? 'block' : 'none';
    });

    function closeMobile() {
        menuOpen = false;
        mobileMenu.classList.remove('open');
        iconMenu.style.display = 'block';
        iconClose.style.display = 'none';
    }

    // --- Animate on Scroll ---
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                observer.unobserve(e.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

    document.querySelectorAll('.aos').forEach(el => observer.observe(el));
</script>

</body>
</html>
