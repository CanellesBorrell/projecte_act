
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
    
    function getNomAsignatura($idasignatura) {
		$this->db->select('Asignatura');
		$query = $this->db->where('id_asignatura', $idasignatura);
        $query = $this->db->get('Asignaturas');
        if($query -> num_rows() == 1) {
            return $query->row()->Asignatura; 
        }
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
        $this->db->select('id_usuario');
        $this->db->from('Usuarios_Asignaturas');
        $this->db->where('id_usuario',$alumnos);
        $query = $this->db->get();
        if($query -> num_rows() == 0) { 
            $data = array(
                'id_usuario'=> $alumnos,
                'id_asignatura' => $id);
            $this->db->insert('Usuarios_Asignaturas', $data);
        }
        
        
    }

    function insertarAGrupo($id, $alumnos) {
        $this->db->select('id_grupo');
        $this->db->from('grupos_asignaturas');
        $this->db->where('id_asignatura',$id);
        $query2 = $this->db->get();
        $id_grupo = $query2->row()->id_grupo;
        $this->db->select('id_usuario, id_grupo');
        $this->db->from('usuarios_grupos');
        $this->db->where('id_grupo',$id_grupo);
        $this->db->where('id_usuario',$alumnos); 
        $query = $this->db->get();
        if($query -> num_rows() == 0) { 
            $datos = array(
                'id_grupo' => $id_grupo,
                'id_usuario' => $alumnos);
            $this->db->insert('usuarios_grupos',$datos);
        }

    }

    function getUsuariosAsignatura($id) {  // Filtramos todos los usuarios ligados a una asignatura
        $this->db->select('g.id_Usuarios_Asignaturas, g.id_asignatura, g.id_usuario, u.Email ');
        $this->db->from('Usuarios_Asignaturas g');
        $this->db->join('Usuarios u', 'g.id_usuario = u.id_usuario');
        $this->db->where('g.id_asignatura',$id);
        $query = $this->db->get();
        return $query->result_array(); 
    }




}
