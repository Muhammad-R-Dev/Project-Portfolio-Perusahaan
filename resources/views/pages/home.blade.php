@extends('layouts.app')

@push('styles')
<style>
    .hero-section {
        background: var(--bg-blue-light);
        border-radius: var(--radius-xl);
        margin: 1rem 2rem 4rem;
        padding: 4rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        color: white;
    }
    .hero-section .section-title { color: white; }
    .hero-section p { font-size: 1.15rem; margin-bottom: 2.5rem; opacity: 0.9; max-width: 450px; }
    .hero-img {
        width: 100%; height: 600px; object-fit: cover;
        border-radius: var(--radius-lg);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .about-stats {
        padding: 5rem 2rem;
        display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;
    }
    .stats-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; }
    .stat-item h3 { font-size: 3.5rem; font-weight: 800; color: var(--text-main); line-height: 1; margin-bottom: 0.5rem; }
    .stat-item p { color: var(--text-muted); font-size: 1rem; font-weight: 500; }

    .catalog-section { padding: 5rem 2rem; }
    .catalog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 3rem; }
    .catalog-card {
        background: white; border-radius: var(--radius-lg); overflow: hidden;
        border: 1px solid var(--border); padding: 1rem; padding-bottom: 2rem;
    }
    .catalog-card img {
        width: 100%; height: 280px; object-fit: cover; border-radius: var(--radius-md); margin-bottom: 1.5rem;
    }
    .catalog-card h4 { font-size: 1.25rem; margin-bottom: 0.5rem; padding: 0 1rem; }
    .catalog-card p { color: var(--text-muted); font-size: 0.95rem; padding: 0 1rem; }
    
    .process-section { padding: 6rem 2rem; display: grid; grid-template-columns: 1fr 1fr; gap: 6rem; }
    .process-sidebar { position: sticky; top: 120px; }
    .cta-consult {
        background: var(--bg-blue-light); padding: 3rem; border-radius: var(--radius-lg);
        color: white; text-align: center; margin-top: 3rem;
    }
    .cta-consult h3 { font-size: 2rem; margin-bottom: 1.5rem; }
    .process-item { display: flex; gap: 1.5rem; margin-bottom: 3rem; }
    .process-icon {
        width: 56px; height: 56px; border-radius: 50%; background: var(--text-main);
        display: flex; align-items: center; justify-content: center;
        font-size: 1.2rem; color: white; flex-shrink: 0;
    }
    .process-item h4 { font-size: 1.2rem; margin-bottom: 0.5rem; }
    .process-item p { color: var(--text-muted); font-size: 1rem; line-height: 1.6; }
    
    .cta-block {
        background: var(--bg-dark-slate); color: white;
        border-radius: var(--radius-xl); padding: 5rem 4rem; margin: 2rem;
        display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;
    }
    .cta-block .section-title { color: white; font-size: 2.8rem; }
    .form-input {
        width: 100%; padding: 1.2rem 1.5rem; border-radius: 50px; border: 1px solid rgba(255,255,255,0.2);
        background: transparent; color: white; margin-bottom: 1rem; outline: none; font-family: inherit;
    }
    .form-input::placeholder { color: rgba(255,255,255,0.6); }

    @media(max-width: 992px) {
        .hero-section, .about-stats, .process-section, .cta-block { grid-template-columns: 1fr; padding: 3rem; margin: 1rem; }
        .hero-img { height: 400px; }
        .catalog-grid { grid-template-columns: 1fr; }
    }
</style>
@endpush

@section('content')
<div class="container" style="max-width: 1400px; padding: 0;">
    <!-- HERO -->
    <div class="hero-section" data-aos="fade-up">
        <div>
            <h1 class="section-title">Teknologi<br>Untuk Bisnis</h1>
            <p>Pengembangan perangkat lunak kelas enterprise, integrasi sistem, dan infrastruktur cloud mutakhir.</p>
            <a href="{{ route('contact') }}" class="btn btn-white">Mulai Kolaborasi</a>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" alt="Corporate Building" class="hero-img">
        </div>
    </div>

    <!-- ABOUT & STATS -->
    <div class="container about-stats">
        <div data-aos="fade-right">
            <h2 class="section-title">Tentang Kami</h2>
            <p style="color: var(--text-muted); font-size: 1.15rem; max-width: 480px;">Kami adalah pakar teknologi yang membantu bisnis Anda menemukan solusi yang tepat. Kami menyediakan layanan lengkap mulai dari desain arsitektur hingga pengembangan software untuk memacu efisiensi perusahaan Anda.</p>
        </div>
        <div class="stats-grid" data-aos="fade-left">
            @foreach($stats as $stat)
            <div class="stat-item">
                <h3>{{ $stat['value'] }}</h3>
                <p>{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- SERVICES CATALOG -->
    <div class="container catalog-section">
        <h2 class="section-title" data-aos="fade-up">Katalog Layanan</h2>
        <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 3rem;" data-aos="fade-up">Solusi teknologi end-to-end untuk kebutuhan industri modern.</p>
        
        <div class="catalog-grid">
            <div class="catalog-card" data-aos="fade-up" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=600&q=80" alt="Software">
                <h4>Pengembangan Software</h4>
                <p>Aplikasi web & enterprise</p>
            </div>
            <div class="catalog-card" data-aos="fade-up" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Cloud">
                <h4>Infrastruktur Cloud</h4>
                <p>Migrasi & manajemen server</p>
            </div>
            <div class="catalog-card" data-aos="fade-up" data-aos-delay="300">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80" alt="Security">
                <h4>Keamanan Siber</h4>
                <p>Proteksi data 24/7</p>
            </div>
        </div>
    </div>

    <!-- PROCESS -->
    <div class="container process-section">
        <div class="process-sidebar" data-aos="fade-right">
            <h2 class="section-title">Cara Kami<br>Bekerja</h2>
            <p style="color: var(--text-muted); font-size: 1.15rem; max-width: 400px;">Kami membuat proses kerja menjadi sangat transparan, sistematis, dan terukur bagi setiap klien kami.</p>
            <div class="cta-consult">
                <h3>Konsultasi Gratis</h3>
                <a href="{{ route('contact') }}" class="btn btn-white" style="width: 100%;">Jadwalkan Sekarang</a>
            </div>
        </div>
        <div data-aos="fade-left">
            <div class="process-item">
                <div class="process-icon"><i class="fas fa-comments"></i></div>
                <div>
                    <h4>1. Konsultasi Kebutuhan</h4>
                    <p>Kami menganalisis tantangan bisnis Anda dan menentukan spesifikasi teknis yang paling relevan untuk diimplementasikan.</p>
                </div>
            </div>
            <div class="process-item">
                <div class="process-icon"><i class="fas fa-search"></i></div>
                <div>
                    <h4>2. Perancangan Sistem</h4>
                    <p>Merancang arsitektur aplikasi dan UI/UX yang optimal untuk memberikan pengalaman pengguna terbaik.</p>
                </div>
            </div>
            <div class="process-item">
                <div class="process-icon"><i class="fas fa-code"></i></div>
                <div>
                    <h4>3. Proses Pengembangan</h4>
                    <p>Tim ahli kami menulis kode menggunakan standar industri terbaik dengan pengujian ketat di setiap tahapnya.</p>
                </div>
            </div>
            <div class="process-item">
                <div class="process-icon"><i class="fas fa-rocket"></i></div>
                <div>
                    <h4>4. Peluncuran & Pendampingan</h4>
                    <p>Kami mendampingi proses go-live produk dan memberikan jaminan dukungan teknis secara berkelanjutan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="cta-block" data-aos="zoom-in">
        <div>
            <h2 class="section-title">Mari Berdiskusi Proyek!</h2>
            <p style="opacity: 0.9; font-size: 1.1rem; max-width: 400px;">Tinggalkan kontak Anda dan tim ahli kami akan segera menghubungi Anda untuk sesi konsultasi.</p>
        </div>
        <div>
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <input type="text" name="name" class="form-input" placeholder="Nama Lengkap Anda" required>
                <input type="text" name="phone" class="form-input" placeholder="Nomor Telepon">
                <button type="submit" class="btn btn-white" style="width: 100%; padding: 1.2rem; border-radius: 50px; font-size: 1.1rem; margin-top: 1rem;">Kirim Permintaan</button>
                <input type="hidden" name="email" value="guest@example.com">
                <input type="hidden" name="subject" value="Inquiry Permintaan">
                <input type="hidden" name="message" value="Tolong hubungi saya segera.">
            </form>
        </div>
    </div>
</div>
@endsection