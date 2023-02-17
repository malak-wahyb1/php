<?php
function parall($side1, $side2, $diagonal) {
    if ($side1 == $side2 && $diagonal**2 == $side1**2 + $side2**2) {
      echo "The parallelogram is a rectangle.<br>";
    } elseif ($side1 == $side2) {
      echo "The parallelogram is a rhombus.<br>";
    } else {
      echo "The parallelogram is neither a rectangle nor a rhombus.<br>";
    }
  }
  parall(4,4,12);
  parall(4,4,5);
  parall(4,4,36);
  parall(4,4,5.6);




?>