<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Perfil extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_usuarios');
    }

  	public function index() {  // Hola
  		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$id_alumno = $sesio['id_usuario'];
			$data = $this->modelo_usuarios->getAsignaturasAlumno($id_alumno);
			$dades = array(
				'sesio' => $sesio,
				'data' => $data);
				$this->load->view('perfil', $dades);
			}
			
		else{
			redirect('login', 'refresh');
		}

	}
}