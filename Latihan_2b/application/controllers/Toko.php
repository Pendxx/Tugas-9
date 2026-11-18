<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Toko extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function index() {
        $data['title']    = 'Toko Buah Segar - E-Commerce CodeIgniter';
        $data['produk']   = $this->Produk_model->get_all();
        $data['cart_cnt'] = count($this->Produk_model->get_cart_sample());

        $this->load->view('katalog_view', $data);
    }

    public function detail($id = 1) {
        $produk = $this->Produk_model->get_by_id($id);
        if (!$produk) {
            show_404();
        }

        $data['title']    = 'Detail Produk - ' . $produk['nama'];
        $data['p']        = $produk;
        $data['cart_cnt'] = count($this->Produk_model->get_cart_sample());

        $this->load->view('detail_view', $data);
    }

    public function keranjang() {
        $data['title'] = 'Keranjang Belanja - Toko Buah Segar';
        $data['items'] = $this->Produk_model->get_cart_sample();

        $total = 0;
        foreach ($data['items'] as $it) {
            $total += $it['subtotal'];
        }
        $data['total']    = $total;
        $data['cart_cnt'] = count($data['items']);

        $this->load->view('keranjang_view', $data);
    }

    public function checkout() {
        $data['title'] = 'Checkout & Pembayaran - Toko Buah Segar';
        $data['items'] = $this->Produk_model->get_cart_sample();

        $total = 0;
        foreach ($data['items'] as $it) {
            $total += $it['subtotal'];
        }
        $data['total']    = $total;
        $data['ongkir']   = 10000;
        $data['grand']    = $total + 10000;
        $data['cart_cnt'] = count($data['items']);

        $this->load->view('checkout_view', $data);
    }
}

