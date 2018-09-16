<?php
include "conexion.php";
?>
<html lang="es">
    <head>
        <title>Tabla Alumnos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="estilo.css">
	<style>
        table{
    /*forma del recuadro*/
    width: 990px;
    margin: auto;
    background: #FCFBFB;
    padding: 10px 20px;
    border-radius: 20px;
            color: black;
            margin-top: 10%;
            text-align: center;
}
        h1{
            color: black;
            
        }
    </style>
        
    </head>
    <body>
        <header>
          <div class="contenedor">
              <a href="home.html"><h1>Uniminuto</h1></a>
              <input type="checkbox" id="menu-bar">
              <nav class="menu">
                  <a href="home.html">Inicio</a>
                  <a href="registrara.php">Registrar alumno</a>
                  <a href="alumnos.php">Tabla alumnos</a>
                  <a href="elim.php">Eliminar alumno</a>
                  <a href="mode.php">Actualizar alumno</a>
              </nav>
          </div>
        </header>
        <table>
            <th colspan="5"> <h3>Tabla Alumnos</h3> </th>
            <tr>
                <td><h4>Codigo</h4></td>
                <td><h4>Nombre</h4></td>
                <td><h4>Apellido</h4></td>
                <td><h4>Telefono</h4></td>
                <td><h4>Correo</h4></td>
            </tr>
            <?php
            $link=conectarse();
            $sql="select * from `alumnos`";
            $res=mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($res)){
                echo "<tr><td>".$row['cod_alu']."</td>";
                echo "<td>".$row['nombre']."</td>";
                echo "<td>".$row['apellido']."</td>";
                echo "<td>".$row['telefono']."</td>";
                echo "<td>".$row['correo']."</td></tr>";
            }
            ?>
        </table>
    </body>
</html>