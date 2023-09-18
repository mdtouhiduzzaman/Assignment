<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h2>Number Comparison Tool</h2>
    <form method="post" action="">
        <label for="number1">Enter the first number:</label>
        <input type="text" name="number1" id="number1" required><br><br>

        <label for="number2">Enter the second number:</label>
        <input type="text" name="number2" id="number2" required><br><br>

        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;

        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
</body>
</html>