<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <label for="num1">Enter the first number:</label>
        <input type="text" name="num1" id="num1" required><br><br>

        <label for="num2">Enter the second number:</label>
        <input type="text" name="num2" id="num2" required><br><br>

        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiplication":
                $result = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero is not allowed.";
                }
                break;
            default:
                $result = "Invalid operation selected.";
        }

        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>