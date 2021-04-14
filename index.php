<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="app/validacion.css">
    <title>Inciar sesion</title>
</head>
<body>


<?php include 'header.php' ?>


<div class="container-md">
  
  <h1>Iniciar sesion</h1>  
  <form action="conexion.php" method="post">
    
    <div class="form-group">
      <label for="exampleInputEmail1">Correo electronico</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>

    <a href="registro.php"> Registrarme</a>
    

  </form>
</div>





</body>
</html>