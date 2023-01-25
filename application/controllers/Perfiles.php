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
		
		$objLista =  $this->Perfiles_model->readData();
        $data = array();

		foreach ($objLista as $key) {
            $eliminar = '<div class="btn-group"> <a href="#" class="btn btn-danger "><span class="glyphicon glyphicon-trash"></span></a>';
            $actualizar = '<a href="#" class="btn btn-warning "><span class="glyphicon glyphicon-edit"></span></a> </div>';
			$row = array();
			$row[] = $key['id_perfil'];
			$row[] = $key['nombre_perfil'];
            $row[] = $eliminar.$actualizar;
			$data[] = $row;
		}
        $result  = array('data' => $data);
        echo json_encode($result);

		/* foreach ($objLista as $key):
            $eliminar = '<a href="#" class="alert alert-info"><span class="glyphicon glyphicon-envelope"></span></a>';
            $actualizar = '<a href="#" class="alert alert-warning"><span class="glyphicon glyphicon-envelope"></span></a>';
            $arreglo[] = array(
                $id_perfil = $key['id_perfil'],
			    $nombre_perfil = $key['nombre_perfil'],
                $acciones = $eliminar
            );
        endforeach;
        $result  = array('data' => $arreglo);
        echo json_encode($result); */
	}

}