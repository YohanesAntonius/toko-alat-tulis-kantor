<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_model");
        $this->load->library('form_validation');
	}

    public function index()
    {
        $data["tbl_brng"] = $this->barang_model->getAll();
        $this->load->view("gudang/overview", $data);
    }
}
