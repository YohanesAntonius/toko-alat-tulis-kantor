<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang2 extends CI_Controller {
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
        $this->load->view("gudang2/overview", $data);
    }

    public function lsbarang()
    {
        $data["tbl_brng"] = $this->barang_model->getAll();
        $this->load->view("gudang2/product/listbar", $data);
    }

    public function tbhbarang()
    {
        $tbl_brng = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($tbl_brng->rules());

        if ($validation->run()) {
            $tbl_brng->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("gudang2/product/tbh_bar");
    }

    public function edtbarang($id_bar = null)
    {
        if (!isset($id_bar)) redirect('gudang2/lsbarang');
       
        $tbl_brng = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($tbl_brng->rules());

        if ($validation->run()) {
            $tbl_brng->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tbl_brng"] = $tbl_brng->getById($id_bar);
        if (!$data["tbl_brng"]) show_404();
        
        $this->load->view("gudang2/product/edit_bar", $data);
    }

    public function delbarang($id_bar=null)
    {
        if (!isset($id_bar)) show_404();
        
        if ($this->barang_model->delete($id_bar)) {
            redirect(site_url('gudang2/lsbarang'));
        }
    }

    public function cari(){
        $id_bar=$_GET['id_bar'];
        $cari =$this->autocomplete->cari($id_bar)->result();
        echo json_encode($cari);
    } 

    public function brng_kluar_gd($id_bar = null)
    {
        $data["tbl_brng_kluar"] = $this->barang_kluar_model->getAll();
        $this->load->view("gudang2/product/listbar_kluar", $data);
    }

     public function tbh_barang_kluar()
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
        $this->load->view("gudang2/product/tbh_bar_kluar2",$data);
    }

    public function brng_msuk_gd()
    {
        $data["tbl_brng_msuk"] = $this->barang_masuk_model->getAll();
        $this->load->view("gudang2/product/listbar_msuk", $data);
    }

    public function tbh_barang_msuk()
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
        $this->load->view("gudang2/product/tbh_bar_msuk",$data);
    }

}