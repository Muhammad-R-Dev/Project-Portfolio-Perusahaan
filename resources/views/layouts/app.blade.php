<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PT Asta Brata Teknologi - Solusi Teknologi Informasi Terpercaya untuk Transformasi Digital Bisnis Anda">
    <meta name="keywords" content="software development, mobile app, cloud, IT consulting, Jakarta, teknologi informasi">
    <title>@yield('title', 'PT Asta Brata Teknologi') | Solusi IT Terpercaya</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <style>
        :root {
            --primary: #4F46E5;
            --primary-dark: #3730A3;
            --primary-light: #818CF8;
            --secondary: #7C3AED;
            --accent: #06B6D4;
            --dark: #0F0F1A;
            --dark-2: #1A1A2E;
            --dark-3: #16213E;
            --card-bg: rgba(255,255,255,0.04);
            --glass: rgba(255,255,255,0.07);
            --border: rgba(255,255,255,0.1);
            --text: #E2E8F0;
            --text-muted: #94A3B8;
            --success: #10B981;
            --warning: #F59E0B;
            --gradient: linear-gradient(135deg, #4F46E5, #7C3AED);
            --gradient-2: linear-gradient(135deg, #06B6D4, #4F46E5);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark);
            color: var(--text);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            padding: 1rem 0;
            transition: all 0.4s ease;
        }

        .navbar.scrolled {
            background: rgba(15, 15, 26, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            padding: 0.7rem 0;
            box-shadow: 0 4px 30px rgba(0,0,0,0.3);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            background: var(--gradient);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 1.1rem;
            color: white;
            box-shadow: 0 0 20px rgba(79, 70, 229, 0.4);
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }

        .logo-name {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            font-size: 1.1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo-sub {
            font-size: 0.65rem;
            color: var(--text-muted);
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: white;
            background: var(--glass);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 2px;
            background: var(--gradient);
            border-radius: 2px;
        }

        .nav-cta {
            background: var(--gradient) !important;
            color: white !important;
            padding: 0.5rem 1.25rem !important;
            border-radius: 8px !important;
            box-shadow: 0 0 20px rgba(79, 70, 229, 0.3);
        }

        .nav-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(79, 70, 229, 0.5) !important;
            background: var(--glass) !important;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 4px;
        }

        .hamburger span {
            width: 24px;
            height: 2px;
            background: white;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--dark-2);
            border-top: 1px solid var(--border);
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-brand p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 1rem;
            line-height: 1.8;
        }

        .footer-social {
            display: flex;
            gap: 0.75rem;
            margin-top: 1.5rem;
        }

        .footer-social a {
            width: 38px;
            height: 38px;
            background: var(--glass);
            border: 1px solid var(--border);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-social a:hover {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        .footer-col h4 {
            font-weight: 700;
            margin-bottom: 1.25rem;
            font-size: 0.95rem;
            color: white;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 0.75rem;
        }

        .footer-col ul li a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-col ul li a:hover {
            color: var(--primary-light);
            padding-left: 5px;
        }

        .footer-col .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .footer-col .contact-item i {
            color: var(--primary-light);
            margin-top: 3px;
            width: 14px;
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1.5rem 2rem 0;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer-bottom p {
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .footer-bottom-links {
            display: flex;
            gap: 1.5rem;
        }

        .footer-bottom-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.3s;
        }

        .footer-bottom-links a:hover { color: var(--primary-light); }

        /* ===== UTILITIES ===== */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(79, 70, 229, 0.15);
            border: 1px solid rgba(79, 70, 229, 0.3);
            color: var(--primary-light);
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .section-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .gradient-text {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-subtitle {
            color: var(--text-muted);
            font-size: 1.05rem;
            max-width: 600px;
            line-height: 1.8;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.85rem 2rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
            box-shadow: 0 0 25px rgba(79, 70, 229, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 40px rgba(79, 70, 229, 0.6);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text);
        }

        .btn-outline:hover {
            background: var(--glass);
            border-color: var(--primary-light);
            color: white;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 2rem;
            transition: all 0.4s ease;
            backdrop-filter: blur(10px);
        }

        .card:hover {
            border-color: rgba(79, 70, 229, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            background: rgba(255,255,255,0.06);
        }

        .badge {
            display: inline-block;
            padding: 0.2rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* Glow effects */
        .glow-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            pointer-events: none;
        }

        /* Page hero common */
        .page-hero {
            padding: 120px 0 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Scroll to top button */
        #scrollTopBtn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 44px;
            height: 44px;
            background: var(--gradient);
            border: none;
            border-radius: 50%;
            color: white;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            z-index: 999;
            box-shadow: 0 0 20px rgba(79,70,229,0.4);
        }

        #scrollTopBtn.show {
            opacity: 1;
            transform: translateY(0);
        }

        #scrollTopBtn:hover {
            transform: translateY(-3px);
        }

        /* Mobile nav */
        .nav-mobile {
            display: none;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15,15,26,0.98);
            backdrop-filter: blur(20px);
            z-index: 999;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2rem;
        }

        .nav-mobile.open { display: flex; }

        .nav-mobile a {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .nav-mobile a:hover { color: var(--primary-light); }

        .nav-mobile-close {
            position: absolute;
            top: 1.5rem;
            right: 2rem;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Alert */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #6EE7B7;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #FCA5A5;
        }

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hamburger { display: flex; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
            .footer-bottom { flex-direction: column; gap: 1rem; text-align: center; }
        }

        @media (max-width: 480px) {
            .footer-grid { grid-template-columns: 1fr; }
        }
    </style>

    @stack('styles')
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="{{ route('home') }}" class="nav-logo">
            <div class="logo-icon">AB</div>
            <div class="logo-text">
                <span class="logo-name">Asta Brata</span>
                <span class="logo-sub">Teknologi</span>
            </div>
        </a>

        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a></li>
            <li><a href="{{ route('contact') }}" class="nav-cta">Hubungi Kami &rarr;</a></li>
        </ul>

        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>

<!-- MOBILE NAV -->
<div class="nav-mobile" id="mobileNav">
    <button class="nav-mobile-close" id="mobileNavClose"><i class="fas fa-times"></i></button>
    <a href="{{ route('home') }}" onclick="closeMobileNav()">Beranda</a>
    <a href="{{ route('about') }}" onclick="closeMobileNav()">Tentang Kami</a>
    <a href="{{ route('contact') }}" onclick="closeMobileNav()">Kontak</a>
</div>

<!-- MAIN CONTENT -->
<main>
    @yield('content')
</main>

<!-- FOOTER -->
<footer>
    <div class="footer-grid">
        <div class="footer-brand">
            <a href="{{ route('home') }}" class="nav-logo" style="margin-bottom:1rem;display:inline-flex;">
                <div class="logo-icon">AB</div>
                <div class="logo-text">
                    <span class="logo-name">Asta Brata</span>
                    <span class="logo-sub">Teknologi</span>
                </div>
            </a>
            <p>Mitra teknologi terpercaya Anda dalam perjalanan transformasi digital. Kami menghadirkan solusi inovatif yang mendorong pertumbuhan bisnis.</p>
            <div class="footer-social">
                <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Navigasi</h4>
            <ul>
                <li><a href="{{ route('home') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i> Beranda</a></li>
                <li><a href="{{ route('about') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i> Tentang Kami</a></li>
                <li><a href="{{ route('contact') }}"><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i> Kontak</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Layanan</h4>
            <ul>
                <li><a href="#"><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i> Pengembangan Software</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i> Aplikasi Mobile</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i> Cloud & DevOps</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i> Keamanan Siber</a></li>
                <li><a href="#"><i class="fas fa-chevron-right" style="font-size:0.7rem;"></i> Konsultasi IT</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Hubungi Kami</h4>
            <div class="contact-item"><i class="fas fa-map-marker-alt"></i><span>Jl. Sudirman No. 45, Jakarta Pusat, DKI Jakarta 10210</span></div>
            <div class="contact-item"><i class="fas fa-phone"></i><span>+62 21 5551234</span></div>
            <div class="contact-item"><i class="fas fa-envelope"></i><span>info@astabrata.co.id</span></div>
            <div class="contact-item"><i class="fas fa-clock"></i><span>Sen - Jum, 08:00 - 17:00 WIB</span></div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} PT Asta Brata Teknologi. Hak Cipta Dilindungi.</p>
        <div class="footer-bottom-links">
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
        </div>
    </div>
</footer>

<!-- Scroll to top -->
<button id="scrollTopBtn" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 700, once: true, offset: 80 });

    // Navbar scroll
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
        document.getElementById('scrollTopBtn').classList.toggle('show', window.scrollY > 400);
    });

    // Mobile nav
    document.getElementById('hamburger').addEventListener('click', () => {
        document.getElementById('mobileNav').classList.add('open');
        document.body.style.overflow = 'hidden';
    });

    document.getElementById('mobileNavClose').addEventListener('click', closeMobileNav);

    function closeMobileNav() {
        document.getElementById('mobileNav').classList.remove('open');
        document.body.style.overflow = '';
    }

    // Counter animation
    function animateCounters() {
        document.querySelectorAll('.counter').forEach(el => {
            const target = parseInt(el.dataset.target);
            const suffix = el.dataset.suffix || '';
            let count = 0;
            const step = target / 60;
            const timer = setInterval(() => {
                count += step;
                if (count >= target) {
                    el.textContent = target + suffix;
                    clearInterval(timer);
                } else {
                    el.textContent = Math.floor(count) + suffix;
                }
            }, 20);
        });
    }

    // Intersection Observer for counters
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        observer.observe(statsSection);
    }
</script>

@stack('scripts')
</body>
</html>
