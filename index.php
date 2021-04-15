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
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <img src="img/sp.ico" height="50px">
                    <a class="navbar-brand" href="index.php">Servicios publicos - TO DO list</a>
                </li>

            </ul>
        </nav>

        
        <div class="container">
            <?php 
            
            session_start();
            if (isset($_SESSION["id"])){
                echo "El id es: ".$_SESSION["id"]."<br>";
                echo "El nombre es: ".$_SESSION["nombre"];
            }   
            else {
                header("location: engranajes/ingresar.php");
            }

            
            ?>

            <br>


            <form action="engranajes/cerrarsesion.php" method="post">
                <button type="submit"name="salir" class="btn btn-danger" > Cerrar sesion </button>
            </form>

        </div>


    </body>

</html>