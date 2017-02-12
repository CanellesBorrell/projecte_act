<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Grupos extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_grupos');
      $this->load->model('modelo_asignaturas');
      $sesio = $this->session->userdata('logged_in');
    } 
   	public function index() {
   		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_grupos->getGrupo();
			$asignatures = $this->modelo_asignaturas->getAsignatura();
			$dades = array(
						'sesio' => $sesio,
						'asignatura' => $asignatures,
						'data' => $data);
				if($data == null) {
					$this->load->view('grupos', $dades);	
				}
				else {
					$this->load->view('grupos', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
	}

	public function index_front() {  // Vista que nos muestra como los usuarios ven los grupos
   		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_grupos->getGrupo();
			$dades = array(
						'sesio' => $sesio,
						'data' => $data);
				if($data == null) {
					$this->load->view('grupos_p', $dades);	
				}
				else {
					$this->load->view('grupos_p', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
	}

	public function insertarGrupos() {
		$this->form_validation->set_rules('Grupo', 'Grupo', 'required');
		$this->form_validation->set_message('required', 'El campo %s es obligado');
	
		if($this->form_validation->run() == FALSE) {
			$data = $this->modelo_grupos->getGrupo();
			redirect('Grupos');
		}
		else {
			$grupo = $this->input->post('Grupo');
			$this->modelo_grupos->insertarGrupo($grupo);
			redirect('Grupos');
		}
	}

	public function actualizarGrupos($id) {
		$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_grupos->getAsignaturasGrupo($id);
			
			$dades = array(
						'sesio' => $sesio,
						'data' => $data);
		$this->load->view('actualizar_grupos', $dades);
	}

	public function eliminarGrupos($id) {
		$this->modelo_grupos->eliminarGrupo($id);
		redirect('grupos');
	}

	public function insertarGAsignaturas() {  // Ligamos una o varias asignaturas a un curso 
		$id = $this->input->post('valor_id');
		$asignatures = $this->input->post('g-asignaturas');
		for ($i=0;$i<count($asignatures);$i++)    {         
			$this->modelo_grupos->insertarGAsignatura($id,$asignatures[$i]);
		} 

		redirect('Grupos');
	}


	public function asignaturasCursadas($id) {  // Funcion que nos muestra las asignaturas atadas a un grupo en la vista de usuarios
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_grupos->getAsignaturasGrupo($id);
			
			$dades = array(
						'sesio' => $sesio,
						'data' => $data);
		$this->load->view('grupos_assig', $dades);

	}
}