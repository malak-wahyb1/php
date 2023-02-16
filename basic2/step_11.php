<?php
function prime($num){
    
        
   
        if ($num == 1)
        return 1;
        for ($i = 2; $i <= $num/2; $i++)
        {
           if ($num % $i == 0)
           return 0; 
        }
     return 1;
     
}
$num=13;

if(prime($num)){
    echo "$num is prime number";
}else{
    echo "$num is not prime number";
}


?>