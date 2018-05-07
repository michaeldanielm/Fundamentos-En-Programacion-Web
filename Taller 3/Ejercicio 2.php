<form action="" method="post">
<br><br><br><table border="" style="width:20%" align="center"><tr>
<td>Nombre :<input type=text name="n"></td>
<td>Sexo :<select name="s">
    <option >---Seleccione---</option>
	<option value="M">Masculino</option>
	<option value="F">Femenino</option>
</select></td></tr><tr><td>
	Edad :<input type="number" name="e"></td><td>
Peso :<input type="number" name="p"></td></tr><tr><td>
	Altura :<input type="number" name="a"></td><td>
<input type="submit" value="Ejecutar" name="Ejecutar" style="width:100%" ></td></tr>
	</table>
</form>
<html>
<head>
	<title>Solucion</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #ffffff;
    text-align: left;
    padding: 8px;
}

tr {
    background-color: #afb4f5;
}
</style>
</head>
<body>
<table border="" style="width:20%" align="center">
	<?php
if(isset($_POST['Ejecutar'])){
	$n = $_POST['n'];
	$s = $_POST['s'];
	$e = $_POST['e'];
	$p = $_POST['p'];
	$a = $_POST['a'];

	function validar($e,$p,$a){
		if($e<=18 && $e>=15 && $a>=183 && $p>73 && $p<110){
			return 1;
		}else{
			return 0;
		}
	}
	function imprimir($r,$n,$s,$e,$p,$a){
		echo "<tr><td>Entra</td><td>Nombre</td><td>Sexo</td><td>Edad</td><td>Peso</td><td>Altura</td></tr>";
		if($r==1){
			echo "<tr><td>Si</td><td>$n</td><td>$s</td><td>$e</td><td>$p</td><td>$a</td></tr>";
		}else{
		}
	}
	imprimir(validar($e,$p,$a),$n,$s,$e,$p,$a);
	
}
	?>
	</table>
	</body>
</html>