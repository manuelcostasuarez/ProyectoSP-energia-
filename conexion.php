<?php

$servidor= "localhost";
$usuario = "root";
$contraseña = "";
$basededatos = "loginyregistro";
// Create connection
$con= mysqli_connect($servidor, $usuario, $contraseña, $basededatos);
// Check connection
if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected exitosa";
?>