<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h2>Weather Report</h2>

    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="int" name="temperature" id="temperature" required>
        <input type="submit" value="Check">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];

    // Check the temperature 
    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature <= 20) {
        echo "<p>It's cool.</p>";
    } else {
        echo "<p>It's warm.</p>";
    }
}
    ?>
</body>
</html>