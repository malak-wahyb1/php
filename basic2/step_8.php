<?php
function powerByTow($num){
    if($num>0 && $num%2==0){
        echo $num." power By 2<br>";
    }else{
        echo $num." is not a power by 2<br>";
    }
}
powerByTow(12);
powerByTow(5);
powerByTow(10);
powerByTow(9);


?>