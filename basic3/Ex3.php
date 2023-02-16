<?php
function countWord($text,$word){
    $arrayWord=explode(" ",$text);
    $count=0;
    $i=0;
    while($i<count($arrayWord)){
        if($arrayWord[$i]==$word){
            $count++;
        }
        $i++;
    }
    echo $count;
}
countWord("I love php because php is soo easy","php")
?>