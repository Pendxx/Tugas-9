<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_profil() {
        return [
            'nama'            => 'Nama Mahasiswa',
            'nrp'             => '5025211000',
            'departemen'      => 'Teknik Informatika',
            'fakultas'        => 'Fakultas Teknologi Elektro dan Informatika Cerdas',
            'angkatan'        => '2023',
            'semester'        => 5,
            'dosen_wali'      => 'Prof. Dr. Ir. Bambang Hermanto, M.Sc.',
            'status_akademik' => 'Aktif'
        ];
    }

    public function get_ringkasan() {
        return [
            'ipk'          => '3.82',
            'ips_terakhir' => '3.88',
            'sks_tempuh'   => 92,
            'sks_lulus'    => 92,
            'sks_semester' => 20
        ];
    }

    public function get_krs() {
        return [
            [
                'kode'    => 'IF184501',
                'matkul'  => 'Pemrograman Berbasis Kerangka Kerja',
                'sks'     => 3,
                'kelas'   => 'A',
                'dosen'   => 'Dr. Budi Santoso, S.Kom., M.Kom.',
                'hari'    => 'Senin',
                'jam'     => '07.30 - 10.00',
                'ruangan' => 'IF-105'
            ],
            [
                'kode'    => 'IF184502',
                'matkul'  => 'Keamanan Informasi',
                'sks'     => 3,
                'kelas'   => 'B',
                'dosen'   => 'Dr. Mia Kusuma, S.T., M.T.',
                'hari'    => 'Selasa',
                'jam'     => '10.00 - 12.30',
                'ruangan' => 'IF-106'
            ],
            [
                'kode'    => 'IF184503',
                'matkul'  => 'Kecerdasan Buatan',
                'sks'     => 3,
                'kelas'   => 'A',
                'dosen'   => 'Prof. Dr. Ir. Bambang Hermanto, M.Sc.',
                'hari'    => 'Rabu',
                'jam'     => '13.30 - 16.00',
                'ruangan' => 'IF-104'
            ],
            [
                'kode'    => 'IF184504',
                'matkul'  => 'Rekayasa Perangkat Lunak',
                'sks'     => 4,
                'kelas'   => 'C',
                'dosen'   => 'Dr. Budi Prasetyo, S.T., M.Cs.',
                'hari'    => 'Kamis',
                'jam'     => '08.00 - 11.30',
                'ruangan' => 'IF-102'
            ],
            [
                'kode'    => 'IF184505',
                'matkul'  => 'Grafika Komputer',
                'sks'     => 3,
                'kelas'   => 'A',
                'dosen'   => 'Ir. Bambang Wijaya, M.Kom.',
                'hari'    => 'Jumat',
                'jam'     => '07.30 - 10.00',
                'ruangan' => 'Lab Grafika'
            ],
            [
                'kode'    => 'IF184506',
                'matkul'  => 'Manajemen Proyek Perangkat Lunak',
                'sks'     => 4,
                'kelas'   => 'A',
                'dosen'   => 'Mia Rahmawati, S.Kom., M.Sc.',
                'hari'    => 'Jumat',
                'jam'     => '13.30 - 17.00',
                'ruangan' => 'IF-103'
            ]
        ];
    }

    public function get_dosen() {
        return [
            [
                'nip'        => '197503121999031001',
                'nama'       => 'Dr. Budi Santoso, S.Kom., M.Kom.',
                'departemen' => 'Teknik Informatika',
                'keahlian'   => 'Rekayasa Perangkat Lunak & Web Framework',
                'email'      => 'budi.santoso@univ.ac.id',
                'ruangan'    => 'Gedung IF Lantai 2 (IF-204)',
                'status'     => 'Aktif Mengajar'
            ],
            [
                'nip'        => '198207182008122003',
                'nama'       => 'Dr. Mia Kusuma, S.T., M.T.',
                'departemen' => 'Teknik Informatika',
                'keahlian'   => 'Keamanan Informasi & Jaringan Komputer',
                'email'      => 'mia.kusuma@univ.ac.id',
                'ruangan'    => 'Gedung IF Lantai 2 (IF-208)',
                'status'     => 'Aktif Mengajar'
            ],
            [
                'nip'        => '196811251994021002',
                'nama'       => 'Prof. Dr. Ir. Bambang Hermanto, M.Sc.',
                'departemen' => 'Teknik Informatika',
                'keahlian'   => 'Kecerdasan Buatan & Manajemen Proyek TI',
                'email'      => 'bambang.h@univ.ac.id',
                'ruangan'    => 'Gedung IF Lantai 3 (IF-301)',
                'status'     => 'Aktif Mengajar'
            ],
            [
                'nip'        => '198504092010121004',
                'nama'       => 'Dr. Budi Prasetyo, S.T., M.Cs.',
                'departemen' => 'Teknik Informatika',
                'keahlian'   => 'Basis Data & Sistem Terdistribusi',
                'email'      => 'budi.p@univ.ac.id',
                'ruangan'    => 'Gedung IF Lantai 2 (IF-202)',
                'status'     => 'Aktif Mengajar'
            ],
            [
                'nip'        => '198809142014042001',
                'nama'       => 'Mia Rahmawati, S.Kom., M.Sc.',
                'departemen' => 'Teknik Informatika',
                'keahlian'   => 'Interaksi Manusia dan Komputer & UI/UX',
                'email'      => 'mia.rahma@univ.ac.id',
                'ruangan'    => 'Gedung IF Lantai 3 (IF-305)',
                'status'     => 'Aktif Mengajar'
            ],
            [
                'nip'        => '197906202005011003',
                'nama'       => 'Ir. Bambang Wijaya, M.Kom.',
                'departemen' => 'Teknik Informatika',
                'keahlian'   => 'Grafika Komputer & Pengolahan Citra Digital',
                'email'      => 'bambang.w@univ.ac.id',
                'ruangan'    => 'Gedung IF Lantai 2 (Lab Grafika)',
                'status'     => 'Aktif Mengajar'
            ]
        ];
    }

    public function get_nilai() {
        return [
            [
                'semester' => 4,
                'matkul'   => 'Pemrograman Berorientasi Objek',
                'sks'      => 3,
                'nilai'    => 'A',
                'angka'    => 4.0
            ],
            [
                'semester' => 4,
                'matkul'   => 'Struktur Data & Algoritma',
                'sks'      => 4,
                'nilai'    => 'A',
                'angka'    => 4.0
            ],
            [
                'semester' => 4,
                'matkul'   => 'Basis Data',
                'sks'      => 4,
                'nilai'    => 'AB',
                'angka'    => 3.5
            ],
            [
                'semester' => 4,
                'matkul'   => 'Sistem Operasi',
                'sks'      => 4,
                'nilai'    => 'A',
                'angka'    => 4.0
            ],
            [
                'semester' => 4,
                'matkul'   => 'Jaringan Komputer',
                'sks'      => 4,
                'nilai'    => 'AB',
                'angka'    => 3.5
            ]
        ];
    }
}
