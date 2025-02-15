<?php
//1
function check_sum($num1 , $num2){
    $sum = $num1+$num2;
    if ($sum == 30) {
        return $sum;
    }else {
        return false;

    }
}
$num1 = 10;
$num2 = 10;
$result = check_sum($num1,$num2);
if ($result) {
    echo "The sum of $num1 and $num2 is $result, which equals 30.";
}else {
    echo "The sum of $num1 and $num2 does not equal 30.";
}
echo "<br>";
//2
function is_multiple_of_three($number){
    if ($number>0 && $number %3 == 0){
        return true;
    }else {
        return false;
    }

}
$number = 20;
if (is_multiple_of_three($number)){
    echo "true";
}else{
    echo "false";
}
echo "<br>";
//3
function is_in_range($number){
    if($number >=20 && $number<=50){
        return true ;

    }else {
        return false;
    }

}
$number=50;
if (is_in_range($number)) {
   echo "the number $number is in range";
}else {
    "the number $number is not in range";
}
//4
function find_largest_in_array($array) {
    // Initialize the largest number with the first element of the array
    $largest = $array[0];

    // Loop through the array to find the largest number
    foreach ($array as $num) {
        if ($num > $largest) {
            $largest = $num;
        }
    }

    return $largest;
}


echo "<br>";

$input_array = [1, 5, 9]; // Replace this with the array you want to check
$largest_number = find_largest_in_array($input_array);

echo "The largest number between " . implode(", ", $input_array) . " is $largest_number.";

//5
echo "<br>";
function electricity_bill($units){
    $bill = 0;
    if ($units<=50) {
        $bill = $units*2.50;

    }elseif (units<=150) {
        $bill = 50*2.50 +($units-50)*5;
    }elseif ($units<=250) {
       $bill = 50*2.50 + 100*5.00  +($units-150)*6.20;
    }else{
        $bill = 50*2.50 + 100*5.00 + 100*6.20  +($units-250)*7.50;
    }
    return $bill;
}
echo "<br>";
//7
function check_voting($age){
    if ($age >=18){
        echo "is eligible to vote";
    }else {
        echo "is not eligible to vote";
    }
}
$age = 15;
echo check_voting($age);
echo "<br>";
 //8
 function check_number($numb){
    if ($numb>0){
        return "positive";
    }elseif ($numb < 0) {
        return "negative";
    }else {
        return "zero";

    }
 }
 $numb = -5;
 echo check_number($numb);
 //9
 echo "<br>";
 function calculate_grade($scores){
    $total = array_sum($scores);
    $count = count($scores);
    $average = $total/$count;
    if ($average>=90) {
       return"A";

    }elseif ($average>=80) {
        return"B";
    }elseif ($average>=70) {
        return"C";
    }elseif ($average>=60) {
        return"D";
    }else {
        return "F";
    }

 }
 $scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
 $grade = calculate_grade($scores);
 echo "The grade for the student is '$grade'";