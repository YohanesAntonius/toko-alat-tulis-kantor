<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_user=$this->login_model->auth_login($username,$password);

        if($cek_user->num_rows() > 0){ //jika login sebagai
						$data=$cek_user->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('admin');

		         }elseif($data['level']=='2'){ //akses gudang
		            $this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_id',$data['id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('gudang2');
		         }else{ //akses user biasa
		            $this->session->set_userdata('akses','3');
					$this->session->set_userdata('ses_id',$data['id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('user');
		         }

        }
        else{ $this->load->view('gagal');}
        

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
