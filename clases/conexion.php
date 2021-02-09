<?php
$conexion = new mysqli("127.0.0.1","root","","tercero");

$sql="SELECT * FROM usuarios";

$consulta=$conexion->query($sql);
foreach ($usuarios as $us ) {
	print_r($us);
}
// $usuarios = $consulta->fetch_array();
// print_r($usuarios);
// ?>