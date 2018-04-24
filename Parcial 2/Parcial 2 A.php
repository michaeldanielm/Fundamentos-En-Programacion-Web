<center><h1>Parcial de Fundamentos en Programacion web 2</h1><br></center>
<center><h3>Taller A</h3><br></center>
<center>

<form action="" method="post">
	<input type="text" name="Numero" id="Numero"><br>
	<input type="submit" name="Ejecutar" id="Ejecutar">
</form>
</center>
<?php

 if (isset($_POST['Ejecutar'])){
	$numero = $_POST['Numero'];
	$v = [];
	$sumaPares = 0;
	for($i = 0; $i < $numero; $i++)
	{
		$v[] = rand(0,1000);
	}
	
	
	echo "<table style='border: 3px solid;'><tr>";
	for($j = 0; $j < $numero; $j++)
	{
		echo "<td style='border: 3px solid;'>".$v[$j]."</td>";
		if($v[$j] % 2 == 0)
		{
			$sumaPares += $v[$j];
		}
	}
	echo "</tr></table><br>";
	echo "<center>La suma de todos pares es $sumaPares<br></center>";
	
	
	echo "<hr>";
	echo "<center>Los elementos encontrados en indices impares y divisibles por 3</center>";
	echo "<table style='border: 3px solid;'><tr>";
	for($j = 0; $j < $numero; $j++)
	{
		if($j % 2 != 0)
		{
			if($v[$j] % 10 == 0)
			{
				echo "<td style='border: 3px solid;'>".$v[$j]."</td>";
			}
		}
	}
	echo "</tr></table><br>";
	
	
	echo "<hr>";
	
	echo "<center>Los elementos divisibles por 3</center>";
	echo "<table style='border: 3px solid;'><tr>";
	for($j = 0; $j < $numero; $j++)
	{
		if($v[$j] % 3 == 0)
		{
			echo "<td style='border: 3px solid;'>".$v[$j]."</td>";
		}
	}
	echo "</tr></table><br>";
 }
?>