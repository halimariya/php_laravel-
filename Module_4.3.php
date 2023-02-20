<?php

// $fruit = array('apple', 'banana', 'cherry', 'date');
// $addFruit = array_push($fruit, 'orange');
// //echo $addFruit;
// $removeFruit = array_shift($fruit, 'pinaaple');
// echo $removeFruit;


$myArray = array('apple', 'banana', 'cherry', 'date');
$newArray = removeFirstAndLast($myArray);
print_r($newArray);