<?php
$str="Python is popular than PHP";
$str = str_replace(array('Python', 'PHP'), array('@ython', 'Python'), $str);
echo str_replace('@ython', 'PHP', $str);
?>