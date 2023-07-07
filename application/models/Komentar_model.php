<?php

class Komentar_model extends CI_Model
{

  private $_comment = 'comment';

  public function addComment($id_news)
  {


    $name = $this->input->post('nama', true);
    $email = $this->input->post('email', true);
    $comment = $this->input->post('komentar', true);

    $data = [
      'id_news' => $id_news,
      'name' => $name,
      'email' => $email,
      'comment' => $comment,
      'date_created' => time()
    ];

    $this->session->set_flashdata("news_message", "<script>Swal.fire(
      'Berhasil!',
      'Komentar berhasil dikirim!',
      'success'
    )</script>");

    $this->db->insert($this->_comment, $data);
    redirect('home/detail/' . $id_news);
  }


  public function getAllKomenterByidNews($id_news)
  {


    return $this->db->get_where($this->_comment, ['id_news' => $id_news])->result_array();

  }

  public function getAmountComment($id_news)
  {

    $query = $this->db->get_where($this->_comment, ['id_news' => $id_news]);

    return $query->num_rows();
  }
}
