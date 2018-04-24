<form action="" method="post">
<br><h3> Imprimir los numeros del 1 a N y mostrar la suma de los pares y de los impares</h3>
<input type=number name="n">
<input type="submit" value="Ejecutar" name="Ejecutar">
</form>
<html lang="es">
<head>
	<title>Solucion</title>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #52e34d;
}
</style>
</head>
<body>
<table border="" style="width:20%" align="center">
	<?php
if(isset($_POST['Ejecutar'])){
	$n = $_POST['n'];
    $i = 1;
	$par= 0;
	$impa=0;
    while($i<=$n){
		?>
		<tr><td>
       <?php
		echo "<center>$i</center>";
		$res =  fmod($i,2);
		if($res==0){
			$par+=$i;
		}else{
			$impar+=$i;
			}
		?>
		</td></tr>
       <?php
        $i++;
    }
	?>
	<tr><td>
	<?php
	echo "<center> la suma de los numeros pares es: $par</center>";

	?>
	</td></tr><tr><td>
	<?php
	echo "<center>La suma de los numeros impares es: $impar</center>";
}
	?>
	</td></tr>
	</table>
</body>
</html>