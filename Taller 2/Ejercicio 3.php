<html>
    <form action="" method="post">
        <title>Ejercicio3</title>
        <h2 >Numeros Pares</h2>
        <br>
        <input type="submit" value="iniciar" name="iniciar">
    </form>
</html>
<?php
if (isset($_POST['iniciar'])){
    $numero=1;
    $res=0;
    while($numero<=100){
        $res=($numero%2);
        if($res==0){
            echo "$numero,";
        }
        $numero++;
    }
    echo "<br>";
    for($i=1;$i<=100;$i++){
$res=($i%2);
if($res==0){
echo "$i,";
}
    $numero=1;
    $res=0;
}
    echo "<br>";
do{
$res=($numero%2);
if($res==0){
echo "$numero,";
}
$numero++;
}
while($numero<=100);

}
?>
