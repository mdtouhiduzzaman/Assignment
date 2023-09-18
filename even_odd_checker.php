<!DOCTYPE html>
<html>
<head>
    <title>Even-Odd Checker</title>
</head>
<body>
    <h2>Even-Odd Checker</h2>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="text" name="number" id="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        // Check if the number is even or odd
        if($number ==0 ) {
            $result = "Zero";
        }
        else if ($number % 2 == 0) {
            $result = "even";
        } else {
            $result = "odd";
        }

        echo "<p>The number $number is $result.</p>";
    }
    ?>
</body>
</html>