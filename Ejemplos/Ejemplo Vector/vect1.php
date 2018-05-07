<?php
$a=array(10,50,30,50);
echo $a[0]."<br>";
echo $a[3]."<hr>";
$b[0]=20;$b[1]=30;$b[2]=200;$b[3]=30;
echo $b[2]."<br>";echo $b[1]."<hr>";
echo $a[3]+$b[2]."<hr>";
echo "<h1 align=center>vectores usando ciclos</h1>";
$i=0;
while($i<=10){
$n1[$i]=rand(0,100);
echo $n1[$i]."<br>";
$i++;
}
echo "<hr>";
for($j=0;$j<=10;$j++){
$n2[$j]=rand(10,500);
echo $n2[$j]."<br>";
}
echo "<hr>";
echo "<table border=1 align=center>
<tr align=center><th>POS</TH><TH>VEC1</TH><TH>VEC2</TH><TH>VEC3</TH></TR>";
$i=0;
do{
$sum[$i]=$n1[$i]+$n2[$i];
echo "<tr align=center><td>$i</td><td>$n1[$i]</td><td>$n2[$i]</td>
      <td>$sum[$i]</td></tr>";
//echo $n1[$i]." + ".$n2[$i]." = ".$sum[$i]."<br>";
$i++;
}while($i<=10);
echo "</table>";
echo "<hr> <table border=1 alig=center>";
for($k=0;$k<=10;$k++){
$a[$k]=rand(0,100);
$b[$k]=rand(100,500);
$c[$k]=$a[$k]+b[$k];
echo "<tr align=center><td>$k</td><td>$a[$k]</td><td>$b[$k]</td>
      <td>$c[$k]</td></tr>";
}
echo "</table>";






?>
