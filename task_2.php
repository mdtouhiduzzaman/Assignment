<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers($numbers) {
    $result = array();
    
    foreach ($numbers as $number) {

        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    
    // Print the resulting array
    print_r($result);
}

removeEvenNumbers($numbers);