<?php 
require_once("Conexion.php");
class Usuarios extends Conexion
{
	function lista_usuarios(){
		if($this->con){
			return $this->con->query("SELECT * FROM usuarios");
		}
    }

    function listar_un_usuario($id){
    	if($this->con){
    		return $this->con->query("SELECT * FROM usuarios where id=$id");
    	}
    }

    function modifica_usuario($datos){
		if($this->con){
			return $this->con->query("UPDATE usuarios set 
										apellidos='$datos[0]',
										nombres='$datos[1]',
										correo='$datos[2]',
										telefono='$datos[3]',
										direccion='$datos[4]',
										username='$datos[5]'
										WHERE id=$datos[7]
										");
		}
	}

    function create_user($datos){
		if($this->con){
			return $this->con->query("INSERT INTO usuarios (apellidos,
															nombres,
															correo,
															telefono,
															direccion,
															username,
															password) 
												VALUES (    '$datos[0]',
														    '$datos[1]',
															'$datos[2]',
														    '$datos[3]',
														    '$datos[4]',
														    '$datos[5]',
														    '$datos[6]'
															)
															");
		}
	}

	function eliminar_usuario($usu_id){
		if($this->con){
			return $this->con->query("DELETE FROM usuarios WHERE id=$usu_id");
		}
	}

}
// $Usuarios=new Usuarios(); $datos=$Usuarios->lista_usuarios();
// var_dump($datos);

?>