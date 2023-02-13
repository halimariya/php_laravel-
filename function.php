
<?php

function checkEvenAndOdd($number) {
    if ($number % 2 == 0) {
       return "Even";
    } else {
       return "Odd";
    }
 }
 
 echo checkEvenAndOdd(2); 
 echo PHP_EOL;
 echo checkEvenAndOdd(3); 
 echo PHP_EOL;
