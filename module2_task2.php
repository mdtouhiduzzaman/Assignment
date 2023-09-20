<?php
// Using a for loop to print numbers from 1 to 50 with the exception of multiples of 5
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        // Skip multiples of 5 using the continue statement
        continue;
    }
    echo $i . '<br/>';
}