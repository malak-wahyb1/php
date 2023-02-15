<?php
function greaterFn($num){
    if($num>30){
        echo $num." is greater than 30<br>";
    }else if($num>20){
        echo $num." is greater than 20<br>";
    }else if($num>10){
        echo $num." is greater than 10<br>";
    }else if($num<10){
        echo $num." is less than 10<br>";
    }
};
greaterFn(40);
greaterFn(21); 
greaterFn(12);
greaterFn(8);

?>