<?php
function sum($num){
    $n = strlen($num);
    $sum = 0;
    for ($i = 0; $i < $n; $i++){
      $sum += $num[$i];
    }
    return $sum;
  }
  
  echo sum("53");
?>