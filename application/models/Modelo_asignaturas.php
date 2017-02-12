
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelo_asignaturas extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    function getAsignatura() {
		$this->db->select('id_asignatura,Asignatura,Profesor_asignado');
        $query = $this->db->get('Asignaturas');
        return $query->result_array();
    }

    function insertarAsignatura($asignatura) {
        $data = array(
            'Asignatura'=> $asignatura
            );
        $this->db->insert('Asignaturas', $data);
    }

    function modificarAsignatura() {

    }

    function eliminarAsignatura($id) {
    	$this->db->delete('Asignaturas', array('id_asignatura' => $id));
    }

    function insertarAAsignatura($id,$alumnos) {
        $data = array(
            'id_usuario'=> $alumnos,
            'id_asignatura' => $id);
        $this->db->insert('usuarios_asignaturas', $data);

        
    }
}