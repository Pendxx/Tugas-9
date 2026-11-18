<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Akademik extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Akademik_model');
    }

    public function index() {
        $data['title']     = 'Sistem Informasi Akademik (SIAKAD)';
        $data['profil']    = $this->Akademik_model->get_profil();
        $data['ringkasan'] = $this->Akademik_model->get_ringkasan();
        $data['krs']       = $this->Akademik_model->get_krs();

        $this->load->view('dashboard_view', $data);
    }

    public function mahasiswa() {
        $data['title']  = 'Data Mahasiswa - SIAKAD';
        $data['profil'] = $this->Akademik_model->get_profil();

        $this->load->view('mahasiswa_view', $data);
    }

    public function krs() {
        $data['title']  = 'Kartu Rencana Studi (KRS) - SIAKAD';
        $data['profil'] = $this->Akademik_model->get_profil();
        $data['krs']    = $this->Akademik_model->get_krs();

        $total_sks = 0;
        foreach ($data['krs'] as $item) {
            $total_sks += $item['sks'];
        }
        $data['total_sks'] = $total_sks;

        $this->load->view('krs_view', $data);
    }

    public function nilai() {
        $data['title']     = 'Transkrip & Hasil Studi - SIAKAD';
        $data['profil']    = $this->Akademik_model->get_profil();
        $data['nilai']     = $this->Akademik_model->get_nilai();
        $data['ringkasan'] = $this->Akademik_model->get_ringkasan();

        $this->load->view('nilai_view', $data);
    }

    public function dosen() {
        $data['title']  = 'Daftar Dosen Pengajar - SIAKAD';
        $data['profil'] = $this->Akademik_model->get_profil();
        $data['dosen']  = $this->Akademik_model->get_dosen();

        $this->load->view('dosen_view', $data);
    }
}
