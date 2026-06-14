<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->get('meta_title', $settings->get('site_name', 'DZ Jersey Pro') . ' — Produsen Jersey Custom & Textile Printing') }}</title>
    <meta name="description" content="{{ $settings->get('meta_description', 'Produsen jersey custom, kain printing, dan hijab printing premium dengan kualitas terbaik, harga transparan, dan pengerjaan terpercaya.') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --orange: #f97316;
            --orange-dark: #ea6c0a;
            --green: #22c55e;
            --bg: #0c0c0c;
            --bg2: #141414;
            --bg3: #1a1a1a;
            --border: #2a2a2a;
            --text: #ffffff;
            --text-muted: #a0a0a0;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Barlow', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            overflow-x: hidden;
        }

        /* ─── SCROLLBAR ─── */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: var(--bg); }
        ::-webkit-scrollbar-thumb { background: var(--orange); border-radius: 3px; }

        /* ─── UTILITY ─── */
        .container { max-width: 1140px; margin: 0 auto; padding: 0 24px; }
        .section { padding: 100px 0; }
        .section-label {
            display: flex; align-items: center; gap: 12px;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 12px; font-weight: 700; letter-spacing: 0.15em;
            text-transform: uppercase; color: var(--orange);
            margin-bottom: 20px;
        }
        .section-label::before {
            content: ''; display: block;
            width: 28px; height: 2px; background: var(--orange);
        }
        h1, h2, h3, h4 {
            font-family: 'Barlow Condensed', sans-serif;
            line-height: 1.0;
        }
        .btn {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 14px 24px; font-family: 'Barlow Condensed', sans-serif;
            font-size: 15px; font-weight: 700; letter-spacing: 0.04em;
            text-transform: uppercase; text-decoration: none;
            cursor: pointer; border: none; transition: all 0.2s;
        }
        .btn-orange { background: var(--orange); color: #fff; }
        .btn-orange:hover { background: var(--orange-dark); }
        .btn-green { background: var(--green); color: #fff; }
        .btn-green:hover { background: #16a34a; }
        .btn-outline {
            background: transparent; color: #fff;
            border: 2px solid rgba(255,255,255,0.5);
        }
        .btn-outline:hover { border-color: #fff; }

        /* ─── NAVBAR ─── */
        #navbar {
            position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            background: var(--bg);
            border-bottom: 1px solid var(--border);
        }
        .navbar-inner {
            display: flex; align-items: center;
            padding: 0 24px; height: 64px; max-width: 100%;
        }
        .navbar-logo {
            display: flex; align-items: center; gap: 10px;
            text-decoration: none; margin-right: auto;
        }
        .logo-box {
            width: 36px; height: 36px; background: var(--orange);
            display: flex; align-items: center; justify-content: center;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 14px; font-weight: 900; color: #fff;
        }
        .logo-text { font-family: 'Barlow Condensed', sans-serif; }
        .logo-text .name { font-size: 15px; font-weight: 800; color: #fff; line-height: 1.1; }
        .logo-text .sub { font-size: 10px; font-weight: 500; color: var(--text-muted); letter-spacing: 0.1em; text-transform: uppercase; }
        .navbar-nav {
            display: flex; align-items: center; gap: 32px; margin-right: 32px;
        }
        .navbar-nav a {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 14px; font-weight: 600; letter-spacing: 0.05em;
            text-transform: uppercase; color: var(--text-muted);
            text-decoration: none; transition: color 0.2s;
        }
        .navbar-nav a:hover { color: #fff; }
        .navbar-cta {
            display: flex; align-items: center; gap: 8px;
            padding: 10px 18px; background: var(--orange);
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 13px; font-weight: 700; letter-spacing: 0.05em;
            text-transform: uppercase; color: #fff; text-decoration: none;
            transition: background 0.2s;
        }
        .navbar-cta:hover { background: var(--orange-dark); }
        .navbar-cta svg { width: 14px; height: 14px; }
        .hamburger {
            display: none; flex-direction: column; gap: 5px;
            background: none; border: none; cursor: pointer; padding: 4px;
        }
        .hamburger span { display: block; width: 22px; height: 2px; background: #fff; }
        .mobile-menu {
            display: none; flex-direction: column;
            background: var(--bg2); padding: 16px 24px;
            border-top: 1px solid var(--border);
        }
        .mobile-menu a {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 16px; font-weight: 700; letter-spacing: 0.05em;
            text-transform: uppercase; color: var(--text-muted);
            text-decoration: none; padding: 12px 0;
            border-bottom: 1px solid var(--border);
        }
        .mobile-menu a:hover { color: #fff; }
        .mobile-menu .btn-orange { margin-top: 16px; justify-content: center; }

        @media (max-width: 768px) {
            .navbar-nav, .navbar-cta { display: none; }
            .hamburger { display: flex; }
            .mobile-menu.open { display: flex; }
        }

        /* ─── HERO ─── */
        #hero {
            padding-top: 64px; min-height: 100vh;
            display: flex; flex-direction: column;
            background: var(--bg);
            position: relative; overflow: hidden;
        }
        .hero-machine-bg {
            position: absolute;
            top: 0; right: 0;
            width: 58%;
            bottom: 90px;
            background-size: cover;
            background-position: center left;
            -webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 25%, rgba(0,0,0,0.55) 55%, rgba(0,0,0,0.85) 100%);
            mask-image: linear-gradient(to right, transparent 0%, rgba(0,0,0,0.15) 25%, rgba(0,0,0,0.55) 55%, rgba(0,0,0,0.85) 100%);
            opacity: 0.5;
            pointer-events: none;
        }
        .hero-body {
            flex: 1; display: flex; flex-direction: column;
            justify-content: center;
            position: relative; z-index: 1;
            max-width: 1140px; margin: 0 auto; width: 100%;
            padding: 80px 24px 80px;
        }
        .hero-content {
            display: flex; flex-direction: column;
            max-width: 580px;
        }
        .hero-eyebrow {
            display: flex; align-items: center; gap: 10px;
            font-size: 11px; font-weight: 700; letter-spacing: 0.15em;
            text-transform: uppercase; color: var(--orange); margin-bottom: 28px;
        }
        .hero-eyebrow::before {
            content: ''; display: block;
            width: 28px; height: 2px; background: var(--orange);
        }
        .hero-title {
            font-size: clamp(56px, 10vw, 100px);
            font-weight: 900; line-height: 0.95;
            color: #fff; margin-bottom: 28px;
        }
        .hero-title .amp { color: var(--orange); display: block; }
        .hero-title .italic-word { font-style: italic; }
        .hero-desc {
            font-size: 16px; line-height: 1.6; color: var(--text-muted);
            max-width: 500px; margin-bottom: 40px;
        }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; }

        /* ─── CERTIFICATIONS BAR ─── */
        .cert-bar {
            border-top: 1px solid var(--border);
            padding: 20px 24px; margin-top: auto;
        }
        .cert-bar-inner {
            max-width: 1140px; margin: 0 auto;
            display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;
        }
        .cert-item {
            display: flex; align-items: center; gap: 14px;
        }
        .cert-icon {
            width: 44px; height: 44px; border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .cert-icon svg { width: 20px; height: 20px; stroke: var(--orange); fill: none; stroke-width: 1.5; }
        .cert-info { font-size: 11px; color: var(--text-muted); letter-spacing: 0.08em; text-transform: uppercase; }
        .cert-info strong { display: block; font-size: 13px; font-weight: 700; color: #fff; font-family: 'Barlow Condensed', sans-serif; }

        @media (max-width: 640px) {
            .cert-bar-inner { grid-template-columns: repeat(2, 1fr); }
        }

        /* ─── ABOUT ─── */
        #tentang { background: var(--bg); }
        .about-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;
        }
        .about-left {}
        .about-title {
            font-size: clamp(36px, 5vw, 56px);
            font-weight: 900; line-height: 1.0; margin-bottom: 24px;
        }
        .about-title .italic-word { font-style: italic; }
        .about-title .orange { color: var(--orange); }
        .about-desc {
            font-size: 15px; line-height: 1.7; color: var(--text-muted); margin-bottom: 28px;
        }
        .about-desc strong { color: #fff; }
        .about-legal-box {
            border: 1px solid var(--border); padding: 20px;
            font-size: 14px; line-height: 1.6; color: var(--text-muted);
            display: flex; gap: 16px; align-items: flex-start;
        }
        .about-legal-box svg { width: 20px; height: 20px; stroke: var(--orange); fill: none; stroke-width: 1.5; flex-shrink: 0; margin-top: 2px; }
        .about-stats {
            display: grid; grid-template-columns: 1fr 1fr; gap: 0;
            border: 1px solid var(--border); margin-top: 32px;
        }
        .stat-item {
            padding: 20px; border-right: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }
        .stat-item:nth-child(2n) { border-right: none; }
        .stat-item:nth-child(3), .stat-item:nth-child(4) { border-bottom: none; }
        .stat-icon { margin-bottom: 8px; }
        .stat-icon svg { width: 18px; height: 18px; stroke: var(--text-muted); fill: none; stroke-width: 1.5; }
        .stat-num {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 36px; font-weight: 900; color: #fff; line-height: 1;
        }
        .stat-label { font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--text-muted); margin-top: 4px; }
        .about-right { position: relative; }
        .about-img {
            width: 100%; aspect-ratio: 4/5; object-fit: cover;
            background: var(--bg3);
            display: flex; align-items: center; justify-content: center;
            color: var(--text-muted); font-size: 14px; overflow: hidden;
        }
        .about-img img { width: 100%; height: 100%; object-fit: cover; }
        .about-badge {
            position: absolute; top: 0; right: -20px;
            background: var(--orange); padding: 10px 14px;
        }
        .about-badge .label { font-size: 9px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(255,255,255,0.7); }
        .about-badge .value { font-family: 'Barlow Condensed', sans-serif; font-size: 16px; font-weight: 900; color: #fff; }
        .about-prod-box {
            position: absolute; bottom: 0; right: 0; left: 30%;
            background: rgba(0,0,0,0.92); border: 1px solid var(--border); padding: 16px 18px;
        }
        .prod-label { font-size: 10px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--orange); margin-bottom: 6px; }
        .prod-text { font-family: 'Barlow Condensed', sans-serif; font-size: 20px; font-weight: 800; color: #fff; line-height: 1.2; }

        @media (max-width: 768px) {
            .about-grid { grid-template-columns: 1fr; }
            .about-badge { right: 0; }
        }

        /* ─── LAYANAN ─── */
        #layanan { background: var(--bg); }
        .layanan-header {
            display: grid; grid-template-columns: 1fr 1fr; gap: 40px;
            align-items: end; margin-bottom: 40px;
        }
        .layanan-title {
            font-size: clamp(36px, 5vw, 58px);
            font-weight: 900; line-height: 1.0;
        }
        .layanan-title .italic-word { font-style: italic; }
        .layanan-title .orange { color: var(--orange); }
        .layanan-desc { font-size: 15px; line-height: 1.7; color: var(--text-muted); }
        .layanan-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 4px;
        }
        .layanan-card {
            position: relative; overflow: hidden;
            aspect-ratio: 1/1; cursor: pointer;
            background: var(--bg3);
        }
        .layanan-card.wide { grid-column: span 2; aspect-ratio: 2/1; }
        .layanan-card img { width: 100%; height: 100%; object-fit: cover; filter: brightness(0.55); transition: all 0.4s; }
        .layanan-card:hover img { filter: brightness(0.4); transform: scale(1.03); }
        .layanan-card-img-placeholder {
            width: 100%; height: 100%;
            background: linear-gradient(135deg, var(--bg3) 0%, #222 100%);
        }
        .layanan-card-top {
            position: absolute; top: 14px; left: 14px; right: 14px;
            display: flex; justify-content: space-between; align-items: flex-start;
        }
        .layanan-card-tag {
            font-size: 10px; font-weight: 700; letter-spacing: 0.12em;
            text-transform: uppercase; color: var(--orange);
        }
        .layanan-card-link {
            width: 28px; height: 28px; border: 1px solid rgba(255,255,255,0.3);
            display: flex; align-items: center; justify-content: center;
        }
        .layanan-card-link svg { width: 14px; height: 14px; stroke: #fff; fill: none; stroke-width: 2; }
        .layanan-card-bottom {
            position: absolute; bottom: 0; left: 0; right: 0; padding: 16px;
        }
        .layanan-card-name {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 26px; font-weight: 900; color: #fff; margin-bottom: 6px;
        }
        .layanan-card-sub { font-size: 13px; color: rgba(255,255,255,0.7); }
        .layanan-card-checks { list-style: none; margin-top: 8px; }
        .layanan-card-checks li {
            font-size: 12px; color: rgba(255,255,255,0.8);
            display: flex; align-items: center; gap: 6px; margin-bottom: 3px;
        }
        .layanan-card-checks li::before {
            content: '✓'; color: var(--orange); font-weight: 700;
        }
        .layanan-wa {
            margin-top: 24px;
            display: inline-flex; align-items: center; gap: 8px;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 14px; font-weight: 700; letter-spacing: 0.08em;
            text-transform: uppercase; color: var(--text-muted);
            text-decoration: none; transition: color 0.2s;
        }
        .layanan-wa svg { width: 14px; height: 14px; stroke: currentColor; fill: none; stroke-width: 2; }
        .layanan-wa:hover { color: #fff; }

        @media (max-width: 768px) {
            .layanan-header { grid-template-columns: 1fr; }
            .layanan-grid { grid-template-columns: 1fr; }
            .layanan-card.wide { grid-column: span 1; aspect-ratio: 4/3; }
            .layanan-card { aspect-ratio: 4/3; }
        }

        /* ─── KALKULATOR ─── */
        #kalkulator { background: var(--bg); }
        .kalk-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start;
        }
        .kalk-title {
            font-size: clamp(36px, 5vw, 58px);
            font-weight: 900; line-height: 1.0; margin-bottom: 20px;
        }
        .kalk-title .orange { color: var(--orange); }
        .kalk-desc { font-size: 15px; line-height: 1.6; color: var(--text-muted); margin-bottom: 28px; }
        .kalk-features { list-style: none; }
        .kalk-features li {
            display: flex; align-items: flex-start; gap: 14px;
            margin-bottom: 16px; font-size: 14px; color: var(--text-muted);
        }
        .kalk-features li .icon {
            width: 32px; height: 32px; border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .kalk-features li .icon svg { width: 16px; height: 16px; stroke: var(--orange); fill: none; stroke-width: 1.5; }
        .kalk-box {
            border: 1px solid var(--border); padding: 32px;
            background: var(--bg2);
        }
        .kalk-tabs {
            display: flex; gap: 4px; margin-bottom: 28px; background: var(--bg3); padding: 4px;
        }
        .kalk-tab {
            flex: 1; padding: 10px 6px; text-align: center;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 13px; font-weight: 700; letter-spacing: 0.05em;
            text-transform: uppercase; color: var(--text-muted);
            cursor: pointer; border: none; background: transparent;
            transition: all 0.2s;
        }
        .kalk-tab.active { background: var(--orange); color: #fff; }
        .kalk-field { margin-bottom: 24px; }
        .kalk-field label {
            display: block; font-size: 11px; font-weight: 700;
            letter-spacing: 0.1em; text-transform: uppercase;
            color: var(--text-muted); margin-bottom: 10px;
        }
        .kalk-select {
            width: 100%; padding: 12px 16px;
            background: var(--bg3); border: 1px solid var(--border);
            color: #fff; font-size: 14px; font-family: 'Barlow', sans-serif;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23f97316' stroke-width='2'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 12px center;
        }
        .kalk-qty-header {
            display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;
        }
        .kalk-qty-val {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 24px; font-weight: 900; color: var(--orange);
        }
        .kalk-slider {
            width: 100%; height: 4px; appearance: none;
            background: var(--border); outline: none;
        }
        .kalk-slider::-webkit-slider-thumb {
            appearance: none; width: 18px; height: 18px;
            border-radius: 50%; background: var(--orange); cursor: pointer;
        }
        .kalk-slider-labels {
            display: flex; justify-content: space-between;
            font-size: 11px; color: var(--text-muted); margin-top: 6px;
        }
        .kalk-result {
            display: none; margin-bottom: 24px;
            background: var(--bg3); border: 1px solid var(--border); padding: 20px;
        }
        .kalk-result.show { display: block; }
        .kalk-result .result-label { font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--text-muted); margin-bottom: 6px; }
        .kalk-result .result-price { font-family: 'Barlow Condensed', sans-serif; font-size: 32px; font-weight: 900; color: var(--orange); }
        .kalk-result .result-note { font-size: 12px; color: var(--text-muted); margin-top: 4px; }
        .kalk-btn {
            width: 100%; padding: 14px;
            background: var(--orange); border: none; cursor: pointer;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 16px; font-weight: 800; letter-spacing: 0.08em;
            text-transform: uppercase; color: #fff;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            transition: background 0.2s;
        }
        .kalk-btn:hover { background: var(--orange-dark); }
        .kalk-btn svg { width: 18px; height: 18px; stroke: currentColor; fill: none; stroke-width: 2; }

        @media (max-width: 768px) {
            .kalk-grid { grid-template-columns: 1fr; }
        }

        /* ─── MATERIAL ─── */
        #material { background: var(--bg); overflow: hidden; }
        .marquee-wrap { overflow: hidden; margin: 40px 0; position: relative; }
        .marquee-track {
            display: flex; width: max-content;
            animation: marquee 20s linear infinite;
        }
        .marquee-track:hover { animation-play-state: paused; }
        .marquee-item {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: clamp(60px, 8vw, 100px); font-weight: 900;
            white-space: nowrap; padding-right: 40px;
            color: transparent; -webkit-text-stroke: 1.5px rgba(255,255,255,0.25);
        }
        .marquee-item.orange { -webkit-text-stroke: 1.5px var(--orange); }
        .marquee-dot {
            width: 14px; height: 14px; border-radius: 50%;
            background: var(--orange); flex-shrink: 0; margin-right: 32px;
            align-self: center;
        }
        .marquee-wrap.reverse .marquee-track { animation-direction: reverse; }
        .marquee-track-2 { animation-duration: 25s; }
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }

        .material-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px;
            border: 1px solid var(--border); margin-top: 60px;
        }
        .material-card {
            padding: 28px 24px; border-right: 1px solid var(--border);
            border-bottom: 1px solid var(--border); position: relative;
        }
        .material-card:nth-child(3n) { border-right: none; }
        .material-card:nth-last-child(-n+3) { border-bottom: none; }
        .material-num {
            position: absolute; top: 20px; right: 20px;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 13px; font-weight: 700; color: var(--border);
        }
        .material-cat {
            font-size: 10px; font-weight: 700; letter-spacing: 0.12em;
            text-transform: uppercase; color: var(--orange); margin-bottom: 10px;
        }
        .material-name {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 28px; font-weight: 900; margin-bottom: 10px;
        }
        .material-desc { font-size: 13px; line-height: 1.5; color: var(--text-muted); margin-bottom: 20px; min-height: 50px; }
        .material-price-row {
            display: flex; justify-content: space-between; align-items: flex-end;
            border-top: 1px solid var(--border); padding-top: 16px;
        }
        .material-mulai { font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--text-muted); }
        .material-price {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 20px; font-weight: 900; color: var(--orange);
        }
        .material-price span { font-size: 12px; font-weight: 500; color: var(--text-muted); }

        @media (max-width: 768px) {
            .material-grid { grid-template-columns: 1fr 1fr; }
            .material-card:nth-child(3n) { border-right: 1px solid var(--border); }
            .material-card:nth-child(2n) { border-right: none; }
        }
        @media (max-width: 480px) {
            .material-grid { grid-template-columns: 1fr; }
            .material-card { border-right: none !important; }
        }

        /* ─── PORTFOLIO ─── */
        #portfolio { background: var(--bg); }
        .portfolio-header {
            display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; flex-wrap: wrap; gap: 20px;
        }
        .portfolio-title {
            font-size: clamp(36px, 5vw, 56px);
            font-weight: 900; line-height: 1.0;
        }
        .portfolio-title .italic-word { font-style: italic; }
        .portfolio-title .orange { color: var(--orange); }
        .portfolio-ig {
            display: inline-flex; align-items: center; gap: 8px;
            border: 1px solid var(--border); padding: 10px 14px;
            text-decoration: none; color: var(--text-muted);
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 13px; font-weight: 600; letter-spacing: 0.05em;
            text-transform: uppercase; transition: all 0.2s;
        }
        .portfolio-ig:hover { border-color: var(--orange); color: #fff; }
        .portfolio-ig svg { width: 14px; height: 14px; stroke: currentColor; fill: none; stroke-width: 2; }
        .portfolio-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 4px;
        }
        .portfolio-card {
            position: relative; overflow: hidden;
            background: var(--bg3);
        }
        .portfolio-card.large { grid-row: span 2; }
        .portfolio-card img {
            width: 100%; height: 100%; object-fit: cover;
            display: block; filter: brightness(0.7); transition: all 0.4s;
        }
        .portfolio-card:hover img { filter: brightness(0.5); transform: scale(1.03); }
        .portfolio-card-ph {
            width: 100%; height: 280px;
            background: linear-gradient(135deg, var(--bg3) 0%, #222 100%);
        }
        .portfolio-card.large .portfolio-card-ph { height: 568px; }
        .portfolio-card-info {
            position: absolute; bottom: 0; left: 0; right: 0;
            padding: 14px 16px;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, transparent 100%);
        }
        .portfolio-card-cat {
            font-size: 10px; font-weight: 700; letter-spacing: 0.12em;
            text-transform: uppercase; color: var(--orange); margin-bottom: 4px;
        }
        .portfolio-card-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 16px; font-weight: 800; color: #fff;
        }

        @media (max-width: 768px) {
            .portfolio-grid { grid-template-columns: 1fr 1fr; }
            .portfolio-card.large { grid-row: span 1; }
        }
        @media (max-width: 480px) {
            .portfolio-grid { grid-template-columns: 1fr; }
        }

        /* ─── TESTIMONI ─── */
        #testimoni { background: var(--bg); }
        .testi-title {
            font-size: clamp(36px, 5vw, 54px);
            font-weight: 900; line-height: 1.0; margin-bottom: 48px;
        }
        .testi-grid {
            display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;
        }
        .testi-card {
            border: 1px solid var(--border); padding: 24px;
            transition: border-color 0.2s;
        }
        .testi-card:hover { border-color: var(--orange); }
        .testi-quote {
            font-size: 28px; color: var(--orange); margin-bottom: 16px;
            font-family: 'Barlow Condensed', sans-serif; font-weight: 900; line-height: 1;
        }
        .testi-text {
            font-size: 13px; line-height: 1.6; color: var(--text-muted); margin-bottom: 16px;
        }
        .testi-stars { color: #f59e0b; font-size: 14px; margin-bottom: 16px; }
        .testi-name {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 16px; font-weight: 800; color: #fff;
        }
        .testi-role { font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--text-muted); }

        @media (max-width: 900px) { .testi-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 540px) { .testi-grid { grid-template-columns: 1fr; } }

        /* ─── AREA LAYANAN ─── */
        #area { background: var(--bg); border-top: 1px solid var(--border); }
        .area-header {
            display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: end; margin-bottom: 40px;
        }
        .area-title {
            font-size: clamp(36px, 5vw, 56px); font-weight: 900; line-height: 1.0;
        }
        .area-title .orange { color: var(--orange); }
        .area-desc { font-size: 14px; line-height: 1.6; color: var(--text-muted); }
        .area-group { margin-bottom: 28px; }
        .area-group-label {
            font-size: 11px; font-weight: 700; letter-spacing: 0.12em;
            text-transform: uppercase; color: var(--text-muted);
            margin-bottom: 12px;
        }
        .area-tags { display: flex; flex-wrap: wrap; gap: 8px; }
        .area-tag {
            display: inline-flex; align-items: center; gap: 6px;
            border: 1px solid var(--border); padding: 7px 12px;
            font-size: 13px; color: var(--text-muted);
            text-decoration: none; transition: all 0.2s; cursor: pointer;
        }
        .area-tag svg { width: 12px; height: 12px; stroke: var(--orange); fill: none; stroke-width: 2; }
        .area-tag:hover { border-color: var(--orange); color: #fff; }

        @media (max-width: 768px) { .area-header { grid-template-columns: 1fr; } }

        /* ─── KEPERCAYAAN ─── */
        #kepercayaan { background: var(--bg); border-top: 1px solid var(--border); }
        .trust-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;
        }
        .trust-title {
            font-size: clamp(36px, 5vw, 52px); font-weight: 900; line-height: 1.0; margin-bottom: 16px;
        }
        .trust-title .orange { color: var(--orange); }
        .trust-desc { font-size: 14px; line-height: 1.6; color: var(--text-muted); margin-bottom: 28px; }
        .trust-actions { display: flex; gap: 12px; flex-wrap: wrap; }
        .trust-features {
            display: grid; grid-template-columns: 1fr 1fr; gap: 0;
            border: 1px solid var(--border);
        }
        .trust-feature {
            padding: 24px; border-right: 1px solid var(--border); border-bottom: 1px solid var(--border);
        }
        .trust-feature:nth-child(2n) { border-right: none; }
        .trust-feature:nth-last-child(-n+2) { border-bottom: none; }
        .trust-feature-icon {
            width: 40px; height: 40px; border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center; margin-bottom: 14px;
        }
        .trust-feature-icon svg { width: 18px; height: 18px; stroke: var(--orange); fill: none; stroke-width: 1.5; }
        .trust-feature-name {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 18px; font-weight: 800; margin-bottom: 6px;
        }
        .trust-feature-desc { font-size: 13px; line-height: 1.5; color: var(--text-muted); }
        .djki-banner {
            grid-column: span 2; background: var(--orange); padding: 28px 32px;
            display: flex; align-items: center; gap: 24px; margin-top: 4px;
        }
        .djki-icon { width: 48px; height: 48px; flex-shrink: 0; }
        .djki-icon svg { width: 100%; height: 100%; stroke: #fff; fill: none; stroke-width: 1.5; }
        .djki-text .label { font-size: 11px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(255,255,255,0.7); margin-bottom: 4px; }
        .djki-text .title { font-family: 'Barlow Condensed', sans-serif; font-size: 22px; font-weight: 900; color: #fff; line-height: 1.2; margin-bottom: 4px; }
        .djki-text .sub { font-size: 13px; color: rgba(255,255,255,0.7); }

        @media (max-width: 768px) {
            .trust-grid { grid-template-columns: 1fr; }
            .djki-banner { grid-column: span 2; }
        }

        /* ─── KONTAK ─── */
        #kontak { background: var(--bg); border-top: 1px solid var(--border); }
        .kontak-title {
            font-size: clamp(48px, 8vw, 90px); font-weight: 900; line-height: 0.95; margin-bottom: 32px;
        }
        .kontak-title .italic-word { font-style: italic; }
        .kontak-title .orange { color: var(--orange); }
        .kontak-desc { font-size: 15px; line-height: 1.6; color: var(--text-muted); max-width: 500px; margin-bottom: 48px; }
        .kontak-wa-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 4px; margin-bottom: 4px;
        }
        .kontak-wa {
            border: 1px solid var(--border); padding: 24px;
            text-decoration: none; display: flex; flex-direction: column; gap: 12px;
            position: relative; transition: border-color 0.2s;
        }
        .kontak-wa:hover { border-color: var(--orange); }
        .kontak-wa .wa-icon {
            width: 40px; height: 40px; background: var(--green);
            display: flex; align-items: center; justify-content: center;
        }
        .kontak-wa .wa-icon svg { width: 20px; height: 20px; fill: #fff; }
        .kontak-wa .arrow {
            position: absolute; top: 20px; right: 20px;
            width: 24px; height: 24px; border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
        }
        .kontak-wa .arrow svg { width: 12px; height: 12px; stroke: var(--text-muted); fill: none; stroke-width: 2; }
        .kontak-wa .cat { font-size: 10px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--orange); }
        .kontak-wa .wa-name { font-family: 'Barlow Condensed', sans-serif; font-size: 24px; font-weight: 900; color: #fff; }
        .kontak-wa .wa-num { font-size: 13px; color: var(--text-muted); }
        .kontak-info-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 0;
            border: 1px solid var(--border);
        }
        .kontak-info-item {
            padding: 24px; border-right: 1px solid var(--border);
            display: flex; flex-direction: column; gap: 10px;
        }
        .kontak-info-item:last-child { border-right: none; }
        .kontak-info-icon { width: 24px; height: 24px; }
        .kontak-info-icon svg { width: 100%; height: 100%; stroke: var(--orange); fill: none; stroke-width: 1.5; }
        .kontak-info-cat { font-size: 10px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--text-muted); }
        .kontak-info-val {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 18px; font-weight: 800; color: #fff; text-decoration: none;
        }
        .kontak-info-val:hover { color: var(--orange); }
        .kontak-info-sub { font-size: 12px; color: var(--text-muted); }
        .kontak-bottom {
            display: flex; justify-content: space-between; align-items: center;
            border: 1px solid var(--border); border-top: none; padding: 20px 24px;
            flex-wrap: wrap; gap: 16px;
        }
        .kontak-bottom-text .title {
            font-family: 'Barlow Condensed', sans-serif; font-size: 20px; font-weight: 800; color: #fff;
        }
        .kontak-bottom-text .sub { font-size: 13px; color: var(--text-muted); }

        @media (max-width: 768px) {
            .kontak-wa-grid { grid-template-columns: 1fr; }
            .kontak-info-grid { grid-template-columns: 1fr; }
            .kontak-info-item { border-right: none; border-bottom: 1px solid var(--border); }
            .kontak-info-item:last-child { border-bottom: none; }
        }

        /* ─── FOOTER ─── */
        footer {
            border-top: 1px solid var(--border);
            padding: 20px 24px;
            display: flex; justify-content: space-between; align-items: center;
            flex-wrap: wrap; gap: 12px; background: var(--bg);
        }
        footer .copy { font-size: 12px; color: var(--text-muted); letter-spacing: 0.05em; }
        footer .tags { font-size: 12px; color: var(--text-muted); letter-spacing: 0.1em; text-transform: uppercase; }

        /* ─── SMOOTH ANIMATIONS ─── */
        .fade-in { opacity: 0; transform: translateY(20px); transition: opacity 0.6s, transform 0.6s; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body>

@php
    $waJersey = $settings->get('wa_jersey', '6281382805858');
    $waHijab  = $settings->get('wa_hijab',  '6282345556927');
    $siteName = $settings->get('site_name',  'DZ Jersey Pro');
    $instagram = $settings->get('instagram', 'dzscarve');
    $email     = $settings->get('email',     'cs@dzjerseypro.co.id');
    $mapsUrl   = $settings->get('maps_url',  'https://maps.google.com');
    $heroMachineImg = $settings->get('hero_machine_image');
@endphp

<!-- ═══════════════════════════════════════════════════
     NAVBAR
═══════════════════════════════════════════════════ -->
<header id="navbar">
    <nav class="navbar-inner">
        <a href="#" class="navbar-logo">
            <div class="logo-box">DZ</div>
            <div class="logo-text">
                <div class="name">{{ $siteName }}</div>
                <div class="sub">Double Z Scarve</div>
            </div>
        </a>
        <div class="navbar-nav">
            <a href="#tentang">Tentang Kami</a>
            <a href="#layanan">Layanan</a>
            <a href="#kalkulator">Kalkulator</a>
            <a href="#material">Material</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#kontak">Kontak</a>
        </div>
        <a href="https://wa.me/{{ $waJersey }}" target="_blank" class="navbar-cta">
            Request Penawaran
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </a>
        <button class="hamburger" id="hamburgerBtn" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </nav>
    <div class="mobile-menu" id="mobileMenu">
        <a href="#tentang">Tentang Kami</a>
        <a href="#layanan">Layanan</a>
        <a href="#kalkulator">Kalkulator</a>
        <a href="#material">Material</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#kontak">Kontak</a>
        <a href="https://wa.me/{{ $waJersey }}" target="_blank" class="btn btn-orange">Request Penawaran</a>
    </div>
</header>

<!-- ═══════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section id="hero">
    <div class="hero-machine-bg" style="background-image: url('{{ $heroMachineImg ? asset('storage/' . $heroMachineImg) : asset('images/hero-mesin-cetak.png') }}');"></div>
    <div class="hero-body">
        <div class="hero-content">
            <div class="hero-eyebrow">{{ $hero?->eyebrow ?? 'Sejak 2017 · Produsen Resmi · Indonesia' }}</div>
            <h1 class="hero-title">
                {{ $hero?->title_line1 ?? 'Produsen Jersey Custom' }}<br>
                <span class="amp">&amp;</span>
                {{ $hero?->title_line2 ?? 'Textile Printing' }}<br>
                <span class="italic-word">{{ $hero?->title_line3 ?? 'Berkualitas.' }}</span>
            </h1>
            <p class="hero-desc">
                {{ $hero?->description ?? 'Melayani produksi jersey custom, kain printing, dan hijab printing premium dengan kualitas terbaik, harga transparan, dan pengerjaan terpercaya.' }}
            </p>
            <div class="hero-actions">
                <a href="{{ $hero?->btn1_url ?? 'https://wa.me/' . $waJersey }}" target="_blank" class="btn btn-green">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.998 2C6.477 2 2 6.477 2 12c0 1.989.58 3.842 1.582 5.402L2 22l4.744-1.546A9.96 9.96 0 0011.998 22c5.523 0 10-4.477 10-10S17.521 2 11.998 2zm0 18.198a8.19 8.19 0 01-4.187-1.148l-.299-.178-3.108 1.015 1.039-3.008-.196-.31A8.196 8.196 0 013.8 12c0-4.519 3.679-8.198 8.198-8.198S20.196 7.481 20.196 12c0 4.519-3.679 8.198-8.198 8.198z"/></svg>
                    {{ $hero?->btn1_label ?? 'Konsultasi Sekarang' }}
                </a>
                <a href="{{ $hero?->btn2_url ?? 'https://wa.me/' . $waJersey }}" target="_blank" class="btn btn-orange">
                    {{ $hero?->btn2_label ?? 'Request Penawaran' }}
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="{{ $hero?->btn3_url ?? '#portfolio' }}" class="btn btn-outline">{{ $hero?->btn3_label ?? 'Lihat Portfolio' }}</a>
            </div>
        </div>
    </div>

    {{-- ── Cert Bar (Trust Features dari DB, fallback ke statis) ── --}}
    <div class="cert-bar">
        <div class="cert-bar-inner">
            @forelse($trustFeatures->take(4) as $tf)
            <div class="cert-item">
                <div class="cert-icon">
                    <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div class="cert-info">
                    Sertifikasi <strong>{{ $tf->judul }}</strong>
                </div>
            </div>
            @empty
            <div class="cert-item">
                <div class="cert-icon"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                <div class="cert-info">Sertifikasi <strong>Terdaftar DJKI</strong></div>
            </div>
            <div class="cert-item">
                <div class="cert-icon"><svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
                <div class="cert-info">Sertifikasi <strong>Workshop Sendiri</strong></div>
            </div>
            <div class="cert-item">
                <div class="cert-icon"><svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <div class="cert-info">Sertifikasi <strong>Amanah &amp; Bergaransi</strong></div>
            </div>
            <div class="cert-item">
                <div class="cert-icon"><svg viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="11" r="3"/></svg></div>
                <div class="cert-info">Sertifikasi <strong>Seluruh Indonesia</strong></div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     TENTANG KAMI
═══════════════════════════════════════════════════ -->
<section id="tentang" class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-left">
                <div class="section-label">Tentang Kami</div>
                <h2 class="about-title">
                    Amanah, <span class="italic-word">legal</span>, dan<br>
                    <span class="orange">terpercaya</span> sejak hari<br>
                    pertama.
                </h2>
                <p class="about-desc">
                    <strong>DZ Jersey Pro</strong> &amp; <strong>Double Z Scarve</strong> adalah rumah produksi yang fokus pada
                    tiga hal: kualitas material premium, pengerjaan rapi, dan komitmen
                    amanah pada setiap pesanan — besar maupun kecil.
                </p>
                <div class="about-legal-box">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                    <p>Merek hijab kami telah memiliki izin resmi dan terdaftar secara legal
                    di <strong>Direktorat Jenderal Kekayaan Intelektual (DJKI / Dirjen HAKI)</strong>,
                    sebagai bentuk komitmen terhadap keaslian brand dan kepercayaan pelanggan.</p>
                </div>

                {{-- ── Statistik dari DB ── --}}
                <div class="about-stats">
                    @forelse($statistics->take(4) as $stat)
                    <div class="stat-item">
                        <div class="stat-icon">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        </div>
                        <div class="stat-num">{{ $stat->nilai }}</div>
                        <div class="stat-label">{{ $stat->label }}</div>
                    </div>
                    @empty
                    <div class="stat-item">
                        <div class="stat-icon"><svg viewBox="0 0 24 24"><circle cx="9" cy="7" r="4"/><path d="M3 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/></svg></div>
                        <div class="stat-num">10.000+</div>
                        <div class="stat-label">Jersey Diproduksi</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                        <div class="stat-num">800+</div>
                        <div class="stat-label">Klien Amanah</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                        <div class="stat-num">7+ thn</div>
                        <div class="stat-label">Pengalaman</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                        <div class="stat-num">DJKI</div>
                        <div class="stat-label">Brand Terdaftar</div>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="about-right">
                <div class="about-badge">
                    <div class="label">Legalitas</div>
                    <div class="value">TERDAFTAR DJKI</div>
                </div>
                <div class="about-img" style="height: 520px;">
                    @php $aboutImg = $settings->get('about_image'); @endphp
                    <img src="{{ $aboutImg ? asset('storage/' . $aboutImg) : asset('images/about-workshop.png') }}" alt="Workshop & Produksi {{ $siteName }}">
                </div>
                <div class="about-prod-box">
                    <div class="prod-label">Produksi Sendiri</div>
                    <div class="prod-text">100% diproduksi di<br>workshop sendiri —<br>bukan reseller.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     LAYANAN
═══════════════════════════════════════════════════ -->
<section id="layanan" class="section" style="padding-top: 0;">
    <div class="container">
        <div class="layanan-header">
            <div>
                <div class="section-label">Layanan Kami</div>
                <h2 class="layanan-title">
                    Tiga layanan, <span class="italic-word">satu</span><br>
                    <span class="orange">standar premium.</span>
                </h2>
            </div>
            <p class="layanan-desc">
                Semua proses dikerjakan di workshop kami — mulai dari
                desain, cutting, printing, hingga packaging. Transparan dan
                bisa Anda lihat langsung.
            </p>
        </div>

        <div class="layanan-grid">
            @forelse($layanan as $item)
            <div class="layanan-card {{ $item->is_wide ? 'wide' : '' }}">
                @if($item->foto_url)
                    <img src="{{ $item->foto_url }}" alt="{{ $item->nama }}"
                         style="width:100%;height:100%;{{ $item->is_wide ? 'min-height:340px;' : 'min-height:170px;' }}object-fit:cover;filter:brightness(0.55);">
                @else
                    <div class="layanan-card-img-placeholder"></div>
                @endif
                <div class="layanan-card-top">
                    <span class="layanan-card-tag">{{ $item->tag }}</span>
                    @if(!$item->is_wide)
                    <div class="layanan-card-link">
                        <svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </div>
                    @endif
                </div>
                <div class="layanan-card-bottom">
                    <div class="layanan-card-name">{{ $item->nama }}</div>
                    @if($item->deskripsi && !$item->is_wide)
                        <div class="layanan-card-sub">{{ $item->deskripsi }}</div>
                    @endif
                    @if($item->checklist && count($item->checklist) > 0)
                    <ul class="layanan-card-checks">
                        @foreach($item->checklist as $check)
                        <li>{{ $check['item'] ?? $check }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            @empty
            {{-- Fallback statis jika belum ada data --}}
            <div class="layanan-card wide">
                <img src="{{ asset('images/layanan-jersey-custom.png') }}" alt="Custom Jersey" style="width:100%;height:100%;min-height:340px;object-fit:cover;filter:brightness(0.55);">
                <div class="layanan-card-top"><span class="layanan-card-tag">Full Print Sublimasi</span></div>
                <div class="layanan-card-bottom">
                    <div class="layanan-card-name">Custom Jersey</div>
                    <ul class="layanan-card-checks">
                        <li>Jersey Sepak Bola / Futsal</li>
                        <li>Jersey Basket &amp; E-Sport</li>
                        <li>Jersey Lari / Gowes / Komunitas</li>
                        <li>Free desain revisi sampai deal</li>
                    </ul>
                </div>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('images/layanan-textile-printing.png') }}" alt="Textile Printing" style="width:100%;height:100%;min-height:170px;object-fit:cover;filter:brightness(0.55);">
                <div class="layanan-card-top">
                    <span class="layanan-card-tag">Kain Meteran</span>
                    <div class="layanan-card-link"><svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
                </div>
                <div class="layanan-card-bottom">
                    <div class="layanan-card-name">Textile Printing</div>
                    <div class="layanan-card-sub">Sublimation &amp; DTG · Print kain roll / lembaran</div>
                </div>
            </div>
            <div class="layanan-card">
                <img src="{{ asset('images/layanan-hijab-printing.png') }}" alt="Hijab Printing" style="width:100%;height:100%;min-height:170px;object-fit:cover;filter:brightness(0.55);">
                <div class="layanan-card-top">
                    <span class="layanan-card-tag">Hijab Terpercaya</span>
                    <div class="layanan-card-link"><svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
                </div>
                <div class="layanan-card-bottom">
                    <div class="layanan-card-name">Hijab Printing Custom</div>
                    <div class="layanan-card-sub">Voal, Satin Velvet, Ceruti · Jahitan neci / laser cut</div>
                </div>
            </div>
            @endforelse
        </div>

        <a href="https://wa.me/{{ $waJersey }}" target="_blank" class="layanan-wa">
            Tanya via WhatsApp
            <svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </a>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     KALKULATOR
═══════════════════════════════════════════════════ -->
<section id="kalkulator" class="section">
    <div class="container">
        <div class="kalk-grid">
            <div>
                <div class="section-label">Kalkulator Harga Instan</div>
                <h2 class="kalk-title">
                    Cek <span class="orange">estimasi</span> harga<br>sebelum chat.
                </h2>
                <p class="kalk-desc">
                    Pilih jenis layanan, bahan, dan jumlah pcs — kami beri angka
                    estimasi transparan. Makin banyak qty, makin hemat.
                </p>
                <ul class="kalk-features">
                    <li>
                        <div class="icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                        <span>Transparan — harga per bahan sesuai kebutuhan</span>
                    </li>
                    <li>
                        <div class="icon"><svg viewBox="0 0 24 24"><path d="M20 12V22H4V12"/><path d="M22 7H2v5h20V7z"/><path d="M12 22V7"/><path d="M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z"/></svg></div>
                        <span>Diskon otomatis untuk 24 / 50 / 100+ pcs</span>
                    </li>
                    <li>
                        <div class="icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
                        <span>Harga final setelah konfirmasi desain &amp; finishing</span>
                    </li>
                </ul>
            </div>
            <div class="kalk-box">
                <div class="kalk-field">
                    <label>Jenis Layanan</label>
                    <div class="kalk-tabs">
                        <button class="kalk-tab active" data-service="jersey" onclick="switchService(this)">Custom Jersey</button>
                        <button class="kalk-tab" data-service="textile" onclick="switchService(this)">Textile Printing</button>
                        <button class="kalk-tab" data-service="hijab" onclick="switchService(this)">Hijab Printing</button>
                    </div>
                </div>
                <div class="kalk-field">
                    <label>Pilih Bahan</label>
                    <select class="kalk-select" id="kalkBahan" onchange="updateEstimasi()">
                    </select>
                </div>
                <div class="kalk-field">
                    <label>
                        <div class="kalk-qty-header">
                            <span>Jumlah (pcs)</span>
                            <span class="kalk-qty-val" id="qtyVal">24</span>
                        </div>
                    </label>
                    <input type="range" class="kalk-slider" id="kalkSlider"
                        min="1" max="200" value="24" oninput="updateQty(this.value)">
                    <div class="kalk-slider-labels">
                        <span>1</span><span>24</span><span>50</span><span>100</span><span>200+</span>
                    </div>
                </div>
                <div class="kalk-result" id="kalkResult">
                    <div class="result-label">Estimasi Total Harga</div>
                    <div class="result-price" id="resultPrice">Rp 0</div>
                    <div class="result-note" id="resultNote"></div>
                </div>
                <button class="kalk-btn" onclick="hitungEstimasi()">
                    Hitung Estimasi
                    <svg viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="12" y2="14"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     MATERIAL
═══════════════════════════════════════════════════ -->
<section id="material" class="section">
    <div class="container">
        <div class="section-label">Katalog Bahan</div>
        <h2 style="font-size: clamp(36px,5vw,56px); font-weight:900; line-height:1;">
            Material pilihan <span style="color:var(--orange)">terbaik</span><br>
            untuk tiap kebutuhan.
        </h2>
    </div>

    {{-- ── Marquee Row 1 (nama-nama material dari DB) ── --}}
    <div class="marquee-wrap" style="margin-top: 40px;">
        <div class="marquee-track">
            @forelse($materials->take(6) as $mat)
                <span class="marquee-item">{{ $mat->nama }}</span>
                <span class="marquee-dot"></span>
            @empty
                <span class="marquee-item">Satin Velvet</span>
                <span class="marquee-dot"></span>
                <span class="marquee-item">Voal Premium</span>
                <span class="marquee-dot"></span>
                <span class="marquee-item">Dry Fit</span>
                <span class="marquee-dot"></span>
            @endforelse
            {{-- Duplikat untuk efek infinite scroll --}}
            @forelse($materials->take(6) as $mat)
                <span class="marquee-item">{{ $mat->nama }}</span>
                <span class="marquee-dot"></span>
            @empty
                <span class="marquee-item">Satin Velvet</span>
                <span class="marquee-dot"></span>
                <span class="marquee-item">Voal Premium</span>
                <span class="marquee-dot"></span>
                <span class="marquee-item">Dry Fit</span>
                <span class="marquee-dot"></span>
            @endforelse
        </div>
    </div>

    {{-- ── Marquee Row 2 (material lanjutan, warna orange) ── --}}
    <div class="marquee-wrap reverse" style="margin-bottom: 60px;">
        <div class="marquee-track marquee-track-2">
            @forelse($materials->skip(6)->take(6) as $mat)
                <span class="marquee-item orange">{{ $mat->nama }}</span>
                <span class="marquee-dot"></span>
            @empty
                <span class="marquee-item orange">Milano</span>
                <span class="marquee-dot"></span>
                <span class="marquee-item orange">Ceruti Babydoll</span>
                <span class="marquee-dot"></span>
                <span class="marquee-item orange">Paragon</span>
                <span class="marquee-dot"></span>
            @endforelse
            @forelse($materials->skip(6)->take(6) as $mat)
                <span class="marquee-item orange">{{ $mat->nama }}</span>
                <span class="marquee-dot"></span>
            @empty
                <span class="marquee-item orange">Milano</span>
                <span class="marquee-dot"></span>
                <span class="marquee-item orange">Ceruti Babydoll</span>
                <span class="marquee-dot"></span>
                <span class="marquee-item orange">Paragon</span>
                <span class="marquee-dot"></span>
            @endforelse
        </div>
    </div>

    {{-- ── Material Grid ── --}}
    <div class="container">
        <div class="material-grid">
            @forelse($materials as $i => $mat)
            <div class="material-card">
                <div class="material-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                <div class="material-cat">{{ ucfirst($mat->kategori) }}</div>
                <div class="material-name">{{ $mat->nama }}</div>
                <div class="material-desc">{{ $mat->deskripsi ?? 'Material premium pilihan untuk kebutuhan printing Anda.' }}</div>
                <div class="material-price-row">
                    <div class="material-mulai">Mulai</div>
                    <div class="material-price">{{ $mat->harga_format }}<span>/pcs</span></div>
                </div>
            </div>
            @empty
            {{-- Fallback statis --}}
            <div class="material-card">
                <div class="material-num">01</div>
                <div class="material-cat">Jersey</div>
                <div class="material-name">Dry Fit</div>
                <div class="material-desc">Ringan, cepat kering, sirkulasi udara maksimal — favorit tim sepak bola &amp; futsal.</div>
                <div class="material-price-row">
                    <div class="material-mulai">Mulai</div>
                    <div class="material-price">Rp 65.000<span>/pcs</span></div>
                </div>
            </div>
            <div class="material-card">
                <div class="material-num">02</div>
                <div class="material-cat">Jersey Premium</div>
                <div class="material-name">Milano</div>
                <div class="material-desc">Halus, jatuh bagus, warna sablon tajam — kelas turnamen &amp; klub pro.</div>
                <div class="material-price-row">
                    <div class="material-mulai">Mulai</div>
                    <div class="material-price">Rp 85.000<span>/pcs</span></div>
                </div>
            </div>
            <div class="material-card">
                <div class="material-num">03</div>
                <div class="material-cat">Training</div>
                <div class="material-name">Drifit Polos</div>
                <div class="material-desc">Breathable, kuat ditarik, cocok untuk seragam latihan &amp; komunitas.</div>
                <div class="material-price-row">
                    <div class="material-mulai">Mulai</div>
                    <div class="material-price">Rp 75.000<span>/pcs</span></div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     PORTFOLIO
═══════════════════════════════════════════════════ -->
<section id="portfolio" class="section" style="padding-top: 0;">
    <div class="container">
        <div class="portfolio-header">
            <h2 class="portfolio-title">
                Hasil nyata dari <span class="italic-word">workshop</span><br>
                <span class="orange">kami sendiri.</span>
            </h2>
            <a href="https://instagram.com/{{ $instagram }}" target="_blank" class="portfolio-ig">
                <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                @{{ $instagram }}
                <svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
            </a>
        </div>

        <div class="portfolio-grid">
            @forelse($portfolios->take(5) as $i => $pf)
                @if($i === 0)
                <div class="portfolio-card large">
                    @if($pf->foto_url)
                        <img src="{{ $pf->foto_url }}" alt="{{ $pf->judul }}" style="width:100%;height:100%;min-height:568px;object-fit:cover;">
                    @else
                        <div class="portfolio-card-ph"></div>
                    @endif
                    <div class="portfolio-card-info">
                        <div class="portfolio-card-cat">{{ ucfirst($pf->kategori) }}</div>
                        <div class="portfolio-card-title">{{ $pf->judul }}</div>
                    </div>
                </div>
                @elseif($i === 1)
                <div class="portfolio-card" style="grid-column: 2; grid-row: 1;">
                    @if($pf->foto_url)
                        <img src="{{ $pf->foto_url }}" alt="{{ $pf->judul }}" style="width:100%;height:100%;object-fit:cover;">
                    @else
                        <div class="portfolio-card-ph"></div>
                    @endif
                    <div class="portfolio-card-info">
                        <div class="portfolio-card-cat">{{ ucfirst($pf->kategori) }}</div>
                        <div class="portfolio-card-title">{{ $pf->judul }}</div>
                    </div>
                </div>
                @elseif($i === 2)
                <div class="portfolio-card" style="grid-column: 2; grid-row: 2;">
                    @if($pf->foto_url)
                        <img src="{{ $pf->foto_url }}" alt="{{ $pf->judul }}" style="width:100%;height:100%;object-fit:cover;">
                    @else
                        <div class="portfolio-card-ph"></div>
                    @endif
                    <div class="portfolio-card-info">
                        <div class="portfolio-card-cat">{{ ucfirst($pf->kategori) }}</div>
                        <div class="portfolio-card-title">{{ $pf->judul }}</div>
                    </div>
                </div>
                @elseif($i === 3)
                <div class="portfolio-card" style="grid-column: 3; grid-row: 1;">
                    @if($pf->foto_url)
                        <img src="{{ $pf->foto_url }}" alt="{{ $pf->judul }}" style="width:100%;height:100%;object-fit:cover;">
                    @else
                        <div class="portfolio-card-ph"></div>
                    @endif
                    <div class="portfolio-card-info">
                        <div class="portfolio-card-cat">{{ ucfirst($pf->kategori) }}</div>
                        <div class="portfolio-card-title">{{ $pf->judul }}</div>
                    </div>
                </div>
                @else
                <div class="portfolio-card" style="grid-column: 3; grid-row: 2;">
                    @if($pf->foto_url)
                        <img src="{{ $pf->foto_url }}" alt="{{ $pf->judul }}" style="width:100%;height:100%;object-fit:cover;">
                    @else
                        <div class="portfolio-card-ph"></div>
                    @endif
                    <div class="portfolio-card-info">
                        <div class="portfolio-card-cat">{{ ucfirst($pf->kategori) }}</div>
                        <div class="portfolio-card-title">{{ $pf->judul }}</div>
                    </div>
                </div>
                @endif
            @empty
            {{-- Fallback statis --}}
            <div class="portfolio-card large">
                <img src="{{ asset('images/portfolio-jersey-basket.png') }}" alt="Jersey Basket" style="width:100%;height:100%;min-height:568px;object-fit:cover;">
                <div class="portfolio-card-info"><div class="portfolio-card-cat">Basket</div><div class="portfolio-card-title">Jersey Basket — Team Rising Star</div></div>
            </div>
            <div class="portfolio-card" style="grid-column: 2; grid-row: 1;">
                <img src="{{ asset('images/portfolio-sublimasi.png') }}" alt="Sublimation Printing" style="width:100%;height:100%;object-fit:cover;">
                <div class="portfolio-card-info"><div class="portfolio-card-cat">Textile</div><div class="portfolio-card-title">Sublimation Printing — Batch 200pcs</div></div>
            </div>
            <div class="portfolio-card" style="grid-column: 2; grid-row: 2;">
                <img src="{{ asset('images/portfolio-hijab-voal.png') }}" alt="Hijab Voal Printing" style="width:100%;height:100%;object-fit:cover;">
                <div class="portfolio-card-info"><div class="portfolio-card-cat">Hijab</div><div class="portfolio-card-title">Voal Printing — Double Z Collection</div></div>
            </div>
            <div class="portfolio-card" style="grid-column: 3; grid-row: 1;">
                <img src="{{ asset('images/portfolio-workshop-jahit.png') }}" alt="Workshop Jahit" style="width:100%;height:100%;object-fit:cover;">
                <div class="portfolio-card-info"><div class="portfolio-card-cat">Workshop</div><div class="portfolio-card-title">Line Produksi Jahit — Internal</div></div>
            </div>
            <div class="portfolio-card" style="grid-column: 3; grid-row: 2;">
                <img src="{{ asset('images/portfolio-kain-premium.png') }}" alt="Kain Premium" style="width:100%;height:100%;object-fit:cover;">
                <div class="portfolio-card-info"><div class="portfolio-card-cat">Material</div><div class="portfolio-card-title">Kain Premium In-House</div></div>
            </div>
            @endforelse
        </div>

        <p style="margin-top: 20px; font-size: 13px; color: var(--text-muted);">
            Follow Instagram kami untuk melihat update produksi, portfolio terbaru, dan aktivitas workshop.
        </p>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     TESTIMONI
═══════════════════════════════════════════════════ -->
<section id="testimoni" class="section" style="border-top: 1px solid var(--border);">
    <div class="container">
        <div class="section-label">Testimoni Customer</div>
        <h2 class="testi-title">Yang mereka percayakan pada<br>kami.</h2>
        <div class="testi-grid">
            @forelse($testimonials as $t)
            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">"{{ $t->isi }}"</p>
                <div class="testi-stars">
                    @for($s = 0; $s < ($t->bintang ?? 5); $s++)★@endfor
                </div>
                <div class="testi-name">{{ $t->nama }}</div>
                <div class="testi-role">{{ $t->jabatan }} — {{ $t->kota }}</div>
            </div>
            @empty
            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">"Jersey datang H-3 turnamen, jahitan rapi, warna persis mockup. Amanah banget, ngga kecewa."</p>
                <div class="testi-stars">★★★★★</div>
                <div class="testi-name">Rizky Pratama</div>
                <div class="testi-role">Kapten Futsal — Bandung</div>
            </div>
            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">"Hijab printing dari Double Z jadi andalan brand aku. Warna print halus, packaging custom pula."</p>
                <div class="testi-stars">★★★★★</div>
                <div class="testi-name">Annisa H.</div>
                <div class="testi-role">Owner Brand Hijab — Bekasi</div>
            </div>
            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">"Sudah 3x order di DZ Jersey Pro. Kualitas konsisten, komunikasi cepat, pengerjaan sesuai janji."</p>
                <div class="testi-stars">★★★★★</div>
                <div class="testi-name">Coach Dimas</div>
                <div class="testi-role">SSB Elang Muda — Depok</div>
            </div>
            <div class="testi-card" style="border-color: var(--orange);">
                <div class="testi-quote">"</div>
                <p class="testi-text">"Butuh 120 jersey lari, selesai tepat waktu tanpa drama. Keren, jadi langganan tetap."</p>
                <div class="testi-stars">★★★★★</div>
                <div class="testi-name">Lukman</div>
                <div class="testi-role">Event Organizer — Jakarta</div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     AREA LAYANAN
═══════════════════════════════════════════════════ -->
<section id="area" class="section">
    <div class="container">
        <div class="area-header">
            <div>
                <div class="section-label">Area Layanan</div>
                <h2 class="area-title">
                    Melayani <span class="orange">{{ $areaJersey->count() + $areaHijab->count() > 0 ? ($areaJersey->count() + $areaHijab->count()) . '+' : '12+' }} kota</span> di seluruh<br>Indonesia.
                </h2>
            </div>
            <p class="area-desc">
                Pengiriman ekspedisi ke seluruh kota besar Indonesia.
                Tekan nama kota untuk info layanan spesifik kota Anda.
            </p>
        </div>

        <div class="area-group">
            <div class="area-group-label">Jersey Custom</div>
            <div class="area-tags">
                @forelse($areaJersey as $area)
                <a href="{{ $area->wa_url ?? 'https://wa.me/' . $waJersey . '?text=' . urlencode('Halo, saya dari ' . $area->kota . ' ingin order Jersey Custom') }}"
                   target="_blank" class="area-tag">
                    <svg viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="11" r="3"/></svg>
                    Jersey {{ $area->kota }}
                </a>
                @empty
                @php
                $jerseyKota = ['Jakarta','Bandung','Surabaya','Yogyakarta','Medan','Semarang','Makassar','Bekasi','Depok','Tangerang','Bogor','Bali'];
                @endphp
                @foreach($jerseyKota as $kota)
                <a href="https://wa.me/{{ $waJersey }}?text={{ urlencode('Halo, saya dari ' . $kota . ' ingin order Jersey Custom') }}" target="_blank" class="area-tag">
                    <svg viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="11" r="3"/></svg>
                    Jersey {{ $kota }}
                </a>
                @endforeach
                @endforelse
            </div>
        </div>

        <div class="area-group">
            <div class="area-group-label">Hijab Printing Custom</div>
            <div class="area-tags">
                @forelse($areaHijab as $area)
                <a href="{{ $area->wa_url ?? 'https://wa.me/' . $waHijab . '?text=' . urlencode('Halo, saya dari ' . $area->kota . ' ingin order Hijab Printing Custom') }}"
                   target="_blank" class="area-tag">
                    <svg viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="11" r="3"/></svg>
                    Hijab {{ $area->kota }}
                </a>
                @empty
                @php
                $hijabKota = ['Jakarta','Bandung','Surabaya','Yogyakarta','Medan','Semarang','Makassar','Bekasi','Depok','Tangerang','Bogor','Bali'];
                @endphp
                @foreach($hijabKota as $kota)
                <a href="https://wa.me/{{ $waHijab }}?text={{ urlencode('Halo, saya dari ' . $kota . ' ingin order Hijab Printing Custom') }}" target="_blank" class="area-tag">
                    <svg viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="11" r="3"/></svg>
                    Hijab {{ $kota }}
                </a>
                @endforeach
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     KEPERCAYAAN
═══════════════════════════════════════════════════ -->
<section id="kepercayaan" class="section">
    <div class="container">
        <div class="trust-grid">
            <div>
                <div class="section-label">Kepercayaan</div>
                <h2 class="trust-title">
                    Kami membangun<br>
                    <span class="orange">kepercayaan</span>,<br>
                    bukan sekadar<br>
                    menerima pesanan.
                </h2>
                <p class="trust-desc">
                    Didukung brand resmi terdaftar, produksi amanah, dan kualitas yang
                    kami jaga dalam setiap proses — dari kain mentah hingga sampai ke
                    tangan Anda.
                </p>
                <div class="trust-actions">
                    <a href="https://wa.me/{{ $waHijab }}" target="_blank" class="btn btn-green" style="font-size:13px; padding:12px 18px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.998 2C6.477 2 2 6.477 2 12c0 1.989.58 3.842 1.582 5.402L2 22l4.744-1.546A9.96 9.96 0 0011.998 22c5.523 0 10-4.477 10-10S17.521 2 11.998 2z"/></svg>
                        WA Double Z Scarve
                    </a>
                    <a href="https://instagram.com/{{ $instagram }}" target="_blank" class="btn btn-outline" style="font-size:13px; padding:12px 18px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        @{{ $instagram }}
                    </a>
                </div>
            </div>
            <div>
                {{-- Trust features dari DB (tampilkan 6 item) --}}
                <div class="trust-features">
                    @forelse($trustFeatures->take(6) as $tf)
                    <div class="trust-feature">
                        <div class="trust-feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div class="trust-feature-name">{{ $tf->judul }}</div>
                        <div class="trust-feature-desc">{{ $tf->deskripsi }}</div>
                    </div>
                    @empty
                    <div class="trust-feature">
                        <div class="trust-feature-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
                        <div class="trust-feature-name">Legalitas Usaha</div>
                        <div class="trust-feature-desc">Usaha resmi beroperasi dengan dokumen lengkap &amp; NPWP aktif.</div>
                    </div>
                    <div class="trust-feature">
                        <div class="trust-feature-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
                        <div class="trust-feature-name">Sertifikat Merek DJKI</div>
                        <div class="trust-feature-desc">Brand hijab Double Z terdaftar resmi di Dirjen Kekayaan Intelektual.</div>
                    </div>
                    <div class="trust-feature">
                        <div class="trust-feature-icon"><svg viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="11" r="3"/></svg></div>
                        <div class="trust-feature-name">Alamat Workshop</div>
                        <div class="trust-feature-desc">Workshop fisik bisa dikunjungi langsung untuk verifikasi.</div>
                    </div>
                    <div class="trust-feature">
                        <div class="trust-feature-icon"><svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                        <div class="trust-feature-name">Garansi Produksi</div>
                        <div class="trust-feature-desc">Garansi jahitan &amp; hasil print sesuai mockup yang disetujui.</div>
                    </div>
                    <div class="trust-feature">
                        <div class="trust-feature-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                        <div class="trust-feature-name">WhatsApp Aktif 7 Hari</div>
                        <div class="trust-feature-desc">Respons cepat, tanpa skrip bot — langsung ditangani tim produksi.</div>
                    </div>
                    <div class="trust-feature">
                        <div class="trust-feature-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                        <div class="trust-feature-name">Data Desain Aman</div>
                        <div class="trust-feature-desc">Desain klien tidak dipublikasikan atau dipakai ulang.</div>
                    </div>
                    @endforelse
                </div>

                <div class="djki-banner" style="margin-top: 4px;">
                    <div class="djki-icon">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <div class="djki-text">
                        <div class="label">Sertifikat Resmi</div>
                        <div class="title">Merek Double Z Terdaftar di Direktorat Jenderal Kekayaan Intelektual (DJKI).</div>
                        <div class="sub">Bukti legalitas brand &amp; jaminan keaslian produk kepada setiap pelanggan kami.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     KONTAK
═══════════════════════════════════════════════════ -->
<section id="kontak" class="section">
    <div class="container">
        <div class="section-label">Kontak</div>
        <h2 class="kontak-title">
            Mulai <span class="italic-word">proyek</span><br>
            <span class="orange">Anda</span> hari ini.
        </h2>
        <p class="kontak-desc">
            Kami bukan sekadar menerima pesanan, tetapi membangun kepercayaan.
            Didukung brand resmi terdaftar, produksi amanah, dan kualitas yang kami jaga
            dalam setiap proses.
        </p>

        <div class="kontak-wa-grid">
            <a href="https://wa.me/{{ $waJersey }}" target="_blank" class="kontak-wa">
                <div class="wa-icon">
                    <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.998 2C6.477 2 2 6.477 2 12c0 1.989.58 3.842 1.582 5.402L2 22l4.744-1.546A9.96 9.96 0 0011.998 22c5.523 0 10-4.477 10-10S17.521 2 11.998 2zm0 18.198a8.19 8.19 0 01-4.187-1.148l-.299-.178-3.108 1.015 1.039-3.008-.196-.31A8.196 8.196 0 013.8 12c0-4.519 3.679-8.198 8.198-8.198S20.196 7.481 20.196 12c0 4.519-3.679 8.198-8.198 8.198z"/></svg>
                </div>
                <div class="arrow"><svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
                <div class="cat">Jersey &amp; Textile</div>
                <div class="wa-name">WhatsApp DZ Jersey Pro</div>
                <div class="wa-num">+{{ $waJersey }}</div>
            </a>
            <a href="https://wa.me/{{ $waHijab }}" target="_blank" class="kontak-wa">
                <div class="wa-icon">
                    <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M11.998 2C6.477 2 2 6.477 2 12c0 1.989.58 3.842 1.582 5.402L2 22l4.744-1.546A9.96 9.96 0 0011.998 22c5.523 0 10-4.477 10-10S17.521 2 11.998 2zm0 18.198a8.19 8.19 0 01-4.187-1.148l-.299-.178-3.108 1.015 1.039-3.008-.196-.31A8.196 8.196 0 013.8 12c0-4.519 3.679-8.198 8.198-8.198S20.196 7.481 20.196 12c0 4.519-3.679 8.198-8.198 8.198z"/></svg>
                </div>
                <div class="arrow"><svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></div>
                <div class="cat">Hijab Printing</div>
                <div class="wa-name">WhatsApp Double Z Scarve</div>
                <div class="wa-num">+{{ $waHijab }}</div>
            </a>
        </div>

        <div class="kontak-info-grid">
            <div class="kontak-info-item">
                <div class="kontak-info-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
                <div class="kontak-info-cat">Email</div>
                <a href="mailto:{{ $email }}" class="kontak-info-val">{{ $email }}</a>
            </div>
            <div class="kontak-info-item">
                <div class="kontak-info-icon"><svg viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="11" r="3"/></svg></div>
                <div class="kontak-info-cat">Workshop</div>
                <a href="{{ $mapsUrl }}" target="_blank" class="kontak-info-val">Lihat di Google Maps</a>
                <div class="kontak-info-sub">Kunjungi langsung · verifikasi bebas</div>
            </div>
            <div class="kontak-info-item">
                <div class="kontak-info-icon"><svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></div>
                <div class="kontak-info-cat">Instagram</div>
                <a href="https://instagram.com/{{ $instagram }}" target="_blank" class="kontak-info-val">@{{ $instagram }}</a>
                <div class="kontak-info-sub">Update produksi &amp; portfolio terbaru</div>
            </div>
        </div>

        <div class="kontak-bottom">
            <div class="kontak-bottom-text">
                <div class="title">Butuh penawaran custom?</div>
                <div class="sub">Isi form singkat — tim kami balas dalam 1x24 jam.</div>
            </div>
            <a href="https://wa.me/{{ $waJersey }}" target="_blank" class="btn btn-orange">
                Request Penawaran
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════════════ -->
<footer>
    <div class="copy">© {{ date('Y') }} {{ strtoupper($siteName) }} · DOUBLE Z SCARVE</div>
    <div class="tags">AMANAH · TERDAFTAR DJKI · PRODUKSI SENDIRI</div>
</footer>

<!-- ═══════════════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════════════ -->
<script>
// ── Mobile Menu ──────────────────────────────────────
document.getElementById('hamburgerBtn').addEventListener('click', function() {
    document.getElementById('mobileMenu').classList.toggle('open');
});
document.querySelectorAll('#mobileMenu a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.remove('open');
    });
});

// ── Scroll ────────────────────────────────────────────
window.addEventListener('scroll', function() {
    const nav = document.getElementById('navbar');
    nav.style.borderBottomColor = window.scrollY > 20 ? '#2a2a2a' : 'transparent';
});

// ── Kalkulator — opsi bahan dari DB via API ───────────
const serviceOptions = {
    jersey: [
        { label: 'Dry Fit — Rp 65.000/pcs', value: 65000 },
        { label: 'Milano — Rp 85.000/pcs', value: 85000 },
        { label: 'Drifit Polos — Rp 75.000/pcs', value: 75000 },
        { label: 'Diadora — Rp 80.000/pcs', value: 80000 },
        { label: 'Paragon — Rp 70.000/pcs', value: 70000 },
        { label: 'Parasut — Rp 120.000/pcs', value: 120000 },
    ],
    textile: [
        { label: 'Kain Roll Sublimasi — Rp 35.000/m', value: 35000 },
        { label: 'Kain DTG Premium — Rp 45.000/m', value: 45000 },
        { label: 'Kain Lembaran — Rp 30.000/m', value: 30000 },
    ],
    hijab: [
        { label: 'Satin Velvet — Rp 55.000/pcs', value: 55000 },
        { label: 'Voal Premium — Rp 45.000/pcs', value: 45000 },
        { label: 'Ceruti Babydoll — Rp 50.000/pcs', value: 50000 },
    ],
};

// Coba load dari API, fallback ke statis
async function loadMaterials(service) {
    try {
        const res = await fetch(`/api/materials?service=${service}`);
        if (!res.ok) throw new Error('api error');
        const data = await res.json();
        if (data && data.length > 0) return data.map(m => ({ label: `${m.nama} — Rp ${Number(m.harga).toLocaleString('id-ID')}/pcs`, value: m.harga }));
    } catch (e) {}
    return serviceOptions[service] || [];
}

async function switchService(btn) {
    document.querySelectorAll('.kalk-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    const service = btn.dataset.service;
    const select = document.getElementById('kalkBahan');
    const opts = await loadMaterials(service);
    select.innerHTML = '';
    opts.forEach(opt => {
        const o = document.createElement('option');
        o.value = opt.value;
        o.textContent = opt.label;
        select.appendChild(o);
    });
    document.getElementById('kalkResult').classList.remove('show');
}

function updateQty(val) {
    document.getElementById('qtyVal').textContent = val;
    document.getElementById('kalkResult').classList.remove('show');
}

function hitungEstimasi() {
    const qty   = parseInt(document.getElementById('kalkSlider').value);
    const harga = parseInt(document.getElementById('kalkBahan').value);

    let disc = 0, discLabel = '';
    if      (qty >= 100) { disc = 0.10; discLabel = 'Sudah termasuk diskon 10% (100+ pcs)'; }
    else if (qty >= 50)  { disc = 0.07; discLabel = 'Sudah termasuk diskon 7% (50+ pcs)'; }
    else if (qty >= 24)  { disc = 0.05; discLabel = 'Sudah termasuk diskon 5% (24+ pcs)'; }
    else                 { discLabel = 'Pesan 24+ pcs untuk dapat diskon'; }

    const total     = Math.round(qty * harga * (1 - disc));
    const formatted = 'Rp ' + total.toLocaleString('id-ID');

    document.getElementById('resultPrice').textContent = formatted;
    document.getElementById('resultNote').textContent  = discLabel + ' · Harga belum termasuk desain & ongkir';
    document.getElementById('kalkResult').classList.add('show');
}

// Init kalkulator saat load
(async () => {
    const firstTab = document.querySelector('.kalk-tab.active');
    if (firstTab) {
        const service = firstTab.dataset.service;
        const opts = await loadMaterials(service);
        const select = document.getElementById('kalkBahan');
        select.innerHTML = '';
        opts.forEach(opt => {
            const o = document.createElement('option');
            o.value = opt.value;
            o.textContent = opt.label;
            select.appendChild(o);
        });
    }
})();

// ── Fade-in on scroll ─────────────────────────────────
const fadeEls = document.querySelectorAll('.fade-in');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
fadeEls.forEach(el => observer.observe(el));

// ── Smooth scroll ─────────────────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            window.scrollTo({ top: target.offsetTop - 64, behavior: 'smooth' });
        }
    });
});
</script>

</body>
</html>
