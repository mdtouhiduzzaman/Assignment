<?php
// Initialize the first two Fibonacci numbers
$veryOld = 0;
$old = 1;
$new = 0;

echo "First 10 Fibonacci numbers:\n";

for ($i = 1; $i <= 10; $i++) {
    // Calculate the next Fibonacci number
    $veryOld = $old;
    $old = $new;
    $new = $veryOld + $old;


    // Check if the current Fibonacci number is greater than 100
    if ($new > 100) {
        break; // Break out of the loop
    }
    
    echo $new . ' ';


}