<?php	

include"../conexion.php";

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$grado=$_POST['grado'];


$query="INSERT INTO estudiantes(codigo,nombre,apellido,grado) VALUES('$codigo','$nombre','$apellido','$grado')";

$resultado=$conexion->query($query);
if($resultado){

	echo "registro enviado";
}


else{

echo "fallo registro";

}


?>
