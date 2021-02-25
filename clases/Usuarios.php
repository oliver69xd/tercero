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
	function actualizar_usuario($ap,$nm,$cu,$dir,$tlf,$co,$sex,$us,$pss,$id){
		if($this->con){
			return $this->con->query("UPDATE usuarios set 
										apellido='$ap',
										nombre='$nm',
										ciudad='$cu',
										direccion='$dir',
										telefono='$tlf',
										correo='$co',
										sexo='$sex',
										usuario='$us',
										password='$pss'
										WHERE id=$id
										");
		}
	}
}
// $Usuarios=new Usuarios(); $datos=$Usuarios->lista_usuarios();
// var_dump($datos);

?>