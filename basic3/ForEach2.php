<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
foreach($transactions as $value){
    foreach($value as $key=>$value2){
echo $key.": ".$value2 .",";}
echo "<br>";
}
?>