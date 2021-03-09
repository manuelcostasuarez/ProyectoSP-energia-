<?php

session_start(); 
$_SESSION["registro"]= array(); 

include "conexion.php";

      $nombre= $_POST ['nombre']; 
      $apellido= $_POST ['apellido']; 
      $correo= $_POST ['email']; 
      $usuario= $_POST ['usuario']; 
      $contraseña= $_POST ['contraseña']; 
      $contraseña2= $_POST ['contraseña2']; 
      $pais= $_POST ['pais']; 



$sql = "INSERT INTO usuarios (nombre, apellido, correo, usuario) VALUES ($nombre, $apellido, $correo, $usuario)";
if (mysqli_query($conn, $sql)) {
      echo "Nueva cuenta creada";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>