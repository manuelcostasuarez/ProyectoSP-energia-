<?php


session_start();
if (isset($_SESSION["id"])){
    include("conexion.php"); 
    $id= $_SESSION["id"];
    $nombreTarea= $_POST["nombre"] ;
    $descripcionTarea=$_POST["descripcion"];
        
    $consulta= "INSERT INTO tareas (id_usuario, nombre_tarea, descripcion) VALUES ('$id', '$nombreTarea', '$descripcionTarea')"; 

    $resultado= mysqli_query($con, $consulta); 
    if (isset($resultado)){
        $mensaje= "Se ha creado una nueva tarea";
        $colorMensaje= "success"; 
        $_SESSION["mensaje"] = $mensaje;
        $_SESSION["colorMensaje"]= $colorMensaje;
        header("location: ../index.php"); 
    }
    else{
        $mensaje ="No se ha podido crear una nueva tarea"; 
        $colorMensaje="danger"; 
        $mensaje = $_SESSION["mensaje"]; 
        $_SESSION["colorMensaje"]= $colorMensaje; 
        header("location: ../index.php");
    }
}   

else {
    header("location: ingresar.php");
}
?>
