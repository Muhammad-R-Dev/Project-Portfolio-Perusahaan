@extends('layouts.app')

@section('title', 'Kontak')

@push('styles')
<style>
    .contact-hero {
        padding: 150px 0 60px;
        text-align: center;
    }
    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 3rem;
        margin-bottom: 5rem;
    }
    .contact-info-card {
        background: var(--gradient);
        border-radius: 16px;
        padding: 3rem 2rem;
        color: white;
    }
    .contact-form-card {
        background: var(--card-bg);
        border: 1px solid var(--border);
        border-radius: 16px;
        padding: 3rem;
    }
    .form-group { margin-bottom: 1.5rem; }
    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        font-size: 0.9rem;
        color: var(--text);
    }
    .form-control {
        width: 100%;
        padding: 0.8rem 1rem;
        background: rgba(0,0,0,0.2);
        border: 1px solid var(--border);
        border-radius: 8px;
        color: white;
        font-family: inherit;
        transition: all 0.3s;
    }
    .form-control:focus {
        outline: none;
        border-color: var(--primary-light);
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
    }
    textarea.form-control { min-height: 150px; resize: vertical; }
    .info-item {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
    }
    .info-icon {
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .text-danger { color: #FCA5A5; font-size: 0.85rem; margin-top: 0.25rem; }
    @media (max-width: 768px) {
        .contact-container { grid-template-columns: 1fr; }
        .contact-form-card { padding: 2rem 1.5rem; }
    }
</style>
@endpush

@section('content')
<section class="contact-hero">
    <div class="container">
        <span class="section-badge" data-aos="fade-down">Hubungi Kami</span>
        <h1 class="section-title" data-aos="fade-up" data-aos-delay="100">
            Mari Diskusikan <span class="gradient-text">Proyek Anda</span>
        </h1>
        <p class="section-subtitle mx-auto" data-aos="fade-up" data-aos-delay="200">
            Tim ahli kami siap membantu menganalisis kebutuhan IT Anda dan memberikan solusi teknologi terbaik.
        </p>
    </div>
</section>

<section>
    <div class="container">
        <div class="contact-container">
            <!-- Info Card -->
            <div class="contact-info-card" data-aos="fade-right">
                <h3 style="margin-bottom: 2rem; font-size: 1.5rem;">Informasi Kontak</h3>
                
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4 style="margin-bottom: 0.25rem; font-size: 1rem;">Kantor Pusat</h4>
                        <p style="opacity: 0.9; font-size: 0.9rem;">Jl. Sudirman No. 45<br>Jakarta Pusat, DKI Jakarta 10210</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4 style="margin-bottom: 0.25rem; font-size: 1rem;">Email</h4>
                        <p style="opacity: 0.9; font-size: 0.9rem;">info@astabrata.co.id<br>support@astabrata.co.id</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-phone"></i></div>
                    <div>
                        <h4 style="margin-bottom: 0.25rem; font-size: 1rem;">Telepon</h4>
                        <p style="opacity: 0.9; font-size: 0.9rem;">+62 21 5551234<br>+62 811 9999 888 (WhatsApp)</p>
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="contact-form-card" data-aos="fade-left">
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="John Doe">
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="0812...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="john@example.com">
                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Subjek</label>
                        <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Konsultasi Pengembangan Aplikasi Web">
                        @error('subject') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Pesan</label>
                        <textarea name="message" class="form-control" placeholder="Ceritakan detail kebutuhan atau pertanyaan Anda...">{{ old('message') }}</textarea>
                        @error('message') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; margin-top: 1rem;">
                        Kirim Pesan <i class="fas fa-paper-plane" style="margin-left: 0.5rem;"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
