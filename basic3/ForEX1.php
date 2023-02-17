<?php
function sumDigits($num){
    $num_str = strval($num);
    $sum = 0;
    for ($i = 0; $i < strlen($num_str); $i++) {
      $sum += $num_str[$i];
    }
 
    echo "Sum of digits in ".$num." is ".$sum.".<br>";
    
}
sumDigits(45);
sumDigits(200);
sumDigits(9999);

?>