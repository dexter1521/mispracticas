<?php

class Perfiles extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        #$this->load->model('Auth_model');
    }

   
    public function index()
    {
        $this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('view_perfiles');
		$this->load->view('template/footer');
    }


    public function registrar()
    {
        //var_dump($_POST);
        print_r($_POST);
    }
}