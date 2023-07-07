<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Berita_model', 'bm');
        $this->load->model('Komentar_model', 'km');
    }

    public function index()
    {

        $data['beritaTerbaru'] = $this->bm->getAllNews();
        $data['populer'] = $this->bm->getNewsPopuler();


        $this->load->view('backend/template/home/header', $data);
        $this->load->view('backend/template/home/navbar');
        $this->load->view('front-end/index');
        $this->load->view('backend/template/home/footer');
    }


    public function contactUs()
    {
        $this->load->view('backend/template/home/header');
        $this->load->view('backend/template/home/navbar');
        $this->load->view('front-end/contactUs');
        $this->load->view('backend/template/home/footer');
    }

    public function detail($id)
    {


        $data['detail'] = $this->bm->getNewsById($id);
        $data['populer'] = $this->bm->getNewsPopuler();
        $data['komentar'] = $this->km->getAllKomenterByidNews($id);
        $data['jumlah_komentar'] = $this->km->getAmountComment($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Nama', 'required|valid_email');
        $this->form_validation->set_rules('komentar', 'Nama', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('backend/template/home/header', $data);
            $this->load->view('backend/template/home/navbar');
            $this->load->view('front-end/detail');
            $this->load->view('backend/template/home/footer');
        }else{

            $this->km->addComment($id);
        }
    }
}
