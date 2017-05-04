
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_mensajes extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }
    function getMRecibidos() {
        $sesio = $this->session->userdata('logged_in');
        $CorreoActual = $sesio['Email'];
    	$this->db->select('id_mensaje,Remitente,Destinatarios,Concepto,Mensaje,FechaHora,Leido');
        $this->db->from('Mensajes');
        $this->db->where('Destinatarios',$CorreoActual);
        $query = $this->db->get();
        return $query->result_array();
    }



    function insertarMensaje($emisor,$receptor,$concepto,$mensaje) {
        $data = array(
            'Remitente'=> $emisor,
            'Destinatarios' => $receptor,
            'Concepto' => $concepto,
            'Mensaje' => $mensaje);
        $this->db->insert('Mensajes', $data);
    }

    function modificarMensaje() {

    }

    function eliminarMensaje($id) {
    	
    }
}