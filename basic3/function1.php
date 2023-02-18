<?php
$personal_details=array("name" => "Rajesh Rao", "occupation" => "Engineer", 'age' => 39, "country" => "India");

function output($array){
    foreach ( $array as $key => $value )
    {
    echo "$key=$value<br>";
    }
}
output($personal_details);
?>