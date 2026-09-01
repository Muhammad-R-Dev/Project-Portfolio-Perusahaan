@extends('layouts.app')

@push('styles')
<style>
    .page-hero {
        background: var(--bg-surface);
        padding: 5rem 2rem;
        border-radius: var(--radius-xl);
        text-align: center;
        margin: 1rem 2rem 4rem;
        border: 1px solid var(--border);
    }
    .about-content {
        display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; margin-bottom: 6rem; padding: 0 2rem;
        align-items: center;
    }
    .about-img {
        width: 100%; height: 500px; object-fit: cover; border-radius: var(--radius-lg);
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    }
    .team-grid {
        display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; padding: 0 2rem;
    }
    .team-card {
        background: white; padding: 2.5rem 2rem; border-radius: var(--radius-lg);
        text-align: center; border: 1px solid var(--border);
    }
    .team-card h4 { font-size: 1.25rem; margin-bottom: 0.25rem; }
    .team-avatar {
        width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 1.5rem;
        display: flex; align-items: center; justify-content: center;
        font-size: 2.5rem; font-weight: 800; color: white;
    }
    
    .timeline-section {
        background: var(--bg-dark-slate); color: white; padding: 6rem 2rem;
        border-radius: var(--radius-xl); margin: 6rem 2rem 2rem;
    }
    .timeline-section .section-title { color: white; text-align: center; margin-bottom: 4rem; }
    .timeline-grid {
        display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 3rem;
    }
    .timeline-item h3 { font-size: 3rem; color: var(--bg-blue-light); margin-bottom: 1rem; }
    .timeline-item h4 { font-size: 1.25rem; margin-bottom: 0.5rem; }
    .timeline-item p { opacity: 0.8; font-size: 0.95rem; }

    @media(max-width: 992px) {
        .about-content { grid-template-columns: 1fr; padding: 0; }
        .team-grid { grid-template-columns: 1fr 1fr; padding: 0; }
        .page-hero, .timeline-section { margin: 1rem; padding: 3rem 1.5rem; }
        .about-img { height: 350px; }
    }
</style>
@endpush

@section('content')
<div class="container" style="max-width: 1400px; padding: 0;">
    <div class="page-hero" data-aos="fade-down">
        <h1 class="section-title" style="margin-bottom: 1rem;">Mengenal Lebih Dekat</h1>
        <p style="color: var(--text-muted); font-size: 1.2rem; max-width: 600px; margin: 0 auto;">Kami berdedikasi membangun infrastruktur teknologi masa depan yang kuat dan efisien.</p>
    </div>

    <div class="container about-content">
        <div data-aos="fade-right">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" class="about-img" alt="Tim Kami">
        </div>
        <div data-aos="fade-left">
            <h2 class="section-title">Visi & Misi Perusahaan</h2>
            <p style="color: var(--text-muted); font-size: 1.15rem; margin-bottom: 2rem;">PT Asta Brata Teknologi hadir sebagai mitra terpercaya bagi perusahaan dalam melakukan transformasi digital. Tim kami terdiri dari para ahli industri yang berpengalaman.</p>
            <div style="display: grid; gap: 1.5rem;">
                <div style="display: flex; gap: 1rem; align-items: flex-start;">
                    <i class="fas fa-check-circle" style="color: var(--primary); font-size: 1.5rem; margin-top: 0.2rem;"></i>
                    <div>
                        <h4 style="font-size: 1.2rem; margin-bottom: 0.25rem;">Integritas & Kualitas Tinggi</h4>
                        <p style="color: var(--text-muted);">Kami selalu menjamin penulisan kode yang bersih dan aman.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 1rem; align-items: flex-start;">
                    <i class="fas fa-check-circle" style="color: var(--primary); font-size: 1.5rem; margin-top: 0.2rem;"></i>
                    <div>
                        <h4 style="font-size: 1.2rem; margin-bottom: 0.25rem;">Orientasi Pada Bisnis</h4>
                        <p style="color: var(--text-muted);">Solusi dirancang untuk meningkatkan keuntungan operasional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title" style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">Tim Kepemimpinan</h2>
    <div class="team-grid">
        @foreach($team as $member)
        <div class="team-card" data-aos="fade-up">
            <div class="team-avatar" style="background: {{ $member['color'] }};">{{ $member['initials'] }}</div>
            <h4>{{ $member['name'] }}</h4>
            <p style="color: var(--primary); font-size: 1rem; font-weight: 600;">{{ $member['position'] }}</p>
        </div>
        @endforeach
    </div>

    <div class="timeline-section" data-aos="fade-up">
        <h2 class="section-title">Tonggak Sejarah Kami</h2>
        <div class="timeline-grid">
            @foreach($milestones as $ms)
            <div class="timeline-item">
                <h3>{{ $ms['year'] }}</h3>
                <h4>{{ $ms['title'] }}</h4>
                <p>{{ $ms['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
