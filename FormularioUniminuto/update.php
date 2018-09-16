<?php
include "conexion.php";
$link=conectarse();
$codigo=$_REQUEST['cv'];
$nombre=$_REQUEST['n'];
$sql="UPDATE `cursos` SET nom_cur='$nombre' where cod_cur='$codigo'";
$res=mysqli_query($link,$sql);
echo "<script>alert('Curso modificado');self.location.href='mod.php';</script><br>";
?>