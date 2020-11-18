<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_model");
        $this->load->model('barang_kluar_model');
        $this->load->model("barang_masuk_model");
        $this->load->model('autocomplete');
        $this->load->library('form_validation');
	}

    public function index()
    {
        $data["tbl_brng"] = $this->barang_model->getAll();
        $this->load->view("user/overview", $data);
    }

    public function lsbarang()
    {
        $data["tbl_brng"] = $this->barang_model->getAll();
        $this->load->view("user/product/listbar", $data);
    }

    // public function cari(){
    //     $id_bar=$_GET['id_bar'];
    //     $cari =$this->autocomplete->cari($id_bar)->result();
    //     echo json_encode($cari);
    // } 

    public function brng_kluar_usr($id_bar = null)
    {
        $data["tbl_brng_kluar"] = $this->barang_kluar_model->getAll();
        $this->load->view("user/product/listbar_kluar", $data);
    }

    public function brng_msuk_usr()
    {
        $data["tbl_brng_msuk"] = $this->barang_masuk_model->getAll();
        $this->load->view("user/product/listbar_msuk", $data);
    }
}