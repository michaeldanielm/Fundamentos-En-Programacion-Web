<form action="" method="post">
    <title>Ejercicio1</title>
    <table style="200%" align="center" border="5" cellpadding="5">
    <tr>
        <td colspan="2"><h2 align="center">Radio</h2></td>
    </tr>
    <tr>
    <td><input type="number" name="valor" placeholder="Digite radio"></td>
    <td><input type="submit" name="iniciar" value="iniciar"></td>
    </tr>
    </table>
</form>
<?php
if(isset($_POST['iniciar'])){
    $radio=$_REQUEST['valor'];
    function circulo($radio){
        $pi=3.1416;
        return "El area de el circulo es: ".($pi*pow($radio,2))." ";
    }
    function esfera($radio){
        $pi=3.1416;
        echo "El area de la esfera es: ".(4*$pi*pow($radio,2))."<hr> El volumen de la esfera es: ".((4/3)*$pi*pow($radio,3));
    }
    echo circulo($radio)."<hr>";
    echo esfera($radio)."<hr>";
}

?>