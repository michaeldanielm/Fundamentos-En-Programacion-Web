<html lang="es">
    <head>
        <title>Registro Alumno</title>
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
                  <a href="registrara.php">Registrar alumno</a>
                  <a href="alumnos.php">Tabla alumnos</a>
                  <a href="elim.php">Eliminar alumno</a>
                  <a href="mode.php">Actualizar alumno</a>
              </nav>
          </div>
        </header>
    <form action="" method="post" id="formusuario">
    <h2>Registro de alumno</h2>
    <div class="contenedor-inputs">
        <input type="number" name="cod" placeholder="Ingrese codigo" class="input-100" required>
        <input type="text" name="nom" placeholder="Ingrese nombre" class="input-100" required>
        <input type="text" name="ape" placeholder="Ingrese apellido" class="input-100" required>
        <input type="number" name="tel" placeholder="Ingrese telefono" class="input-100" required>
        <input type="text" name="corr" placeholder="Ingrese correo" class="input-100" required>
        <input type="submit" name="registrar" id="boton" class="input-100">  
    </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['registrar'])){
    include ('conexion.php');
    $link=conectarse();
    $cod=$_REQUEST['cod'];
    $nom=$_REQUEST['nom'];
    $ape=$_REQUEST['ape'];
    $tel=$_REQUEST['tel'];
    $corr=$_REQUEST['corr'];
    $sql="insert into alumnos values($cod,'$nom','$ape',$tel,'$corr')";
    $res=mysqli_query($link,$sql) 
     or die ("ERROR en al insertar el alumno $sql");
    echo "<script>alert('Registro de alumno exitoso')</script><br>";
}
?>