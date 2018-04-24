<form action='' method='post'>
<title>Ejercicio 6</title>
<input type="number" name="valor" placeholder="Digite Valor" >
<input type="submit" name="iniciar" value="iniciar">
</form>
<?php
if(isset($_POST['iniciar'])){
$contador=1;
$numero=$_REQUEST['valor'];
while($contador<=$numero){
echo "$contador,";
    $contador++;
}
    echo "<hr>";
for($i=1;$i<=$numero;$i++){
echo "$i,";
}
$contador=1;
    echo "<hr>";
do{

echo "$contador,";
    $contador++;
}
while($contador<=$numero);
}
?>