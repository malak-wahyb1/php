<?php
function star($row){
    $i=1;
    while ($i<=$row){
        $j=1;
        while ($j<=$i){
        echo "*";
        $j++;
    }
    echo "<br>";
    $i++;
    }

}
star(5);
star(10)
?>