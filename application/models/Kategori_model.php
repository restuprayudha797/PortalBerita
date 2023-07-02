<?php 


class Kategori_model extends CI_Model{

private $_kategori = 'category';

  public function getAllKategori(){

    return $this->db->get_where($this->_kategori)->result_array();

  }



}
