<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        $services = [
            [
                'icon' => 'fas fa-code',
                'title' => 'Pengembangan Software',
                'desc' => 'Solusi perangkat lunak custom yang dirancang sesuai kebutuhan bisnis Anda, dari aplikasi web hingga sistem enterprise.',
            ],
            [
                'icon' => 'fas fa-mobile-alt',
                'title' => 'Aplikasi Mobile',
                'desc' => 'Pengembangan aplikasi mobile iOS dan Android yang intuitif, responsif, dan berperforma tinggi.',
            ],
            [
                'icon' => 'fas fa-cloud',
                'title' => 'Cloud & DevOps',
                'desc' => 'Migrasi cloud, infrastruktur as code, CI/CD pipeline, dan manajemen server untuk bisnis modern.',
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Keamanan Siber',
                'desc' => 'Audit keamanan, penetration testing, dan implementasi sistem keamanan untuk melindungi aset digital Anda.',
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Business Intelligence',
                'desc' => 'Analitik data dan dashboard interaktif untuk pengambilan keputusan bisnis yang lebih cerdas.',
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Konsultasi IT',
                'desc' => 'Konsultasi strategis teknologi informasi untuk transformasi digital bisnis Anda.',
            ],
        ];

        $stats = [
            ['value' => '150+', 'label' => 'Proyek Selesai'],
            ['value' => '80+', 'label' => 'Klien Puas'],
            ['value' => '8+', 'label' => 'Tahun Pengalaman'],
            ['value' => '30+', 'label' => 'Tim Profesional'],
        ];

        $testimonials = [
            [
                'name' => 'Budi Santoso',
                'position' => 'CEO, PT Maju Bersama',
                'text' => 'PT Asta Brata Teknologi memberikan solusi luar biasa untuk sistem ERP kami. Tim mereka sangat profesional dan hasilnya melebihi ekspektasi.',
                'avatar' => 'BS',
            ],
            [
                'name' => 'Siti Rahayu',
                'position' => 'CTO, Startup Fintech',
                'text' => 'Pengembangan aplikasi mobile kami selesai tepat waktu dengan kualitas tinggi. Sangat merekomendasikan Asta Brata untuk proyek teknologi.',
                'avatar' => 'SR',
            ],
            [
                'name' => 'Arif Wijaya',
                'position' => 'Direktur, CV Teknindo',
                'text' => 'Layanan konsultasi IT mereka membantu kami bertransformasi digital dengan efisien. Partner teknologi terpercaya!',
                'avatar' => 'AW',
            ],
        ];

        return view('pages.home', compact('services', 'stats', 'testimonials'));
    }

    public function about()
    {
        $team = [
            [
                'name' => 'Ir. Hendra Kusuma, M.T.',
                'position' => 'CEO & Founder',
                'desc' => 'Lebih dari 15 tahun pengalaman di industri teknologi informasi dan transformasi digital perusahaan.',
                'initials' => 'HK',
                'color' => '#4F46E5',
            ],
            [
                'name' => 'Dr. Rina Marlina, S.Kom.',
                'position' => 'CTO',
                'desc' => 'Ahli arsitektur sistem dan cloud computing dengan rekam jejak membangun infrastruktur skala enterprise.',
                'initials' => 'RM',
                'color' => '#7C3AED',
            ],
            [
                'name' => 'Dimas Prasetyo, S.T.',
                'position' => 'Lead Developer',
                'desc' => 'Full-stack developer berpengalaman dalam React, Laravel, dan ekosistem cloud modern.',
                'initials' => 'DP',
                'color' => '#0891B2',
            ],
            [
                'name' => 'Anita Sari, M.M.',
                'position' => 'Business Development',
                'desc' => 'Spesialis strategi bisnis dan pengembangan kemitraan teknologi untuk pertumbuhan perusahaan.',
                'initials' => 'AS',
                'color' => '#059669',
            ],
        ];

        $milestones = [
            ['year' => '2016', 'title' => 'Perusahaan Didirikan', 'desc' => 'PT Asta Brata Teknologi resmi berdiri di Jakarta dengan fokus pengembangan software.'],
            ['year' => '2018', 'title' => 'Ekspansi Layanan', 'desc' => 'Memperluas layanan ke cloud computing dan mobile development.'],
            ['year' => '2020', 'title' => 'Sertifikasi ISO 9001', 'desc' => 'Meraih sertifikasi manajemen mutu internasional ISO 9001:2015.'],
            ['year' => '2022', 'title' => '100 Klien Aktif', 'desc' => 'Mencapai milestone 100 klien aktif dari berbagai sektor industri.'],
            ['year' => '2024', 'title' => 'AI & Inovasi', 'desc' => 'Membuka divisi AI & Machine Learning untuk solusi cerdas masa depan.'],
        ];

        $values = [
            ['icon' => 'fas fa-star', 'title' => 'Kualitas', 'desc' => 'Setiap produk yang kami hasilkan melewati standar kualitas ketat untuk memastikan kepuasan klien.'],
            ['icon' => 'fas fa-handshake', 'title' => 'Integritas', 'desc' => 'Kami menjaga kepercayaan klien dengan transparansi dan kejujuran dalam setiap aspek kerja sama.'],
            ['icon' => 'fas fa-lightbulb', 'title' => 'Inovasi', 'desc' => 'Selalu mengadopsi teknologi terkini untuk memberikan solusi yang relevan dan kompetitif.'],
            ['icon' => 'fas fa-users', 'title' => 'Kolaborasi', 'desc' => 'Bekerja sebagai tim yang solid bersama klien demi mencapai tujuan bersama.'],
        ];

        return view('pages.about', compact('team', 'milestones', 'values'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|min:10',
        ], [
            'name.required'    => 'Nama wajib diisi.',
            'email.required'   => 'Email wajib diisi.',
            'email.email'      => 'Format email tidak valid.',
            'subject.required' => 'Subjek wajib diisi.',
            'message.required' => 'Pesan wajib diisi.',
            'message.min'      => 'Pesan minimal 10 karakter.',
        ]);

        // In production, send email here
        // Mail::to('info@astabrata.co.id')->send(new ContactMail($validated));

        return redirect()->route('contact')->with('success', 'Terima kasih! Pesan Anda telah berhasil dikirim. Tim kami akan menghubungi Anda segera.');
    }
}
