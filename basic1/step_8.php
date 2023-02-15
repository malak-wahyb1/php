<?php
$grocery=array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');
echo "Hello Sir, do you have " .$grocery[0]. ", " .$grocery[1]. ", " .$grocery[2]. ",  Also if you sell fruits can I find a " .$grocery[5]."?<br>";

//b
$grocery_b=array(
    array('eggs','balade','mazere3'),
    array('milk','fresh','Taanayel'),
    array('water pack','Tanoureen','Reem')
);
echo "Hey sir, please I need 1 pack of " .$grocery_b[0][1]." ".$grocery_b[0][0]." and 3 ".$grocery_b[2][2]." ".$grocery_b[2][0];

?>