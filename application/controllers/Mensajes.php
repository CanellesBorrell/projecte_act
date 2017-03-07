<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mensajes extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
    } 
   	public function index() {
   		if($this->session->userdata('logged_in')){
			$sesio = $this->session->userdata('logged_in');
			$dades = array(
						'sesio' => $sesio);
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
}