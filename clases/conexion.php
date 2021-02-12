<?php 
class Conexion{
	var $con;
	function __construct() 
	{

		$this->con = new mysqli("127.0.0.1","root","","tercero");
	}
 
}


?>