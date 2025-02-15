<?php
//1
function display_sequence(){
    for ($i=1; $i <= 10; $i++) { 
      echo $i;
      if ($i<10) {
       echo "-";
      }
    }
}
display_sequence();
//2
echo "<br>";
function integers(){
    for ($i=0; $i <=30; $i++) { 
      echo $i;
    }
}
integers();
//3
//4
//5
//6
echo "<br>";
$number = 5; // Sample input
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "The factorial of $number is $factorial<br>";
//7
