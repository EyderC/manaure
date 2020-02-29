

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
   <style>
    body{font-family: Arial; background-color: #ff8000; box-sizing: border-box;}

    form{
      background-color: white;
      border-radius: 3px;
      color: #999;
      font-size: 0.8em;
      padding: 20px;
      margin: 0 auto;
      width: 300px;
    }

    input, textarea{
      border: 0;
      outline: none;

      width: 280px;
    }

    .field{
      border: solid 1px #ccc;
      padding: 10px;

      
    }

    .field:focus{
      border-color: #18A383;
    }

    .center-content{
      text-align: center;

    }


.btn{
  border-radius: 3px;
  display: inline-block;
  padding: 20px 15px;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(255,255,255,0.3);
  box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
}

.btn-green{
  color: white;
  background-color: #3CC93F;
}
.btn-green:hover{
  background-color: #37B839;  
}
.btn-green:active{
  background-color: #29962A;
}





  </style>
</head>
<body>
  <form action="guardar22.php"  method="POST">
    <p>codigo:</p>
    <input type="number"  REQUIRED name="codigo" class="field"> <br/>

    <p>usuario:</p>
    <input type="text"  REQUIRED name="usuario" class="field"> <br/>

    <p>nombre:</p>
    <input type="text" REQUIRED name="nombre" class="field"> <br/>

   <p>correo:</p>
    <input type="text"  REQUIRED name="correo" class="field"> <br/>

    <p>clave:</p>
    <input type="password" REQUIRED name="clave"  class="field"> <br/>

    <p class="center-content">
      <input type="submit" class="btn btn-green" value="Enviar Datos">
    </p>

  </form>
</body>
</html>

