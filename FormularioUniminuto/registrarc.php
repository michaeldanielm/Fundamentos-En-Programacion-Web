<html lang="es">
    <head>
        <title>Registro Curso</title>
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
    <form action="" method="post" id="formusuario">
    <h2>Registro de curso</h2>
    <div class="contenedor-inputs">
        <input type="number" name="cod" placeholder="Ingrese codigo" class="input-100" required>
        <input type="text" name="cur" placeholder="Ingrese curso" class="input-100" required>
        <input type="submit" name="registrar" id="boton" class="input-100">
        
    </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['registrar'])){
    include ('conexion.php');
    $link=conectarse();
    $codigo=$_REQUEST['cod'];
    $curso=$_REQUEST['cur'];
    $sql="insert into cursos values($codigo,'$curso')";
    $res=mysqli_query($link,$sql) 
     or die ("ERROR en al insertar el curso $sql");
    echo "<script>alert('Registro de curso exitoso')</script><br>";
}
?>