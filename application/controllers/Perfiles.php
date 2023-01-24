<?php

class Perfiles extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Perfiles_model');
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
        //print_r($_POST);
        //die();
        //exit();

        //echo $this->input->post('perfil');

        $datos = array(
			'nombre_perfil' => trim($this->input->post('perfil'))
		);

		$response = $this->Perfiles_model->insert($datos);
		if ($response == TRUE) {
			# code...
            echo  json_encode("Regitro exitoso");

		} else {

			echo  json_encode("No fue posible realizar el resgistro, conacta a soporte");
		}


    }

    public function listar()
	{
		
		$response =  $this->Perfiles_model->readData();
        echo json_encode($response);
	}

}