<?php
class Login_model extends CI_Model{
	//cek nip dan password Admin
	function auth_login($username,$password){
		$query=$this->db->query("SELECT * FROM tbl_user WHERE id='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

}
