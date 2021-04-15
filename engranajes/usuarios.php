<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/estilos.css">
</head>
<body>
    
<div>
<?php include 'header.php' ?>
</div>

<div class="container">

<table class="table table-dark">
  <thead><h3 style="color: white; opacity: .90;">Usuarios registrados hasta el momento</h1>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Pais</th>
      <th scope="col">usuario</th>
    </tr>
  </thead>
  <tbody>
       
      <?php
            include("conexion.php"); 
            $consulta= 'SELECT id, nombre, apellido, pais, user FROM usuarios'; 

            $resultado= mysqli_query($con, $consulta); 


            while($fila= mysqli_fetch_array($resultado)) 
            {
              echo "<tr>";
                echo "<td>". $fila['id'] . "</td>"; 
                echo "<td>". $fila['nombre'] . "</td>"; 
                echo "<td>". $fila['apellido'] . "</td>"; 
                echo "<td>". $fila['pais'] . "</td>"; 
                echo "<td>". $fila['user'] . "</td>"; 
              echo "</tr>";
            }


      ?>
  </tbody>
</table>
</div>

</body>
</html>