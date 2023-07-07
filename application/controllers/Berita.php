<?php

class Berita extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();

    check_login();
    
    $this->load->model('Berita_model', 'bm');
    $this->load->model('Kategori_model', 'kg');
  }

  public function index()
  {

    $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
    $data['title'] = 'Data Berita';
    $data['berita'] = $this->bm->getAllNews();
    $data['kategori'] = $this->kg->getAllKategori();


    if ($this->form_validation->run() == false) {

      $this->load->view('backend/template/admin/header', $data);
      $this->load->view('backend/template/admin/navbar');
      $this->load->view('backend/berita/index');
      $this->load->view('backend/template/admin/footer');
    } else {


      echo 2;
    }
  }

  public function addNews()
  {

    $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
    $data['title'] = 'Tambah Berita';
    $data['kategori'] = $this->kg->getAllKategori();

    $this->form_validation->set_rules('id_category', 'Kategori', 'required');
    $this->form_validation->set_rules('title', 'Judul', 'required');
    $this->form_validation->set_rules('description', 'Deskripsi', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('backend/template/admin/header', $data);
      $this->load->view('backend/template/admin/navbar');
      $this->load->view('backend/berita/tambahBerita');
      $this->load->view('backend/template/admin/footer');
    } else {

      $this->bm->insertDataNews($data['user']['id_user']);
    }
  }


  public function delete($id_news)
  {


    $this->db->where('id_news', $id_news);
    $this->db->delete('news');

    $this->session->set_flashdata('news_message', ' <div class="alert alert-success" id="notification" role="alert">
    Data Berita Berhasil Di Hapus!
    </div>');

    redirect('berita');
  }

  public function update($id_news)
  {

    $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
    $data['title'] = 'Data Berita';
    $data['berita'] = $this->bm->getAllNews();
    $data['kategori'] = $this->kg->getAllKategori();


    $this->form_validation->set_rules('id_category', 'Kategori', 'required');
    $this->form_validation->set_rules('title', 'Judul', 'required');
    $this->form_validation->set_rules('description', 'Deskripsi', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('backend/template/admin/header', $data);
      $this->load->view('backend/template/admin/navbar');
      $this->load->view('backend/berita/index');
      $this->load->view('backend/template/admin/footer');
    } else {

      $this->bm->updateBerita($id_news, $data['user']['id_user']);
      
    }
  }
}
