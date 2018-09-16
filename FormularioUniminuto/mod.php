<?php
include "conexion.php";
?>
<html lang="es">
    <head>
        <title>Actualizar Curso</title>
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
    <h4>Actualizar Curso</h4>
    <div class="contenedor-inputs">
    <select name="curso"  required> 
        <option selected disabled>Elige curso</option>
        <?php
        $link=conectarse();
        $sql="select * from `cursos`";
        $res=mysqli_query($link,$sql);
        while($row=mysqli_fetch_array($res)){
        ?>
        <option value="<?php echo $row['cod_cur'] ?>"><?php echo "<tr><td>".$row['nom_cur']."</td>"?></option>
        <?php
        }
        ?>
    </select >
    <input type="submit"  value="Mostrar" name="Mostrar" id ="boton" class="input-100">
    </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['Mostrar'])){
    $codigo=$_REQUEST['curso'];
    $link=conectarse();
    $consulta="select * FROM `cursos` WHERE cod_cur='$codigo'";
    $res=mysqli_query($link,$consulta);
    if($row=mysqli_fetch_array($res)){
        echo "<form action='update.php' method='post'>
            Codigo:
            <input type='hidden' name='cv' value='".$codigo."'>
            <input type='text' name='c' value='$row[cod_cur]    ' id ='boton' class='input-100' readonly>
            Curso:
            <input type='text' name='n' value='$row[nom_cur]' id ='boton' class='input-100'>
                <input type='submit'  value='Modificar' name='Modificar'></form>";
    }
    else{
        echo "no se pudo";
    }
}
?>