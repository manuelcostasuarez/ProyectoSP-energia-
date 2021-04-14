<?php

session_start(); 
include("conexion.php"); 


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

    
        
        header("location: ingresar.php")
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                <script>
                    Swal.fire({
                            title: "Error",
                            text: "Los datos no coinciden",
                            icon: "error"
                        })
                </script>
    <?php
    
    
}

mysqli_free_result($resultado);
my_sqli_close($conexion); 

?>