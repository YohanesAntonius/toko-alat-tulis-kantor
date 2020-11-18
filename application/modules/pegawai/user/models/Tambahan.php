<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahan extends CI_Model
{

  public function tampil_merk()
  {
    return $this->db->get('merk');
  }

  public function tampil_jenis()
  {
    return $this->db->get('jenis');
  }

  public function tampil_satuan()
  {
    return $this->db->get('satuan');
  }


}