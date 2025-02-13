<?php
//answer 1
echo "Array 1";
$color = ["white","green","red"];

echo "<ul>";

echo "<li> white </li>";
echo "<li>green </li>";
echo "<li> red </li>";
echo "</ul>";

//answer2
echo "Array 2";
$cities = [
    "Italy"=>"Rome",
     "Luxembourg"=>"Luxembourg",
      "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki",
  "France" => "Paris", 
  "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", 
"Germany" => "Berlin",
 "Greece" => "Athens", 
 "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam",
 "Portugal"=>"Lisbon",
  "Spain"=>"Madrid"
];

asort($cities);
foreach ($cities as $country => $capital) {
   echo " The capital of $country is $capital<br>";
}

//answer3
echo "Array 3 <br>";
$color = [4 => "white", 6 => "green" ,11 => "red"];

echo reset($color);
echo "<br>";
//answer4

echo "Array 4 <br>";

$numbers = [1,2,3,4,5];
$location = 4;
$newitem = "$" ;

array_splice($numbers,$location-1 ,0,$newitem);
print_r($numbers);
echo "<br>";
//answer5

echo "Array 5 <br>";

$fruits = array("d" => "lemon" ,
 "a"=> "orange", 
 "b"=>"banana" ,
  "c"=>"apple");
ksort($fruits);
foreach($fruits as $key  => $value){
echo "$key => $value<br>";
};
//answer6

echo "Array 6 <br>";
$tempreture = [8, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73];
$average = array_sum($tempreture)/ count($tempreture);
echo ($average);
echo "<br>";
sort($tempreture);
$lowest = array_slice($tempreture,0,5);
echo implode(", ", $lowest);
echo"<br>";

$highest = array_slice($tempreture,-5);

echo implode(", ", $highest);
echo"<br>";

//answer7

echo "Array 7 <br>";
$array1=array ("color"=>"red",2,4);
$array2=array("a","b","color"=>"green","shape"=>"trapezod",4);

$result = array_merge($array1,$array2);
print_r($result);


//answer8

echo "Array 8 <br>";

$colors = array("red","blue","white","yellow");
for ($i=0; $i < count($colors) ; $i++) { 
    $colors[$i] = strtoupper($colors[$i]);
}

print_r($colors);

?>