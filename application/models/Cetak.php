<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Model
{

  public function tampil_data()
  {
    return $this->db->get('tbl_brng');
  }

  public function tampil_masuk()
  {
    return $this->db->get('tbl_brng_msuk');
  }

  public function tampil_keluar()
  {
    return $this->db->get('tbl_brng_kluar');
  }


}