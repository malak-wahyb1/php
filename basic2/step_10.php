<?php
function palindrome($str){
    $string=strrev($str);
    if($str==$string){
        echo "$str is a palindrome string<br>";
    }else{
        echo "$str is not a palindrome string<br>";
    }

}
palindrome('hello');
palindrome('madam')
?>