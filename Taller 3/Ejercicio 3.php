
<form action="" method="post">
<title>Ejercicio 3</title>
<table style="200%" bgcolor="#cccccc" align="center" border="5" cellpadding="5">
<tr>
<td colspan="3"><h2 align="center">Fecha de nacimiento</h2></td>
</tr>
<tr>
<td>
<input type="number" name="num" placeholder="Digite dia">
</td>
<td>
<input type="number" name="num1" placeholder="Digite mes">
</td>
<td>
<input type="number" name="num2" placeholder="Digite año">
  </td>
   </tr>
    </table>
<hr>
<table style="200%" bgcolor="#cccccc" align="center" border="5" cellpadding="5">
<tr>
<td colspan="3"><h2 align="center">Fecha actual</h2></td>
</tr>
<tr>
<td>
<input type="number" name="numd" placeholder="Digite dia">
</td>
<td>
<input type="number" name="numm" placeholder="Digite mes">
</td>
<td>
<input type="number" name="numa" placeholder="Digite año">
</td>
</tr>
<tr ><td colspan="3" align="center"><input  type="submit" name="iniciar" value="iniciar"></td></tr>
</table >

</form>

<?php
    if(isset($_POST['iniciar'])){
    $dia=$_REQUEST['num'];
    $mes=$_REQUEST['num1'];
    $ano=$_REQUEST['num2'];
    $diaa=$_REQUEST['numd'];
    $mesa=$_REQUEST['numm'];
    $anoa=$_REQUEST['numa'];
function ano($ano,$anoa,$mes,$mesa){
if($anoa-$ano>0){
    $meses=12;
    if($mes>$mesa){
        return "Su edad es ".(($anoa-$ano)-1)." años y ".($meses-$mes+$mesa)." meses.";
    }
    else{
    return "Su edad es ".($anoa-$ano)." años y ".($mesa-$mes)." meses";           
    }
}
    return $dia."año";
} /*function mes($mes,$mesa){
if($mesa-$mes>0){
    return " , ".($mesa-$mes)."meses";
}
}  function dia($diaa,$dia){
    if($diaa-$dia>0){
    return "y ".($diaa-$dia)." dias";
}
}*/    
echo ano($ano,$anoa,$mes,$mesa);
    }
?>