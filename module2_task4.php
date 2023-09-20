<?php
function fibonacci($count) {
    // Initialize the first two Fibonacci numbers
    $veryOld = 0;
    $old = 1;
    $new = 0;

    echo "First $count Fibonacci numbers:\n";
  

    for ($i = 1; $i <= $count; $i++) {
        // Calculate the next Fibonacci number
        
        $veryOld = $old;
        $old = $new;
        $new = $veryOld + $old;


        echo $new . ' ';


    }
}

fibonacci(15);