<?php

namespace App\Http\Controllers;

class LegalPageController extends Controller
{
    public function privacy()
    {
        return view('legal', [
            'page' => 'privacy',
            'title' => 'Kebijakan Privasi',
            'description' => 'Kebijakan privasi Mora Bangun Solutions tentang data pengunjung, cookies, analytics, dan iklan Google AdSense.',
        ]);
    }

    public function terms()
    {
        return view('legal', [
            'page' => 'terms',
            'title' => 'Syarat dan Ketentuan',
            'description' => 'Syarat penggunaan situs, artikel, dan layanan Mora Bangun Solutions.',
        ]);
    }

    public function disclaimer()
    {
        return view('legal', [
            'page' => 'disclaimer',
            'title' => 'Disclaimer Editorial',
            'description' => 'Batas penggunaan informasi teknologi, bisnis, regulasi, dan konten editorial Mora Bangun Solutions.',
        ]);
    }
}
