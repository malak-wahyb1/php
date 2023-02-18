<?php

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);
foreach($transactions as $value){
 $amount =abs($value['debit']-$value['credit']);
 echo "ID: " . $value['id'] . " => amount: " . $amount . "<br>";
}
?>