<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuarios extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_usuarios');
      $this->load->helper('form');
      
      
    } 

	
    public function index() {
		$sesiotemp = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in')){
			if($sesiotemp['id_rol']!=4){
				
			
				$sesio = $this->session->userdata('logged_in');
				$data = $this->modelo_usuarios->getUsuarios();
				$dades = array(
						'sesio' => $sesio,
						'data' => $data);
				if($data == null) {
					$this->load->view('usuarios', $dades);	
				}
				else {
					$this->load->view('usuarios', $dades);
				}
			}
			else{
			$this->load->view('error');}
		}
		else{
				redirect('login', 'refresh');
			}
		
		
    	
	}

	public function insertarUsuario() {
		$sesiotemp = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in')){
			//aqui mirare si el loguejat es admin o director
		//if($this->session->userdata('admin o director (codi inventat)') //si es admin o director 
		//{
			
			if($sesiotemp['id_rol']!=4){
				
			
			
			//podra fer els inserts
			
			$this->form_validation->set_rules('Nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('Apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('Rol', 'Rol', 'required');
			$this->form_validation->set_rules('Fecha', 'Fecha', 'required');
			$this->form_validation->set_rules('Contraseña', 'Contraseña', 'required');
			$this->form_validation->set_message('required', 'El campo %s es obligado');
	
			if($this->form_validation->run() == FALSE) {
				
				$data = null;
				$sesio = $this->session->userdata('logged_in');
				$dades = array(
						'sesio' => $sesio,
						'data' => $data);
				
				$this->load->view('insertarUsuarios', $dades);
			}
			else {
				$nombre = $this->input->post('Nombre');
				$apellido = $this->input->post('Apellido');
				$email = $this->input->post('Email');
				$rol = $this->input->post('Rol');
				$fechanacimiento = $this->input->post('Fecha');
				$contraseña = $this->input->post('Contraseña');
				$contador = $this->input->post('contador'); 
				$this->modelo_usuarios->insertarUsuario($nombre, $apellido, $email,$rol ,$fechanacimiento, $contraseña);
				redirect('usuarios');
			}
		}
	}
}

public function insertarUsuarios() {
		$sesiotemp = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in')){
			//aqui mirare si el loguejat es admin o director
		//if($this->session->userdata('admin o director (codi inventat)') //si es admin o director 
		//{
			
			if($sesiotemp['id_rol']!=4){
				
			
			
			//podra fer els inserts
			
			
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('Contraseña', 'Contraseña', 'required');
			$this->form_validation->set_rules('contador', 'contador', 'required');
			$this->form_validation->set_message('required', 'El campo %s es obligado');
	
			if($this->form_validation->run() == FALSE) {
				
				$data = null;
				$sesio = $this->session->userdata('logged_in');
				$dades = array(
						'sesio' => $sesio,
						'data' => $data);
				
				$this->load->view('insertarUsuarios', $dades);
			}
			else {
				$email = $this->input->post('Email');
				$contraseña = $this->input->post('Contraseña');
				$contador = $this->input->post('contador');
				$auxiliar = $email;
				for ($i=0; $i < $contador; $i++) { 
					$auxiliar = $i.$auxiliar;
					echo $auxiliar;
					$this->modelo_usuarios->insertarUsuarioss('perico', 'palotes', $auxiliar,'4','2000-03-19', $contraseña,'true');
					$auxiliar = $email;
				}
				redirect('usuarios');
				} 
			}
		}
	}
	
	public function eliminarUsuarios($id) {
		$sesiotemp = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in')){
			if($sesiotemp['id_rol']!=4){
		
				$this->modelo_usuarios->eliminarUsuario($id);
				redirect('usuarios');
				}
				else {
					$this->load->view('error');
				}
			}
			else{
				redirect('login', 'refresh');
			}
	}

	public function modificarUsuario($id) {
		$nombre = $this->input->post('Nombre');
		$apellido = $this->input->post('Apellido');
		$email = $this->input->post('Email');
		$password = $this->input->post('Password');
		$this->modelo_usuarios->modificarUsuario($id);
		redirect('usuarios');
	}
}
