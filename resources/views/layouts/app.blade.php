<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Asta Brata Teknologi') | Solusi IT Terpercaya</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <style>
        :root {
            --bg-body: #FFFFFF;
            --bg-surface: #F8FAFC;
            --bg-blue-light: #9DB4C0;
            --bg-dark-slate: #3B4B59;
            --primary: #2563EB;
            --primary-dark: #1D4ED8;
            --text-main: #1A1A1A;
            --text-muted: #64748B;
            --border: #E2E8F0;
            --radius-xl: 32px;
            --radius-lg: 24px;
            --radius-md: 16px;
            --radius-sm: 8px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Manrope', sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .nav-logo {
            display: flex; align-items: center; gap: 0.75rem; text-decoration: none; color: var(--text-main);
        }
        .logo-icon {
            width: 32px; height: 32px;
            background: var(--text-main);
            display: grid; grid-template-columns: 1fr 1fr; gap: 2px; padding: 4px;
            border-radius: 6px;
        }
        .logo-icon span { background: white; border-radius: 2px; }
        .logo-text { font-weight: 800; font-size: 1.2rem; line-height: 1.2; letter-spacing: -0.02em; }
        
        .nav-links { display: flex; gap: 2.5rem; list-style: none; align-items: center; }
        .nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            transition: color 0.3s;
        }
        .nav-links a:hover, .nav-links a.active { color: var(--text-main); }
        
        .btn {
            display: inline-flex; align-items: center; justify-content: center;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600; font-size: 0.95rem;
            text-decoration: none; border: none; cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-primary { background: var(--bg-dark-slate); color: white; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(0,0,0, 0.1); }
        .btn-white { background: white; color: var(--text-main); }
        .btn-white:hover { background: #F1F5F9; }
        
        /* Typography & Utilities */
        .container { max-width: 1400px; margin: 0 auto; padding: 0 2rem; }
        .section-title {
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -0.03em;
        }
        
        /* Footer */
        footer {
            background: var(--bg-surface);
            padding: 4rem 0 2rem;
            border-top: 1px solid var(--border);
            margin-top: 4rem;
        }
        .footer-grid {
            display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 3rem; margin-bottom: 3rem;
        }
        .footer-col h4 { margin-bottom: 1.5rem; font-size: 1.1rem; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 0.75rem; }
        .footer-col ul li a { color: var(--text-muted); text-decoration: none; font-size: 0.95rem; }
        .footer-col ul li a:hover { color: var(--text-main); }
        .footer-bottom { text-align: center; color: var(--text-muted); padding-top: 2rem; border-top: 1px solid var(--border); font-size: 0.9rem; }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="nav-logo">
                <div class="logo-icon"><span></span><span></span><span></span><span></span></div>
                <div class="logo-text">Asta Brata</div>
            </a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a></li>
            </ul>
        </div>
    </nav>
    <main style="padding-top: 100px;">
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="{{ route('home') }}" class="nav-logo" style="margin-bottom: 1rem;">
                        <div class="logo-icon" style="width:24px;height:24px;"><span></span><span></span><span></span><span></span></div>
                        <div class="logo-text">Asta Brata</div>
                    </a>
                    <p style="color: var(--text-muted); max-width: 300px; margin-top: 1rem; font-size: 0.95rem;">Solusi perangkat lunak kelas enterprise untuk memacu pertumbuhan bisnis Anda.</p>
                </div>
                <div class="footer-col">
                    <h4>Perusahaan</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('contact') }}">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Hubungi Kami</h4>
                    <p style="color: var(--text-muted); margin-bottom: 0.5rem; font-size: 0.95rem;">info@astabrata.co.id</p>
                    <p style="color: var(--text-muted); font-size: 0.95rem;">+62 21 5551234</p>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; {{ date('Y') }} PT Asta Brata Teknologi. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ duration: 800, once: true });</script>
    @stack('scripts')
</body>
</html>
