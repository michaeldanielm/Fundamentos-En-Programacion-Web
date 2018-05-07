<?php
function conectarse(){
$host='localhost';//el nombre del servidor de mysql
$user='root';//usuario de mysql
$pass='qwerty';//password de mysql
$db_name='unim';//nombre de la BD
//conectarnos a mysql
$link=mysqli_connect($host,$user,$pass) 
      or die("Error al conectarse a mysql");
//Seleccionar la BD
mysqli_select_db($link,$db_name) or die
     ("Error al seleccionar la BD");
return $link;
}

?>
