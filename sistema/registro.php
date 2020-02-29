<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		
	<title>ADMINITRACION</title>

<style>  
*{

margin: 0;
padding: 0;
border: 0;
vertical-align: baseline;
box-sizing: border-box;

}

.optionsBar a {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    margin-left: 30px;
}



header{
width: 100%;
height:300px;
background: #e88300;
text-align: center;
position: fixed;
top: 0;
overflow: hidden;
transition: all 0.5s ease;

}

header h1{

font-size: 42px;
color: white;
line-height: 230px;
font-weight: 300;
transition: all 0.3s ease;

}

header h1 i{

font-weight: bold;
text-transform: uppercase;


} 

header nav{ 
	position: absolute;
	bottom: 0;
	height: 60px;
	line-height: 60px;
	width: 100%;
	background: rgba(232,63.0,0,8);




}
    header nav a{
color: white;
display: inline-block;
padding: 10px  15px;
line-height: 1;
text-decoration: none;
border-radius: 5px;


    }


    header nav a hover{
    	background-:rgba(0,0,0,0,2);


    }


</style>



</head>
<body>
	<header>

	  <p align="right">	
     <a href="salir.php">salir</a>
     
		</p>				

	
		<h1><i>Bienvenido Al</i>  <i>Sistema Control</i></h1>

		<nav>
			<a href="http://localhost/manaure/sistema/nuevo_user.php">nuevo_usuarios</a>
			<a href="http://localhost/manaure/sistema/lista_usuarios.php">lista_usuarios</a>
			<a href="http://localhost/manaure/sistema/nuevo_est.php">estudiantes</a>
			<a href="#">Lista_estudiantes</a>

		</nav>



	</header>
	
	
</body>
</html>