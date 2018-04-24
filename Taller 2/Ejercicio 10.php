
    <form action="" method="post">
        <title>Ejercicio10</title>
        <h2 align="center">Ejercicio 10</h2>
        <input type="number" name="num1" placeholder="Digite valor">
        <input type="number" name="num2" placeholder="Digite valor">
        <input type="submit" name="iniciar" value="iniciar">
        <br>
    </form>
<?php
if(isset($_POST['iniciar'])){
 ?>
<table style="200%" bgcolor="#cccccc" align="center" border="5" cellpadding="5">
    <tr>
    <th>Numeros naturales</th>
    </tr>
    <?php
    $num1=$_REQUEST['num1'];
    $num2=$_REQUEST['num2'];
    $cont=$num1;
    $cantidad=0;
    $pares=0;
    $suma=0;
    while($cont<=$num2){
     ?>
     <tr>
         <th><?php echo "$cont"?></th>
     </tr>  
     <?php
         $cantidad++;
         if($cont%2==0){
             $pares++;
         }
        if($cont%2!=0){
            $suma+=$cont;
        }
     $cont++;
    }
    ?>
</table>
<table style="200%" bgcolor="#cccccc" align="center" border="5" cellpadding="5">
<br>
<br>
<tr>
    <th>Cantidad</th>
    <th>Cantidad De Pares</th>
    <th>Suma De Impares</th>
</tr>
<tr>
    <th><?php echo "$cantidad"?></th>
    <th><?php echo "$pares"?></th>
    <th><?php echo "$suma"?></th>
</tr>
</table>
<?php
}
?>