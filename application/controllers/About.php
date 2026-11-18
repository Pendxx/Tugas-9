<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class About extends CI_Controller {

    public function index() {
        $data['title']     = 'Tentang Toko Buah - SB Admin';
        $data['deskripsi'] = 'Sistem Toko Buah ini dibuat menggunakan Framework CodeIgniter 3 dengan template SB Admin dan Bootstrap.';
        $data['features']  = [
            '2-1: Instalasi & Konfigurasi CI',
            '2-2: Fungsi Router dan Controller (About & Contact)',
            '2-3: Integrasi Bootstrap pada View',
            '2-4: Template SB Admin & Partials View',
            '2-5: Model dan CRUD Data Produk',
            '2-6: Penanganan File Upload Gambar',
            '2-7: Mengatur Akses User & Session Login'
        ];
        $this->load->view('about_view', $data);
    }
}

