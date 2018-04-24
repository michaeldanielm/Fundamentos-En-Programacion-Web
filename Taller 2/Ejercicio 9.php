<html>
    <form action="" method="post">
        <title>Ejercicio9</title>
        <h2 align="center">Multiplos de 2 y 3</h2>
        <br>
    </form>
    <body>
       <table style="200%" bgcolor="#cccccc" align="center" border="5" cellpadding="5">
       <tr>
       <th>Multiplos de 2</th>
       <th>Multiplos de 3</th>
       </tr>
       <?php
       $numero=1;
       $cont=0;
       $cont2=0;
       $aux=0;
       $aux2=0;
       while($numero<=100){
       $aux=($numero%2);
       $aux2=($numero%3);
       if($aux==0||$aux2==0){
            ?>
            <tr>
             <?php
             if($aux==0){
             ?>
             <th><?php echo "$numero" ?></th>
             <?php
                 $cont++;
             }
           else if($aux=!0){
               ?>
               <th></th>
               <?php
           }
           
           if($aux2==0){
             ?>
             <th><?php echo "$numero" ?></th>
             <?php
                 $cont2++;
             }
             ?>   
            </tr>
            <?php
        }
         $numero++;
       }
           echo "<br> Los multiplos de 2  son: $cont <br> Los multiplos de 3 son: $cont2";
        ?>
           <hr>
           </table><br>   
           <table style="200%" bgcolor="#cccccc" align="center" border="5" cellpadding="5">
       <tr>
       <th>Multiplos de 2</th>
       <th>Multiplos de 3</th>
       </tr>
          <?php
           for($numero=1;$numero<=100;$numero++){  
               $aux=($numero%2);
       $aux2=($numero%3);
       if($aux==0||$aux2==0){
            ?>
            <tr>
             <?php
             if($aux==0){
             ?>
             <th><?php echo "$numero" ?></th>
             <?php
                 $cont++;
             }
           else if($aux=!0){
               ?>
               <th></th>
               <?php
           }
           
           if($aux2==0){
             ?>
             <th><?php echo "$numero" ?></th>
             <?php
                 $cont2++;
             }
             ?>   
            </tr>
            <?php
        }
           }
       ?>   
               <hr>
        </table><br>
        <table style="200%" bgcolor="#cccccc" align="center" border="5" cellpadding="5">
       <tr>
       <th>Multiplos de 2</th>
       <th>Multiplos de 3</th>
       </tr>
       <?php
            $numero=1;
            do{
               $aux=($numero%2);
       $aux2=($numero%3);
       if($aux==0||$aux2==0){
            ?>
            <tr>
             <?php
             if($aux==0){
             ?>
             <th><?php echo "$numero" ?></th>
             <?php
                 $cont++;
             }
           else if($aux=!0){
               ?>
               <th></th>
               <?php
           }
           
           if($aux2==0){
             ?>
             <th><?php echo "$numero" ?></th>
             <?php
                 $cont2++;
             }
             ?>   
            </tr>
            <?php
        }
         $numero++; 
            }
            while($numero<=100);
            ?>
        </table>
    </body>
</html>