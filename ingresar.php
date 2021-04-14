<?php

if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
     include("conexion.php"); 
      session_start(); 
      $correo= $_POST['correo'];
      $contraseña=$_POST['contraseña']; 
      $_SESSION["usuario"]= $correo;



      $consulta= "SELECT * FROM usuarios WHERE correo='$correo' AND contraseña='$contraseña'"; 

      $resultado= mysqli_query($con, $consulta); 

      $filas=mysqli_num_rows($resultado); 



      if ($filas){
          header("location: index.php");
      }
      else
      {
          $mensaje= "Los datos no coinciden";
          


      }

      mysqli_free_result($resultado); 
      mysqli_close($con);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="app/validacion.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Inciar sesion</title>
</head>
<body>


<?php include 'header.php' ?>



<div class="container-md">
  
  <h1>Iniciar sesion</h1>  
  <form action="ingresar.php" method="post">
    
    <div class="form-group">
      <label for="exampleInputEmail1">Correo electronico</label>
      <input name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contraseña</label>
      <input name="contraseña" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Ingresar</button>

    No tenes cuenta? <a href="registro.php"> Registrarme</a>
    

  </form>
</div>

    <?php if(!empty($mensaje)): ?>
      <script> Swal.fire({
            title: "Error",
            text: "Los datos no coinciden",
            icon: "error"
        })
          </script>
      <?php endif; ?>


  
</body>
</html>