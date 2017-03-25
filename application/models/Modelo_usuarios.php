
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelo_usuarios extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        //$this->sesio = $this->session->userdata('logged_in');
        //$this->id = $this->sesio['id'];
        
    }
   	function getUsuario($id_usuario) {
   		$this->db->select('id_usuario,Nombre,Apellidos,Email,id_rol,FechaNacimiento');
        $this->db->from('Usuarios');
        $this->db->where('id_usuario',$idusuario);
        $query = $this->db->get();
        return $query->result_array();
    }

    function getUsuarios() {
        $this->db->select('id_usuario,Nombre,Apellidos,Email,Usuarios.id_rol,FechaNacimiento');
        $this -> db -> from('Usuarios');
        $this -> db -> join('Roles', 'Roles.id_rol = Usuarios.id_rol');
        $query = $this->db->get();
        return $query->result_array();
    }

    function getAlumno() {
        $id = 4;
        $this->db->select('Nombre, Apellidos , id_rol, id_usuario');
        $this->db->from('Usuarios');
        $this->db->where('id_rol',$id);
        $query = $this->db->get();
        return $query->result_array();
    }


    
    function completarDades($id, $nombre, $apellidos, $email, $fechanacimiento, $password) {
            $data=array(
                'Nombre'=> $nombre,
                'Apellidos'=> $apellidos,
                'Email'=> $email,
                'FechaNacimiento'=>$fechanacimiento,
                'Contraseña'=> $password,
                'Primeravez'=> 0);
            $this->db->where('id_usuario', $id);
            $this->db->update('Usuarios', $data);
    }

    
    function login($email, $password) {
        $this -> db -> select('id_usuario');
        $this -> db -> select('Nombre');
        $this -> db -> select('Apellidos');
        $this -> db -> select('id_rol');
        $this -> db -> select('Email');
        $this -> db -> select('id_escuela');
        $this -> db -> select('Primeravez');
        $this -> db -> from('Usuarios');
        $this -> db -> where('Email', $email);
        $this -> db -> where('Contraseña', MD5($password)); 
        $this -> db -> limit(1);
        $query = $this -> db -> get();
        if($query -> num_rows() == 1) {
            return $query->result(); 
        }
        else {
            return false;
        }
    }

    function insertarUsuario($nombre, $apellidos, $email, $rol, $fechanacimiento, $password) {
        		
			$this->db->select('Email');
			$this->db->from('Usuarios');
			$this->db->where('Email', $email);
			$resultat = $this->db->get();
			var_dump ($resultat->num_rows());
			if ($resultat->num_rows()==0){
				$data = array(
					'Nombre'=> $nombre,
					'Apellidos'=> $apellidos,
					'Email'=> $email,
					'id_rol'=> $rol,
					'FechaNacimiento'=> $fechanacimiento,
					'Contraseña'=> MD5($password));
				$this->db->insert('Usuarios', $data);
				return true;
			}
			else{
				return false;
			}
	}
// Este funcio la faig servir per a instar nomes multiples usuaris a la vegada a la base de dades per aixo esta el camp de primera vez 
    function insertarUsuarioss($nombre, $apellidos, $email, $rol, $fechanacimiento, $password, $primera) {
                
            $this->db->select('Email');
            $this->db->from('Usuarios');
            $this->db->where('Email', $email);
            $resultat = $this->db->get();
            var_dump ($resultat->num_rows());
            if ($resultat->num_rows()==0){
                $data = array(
                    'Nombre'=> $nombre,
                    'Apellidos'=> $apellidos,
                    'Email'=> $email,
                    'id_rol'=> $rol,
                    'FechaNacimiento'=> $fechanacimiento,
                    'Contraseña'=> MD5($password),
                    'Primeravez' => $primera);
                $this->db->insert('Usuarios', $data);
                return true;
            }
            else{
                return false;
            }
    }


				
    

    function modificarUsuario($id, $nombre, $apellidos, $email, $password) {
            $data=array(
                'Nombre'=> $nombre,
                'Apellidos'=> $apellidos,
                'Email'=> $email,
                'Contraseña'=> $password);

            $this->db->where('id_usuario', $id);
            $this->db->update('Usuarios', $data);
    }

    function eliminarUsuario($id) {
        $this->db->delete('Usuarios', array('id_usuario' => $id));	
    }

    function getProfesor() {
        $id = 3;
        $this->db->select('Email, id_rol, id_usuario');
        $this->db->from('Usuarios');
        $this->db->where('id_rol',$id);
        $query = $this->db->get();
        return $query->result_array();
    }


    function getAsignaturasAlumno($id_usuario) {  // Hola
        $this->db->select('g.id_Usuarios_Asignaturas, g.id_asignatura, g.id_usuario, a.Asignatura ');
        $this->db->from('Usuarios_Asignaturas g');
        $this->db->join('Asignaturas a', 'g.id_asignatura = a.id_asignatura');
        $this->db->where('g.id_usuario',$id_usuario);
        $query = $this->db->get();
        return $query->result_array(); 
    }
}
