<?php

$servidor= "localhost";
$usuario = "root";
$contraseña = "";
$basededatos = "sistemalaso";

// Creando la conexion
$con= mysqli_connect($servidor, $usuario, $contraseña, $basededatos);

// Probando la conexion
if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected exitosa";
?>
