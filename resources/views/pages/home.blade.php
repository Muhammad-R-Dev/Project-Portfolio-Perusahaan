@extends('layouts.app')

@section('title', 'Beranda')

@push('styles')
<style>
    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        padding: 120px 0 60px;
        overflow: hidden;
    }
    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 10;
    }
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }
    .service-card {
        text-align: left;
    }
    .service-icon {
        width: 60px;
        height: 60px;
        background: rgba(79, 70, 229, 0.1);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--primary-light);
        margin-bottom: 1.5rem;
    }
    .stats-section {
        background: var(--dark-2);
        padding: 5rem 0;
        border-top: 1px solid var(--border);
        border-bottom: 1px solid var(--border);
    }
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        text-align: center;
    }
    .stat-val {
        font-size: 3rem;
        font-weight: 800;
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .stat-label {
        color: var(--text-muted);
        font-size: 1.1rem;
        font-weight: 500;
        margin-top: 0.5rem;
    }
</style>
@endpush

@section('content')
<!-- HERO SECTION -->
<section class="hero">
    <div class="glow-blob" style="top: 20%; left: 10%; width: 500px; height: 500px; background: var(--primary);"></div>
    <div class="glow-blob" style="bottom: -10%; right: 10%; width: 400px; height: 400px; background: var(--secondary);"></div>
    
    <div class="container">
        <div class="hero-content">
            <span class="section-badge" data-aos="fade-down">Innovating The Future</span>
            <h1 class="section-title" data-aos="fade-up" data-aos-delay="100">
                Solusi Teknologi Terdepan untuk <span class="gradient-text">Transformasi Digital</span> Bisnis Anda
            </h1>
            <p class="section-subtitle mx-auto" style="margin: 1.5rem auto 2.5rem;" data-aos="fade-up" data-aos-delay="200">
                PT Asta Brata Teknologi menghadirkan layanan IT komprehensif, dari pengembangan perangkat lunak hingga infrastruktur cloud, dirancang khusus untuk memacu efisiensi dan pertumbuhan perusahaan.
            </p>
            <div data-aos="fade-up" data-aos-delay="300" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('contact') }}" class="btn btn-primary">Mulai Konsultasi Gratis</a>
                <a href="#services" class="btn btn-outline">Pelajari Layanan Kami</a>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" style="padding: 6rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 3rem;">
            <span class="section-badge" data-aos="fade-up">Keahlian Kami</span>
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Layanan Unggulan</h2>
            <p class="section-subtitle mx-auto" data-aos="fade-up" data-aos-delay="200">Kami menyediakan ekosistem solusi digital end-to-end yang disesuaikan dengan kebutuhan industri modern.</p>
        </div>

        <div class="services-grid">
            @foreach($services as $index => $service)
            <div class="card service-card" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                <div class="service-icon">
                    <i class="{{ $service['icon'] }}"></i>
                </div>
                <h3 style="margin-bottom: 1rem; font-size: 1.3rem;">{{ $service['title'] }}</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            @foreach($stats as $index => $stat)
            <div data-aos="zoom-in" data-aos-delay="{{ 100 * $index }}">
                <div class="stat-val counter" data-target="{{ intval($stat['value']) }}" data-suffix="{{ str_replace(intval($stat['value']), '', $stat['value']) }}">0</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
