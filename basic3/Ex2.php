<?php
function factorial($num){
    $i=1;
    $fact=1;
    while($i<=$num){
        $fact=$i*$fact;
        $i++;
    }
    echo $fact."<br>";
}
factorial(3);
factorial(4);
factorial(6);
?>