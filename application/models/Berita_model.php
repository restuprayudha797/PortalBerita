<?php

class Berita_model extends CI_Model
{



  public function getAllNews()
  {
    return $this->db->query("SELECT * FROM news, category, users WHERE news.id_category = category.id_category AND news.id_user = users.id_user")->result_array();
  }

  public function insertDataNews($id_user)
  {

    $id_category = $this->input->post('id_category');
    $title = $this->input->post('title');
    $description = $this->input->post('description');


    // Cek apakah user ada mengupload gambar
    $upload_bukti =   $_FILES['image']['name'];

    $image = 'kosong';

    if ($upload_bukti) {

      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size']     = '3024';
      $config['upload_path'] = './UploadImage';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {

        $image = $this->upload->data('file_name');
      } else {

        $this->session->set_flashdata('news_message', ' <div class="alert alert-danger" id="notification" role="alert">
      Data Berita Gagal Diambah!
      </div>');
        redirect('berita/addNews');
      }
    }

    // akhir dari pengecekan gambar    

    $data = [


      'id_category' => $id_category,
      'id_user' => $id_user,
      'title' => $title,
      'description' => $description,
      'image' => $image,
      'date_created' => time()



    ];

    $this->db->insert('news', $data);

    $this->session->set_flashdata('news_message', ' <div class="alert alert-success" id="notification" role="alert">
      Data Berita Berhasil Diambah!
      </div>');
    redirect('berita');
  }

  public function updateBerita($id_news, $id_user)
  {

    $id_category = $this->input->post('id_category');
    $title = $this->input->post('title');
    $description = $this->input->post('description');
    $gambar_lama = $this->input->post('gambar_lama');

    // cek apakah ada gambar yang di upload

    $upload_gambar =   $_FILES['image']['name'];

    if ($upload_gambar) {

      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size']     = '3024';
      $config['upload_path'] = './UploadImage';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {

        if ($gambar_lama != 'default.jpg') {

          unlink(FCPATH . 'UploadImage/' . $gambar_lama);
        }

        $new_image = $this->upload->data('file_name');

        $this->db->set('image', $new_image);
      } else {

        echo $this->upload->display_errors();
      }
    }


    $this->db->set('id_category', $id_category);
    $this->db->set('id_user', $id_user);
    $this->db->set('title', $title);
    $this->db->set('description', $description);

    $this->db->where('id_news', $id_news);
    $this->db->update('news');


    $this->session->set_flashdata('news_message', ' <div class="alert alert-success" id="notification" role="alert">
    Data Berita Berhasil Diupdate!
    </div>');
    redirect('berita');
    // akhir dari pengecakan gambar

  }

  public function getNewsById($id)
  {

    return $this->db->query("SELECT * FROM news, category, users WHERE news.id_category = category.id_category AND news.id_user = users.id_user AND news.id_news = $id")->row_array();
  }

  public function getNewsPopuler()
  {

    return $this->db->query("SELECT * FROM news, category, users WHERE news.id_category = category.id_category AND news.id_user = users.id_user AND category.category = 'Populer' LIMIT 5")->result_array();
  }
}
