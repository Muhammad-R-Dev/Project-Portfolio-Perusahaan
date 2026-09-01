@extends('layouts.app')

@section('title', 'Tentang Kami')

@push('styles')
<style>
    .about-hero {
        padding: 150px 0 80px;
        text-align: center;
        background: linear-gradient(to bottom, rgba(15,15,26,0), rgba(26,26,46,1));
    }
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }
    .team-card {
        text-align: center;
        padding: 2.5rem 1.5rem;
    }
    .team-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: white;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .milestone-item {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
        position: relative;
    }
    .milestone-item::before {
        content: '';
        position: absolute;
        left: 30px;
        top: 40px;
        bottom: -20px;
        width: 2px;
        background: var(--border);
    }
    .milestone-item:last-child::before { display: none; }
    .milestone-year {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: var(--gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: white;
        z-index: 1;
        flex-shrink: 0;
    }
    .milestone-content {
        background: var(--card-bg);
        border: 1px solid var(--border);
        padding: 1.5rem;
        border-radius: 12px;
        flex-grow: 1;
    }
    @media (max-width: 768px) {
        .milestone-item { flex-direction: column; gap: 1rem; }
        .milestone-item::before { left: 30px; }
    }
</style>
@endpush

@section('content')
<section class="about-hero">
    <div class="container">
        <span class="section-badge" data-aos="fade-down">Profil Perusahaan</span>
        <h1 class="section-title" data-aos="fade-up" data-aos-delay="100">
            Membangun Masa Depan Melalui <span class="gradient-text">Inovasi Teknologi</span>
        </h1>
        <p class="section-subtitle mx-auto" data-aos="fade-up" data-aos-delay="200" style="max-width: 700px;">
            PT Asta Brata Teknologi didirikan dengan visi untuk menjadi katalisator transformasi digital bagi perusahaan di Indonesia. Kami percaya bahwa teknologi bukan hanya sekadar alat, melainkan fondasi utama untuk pertumbuhan bisnis yang berkelanjutan.
        </p>
    </div>
</section>

<!-- Values Section -->
<section style="padding: 5rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 3rem;">
            <h2 class="section-title" data-aos="fade-up">Nilai-Nilai Inti Kami</h2>
        </div>
        <div class="values-grid">
            @foreach($values as $index => $val)
            <div class="card" data-aos="fade-up" data-aos-delay="{{ 100 * $index }}">
                <i class="{{ $val['icon'] }}" style="font-size: 2rem; color: var(--primary-light); margin-bottom: 1rem;"></i>
                <h3 style="margin-bottom: 0.75rem;">{{ $val['title'] }}</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem;">{{ $val['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Section -->
<section style="padding: 5rem 0; background: var(--dark-2);">
    <div class="container">
        <div style="text-align: center; margin-bottom: 3rem;">
            <h2 class="section-title" data-aos="fade-up">Pemimpin Eksekutif</h2>
            <p class="section-subtitle mx-auto" data-aos="fade-up">Bertemu dengan para ahli di balik kesuksesan solusi teknologi kami.</p>
        </div>
        <div class="team-grid">
            @foreach($team as $index => $member)
            <div class="card team-card" data-aos="fade-up" data-aos-delay="{{ 100 * $index }}">
                <div class="team-avatar" style="background: {{ $member['color'] }};">{{ $member['initials'] }}</div>
                <h3 style="margin-bottom: 0.25rem;">{{ $member['name'] }}</h3>
                <div style="color: var(--primary-light); font-weight: 600; font-size: 0.9rem; margin-bottom: 1rem;">{{ $member['position'] }}</div>
                <p style="color: var(--text-muted); font-size: 0.9rem;">{{ $member['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- History Section -->
<section style="padding: 5rem 0;">
    <div class="container" style="max-width: 800px;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 class="section-title" data-aos="fade-up">Perjalanan Kami</h2>
        </div>
        
        <div class="milestones">
            @foreach($milestones as $index => $ms)
            <div class="milestone-item" data-aos="fade-up" data-aos-delay="{{ 50 * $index }}">
                <div class="milestone-year">{{ $ms['year'] }}</div>
                <div class="milestone-content">
                    <h3 style="margin-bottom: 0.5rem;">{{ $ms['title'] }}</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem;">{{ $ms['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
