<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all() {
        return [
            [
                'id'        => 1,
                'nama'      => 'Apel Fuji Segar (1 Kg)',
                'kategori'  => 'Buah Segar',
                'harga'     => 35000,
                'stok'      => 45,
                'rating'    => 4.8,
                'deskripsi' => 'Apel Fuji renyah, manis alami, dan kaya akan vitamin. Cocok untuk konsumsi harian keluarga.'
            ],
            [
                'id'        => 2,
                'nama'      => 'Jeruk Sunkist Manis (1 Kg)',
                'kategori'  => 'Buah Segar',
                'harga'     => 42000,
                'stok'      => 30,
                'rating'    => 4.7,
                'deskripsi' => 'Jeruk Sunkist import dengan bulir tebal dan rasa manis menyegarkan.'
            ],
            [
                'id'        => 3,
                'nama'      => 'Mangga Harum Manis Super (1 Kg)',
                'kategori'  => 'Buah Segar',
                'harga'     => 28000,
                'stok'      => 60,
                'rating'    => 4.9,
                'deskripsi' => 'Mangga kualitas super dengan aroma harum dan rasa manis legit.'
            ],
            [
                'id'        => 4,
                'nama'      => 'Anggur Red Globe (500 gr)',
                'kategori'  => 'Buah Segar',
                'harga'     => 45000,
                'stok'      => 20,
                'rating'    => 4.8,
                'deskripsi' => 'Anggur merah tanpa biji dengan rasa manis gurih dan tekstur renyah.'
            ],
            [
                'id'        => 5,
                'nama'      => 'Alpukat Mentega Jumbo (1 Kg)',
                'kategori'  => 'Buah Segar',
                'harga'     => 38000,
                'stok'      => 25,
                'rating'    => 4.6,
                'deskripsi' => 'Alpukat berdaging tebal, lembut, dan creamy. Sangat cocok untuk jus atau salad.'
            ],
            [
                'id'        => 6,
                'nama'      => 'Pisang Cavendish Premium (1 Sisir)',
                'kategori'  => 'Buah Segar',
                'harga'     => 25000,
                'stok'      => 50,
                'rating'    => 4.7,
                'deskripsi' => 'Pisang Cavendish dengan kematangan pas, sumber energi tinggi dan potasium.'
            ]
        ];
    }

    public function get_by_id($id) {
        $products = $this->get_all();
        foreach ($products as $p) {
            if ($p['id'] == $id) {
                return $p;
            }
        }
        return null;
    }

    public function get_cart_sample() {
        return [
            [
                'id'       => 1,
                'nama'     => 'Apel Fuji Segar (1 Kg)',
                'harga'    => 35000,
                'qty'      => 2,
                'subtotal' => 70000
            ],
            [
                'id'       => 3,
                'nama'     => 'Mangga Harum Manis Super (1 Kg)',
                'harga'    => 28000,
                'qty'      => 1,
                'subtotal' => 28000
            ]
        ];
    }
}

