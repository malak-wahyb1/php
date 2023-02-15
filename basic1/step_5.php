<?php
$course_name="UI design course";
$enrolled_students=42;
$price=40.5;
$on_discount=true;

echo "Course title: " .$course_name. "<br>";
echo "Enrolled Students: " .$enrolled_students. "<br>";
echo "Course price " .$price. " $ USD<br>";
if($on_discount==true){
     echo "Course on discount:yes " ;
    }else{
        echo "Course on discount:No ";
    }
?>