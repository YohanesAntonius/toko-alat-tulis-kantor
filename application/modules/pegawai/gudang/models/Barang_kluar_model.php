<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_kluar_model extends CI_Model
{
private $_table = "tbl_brng_kluar";

    public $id_kluar;
    public $tgl_kluar;
    public $id_bar;
    public $qty;
    public $tujuan;

    public function rules()
    {
        return [
            ['field' => 'id_kluar',
            'label' => 'IDK',
            'rules' => 'required'],

            ['field' => 'tgl_kluar',
            'label' => 'TGL',
            'rules' => 'required'],

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


            ['field' => 'tujuan',
            'label' => 'Tujuan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_kluar)
    {
        return $this->db->get_where($this->_table, ["id_kluar" => $id_kluar])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kluar = $post["id_kluar"];
        $this->tgl_kluar = $post["tgl_kluar"];
        $this->id_bar = $post["id_bar"];
        $this->nama_bar = $post["nama_bar"];
        $this->merk_bar = $post["merk_bar"];
        $this->jenis_bar = $post["jenis_bar"];
        $this->satuan_bar = $post["satuan_bar"];
        $this->qty = $post["qty"];
        $this->tujuan = $post["tujuan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kluar = $post["id_kluar"];
        $this->tgl_kluar = $post["tgl_kluar"];
        $this->id_bar = $post["id_bar"];
        $this->qty = $post["qty"];
        $this->tujuan = $post["tujuan"];
        $this->db->update($this->_table, $this, array('id_kluar' => $post['id_kluar']));
    }

    public function delete($id_kluar)
    {
        return $this->db->delete($this->_table, array("id_kluar" => $id_kluar));
    }

//auto ID
        public function buat_kode()   {
          $this->db->select('RIGHT(tbl_brng_kluar.id_kluar,4) as kode', FALSE);
          $this->db->order_by('id_kluar','DESC');    
          $this->db->limit(1);    
          $query = $this->db->get('tbl_brng_kluar');      //cek dulu apakah ada sudah ada kode di tabel.    
          if($query->num_rows() <> 0){      
           //jika kode ternyata sudah ada.      
           $data = $query->row();      
           $kode = intval($data->kode) + 1;    
          }
          else {      
           //jika kode belum ada      
           $kode = 1;    
          }
          $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
          $kodejadi = "BK".$kodemax;    // hasilnya ODJ-9921-0001 dst.
          return $kodejadi;  
    }
//auto ID

    //     function cari($id){
    //     $query= $this->db->get_where('tbl_brng',array('id_bar'=>$id));
    //     return $query;
    // }

    public function tampil_data()
  {
    return $this->db->get('tbl_brng_kluar');
  }
}