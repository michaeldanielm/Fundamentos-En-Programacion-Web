<?php
include "conexion.php";
?>
<html lang="es">
    <head>
        <title>Tabla Cursos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="estilo.css">
        
    </head>
    <body>
        <header>
          <div class="contenedor">
              <a href="home.html"><h1>Uniminuto</h1></a>
              <input type="checkbox" id="menu-bar">
              <nav class="menu">
                  <a href="home.html">Inicio</a>
                  <a href="registrarc.php">Registrar Curso</a>
                  <a href="cursos.php">Tabla Cursos</a>
                  <a href="elimc.php">Eliminar curso</a>
                  <a href="mod.php">Actualizar curso</a>
              </nav>
          </div>
        </header>
        <table>
            <th colspan="2"> <h3>Tabla Cursos</h3> </th>
            <tr>
                <td><h4>Codigo</h4></td>
                <td><h4>Curso</h4></td>
            </tr>
            <?php
            $link=conectarse();
            $sql="select * from `cursos`";
            $res=mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($res)){
                echo "<tr><td>".$row['cod_cur']."</td>";
                echo "<td>".$row['nom_cur']."</td></tr>";
            }
            ?>
        </table>
    </body>
</html>