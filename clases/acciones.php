<?php 
require_once("Usuarios.php");
$Usuarios=new Usuarios();
$datos=mysqli_fetch_all( $Usuarios->lista_usuarios() );

echo json_encode($datos);

?>