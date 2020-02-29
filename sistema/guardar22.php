<?php	

include"../conexion.php";

$codigo=$_POST['codigo'];
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];

$query="INSERT INTO usuarios(codigo,usuario,nombre,correo,clave) VALUES('$codigo','$usuario','$nombre','$correo','$clave')";

$resultado=$conexion->query($query);
if($resultado){

	echo "registro enviado";
}


else{

echo "fallo registro";

}


?>

