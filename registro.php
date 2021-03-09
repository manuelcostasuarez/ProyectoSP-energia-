<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>


 <?php include 'header.php' ?>   



<div class="container mt-5">
    <h1>Registro de usuario</h1>
    <form action="registra.php" method="post">
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" >
                </div>

                <div class="form-group col-md-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" class="form-control">
                </div>
        </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Correo electronico</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                        <label for="usuario">Nombre de usuario</label>
                    
                        <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" name="usuario" id="inlineFormInputGroup">
                        </div>

                </div>
             </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="contraseña" class="form-control" id="inputPassword1">
                </div>
                <div class="form-grup col-md-6">
                    <label for="contraseña2">Repetir contraseña</label>
                    <input type="password" name="contraseña2" class="form-control" id="inputPassword2">
                </div>
            </div>

        
            
            <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="pais">Pais</label>
                        <select  name="pais" class="form-control">
                        <option>Argentina</option><option>Perú</option><option>Chile</option>
                        <option>Uruguay</option>
                        </select>
                        
                </div>

                
                
            </div>
        
            <button type="submit" name="enviar" class="btn btn-primary" disabled>Registrarme</button>
    </form>

</div>



<script src="assets/app.js"></script>
</body>
</html>