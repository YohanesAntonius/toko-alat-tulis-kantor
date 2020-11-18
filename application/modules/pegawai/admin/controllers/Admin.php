<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model("barang_model");
        $this->load->model("barang_masuk_model");
        $this->load->model("barang_kluar_model");
        $this->load->model("admin_user_model");
        $this->load->library('form_validation');
	}

	public function index()
	{

        $data["databar"] = count($this->barang_model->getAll());
        $data["datakos"] = count($this->barang_model->barangkos());
        $data["datamasuk"] = count($this->barang_masuk_model->getAll());
        $data["datakeluar"] = count($this->barang_kluar_model->getAll());
        // load view admin/overview.php
        $this->load->view("admin/overview",$data);
	}


	public function lst_usr()
	{
        $data["users"] = $this->admin_user_model->getAll();
        $this->load->view("admin/user/list_usr", $data);
	}

    public function add()
    {
        $user = $this->admin_user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/user/tambah_usr");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('barang');
       
        $user = $this->admin_user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        
        $this->load->view("admin/user/edit_usr", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->admin_user_model->delete($id)) {
            redirect(site_url('admin/lst_usr'));
        }
    }



}