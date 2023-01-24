<?php defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//aqui cargamos nuetro modelo
		$this->load->model('Welcome_model');
		// include 
	}


	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('welcome_message');
		$this->load->view('template/footer');
	}

	public function viewAdd()
	{
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('view_registrar');
		$this->load->view('template/footer');
	}

	public function listar()
	{
		#print_r($this->Welcome_model->readData());
		$data['preregistros'] = $this->Welcome_model->readData();
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('view_listar', $data);
		$this->load->view('template/footer');
	}


	public function registrar()
	{
		#print_r($_POST);
		#var_dump($_POST);
		#print_r($this->input->post());
		#exit();
		#die();

		$datos = array(
			'nombre' => trim($this->input->post('nombre')),
			'apaterno' => $this->input->post('apaterno'),
			'amaterno' => $this->input->post('amaterno'),
			'correo' => $this->input->post('email'),
			'contrasenia' => $this->input->post('pwd')
		);

		$result = $this->Welcome_model->insert($datos);
		if ($result == TRUE) {
			# code...
			#echo 'Registro Exitoso';
			redirect('Welcome/listar');
		} else {
			echo 'Contacta a soporte';
		}
	}


	public function actualizar($id)
	{
		$data['preregistro'] = $this->Welcome_model->fetch($id);
		#	var_dump($data);exit();
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('view_editar', $data);
		$this->load->view('template/footer');
	}

	public function update()
	{

		$datos = array(
			'nombre' => trim($this->input->post('nombre')),
			'apaterno' => $this->input->post('apaterno'),
			'amaterno' => $this->input->post('amaterno'),
			'correo' => $this->input->post('email'),
			'contrasenia' => $this->input->post('pwd')
		);

		$id = $this->input->post('id_preregistro');

		$result = $this->Welcome_model->update($id, $datos);
		if ($result == TRUE) {
			
			redirect('Welcome/listar');
			
		} else {
			echo 'Contacta a soporte';
		}
	}
}
