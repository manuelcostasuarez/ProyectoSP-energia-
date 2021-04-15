<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/estilos.css">
    

    <title>Registro</title>
</head>
<body>


 <?php include 'header.php' ?>   



 <div id="formularioSesion">
    
    <form action="registra.php" method="post" id="formulario">
        <h1>Registro de usuario</h1>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                    <div class="invalid-feedback">
                        El nombre tiene que ser de 1 a 40 caracteres. El nombre solo puede contener letras y espacios, pueden llevar acentos.
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="form-control">

                    <div class="invalid-feedback">
                        El apellido tiene que ser de 1 a 40 caracteres. Solo puede contener letras y espacios, pueden llevar acentos.
                    </div>
                </div>
        </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Correo electronico</label>
                    <input id="email" name="correo" class="form-control">

                    <div class="invalid-feedback">
                        El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
                    </div>
                </div>

                <div class="form-group col-md-6">
                        <label for="usuario">Nombre de usuario</label>
                    
                        <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" id="usuario" class="form-control" name="usuario">
                            <div class="invalid-feedback">
                                El usuario solo puede contener letras, numeros, guion y guion_bajo.
                            </div>
                        </div>
                        

                </div>
             </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" id="contraseña" name="contraseña" class="form-control">
                        <div class="invalid-feedback">
                            La contraseña tiene que ser de 4 a 12 dígitos.
                        </div>
                </div>
                <div class="form-grup col-md-6">
                    <label for="contraseña2">Repetir contraseña</label>
                    <input type="password" id="contraseña2" name="contraseña2" class="form-control">
                        <div class="invalid-feedback">
                            Ambas contraseñas deben ser iguales.
                        </div>
                </div>
            </div>

        
            
            <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="pais">Pais</label>
                        <select  name="pais" id="pais" class="form-control">
                            <option selected disabled value="">Choose...<option
                            >Argentina</option><option>Perú</option><option>Chile</option>
                            <option>Uruguay</option>
                        </select>

                        <div class="invalid-feedback">
                                Se debe elegir un pais.
                        </div>
                </div>

                
                
            </div>
        
            <button type="submit" name="enviar" class="btn btn-primary">Registrarme</button>
            <a href="../index.php" style="color: white;"> Ya tengo una cuenta </a>
    </form>

</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../app/app.js"></script>



</body>
</html>