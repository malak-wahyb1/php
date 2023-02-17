<?php
// $sentence="I love php";
// $words=[];
// for ($i=0; $i<strlen($sentence); $i++){
//   $word=$sentence[$i];
//   array_push($words,$word);

//   $word="";
// }
// $newSentence = "";
// for ($i = count($words) - 1; $i >= 0; $i--) {
//     $newSentence .= $words[$i];
// }
// echo $newSentence;
// $sentence = "I love php";

// $words = explode(" ", $sentence);
// $reversedWords = array_reverse($words);
// $newSentence = implode(" ", $reversedWords);
// echo $newSentence;

$sentence = "I love PHP";
$length = strlen($sentence);
$reversed = "";

for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $sentence[$i];
}

echo $reversed;
?>
