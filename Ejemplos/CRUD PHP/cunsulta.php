<?php
include("./conexion.php");
$link=conectarse();
//realizar la consulta sql
$sql="select * from cursos";
//ejecutar la consulta sql
$res=mysqli_query($link,$sql)or die("Error en la consulta $sql");
//mostrar la consulta sql
echo "<table border=1 align=center>
<tr><th>CODIGO</th><th>CURSO</th></tr>";
while($row=mysqli_fetch_array($res)){
echo "<tr align=center><td>".$row['id_c']."</td>";
echo "<td>".$row['nomb_c']."</td></tr>";
}
echo "</table>";

?>
