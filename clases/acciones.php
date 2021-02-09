
<?php 
// phpinfo() //es una instruccion que nos permite mostrar es como la alerta
//instanciar
//realizo al conexion con la base de datos
/**
 * 
 */
class Conexion{
	var $con;
	function __construct()//esto significa al cargarse o al iniciar 
	{
		//al inicio se crea una instancia de la conexion
		$this->con = new mysqli("127.0.0.1","root","","tercero");
	}
	function listar_usuarios(){
		if($this->con){
			//devuelve una consultade la tabla usuario 
			return $this->con->query("SELECT * FROM usuarios");
		}
	}
	function inserta_usuario(){
		if($this->con){
			return $this->con->query("INSERT INTO usuarios (id,apellidos,nombres,ciudad,direccion,telefono,correo,sexo,usuario,password) 
									 VALUES (5,'dorocho','dereck','quito','guamni','0965555555','dereck55@gmail.com','masculino','der','5555') ");
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
//instanciar una clase
$Conexion=new Conexion();
$Conexion->actualizar_usuario('paredes','oliver','quito','guamani','0961111111','oliverparedes22@gmail.com','hombre','olo','12345678',0);
$Conexion->actualizar_usuario('toaquiza','kevin','quito','guamni','0962222222','kevin03@gmail.com','Hombre','hombre','kevinsion','12345678',1);
$Conexion->actualizar_usuario('veloz','angel','quito','guamni','0963333333','angel04@gmail.com','Hombre','hombre','angelsan','12345678',2);
$Conexion->actualizar_usuario('guaman','john','quito','guamani','0964444444','johnsito@gmail.com','Hombre','hombre','wasonbbxd','12345678',3);
$Conexion->actualizar_usuario('viteri','johana','quito','guamni','0965555555','johanita12@gmail.com','Hombre','mujer','johanita','12345678',4);


// $conexion = new mysqli("127.0.0.1","root","","tercero");

// $query="SELECT * FROM usuarios";

// $usuarios = $conexion->query($query);
// // $arr=[];

// foreach ($usuarios as $us){
// 	// array_push($arr,$us);
// 	print_r($us);

// }

// print_r($arr);

// $usuarios=$consulta->fetch_array();
// print_r($usuarios);



// mysqli_close($enlace);
?>