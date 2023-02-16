<?php
function isArmstrong($num){
    $sum = 0;
    $temp=$num;
    $num_digits=strlen($num);
    while ($temp>0){
        $digit=$temp%10;
        $sum+=pow($digit,$num_digits);
        $temp=(int)($temp/10);
        // echo $temp;
    }
    return ($num===$sum);
}
$num=9474;
if (isArmstrong($num)) {
    echo $num." is an Armstrong number";
} else {
    echo $num." is not an Armstrong number";
}

?>