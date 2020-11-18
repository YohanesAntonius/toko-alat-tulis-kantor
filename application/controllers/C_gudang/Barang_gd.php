<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_gd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tbl_brng"] = $this->barang_model->getAll();
        $this->load->view("gudang/product/listbar", $data);
    }

    public function add()
    {
        $tbl_brng = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($tbl_brng->rules());

        if ($validation->run()) {
            $tbl_brng->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("gudang/product/tbh_bar");
    }

    public function edit($id_bar = null)
    {
        if (!isset($id_bar)) redirect('barang');
       
        $tbl_brng = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($tbl_brng->rules());

        if ($validation->run()) {
            $tbl_brng->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tbl_brng"] = $tbl_brng->getById($id_bar);
        if (!$data["tbl_brng"]) show_404();
        
        $this->load->view("gudang/product/edit_bar", $data);
    }

    public function delete($id_bar=null)
    {
        if (!isset($id_bar)) show_404();
        
        if ($this->barang_model->delete($id_bar)) {
            redirect(site_url('c_gudang/barang'));
        }
    }

    public function brng_kluar($id_bar = null)
    {
        if (!isset($id_bar)) redirect('barang');
       
        $tbl_brng = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($tbl_brng->rules());

        if ($validation->run()) {
            $tbl_brng->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tbl_brng"] = $tbl_brng->getById($id_bar);
        if (!$data["tbl_brng"]) show_404();
        
        $this->load->view("gudang/product/barang_kluar", $data);
    }
}
