<?php 
                session_start();
                if (isset($_SESSION["id"])){
                    include("engranajes/conexion.php"); 
                    $id= $_SESSION["id"];
                    $consulta="SELECT * FROM usuarios WHERE id = '$id'"; 
                    $resultado= mysqli_query($con,$consulta);
                    $user= mysqli_fetch_array($resultado); 
                }   
                else {
                    header("location: engranajes/ingresar.php");
                }
?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="app/estilos.css">
        <title>Home</title>
        

        
    </head>
    <body>
        
            

            <!-- Como tiene un cambio, la pongo directamente aca en vez de incluir el archivo "header.php" !-->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"  style="max-height: 66px;">
                
                    <div class="container-fluid">
                        <div>
                            <img src="img/sp.ico" height="50px">
                            <a class="navbar-brand" href="index.php">SP-Gestor de tareas</a>
                        </div>

                        <a class="navbar-brand"><?php echo $user["nombre"]; ?> </a>
                    </div>
            </nav>

            



            
            <div id="dashboard">
                <div class="item">
                    <a class="btn btn-primary" href="index.php" type="button" >Gestor de tareas</a>
                </div>
                <div class="item">
                    <a class="btn btn-primary" href="engranajes/usuarios.php">Usuarios registrados</a>
                </div>
                        
                <div class="item" id="itemCerrar">
                    <form id="cSesionform"action="engranajes/cerrarsesion.php" method="post">
                        <button type="submit"name="salir" class="btn btn-danger"> Cerrar sesion </button>
                    </form>
                        
                </div>
            </div>



            
            

            
                    <div class="card" id="centradoIndex" style="text-align: center; width: 18rem;"> 
                        
                        <div class="card-header">
                            <h1 class="card-title">Tareas</h1>
                            <p class="card-text">Añade una tarea para organizar mejor tus proyectos</p> 
                        </div>

                        <div class="card-body">
                            <form action="engranajes/añadirTarea.php" method="post">
                                <div class="form-group pb-1">
                                    <input name="nombre"type="text" class="form-control" placeholder="Nombre de la tarea">
                                </div>


                                <div class="form-group pb-1">
                                    <textarea name="descripcion" class="form-control" rows="4" placeholder="Desripcion de la tarea"></textarea>
                                </div>

                                <div class="form-group pb-1">
                                    <button type="submit" class="btn btn-primary"> Añadir tarea </button>
                                </div>
                            </form>
                        </div>
                    
                            <?php 
                            if(isset($_SESSION["mensaje"])){
                                echo '<div class="alert alert-'.$_SESSION["colorMensaje"].' fade show" role="alert">'
                                    .$_SESSION["mensaje"].'.'.
                                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                                unset ($_SESSION["mensaje"]);
                                unset($_SESSION["colorMensaje"]); 
                            }
                            ?>
                    </div>
                

                <?php
                    $consulta="SELECT * FROM tareas WHERE id_usuario = '$id'";
                    $resultado=mysqli_query($con,$consulta);
                    if(mysqli_fetch_array($resultado)){
                         echo '<table class="table table-dark" id="centradoIndex">';
                         echo'<thead>';
                         echo'<tr>';
                                 echo'<th style="text-align: center;" scope="col">ID</th>';
                                 echo'<th style="text-align: center;" scope="col">Nombre de tarea</th>';
                                 echo'<th style="text-align: center;" scope="col">Descripcion</th>';
                                 echo'<th style="text-align: center;" scope="col">Acciones</th>';
                                 echo'</tr>';
                        echo'</thead>';
                        echo'<tbody>';
                            $consulta="SELECT * FROM tareas WHERE id_usuario = '$id'";
                            $resultado=mysqli_query($con,$consulta);
                            while ($fila = mysqli_fetch_array($resultado)){
                                echo '<tr>';
                                echo '<td style="text-align: center;">'. $fila['id_tarea']; 
                                echo '<td style="text-align: center;">'. $fila['nombre_tarea'];
                                echo '<td style="text-align: center;">'. $fila['descripcion'];
                                echo '<td><a class="btn btn-danger" href="engranajes/eliminarTarea.php?id='.$fila['id_tarea'].'"'.'>Eliminar tarea</a>'; 
                                echo '<a class="btn btn-secondary" href="engranajes/editarTarea.php">Editar tarea</a>'; 
                                echo '</tr>';  
                            }
                        echo'</tbody>'; 
                        echo'</table>';
                    }
                        else{
                        echo '<div class="card centrado" id="centradoIndex"style="text-align: center;"><i class="bi bi-card-checklist"> No tienes ninguna tarea por hacer.</i></div>';
                    }
                    
                ?>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> 
    </body>
</html>
