

<!DOCTYPE html>
<html>
<head>
	<title>Login |Registro para estudiantes </title>
	<style> 
body{

background-image: url(img/feriaass.jpg);

}

h3{

font:'Arial';
font-size: 18pt;
width: 100%;
background:#2980b9;
padding:15;
color: #fff;

}

#container form{

background:#fff;
width: 300px;
margin-left: auto;
margin-right: auto;
padding: 10px
}

#container form input{
	width: 90%;
	padding: 5px;
	font-size: 16pt;
	display: block;
	margin: 25px auto;
	border-radius: 5px;
	border: 1px solid  #85929e;
	text-align: center;
}


#container form input[type="submit"]{
	background:  #52be80;
	padding: 10px;
	color: #FFF;
	letter-spacing: 1px;
	border: 0;
	cursor: pointer;	
}



	</style>
</head>
<body>
       <section id="container">
       	
        <form action="validar.php"   method="POST">
        	<br/>	<br/>
        <center>	
        <h3>iniciar seccion </h3>
        <center>
        <img src="img/Login.png" alt="Login">
        </center>
        <input type="text" REQUIRED name="usuario" placeholder="usuario...."> <br/><br/>
        <input type="password"  REQUIRED name="clave"  placeholder="clave..."><br/><br/>
        
        <input type="submit" value ="INGRESAR"><br/><br/>
       

        </form>




       </section>
</body>
</html>