<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Overview extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('login'));
        $this->load->model("product_model");
    }

    public function index() {
        $data["products_count"] = count($this->product_model->getAll());
        $this->load->view("admin/overview", $data);
    }
}

