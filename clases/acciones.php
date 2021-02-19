<?php 
require_once("Usuarios.php");
$Usuarios=new Usuarios();

if(isset($_POST['op'])){
	echo "Oliver Paredes listo para insertar desde php";
print_r($_POST['datos']);

}else{
$datos=mysqli_fetch_all( $Usuarios->lista_usuarios() );
echo json_encode($datos);
}

?>