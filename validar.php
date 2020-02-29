<?php

if(!empty($_SESSION['active']))
{ 

	
session_start();
header("location:http://localhost/manaure/sistema/registro.php");

}


require_once("conexion.php");
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'  AND clave='$clave'");
$resultado= Mysqli_num_rows($query);
if($resultado > 0) 
{

$data = mysqli_fetch_array($query);

$_SESSION['active'] = true;
$_SESSION['id_usuario'] =$data['id_usuario'];
$_SESSION['codigo']=$data['codigo'];
$_SESSION['usuario']=$data['usuario'];
$_SESSION['nombre']=$data['nombre'];
$_SESSION['correo']=$data['correo'];


header("location:http://localhost/manaure/sistema/registro.php");


}

else {

	header("location:index.php");

}


?>