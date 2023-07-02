<?php


class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        check_login();
        $this->load->model('Kategori_model', 'kg');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Data Kategori';
        $data['kategori'] = $this->kg->getAllKategori();

        $this->load->view('backend/template/admin/header', $data);
        $this->load->view('backend/template/admin/navbar');
        $this->load->view('backend/kategori/index');

        $this->load->view('backend/template/admin/footer');
    }
}
