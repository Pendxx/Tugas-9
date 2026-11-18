<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Biodata extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Biodata_model');
    }

    public function index() {
        $data['title']       = 'Latihan 1 : Pengenalan Framework CodeIgniter';
        $data['greeting']    = 'Hello World! Selamat Datang di CodeIgniter 3.';
        $data['mahasiswa']   = $this->Biodata_model->get_profile();
        $data['mvc_summary'] = $this->Biodata_model->get_mvc_summary();

        $this->load->view('biodata_view', $data);
    }

    public function about() {
        $data['title']     = 'Tentang Latihan 1';
        $data['deskripsi'] = 'Halaman ini merupakan pemenuhan Latihan Router dan Controller pada modul PBKK-2.';
        $data['features']  = [
            'Arsitektur Model-View-Controller (MVC)',
            'Manajemen Routing di application/config/routes.php',
            'Passing data dinamis dari Controller ke View',
            'Desain antarmuka bersih dan responsif'
        ];

        $this->load->view('about_view', $data);
    }

    public function contact() {
        $data['title']  = 'Kontak Mahasiswa';
        $data['kontak'] = [
            'email'       => 'mahasiswa@student.its.ac.id',
            'kampus'      => 'Departemen Teknik Informatika, FTEIC - ITS Surabaya',
            'mata_kuliah' => 'Pemrograman Berbasis Kerangka Kerja (PBKK)',
            'website'     => 'https://fajarbaskoro.blogspot.com'
        ];

        $this->load->view('contact_view', $data);
    }
}

