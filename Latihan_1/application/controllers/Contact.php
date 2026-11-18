<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Contact extends CI_Controller {

    public function index() {
        $data['title']  = 'Kontak Pengembang';
        $data['kontak'] = [
            'email'       => 'admin@tokobuah.com',
            'kampus'      => 'Departemen Teknik Informatika, FTEIC - ITS Surabaya',
            'mata_kuliah' => 'Pemrograman Berbasis Kerangka Kerja (PBKK)',
            'website'     => 'https://fajarbaskoro.blogspot.com'
        ];
        $this->load->view('contact_view', $data);
    }
}

