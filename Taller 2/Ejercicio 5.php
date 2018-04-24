<form action="" method="post">
<br><h3> Mostrar los numeros impares del 1 al 100</h3>
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
    $i = 1;
	$cont= 0;
    while($i<=100){
		$res =  fmod($i,2);
		if($res!=0){
		?>
		<tr><td>
       <?php
        echo "<center>$i</center>";
			$cont++;
		}
		?>
		</td></tr>
       <?php
        $i++;
    }
	?>
	<tr><td>
	<?php
	echo "<center> El total de numeros impares: $cont</center>";
}
	?>
	</td></tr>
	</table>
</body>
</html>
