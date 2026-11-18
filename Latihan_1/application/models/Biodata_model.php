<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_profile() {
        return [
            'nama'        => 'Nama Mahasiswa',
            'nrp'         => '5025211000',
            'departemen'  => 'Teknik Informatika',
            'fakultas'    => 'FTEIC',
            'institusi'   => 'Institut Teknologi Sepuluh Nopember (ITS)',
            'mata_kuliah' => 'Pemrograman Berbasis Kerangka Kerja (PBKK)',
            'modul'       => 'Latihan 1 : Pengenalan Framework CodeIgniter',
            'dosen'       => 'Dr. Fajar Baskoro, S.T., M.T.',
            'status'      => 'Mahasiswa Aktif'
        ];
    }

    public function get_mvc_summary() {
        return [
            'model' => 'Model menangani pengolahan database dan logika data aplikasi.',
            'view' => 'View menangani antarmuka pengguna (UI) dan tampilan yang dilihat user di browser.',
            'controller' => 'Controller menjadi penghubung/jembatan antara Model dan View untuk mengolah alur instruksi.'
        ];
    }
}

