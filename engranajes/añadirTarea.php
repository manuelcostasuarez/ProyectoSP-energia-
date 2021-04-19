<?php


session_start();
if (isset($_SESSION["id"])){
    include("conexion.php"); 
    $id= $_SESSION["id"];
    $nombreTarea= $_POST["nombre"] ;
    $descripcionTarea=$_POST["descripcion"];
        
    $consulta= "INSERT INTO tareas (id_usuario, nombre_tarea, descripcion) VALUES ('$id', '$nombreTarea', '$descripcionTarea')"; 

    $resultado= mysqli_query($con, $consulta); 
    $_SESSION["nombreTarea"]= $nombreTarea;
    $_SESSION["descripcionTarea"]= $descripcionTarea;
    header("location: ../index.php");
}   

else {
    header("location: ingresar.php");
}
?>
