<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 9px;
        text-align: left;
    }
    

</style>
<form action="" method="post">
<input type="number"  name="s">
<input type="submit" value="Ejecutar" name="Ejecutar">
</form>
<?php 
if(isset($_POST['Ejecutar'])){
	$s=$_POST['s'];
	for($i=3;$i<=$s;$i=$i+3) 
    echo " <center>
    <table style='width:5%'><tr>
            <td>$i</td>
        </tr>
    </table></center>";
}	
?>
