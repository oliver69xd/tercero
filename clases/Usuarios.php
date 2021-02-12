<?php 
require_once("Conexion.php");
class Usuarios extends Conexion
{
	function lista_usuarios(){
		if($this->con){
			return $this->con->query("SELECT * FROM usuarios");
		}
    }
    function inserta_usuario(){
		if($this->con){
			return $this->con->query("INSERT INTO usuarios (id,apellidos,nombres,ciudad,direccion,telefono,correo,sexo,usuario,password) 
									 VALUES (5,'morocho','dereck','quito','guamni','0965555555','dereck55@gmail.com','masculino','der','5555') ");
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