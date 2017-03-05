
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_escuela extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }
    function getNomEscuela($idescuela) {
    	$this->db->select('Nombre');
        $query = $this->db->from('Escuela');
        $query = $this->db->where('id_escuela', $idescuela);
        $query = $this->db->get();
        if($query -> num_rows() == 1) {
            return $query->row()->Nombre; 
        }
    }
}
