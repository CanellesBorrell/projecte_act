
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelo_grupos extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    function getGrupo() {
    	$this->db->select('id_grupo,Grupo,Profesor_asignado');
        $query = $this->db->get('Grupos');
        return $query->result_array();
    }

    function insertarGrupo($grupo) {
        $data = array(
            'Grupo'=> $grupo);
        $this->db->insert('Grupos', $data);
    }

    function modificarGrupo() {

    }

    function eliminarGrupo($id) {
        $this->db->delete('Grupos', array('id_grupo' => $id));
    }

    function insertarGAsignatura($id,$asignatures) {
        $data = array(
            'id_grupo'=> $id,
            'id_asignatura' => $asignatures);
        $this->db->insert('grupos_asignaturas', $data);
    }

    function getAsignaturasGrupo($id) {
        //SELECT id_asignatura FROM grupos_asignaturas where grupos_asignaturas.id_grupo=41
        $this->db->select('a.id_asignatura, a.asignatura');
        $this->db->from('asignaturas a');
        $this->db->join('grupos_asignaturas g', 'a.id_asignatura = g.id_asignatura');
        $this->db->where('id_grupo',$id);
        $query = $this->db->get();
        return $query->result_array(); 
    }
}