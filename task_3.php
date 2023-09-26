<?php


$grades = [85, 92, 78, 88, 95];

function sortGradesDescending($grades) {
    // Sort the grades array in descending order
    rsort($grades);
    
    // Print the sorted grades as an array
    print_r($grades);
}


sortGradesDescending($grades);