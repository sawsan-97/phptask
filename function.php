<?php
//function 1
function is_prime($num){
    if($num < 2){
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) { 
        if ($num % $i == 0){
            return false;
        }
    }
    return true;
}

$num = 3;
if (is_prime($num)) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}


echo "<br>";

//function 2

function reverse_string($str){
    return strrev($str);

}

$original_str = "remove";
$reverse_str = reverse_string($original_str);
echo "original string is $original_str<br>";
echo "reverse string is $reverse_str<br>";
//function 3
echo "<br>";
function swap(&$x, &$y){
    $z = $x;
    $x = $y;
    $y = $z;
}

$x = 12;
$y = 10;
echo "before swapping x = $x, y = $y <br>";
swap($x, $y);
echo "after swapping x = $x, y = $y";
echo"<br>";

//function4
function is_armstrong($num) {
    $sum = 0;
    $temp = $num;
    $digits = strlen((string)$num);

    // Calculate the sum of the cubes of the digits
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }

    // Check if the sum is equal to the original number
    return $sum == $num;
}

// Example usage
$number = 407; // Replace this with the number you want to check
if (is_armstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo "<br>";

//function 5
function is_palindrome($str) {
    // Remove all non-alphanumeric characters and convert to lowercase
    $str = preg_replace('/[^A-Za-z0-9]/', '', $str);
    $str = strtolower($str);
    
    // Check if the string is equal to its reverse
    return $str == strrev($str);
}
$input_string = "Eva, can I see bees in a cave?";
if (is_palindrome($input_string)) {
    echo "'$input_string' is a palindrome.";
} else {
    echo "'$input_string' is not a palindrome.";
}

echo "<br>";
//function 6
function remove_duplicates($array) {
    // Using array_unique() function to remove duplicates
    return array_values(array_unique($array));
}

// Example usage
$input_array = [2, 4, 7, 4, 8, 4];
$unique_array = remove_duplicates($input_array);

echo "Original array: ";
print_r($input_array);
echo "<br>";
echo "Array after removing duplicates: ";
print_r($unique_array);
?>

