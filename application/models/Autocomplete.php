<?php

class Autocomplete extends CI_Model{
     
    function tampil_data(){
        return $this->db->get('tbl_brng');
    }
    
    function cari($id){
        $query= $this->db->get_where('tbl_brng',array('id_bar'=>$id));
        return $query;
    }
}
?>
