<?php

$studentGrades = [
    "Student1" => ["Math" => 85, "English" => 90, "Science" => 88],
    "Student2" => ["Math" => 92, "English" => 88, "Science" => 94],
    "Student3" => ["Math" => 78, "English" => 85, "Science" => 80]
];
function calculateAverageGrades($studentGrades) {
    $averageGrades = [];


    foreach ($studentGrades as $student => $grades) {
        // Calculate the average grade for the student
        $averageGrade = array_sum($grades) / count($grades);

        $averageGrades[$student] = $averageGrade;
    }

    foreach ($averageGrades as $student => $averageGrade) {
        echo "Average grade for $student: $averageGrade\n";
    }
}

calculateAverageGrades($studentGrades);