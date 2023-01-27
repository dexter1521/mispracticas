<?php

class Practicas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    public function viewEjemplo()
    {
        $this->load->view('view_practica');
    }

}