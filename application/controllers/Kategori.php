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


        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('backend/template/admin/header', $data);
            $this->load->view('backend/template/admin/navbar');
            $this->load->view('backend/kategori/index');
            $this->load->view('backend/template/admin/footer');
        } else {

            $this->kg->tambahDataKategori();
        }
    }
    public function delete($id)
    {

        $this->db->where('id_category', $id);
        $this->db->delete('category');

        $this->session->set_flashdata('kategori_message', ' <div class="alert alert-success" id="notification" role="alert">
    Data Kategori Berhasil Di Hapus!
    </div>');

        redirect('kategori');
    }


    public function update($id)
    {

        $this->form_validation->set_rules('kategori', 'Kategori', 'required');


        if ($this->form_validation->run() == false) {

            $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
            $data['title'] = 'Data Kategori';
            $data['kategori'] = $this->kg->getAllKategori();

            $this->load->view('backend/template/admin/header', $data);
            $this->load->view('backend/template/admin/navbar');
            $this->load->view('backend/kategori/index');
            $this->load->view('backend/template/admin/footer');
        } else {

            $this->kg->updateKategoriById($id);
        }
    }
}
