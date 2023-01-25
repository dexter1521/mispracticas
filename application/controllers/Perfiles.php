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

        
        if ($this->input->post('acction') == 'editar') {
            # code...
            $datos = array(
                'nombre_perfil' => trim($this->input->post('perfil'))
            );
            $id  = $this->input->post('id_perfil');
            $response = $this->Perfiles_model->update($id, $datos);
            if ($response == TRUE) {
                # code...
                echo  json_encode("Actualizado correctamente");
            } else {
    
                echo  json_encode("No fue posible realizar el resgistro, conacta a soporte");
            }

        }else{
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

        
    }

    public function listar()
    {

        $objLista =  $this->Perfiles_model->readData();
        $data = array();

        foreach ($objLista as $key) {
            $botones = '<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Acciones <span class="caret"></span></button>
			<ul class="dropdown-menu">
			<button class="btn btn-info btn-sm btn-block update" id="' . $key['id_perfil'] . ' ">Actualizar</button>
            <button class="btn btn-primart btn-sm btn-block " onclick="updateData(' . $key['id_perfil'] . ')">Actualizar2</button>
			</ul>
				  </div>';

            $row = array();
            $row[] = $key['id_perfil'];
            $row[] = $key['nombre_perfil'];
            $row[] = $botones;
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

    public function actualizar()
	{
        $idback =  $this->input->post('idback');
		$data = $this->Perfiles_model->fetch($idback);
        //print_r($data);
        echo json_encode($data);
		
	}
}
