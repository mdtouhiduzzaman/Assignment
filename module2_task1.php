<?php
function evenNumber($start, $end, $step) {
    if ($start % 2 !== 0) {
        $start++; // Ensure that we start with an even number
    }

    // Using a for loop
    echo "Using a for loop: ";
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . ' ';
    }
    echo "<br/>";

    // Using a while loop
    echo "Using a while loop: ";
    $current = $start;
    while ($current <= $end) {
        echo $current . ' ';
        $current += $step;
    }
    echo "<br/>";

    // Using a do-while loop
    echo "Using a do-while loop: ";
    $current = $start;
    do {
        echo $current . ' ';
        $current += $step;
    } while ($current <= $end);
    echo "\n";
}

// Call the function to print even numbers from 1 to 20 with a step of 2
evenNumber(1, 20, 2);