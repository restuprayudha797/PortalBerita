<?php


class Kategori_model extends CI_Model
{

  private $_kategori = 'category';

  public function getAllKategori()
  {

    return $this->db->get_where($this->_kategori)->result_array();
  }

  public function tambahDataKategori()
  {

    $category = $this->input->post('kategori', true);

    $data = [

      "category" => $category

    ];

    $this->db->insert($this->_kategori, $data);

    $this->session->set_flashdata('kategori_message', ' <div class="alert alert-success" id="notification" role="alert">
    Data Kategori Berhasil Di Tambah!
    </div>');

    redirect('kategori');
  }

  public function updateKategoriById($id)
  {

    $category = $this->input->post('kategori', true);

    $data = [

      "category" => $category

    ];

    $this->db->where('id_category', $id);
    $this->db->update('category', $data);

    $this->session->set_flashdata('kategori_message', ' <div class="alert alert-success" id="notification" role="alert">
Data Kategori Berhasil Diubah!
</div>');

    redirect('kategori');
  }
}
