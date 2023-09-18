<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Temperature Converter</h2>
    <form method="post" action="">
        <label for="temperature">Temperature:</label>
        <input type="text" name="temperature" id="temperature" required>
        <select name="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];

        if ($conversion === "celsius_to_fahrenheit") {
            $converted_temperature = ($temperature * 9/5) + 32;
            $conversion_label = "Celsius to Fahrenheit";
        } elseif ($conversion === "fahrenheit_to_celsius") {
            $converted_temperature = ($temperature - 32) * 5/9;
            $conversion_label = "Fahrenheit to Celsius";
        }

        echo "<p>Original Temperature: $temperature degrees</p>";
        echo "<p>Conversion: $conversion_label</p>";
        echo "<p>Converted Temperature: $converted_temperature degrees</p>";
    }
    ?>
</body>
</html>