<?php
function star($num){
  
    for ($i=1;$i<=$num;$i++){
        
        for ($j=1;$j<=$i;$j++){
        echo "*";
        
    }
    echo "<br>";
   
    }
    for ($x=$num-1;$x>=1;$x--){
        
        for ($y=1;$y<=$x;$y++){
        echo "*";
       
    }
    echo "<br>";
 
    }

}
star(5);

star(10);


?>