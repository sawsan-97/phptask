<?php

//1
$input_str = "Convert the entered string to uppercase.";
$uppercase = strtoupper($input_str);
$lowercase = strtolower($input_str);
$ucfirst = ucfirst($input_str);
$ucwords = ucwords($input_str);
echo "Original String: $input_str<br>";
echo "Uppercase: $uppercase<br>";
echo "Lowercase: $lowercase<br>";
echo "First letter uppercase: $ucfirst<br>";
echo "First letter of each word capitalized: $ucwords<br>";

//2
echo "<br>";
$inputstring = "085119";
$hours = substr($inputstring,0,2);
$minutes = substr($inputstring,2,2);
$second = substr($inputstring , 4,2);
$time = "$hours:$minutes:$second";

echo "Formated time: $time";
//3 
echo "<br>";
$setence = "I am a full stack developer at orange coding academy";
$word = "orange";

if (strpos($setence,$word)!== false) {
    echo "word found!";

}else {
  echo "the word not found!";

}
//4
echo "<br>";
$url = "www.orange.com/index.php";
$filename = basename($url);
echo "the file name is $filename <br>";
//5
$email = "info@orange.com";
$username = strstr($email , '@',1 );
echo "the user name is $username";
echo "<br>";
//6
$email = "info@orange.com";
$thelastthree = substr($email , -3);
echo "the user name is $thelastthree";
echo "<br>";
//7
//8
$asentence = "That new trainee is so genius."; // Sample sentence
$newWord = "the"; // New word to replace the first word

// Split the sentence into an array of words
$words = explode(" ", $asentence);

// Replace the first word
$words[0] = $newWord;

// Join the array back into a sentence
$newSentence = implode(" ", $words);

echo "Original Sentence: $asentence\n";
echo "Modified Sentence: $newSentence\n";
?>