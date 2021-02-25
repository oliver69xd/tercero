<?php 
require_once("Usuarios.php");
$Usuarios=new Usuarios();

if(isset($_POST['op'])){

	switch ($_POST['op']) {
		case 1:
		//resgistrar datos
		if($Usuarios->create_user($_POST['datos']) ){
				return 0;
		}else{
				return 1;
		}
		break;
		case 2;
		//hacer una consulta de 1 solo usuario
		echo "Consultar Usuario".$_POST['usu_id'];

		break;
		}
			
	}else{
		$datos=mysqli_fetch_all( $Usuarios->lista_usuarios() );
		echo json_encode($datos);
	}




?>