<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_model");
        $this->load->model("tambahan");
        $this->load->model("cetak");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tbl_brng"] = $this->barang_model->getAll();
        $this->load->view("admin/product/listbar", $data);
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

        $this->load->view("admin/product/tbh_bar");
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
        
        $this->load->view("admin/product/edit_bar", $data);
    }

    public function delete($id_bar=null)
    {
        if (!isset($id_bar)) show_404();
        
        if ($this->barang_model->delete($id_bar)) {
            redirect(site_url('barang'));
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
        
        $this->load->view("admin/product/barang_kluar", $data);
    }

    public function print(){
        $data['tbl_brng'] = $this->cetak->tampil_data('tbl_brng')->result();
        // $data['tbl_brng'] = $this->barang_model->getAll('tbl_brng');
        $this->load->view('admin/product/print_barang',$data);
    }

    public function barkos()
    {
        $data["tbl_brng"] = $this->barang_model->barangkos();
        $this->load->view("admin/product/listbarkos", $data);
    }

    

    public function add_merk()
    {
        $data["tbl_brng"] = $this->barang_model->barangkos();
        $this->load->view("admin/product/tbh_merk");
    }


    // public function barkos()
    // {
    //     //This gives you the user count using the count function which returns and integer of the exact rows returned from the query.
    //     $this->barbar["bar_count"] = count($this->barang_model->getAll());
    //     // $this->data['users'] = $this->user_model->getUsers();
    //     //This gives you the returned result array.
    //     // $this->data['users'] = $this->user_model->getUsers();

    //     // $data["tbl_brng"] = $this->barang_model->barangkos();
    //     $this->load->view("admin/overview", $barbar);
    // }

}
