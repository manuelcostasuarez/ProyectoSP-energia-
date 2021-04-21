<?php
include("conexion.php"); 
session_start(); 
$idtarea=$_GET["id"];
$consulta="DELETE FROM tareas WHERE `id_tarea` = '$idtarea'"; 
mysqli_query($con,$consulta); 
$mensaje= "Se ha eliminado una tarea";
$colorMensaje= "danger"; 
$_SESSION["mensaje"] = $mensaje;
$_SESSION["colorMensaje"]= $colorMensaje;

header("location: ../index.php");

?>