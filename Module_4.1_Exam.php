<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order.
// (Hint: You can use the usort() function to define a custom sorting function.)


$familyMember = array ('Father', 'Mother', 'Sister', 'Brother', 'Uncle',);
sort($familyMember);

$arrlength = count($familyMember);
for($x=0; $x<$familyMember; $x++){
    echo $familyMember [$x];
    echo PHP_EOL;
}