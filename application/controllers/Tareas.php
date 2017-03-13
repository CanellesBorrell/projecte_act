<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tareas extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('modelo_tareas');
    } 

    	public function index() {
		
		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$data = $this->modelo_tareas->getTarea();
			$dades = array(
				'sesio' => $sesio,
				'data' => $data);
				if($data == null) {
					$this->load->view('tareas', $dades);	
				}
				else {
					$this->load->view('tareas', $dades);
				}
			}
			
		else{
			redirect('login', 'refresh');
		}
	}

	// Tener en cuenta que este insertar en ningun momento esta subiendo el archivo al directorio del servidor
	public function insertarTareas() {
		$this->form_validation->set_rules('Nombre', 'Nombre', 'required|xss_clean');
		$this->form_validation->set_rules('Archivo', 'Archivo', 'required|xss_clean');
		$this->form_validation->set_rules('Data_vencimiento', 'Data_vencimiento', 'required|xss_clean');
		$this->form_validation->set_rules('Profesor_asignado', 'Profesor_asignado', 'required|xss_clean');
		$this->form_validation->set_rules('Comentario', 'Comentario', 'required|xss_clean');
		$this->form_validation->set_message('required', 'El campo %s es obligado');
	
		if($this->form_validation->run() == FALSE) {
			$data = $this->modelo_tareas->getTarea();
			$this->load->view('tareas', $data);
		}
		else {
			$nombre = $this->input->post('Nombre');
			$archivo = $this->input->post('Archivo');
			$data_vencimiento = $this->input->post('Data_vencimiento');
			$profeasignado = $this->input->post('Profesor_asignado');
			$comentario = $this->input->post('Comentario');
			$this->modelo_tareas->insertarTarea($nombre,$archivo,$data_vencimiento,$profeasignado,$comentario);
			redirect('Tareas/tareas');
		}
	}

	public function eliminarTareas($id) {
		$this->modelo_tareas->eliminarTarea($id);
		redirect('Tareas/tareas');
	}

// Futuro codigo de insertar tarea xD cuidado con el puto upload tenemos que comprovar si tenemos una version mejor.
	public function upload() {
		if($this->session->userdata('logged_in')){
			$data['content'] = 'pujarTasca';
			$this->load->vars($data);
			$this->load->view('pujarTasca');}
		else{
			//If no session, redirect to login page
			redirect('login', 'refresh');}
	}
	public function DoUpload($idasignatura) {
		if($this->session->userdata('logged_in')){
			$this->load->model('Modelo_escuela');
			$this->load->model('Modelo_asignaturas');
			
			// query que retorna nom de la escola (traure de la variable de sesio id_escuela)
			$sesio = $this->session->userdata('logged_in');
			$nomescola = $this->Modelo_escuela->getNomEscuela($sesio['id_escuela']);
			//falta nom asignatura (lo mateix de dalt..)
			$nomasignatura = $this->Modelo_asignaturas->getNomAsignatura($idasignatura);
			$path = "./tareas/".$nomescola."/".$nomasignatura;
			if(!is_dir("./tareas/")) //crea la carpeta si no existeix
			{
				mkdir("./tareas/",0755,TRUE);
			}
			
			if(!is_dir("./tareas/".$nomescola)) //crea la carpeta de la escola si no existeix
			{
				mkdir("./tareas/".$nomescola,0755,TRUE);
			}
			
			
			if(!is_dir($path)) //crea la carpeta de la asignatura si no existeix
			{
				mkdir($path,0755,TRUE);
			}
		$config_file = array(
		'upload_path' => $path,
		'allowed_types' => 'png|jpg',
		'overwrite' => false,
		'max_size' => 0,
		'max_width' => 0,
		'max_height' => 0,
		'encrypt_name' => false,
		'remove_spaces' => true, );
		$this->upload->initialize($config_file);
		if (!$this->upload->do_upload('Tareas')) {
			$error = $this->upload->display_errors();
			echo $error;
		}
		else {
			$this->session->set_flashdata('success_upload','Pujat Correcament');
			$nom = $this->upload->file_name;
			$fecha= "22/2/04";
			$comentario ="a lo jordi varas fesla perfecta o suspendras";
			$file_name = base_url().$path."/".$this->upload->file_name;
			$this->modelo_tareas->insertarTarea($nom, $idasignatura, $file_name, $fecha, $comentario);
			redirect('Tareas');
			}
	}
	else{
     //If no session, redirect to login page
     redirect('login', 'refresh');}
	}
}
