@extends('layouts.app')

@push('styles')
<style>
    .contact-wrap {
        display: grid; grid-template-columns: 1fr 1.2fr; gap: 4rem;
        background: white; border-radius: var(--radius-xl);
        margin: 2rem; padding: 4rem; border: 1px solid var(--border);
    }
    .contact-info {
        background: var(--bg-surface); padding: 4rem; border-radius: var(--radius-lg);
    }
    .contact-info h2 { font-size: 2.5rem; margin-bottom: 2rem; }
    .info-item { display: flex; gap: 1.5rem; margin-bottom: 2.5rem; align-items: flex-start; }
    .info-icon {
        width: 50px; height: 50px; background: white; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.25rem; color: var(--text-main); flex-shrink: 0;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .info-item h4 { font-size: 1.2rem; margin-bottom: 0.5rem; }
    .info-item p { color: var(--text-muted); font-size: 1rem; }

    .form-wrap { padding: 2rem 0; }
    .form-wrap h2 { font-size: 2.5rem; margin-bottom: 3rem; }
    .form-group { margin-bottom: 2rem; }
    .form-control {
        width: 100%; padding: 1.25rem; background: var(--bg-surface);
        border: 1px solid var(--border); border-radius: var(--radius-md);
        font-family: inherit; font-size: 1rem; transition: all 0.3s;
    }
    .form-control:focus { outline: none; border-color: var(--primary); background: white; }
    
    @media(max-width: 992px) {
        .contact-wrap { grid-template-columns: 1fr; padding: 2rem; margin: 1rem; }
        .contact-info { padding: 3rem 2rem; }
    }
</style>
@endpush

@section('content')
<div class="container" style="max-width: 1400px; padding: 0;">
    <div class="contact-wrap">
        <div class="contact-info" data-aos="fade-right">
            <h2>Informasi Kontak</h2>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4>Lokasi Kantor</h4>
                    <p>Jl. Sudirman No. 45<br>Jakarta Pusat, DKI Jakarta 10210</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-phone"></i></div>
                <div>
                    <h4>Telepon & WhatsApp</h4>
                    <p>+62 21 5551234<br>+62 811 9999 888</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <h4>Alamat Email</h4>
                    <p>info@astabrata.co.id<br>support@astabrata.co.id</p>
                </div>
            </div>
        </div>

        <div class="form-wrap" data-aos="fade-left">
            <h2>Tinggalkan Pesan</h2>
            @if(session('success'))
                <div style="background: #E6F4EA; color: #137333; padding: 1.5rem; border-radius: var(--radius-md); margin-bottom: 2rem; font-weight: 600;">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Subjek Pesan" required>
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" rows="6" placeholder="Ceritakan detail proyek atau pertanyaan Anda..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="padding: 1.25rem 3rem; font-size: 1.1rem;">Kirim Pesan Sekarang</button>
            </form>
        </div>
    </div>
</div>
@endsection
