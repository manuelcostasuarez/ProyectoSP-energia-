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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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



            <div class="centrado" id="centradoIndex" style="width: 18rem;">
                
               <div class="card-body">  
                    <h1 class="card-title">Tareas</h1>
                    <h6 class="card-text">Añade una tarea para organizar mejor tus proyectos</p>       

                    <form action="engranajes/añadirTarea.php" method="post">
                        <div class="form-group">
                            <input name="nombre"type="text" class="form-control" placeholder="Nombre de la tarea">
                        </div>


                        <div class="form-group">
                            <input name="descripcion" type="text" class="form-control" style="height: 100px;" placeholder="Descripcion de la tarea">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> Añadir tarea </button>
                        </div>
                    </form>
                </div>   



                 
                
            </div>



        <div class="centrado" id="centradoIndex">
            <?php 
                echo($_SESSION['nombreTarea'])
                
                
                
                ?>
                         
        </div>






        
    </body>

</html>
