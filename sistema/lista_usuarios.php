
<?php

include"../conexion.php"


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LISTa DE USUARIOS</title>


<style >
	
#container h1{
	font-size: 35px;
	display: inline-block;
}
.btn_new{
	display: inline-block;
	background: #239baa;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
table{
	border-collapse: collapse;
	font-size: 12pt;
	font-family: 'arial';
	width: 100%;
}
table th{
	text-align: left;
	padding: 10px;
	background: #3d7ba8;
	color: #FFF;
}
table tr:nth-child(odd){
	background: #FFF;
}
table td{
	padding: 10px;
}
.link_edit{
	color: #0ca4ce;
}
.link_delete{
	color: #f26b6b;
}
.data_delete{
	text-align: center;
}
.data_delete h2{
	font-size: 12pt;
}
.data_delete span{
	font-weight: bold;
	color: #4f72d4;
	font-size: 12pt;
}
.btn_cancel,.btn_ok{
	width: 124px;
	background: #478ba2;
	color: #FFF;
	display: inline-block;
	padding: 5px;
	border-radius: 5px;
	cursor: pointer;
	margin: 15px;
}
.btn_cancel{
	background: #42b343;
}

.data_delete form{

	background: initial;
	margin: auto;
	padding: 20px 50px;
	border: 0;




</style>


        <section>
        	<center>

		<h3>REGISTROS</h3>

		</center>

		<a href="http://localhost/manaure/sistema/nuevo_user.php" class="btn_new">CREAR USUARIO</a>
		
   <table>
   	
      <tr >
 	       <th>ID_USUARIOS</th>
 	       <th>CODIGO</th>
 	       <th>USUARIO</th>
 	       <th>NOMBRE</th>
 	       <th>CORREO</th>
 	       <th>clave</th>

    </tr>

<?php

$query=mysqli_query($conexion, "SELECT * FROM usuarios");
   $resultado= mysqli_num_rows($query);
   if($resultado > 0);{

   	while ($data=mysqli_fetch_array($query)){


?>

  <tr>

           	 <td><?php echo $data["id_usuario"]; ?></td>
           	 <td><?php echo $data["codigo"]; ?> </td>
           	 <td> <?php echo $data["usuario"]; ?> </td>
           	 <td> <?php echo $data["nombre"]; ?> </td>
           	 <td> <?php echo $data["correo"]; ?> </td>
           	 <td><?php echo $data["clave"]; ?></td>
           	 <td><a href="#">editar</a></td>
           	 <td><a href="#">eliminar</a></td>


          </tr>


   <?php

   	}




   }


?>

         


   </table>

	</section>
		



	

</body>
</html>