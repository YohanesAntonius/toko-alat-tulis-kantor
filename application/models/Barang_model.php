<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
private $_table = "tbl_brng";

    public $id_bar;
    public $nama_bar;
    public $merk_bar;
    public $jenis_bar;
    public $satuan_bar;
    public $qty;
    public $harga_bar;

    public function rules()
    {
        return [
        	['field' => 'id_bar',
            'label' => 'ID',
            'rules' => 'required'],

            ['field' => 'nama_bar',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'merk_bar',
            'label' => 'Merek',
            'rules' => 'required'],

            ['field' => 'jenis_bar',
            'label' => 'Jenis',
            'rules' => 'required'],

            ['field' => 'satuan_bar',
            'label' => 'Satuan',
            'rules' => 'required'],

            ['field' => 'qty',
            'label' => 'QTY',
            'rules' => 'required'],


            ['field' => 'harga_bar',
            'label' => 'Harga',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }


    public function hitung_barang()
    {
        return $this->db->get($this->_table)->result();
    }

    public function hitung_barkos()
    {
        return $this->db->get($this->_table)->result();
    }    

    public function hitung_barmsk()
    {
        return $this->db->get($this->_table)->result();
    }

    public function hitung_barklr()
    {
        return $this->db->get($this->_table)->result();
    }

    public function barangkos()
    {
        $this->db->select('*');
        $this->db->from('tbl_brng');
        $this->db->where(array('qty' => 0));
        return $this->db->get()->result();
    }
  





    public function getById($id_bar)
    {
        return $this->db->get_where($this->_table, ["id_bar" => $id_bar])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_bar = $post["id_bar"];
        $this->nama_bar = $post["nama_bar"];
        $this->merk_bar = $post["merk_bar"];
        $this->jenis_bar = $post["jenis_bar"];
        $this->satuan_bar = $post["satuan_bar"];
        $this->qty = $post["qty"];
        $this->harga_bar = $post["harga_bar"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_bar = $post["id_bar"];
        $this->nama_bar = $post["nama_bar"];
        $this->merk_bar = $post["merk_bar"];
        $this->jenis_bar = $post["jenis_bar"];
        $this->satuan_bar = $post["satuan_bar"];
        $this->qty = $post["qty"];
        $this->harga_bar = $post["harga_bar"];
        $this->db->update($this->_table, $this, array('id_bar' => $post['id_bar']));
    }

    public function delete($id_bar)
    {
        return $this->db->delete($this->_table, array("id_bar" => $id_bar));
    }

    public function mengurangi($tabel,$id_bar,$jumlah)
  {
    $this->db->set("jumlah","jumlah - $jumlah");
    $this->db->where('id_transaksi',$id_transaksi);
    $this->db->update($tabel);
  }

  public function tampil_data()
  {
    return $this->db->get('tbl_brng');
  }

}