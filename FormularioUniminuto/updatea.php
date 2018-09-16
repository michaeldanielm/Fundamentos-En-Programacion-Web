<?php
include "conexion.php";
$link=conectarse();
$codigo=$_REQUEST['cv'];
$nombre=$_REQUEST['n'];
$apellido=$_REQUEST['a'];
$telefono=$_REQUEST['t'];
$correo=$_REQUEST['cor'];
$sql="UPDATE `alumnos` SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo' where cod_alu='$codigo'";
$res=mysqli_query($link,$sql);
echo "<script>alert('Alumno modificado');self.location.href='mode.php';</script><br>";
?>