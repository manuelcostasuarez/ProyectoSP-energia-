<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/estilos.css">
      <title>registro</title>
</head>
<body>
      

<?php include 'header.php' ?>

<div class="centrado">
      <div>
            <?php

                  session_start(); 
                  $_SESSION["registro"]= array(); 

                  include "conexion.php";

                        $nombre= $_POST ['nombre']; 
                        $apellido= $_POST ['apellido']; 
                        $correo= $_POST ['correo']; 
                        $usuario= $_POST ['usuario']; 
                        $contraseña= $_POST ['contraseña']; 
                        $pais= $_POST ['pais']; 



                  $sql = "INSERT INTO usuarios (nombre, apellido, correo, user, contraseña, pais) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contraseña', '$pais')";

                  if (mysqli_query($con, $sql)) {
                        echo "<h1>Nueva cuenta creada. </h1>";
                  } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                  }
                  mysqli_close($con);


            ?>
      </div>
      <br>
      <a class="btn btn-primary" href="../index.php">Iniciar sesion</a>
      <a class="btn btn-primary ml-3" href="registro.php">Registrar otro usuario</a>

</div>


</body>
</html>

