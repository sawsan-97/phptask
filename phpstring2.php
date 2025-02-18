<?php
//task1
$input = "Twinkle , twinkle , littlestar";
$array = str_split($input);
var_dump($array);
echo"<br>";
//task2

$input_letter = "a";
$asciivalue =ord($input_letter);
$nextAsciiValue = $asciivalue + 1;
$nextletter = chr($nextAsciiValue);
echo "The next letter after $input_letter is $nextletter";
echo "<br>";


//task3

$originalStr = "The brown fox";
$insertStr = "quick";
$insert_pos =4;
$new_str = substr_replace($originalStr,$insertStr.' ',$insert_pos,0);
echo $new_str ;
echo "<br>";

$s = "The quick brown box";
$arry1 = explode(' ',trim($s));
echo $arry1[0];
echo"<br>";

 //task4 
 $number_str = "0000657022.24";
 $number_str = ltrim($number_str , "0");
 echo $number_str;
 echo"<br>";
 //task5

$my_str = "The quick brown fox jumps over the lazy dog---";
echo rtrim($my_str , "-");

//task6 
echo"<br>";
$string = "The quick brown fox jumps over the lazy dog";
echo implode(' ', array_slice(explode(' ',$string),0,5));

//task7
echo "<br>";

$str1 ="2,543.12";
$x = str_replace(',' , '',$str1);
if (is_numeric($x)){
    echo $x ;
    
}