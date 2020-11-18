<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_gd_msuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_masuk_model");
        $this->load->model('autocomplete');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tbl_brng_msuk"] = $this->barang_masuk_model->getAll();
        $this->load->view("gudang/product/listbar_msuk", $data);
    }

    public function add()
    {
        $tbl_brng_msuk = $this->barang_masuk_model;
        $data['record']=  $this->autocomplete->tampil_data();
        $validation = $this->form_validation;
        $validation->set_rules($tbl_brng_msuk->rules());

        if ($validation->run()) {
            $tbl_brng_msuk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['kodeunik'] = $this->barang_masuk_model->buat_kode();
        $this->load->view("gudang/product/tbh_bar_msuk",$data);
    }

    // public function edit($id_bar = null)
    // {
    //     if (!isset($id_bar)) redirect('barang');
       
    //     $tbl_brng = $this->barang_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($tbl_brng->rules());

    //     if ($validation->run()) {
    //         $tbl_brng->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["tbl_brng"] = $tbl_brng->getById($id_bar);
    //     if (!$data["tbl_brng"]) show_404();
        
    //     $this->load->view("admin/product/edit_bar", $data);
    // }

    public function delete($id_masuk=null)
    {
        if (!isset($id_masuk)) show_404();
        
        if ($this->barang_masuk_model->delete($id_masuk)) {
            redirect(site_url('c_gudang/barang_msuk'));
        }
    }

    public function cari(){
        $id_bar=$_GET['id_bar'];
        $cari =$this->autocomplete->cari($id_bar)->result();
        echo json_encode($cari);
    }
    // public function brng_kluar($id_bar = null)
    // {
    //     if (!isset($id_bar)) redirect('barang');
       
    //     $tbl_brng = $this->barang_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($tbl_brng->rules());

    //     if ($validation->run()) {
    //         $tbl_brng->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["tbl_brng"] = $tbl_brng->getById($id_bar);
    //     if (!$data["tbl_brng"]) show_404();
        
    //     $this->load->view("admin/product/barang_kluar", $data);
    // }
}
