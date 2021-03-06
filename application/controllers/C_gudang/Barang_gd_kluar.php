<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_gd_kluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_kluar_model');
        $this->load->model('autocomplete');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tbl_brng_kluar"] = $this->barang_kluar_model->getAll();
        $this->load->view("gudang/product/listbar_kluar", $data);
    }

    public function add()
    {
        $tbl_brng_kluar = $this->barang_kluar_model;
        $validation = $this->form_validation;
        $validation->set_rules($tbl_brng_kluar->rules());

        if ($validation->run()) {
            $tbl_brng_kluar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }    

        $this->load->view("gudang/product/tbh_bar_kluar");
    }

    //  Autocomplete
    public function add2()
    {
        $tbl_brng_kluar = $this->barang_kluar_model;
        $data['record']=  $this->autocomplete->tampil_data();
        $validation = $this->form_validation;
        $validation->set_rules($tbl_brng_kluar->rules());

        if ($validation->run()) {
            $tbl_brng_kluar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }    
        $data['kodeunik'] = $this->barang_kluar_model->buat_kode();
        $this->load->view("gudang/product/tbh_bar_kluar2",$data);
    }
    //  Autocomplete


public function tambah()
    {
            $data['record']=  $this->autocomplete->tampil_data();
            $this->load->view('gudang/product/coba',$data);
    }

    public function cari(){
        $id_bar=$_GET['id_bar'];
        $cari =$this->autocomplete->cari($id_bar)->result();
        echo json_encode($cari);
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

    public function delete($id_kluar=null)
    {
        if (!isset($id_kluar)) show_404();
        
        if ($this->barang_kluar_model->delete($id_kluar)) {
            redirect(site_url('c_gudang/barang_kluar'));
        }
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
