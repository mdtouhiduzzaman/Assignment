<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post" action="">
        <label for="score1">1st Exam:</label>
        <input type="text" name="score1" id="score1" required><br><br>

        <label for="score2">2nd Exam:</label>
        <input type="text" name="score2" id="score2" required><br><br>

        <label for="score3">3rd Exam:</label>
        <input type="text" name="score3" id="score3" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the letter grade
        if ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 60) {
            $grade = 'B';
        } elseif ($average >= 50) {
            $grade = 'C';
        } elseif ($average >= 40) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "<p>Average Marks: $average</p>";
        echo "<p>Result: $grade</p>";
    }
    ?>
</body>
</html>