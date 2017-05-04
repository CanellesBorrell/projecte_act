<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mensajes extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_usuarios');
      $this->load->model('modelo_mensajes');
    } 
   	public function index() {
   		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$recibidos = $this->modelo_mensajes->getMRecibidos();
			$dades = array(
						'sesio' => $sesio,
						'recibidos' => $recibidos);
				if($dades == null) {
					$this->load->view('mensajes', $dades);	
				}
				else {
					$this->load->view('mensajes', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
		
	}

	public function escriureCorreu() {
   		if($this->session->userdata('logged_in')){
   			
			$sesio = $this->session->userdata('logged_in');
			$usuarios = $this->modelo_usuarios->getAllUsers();
			$dades = array(
						'sesio' => $sesio,
						'usuarios' => $usuarios);
				if($dades == null) {
					$this->load->view('crearcorreu', $dades);	
				}
				else {
					$this->load->view('crearcorreu', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
		
	}


	public function enviarMensaje() {
		$emisor = $this->input->post('emisor');
		$concepto = $this->input->post('concepto');
		$mensaje = $this->input->post('mensaje');
		$receptor = $this->input->post('receptores');
		for ($i=0;$i<count($receptor);$i++)    {         
			$this->modelo_mensajes->insertarMensaje($emisor,$receptor[$i],$concepto,$mensaje);
		} 

		redirect('mensajes');

	}


	public function leerCorreo($id) {
		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$recibido = $this->modelo_mensajes->getCorreoPersona();
			$dades = array(
						'sesio' => $sesio,
						'recibido' => $recibido);
				if($dades == null) {
					$this->load->view('vistaCorreo', $dades);	
				}
				else {
					$this->load->view('vistaCorreo', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
		
	}
}