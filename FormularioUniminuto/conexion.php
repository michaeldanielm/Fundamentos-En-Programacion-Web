<?php
function conectarse(){
    $servidor="localhost";//el nombre del servidor de mysql
    $usuario="root";//usuario de mysql
    $contrasena="";//password de mysql
    $bd="uniminuto";//nombre de la BD
    //conectarnos a mysql
    $link=mysqli_connect($servidor,$usuario,$contrasena) or die ("Error al conectarse a mysql");
    //Seleccionar la BD
    mysqli_select_db($link,$bd) or die
    ("Error al seleccionar la BD");
    return $link;
    
}
?>