<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_user_model extends CI_Model
{
private $_table = "tbl_user";

    public $id;
    public $nama;
    public $pass;
    public $level;

    public function rules()
    {
        return [
        	['field' => 'id',
            'label' => 'ID',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'pass',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'level',
            'label' => 'Level',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->pass = MD5($post["pass"]);
        $this->level = $post["level"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->pass = ($post["pass"]);
        $this->level = $post["level"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}