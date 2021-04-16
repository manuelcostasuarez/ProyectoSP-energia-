<?php

if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) 
{
      include("conexion.php"); 
      session_start(); 
      $correo= $_POST['correo'];
      $contraseña=$_POST['contraseña']; 
      



      $consulta= "SELECT * FROM usuarios WHERE correo='$correo' AND contraseña='$contraseña'"; 

      $resultado= mysqli_query($con, $consulta); 

      $filas=mysqli_fetch_array($resultado); 




    if ($filas)
    {
      $_SESSION["nombre"]= $filas["nombre"];
      $_SESSION["id"]= $filas["id"];
      header("location: ../index.php");
      mysqli_free_result($resultado); 
      mysqli_close($con);
    } 
    else{$mensaje="Los datos no coinciden";}

      
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/estilos.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Inciar sesion</title>
</head>
<body>


<?php include 'header.php' ?>



<div id="centrado" class="text-center">
  
  
  <form id= "centradoSesion" action="ingresar.php" method="post">
    <h1>Iniciar sesion</h1>  
    
    <div class="form-group">
      <label> Correo electronico: </label>
      <input type="email" name="correo" class="form-control">
      
    </div>
    <div class="form-group">
      <label> Contraseña: </label>
      <input type= "password" name="contraseña" class="form-control">
      
    </div>
    
    <div id="form-ingresar" class="form-group">
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>

    <div id="form-registrar" class="form-group">
      ¿No tenes cuenta? <a href="registro.php" class="btn btn-secondary"> Registrarme</a>
    </div>
    

  </form>
</div>

    <?php if(!empty($mensaje)): ?>
      <script> Swal.fire({
            title: "Error",
            text: "Los datos ingresados no coinciden",
            icon: "error"
        })
          </script>
      <?php endif; ?>


  
</body>
</html>