<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $this->load->view('backend/template/home/header');
        $this->load->view('backend/template/home/navbar');
        $this->load->view('front-end/index');
        $this->load->view('backend/template/home/footer');

    }

}
