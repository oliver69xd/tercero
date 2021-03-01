<?php 
require_once("Usuarios.php");
$Usuarios=new Usuarios();

if(isset($_POST['op'])){

	switch ($_POST['op']) {
		case 1:
		//resgistrar datos
		if($_POST['datos'][7]>0){///el arreglo de datos en la posicion 8
			//modificar usuario
			$Usuarios->modifica_usuario($_POST['datos']);

		}else{		
		//crear nuevo usuario
		if($Usuarios->create_user($_POST['datos']) ){
				return 0;
		}else{
				return 1;
		}
		}

		break;
		case 2;
		//hacer una consulta de 1 solo usuario
		//echo "Consultar Usuario".$_POST['usu_id'];
		$usuario=mysqli_fetch_all( $Usuarios->listar_un_usuario($_POST['usu_id']) );
		echo json_encode($usuario[0]);

		break;
		case 3:
		//eliminar un usuario
		if($Usuarios->eliminar_usuario($_POST['usu_id']) ){
			return 0;
		}else{
			return 1;
		}
		break;
		}
			
	}else{
		$datos=mysqli_fetch_all( $Usuarios->lista_usuarios() );
		echo json_encode($datos);
	}




?>