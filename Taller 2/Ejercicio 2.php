<form action="" method="post">
<br><h3> Imprimir los numeros del 100 al 0</h3>
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
    $i = 100;
    while($i>=0){
		?>
		<tr><td>
       <?php
        echo "<center>$i</center>";
		?>
		</td></tr>
       <?php
        $i--;
    }
}
	?>
	</table>
</body>
</html>
