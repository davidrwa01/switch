<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form method="post">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <br><br>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "<h3>Result: $num1 + $num2 = $result</h3>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<h3>Result: $num1 - $num2 = $result</h3>";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<h3>Result: $num1 × $num2 = $result</h3>";
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<h3>Result: $num1 ÷ $num2 = $result</h3>";
                } else {
                    echo "<h3>Error: Division by zero is not allowed.</h3>";
                }
                break;
            default:
                echo "<h3>Invalid Operation</h3>";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form method="post">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <br><br>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "<h3>Result: $num1 + $num2 = $result</h3>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<h3>Result: $num1 - $num2 = $result</h3>";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<h3>Result: $num1 × $num2 = $result</h3>";
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<h3>Result: $num1 ÷ $num2 = $result</h3>";
                } else {
                    echo "<h3>Error: Division by zero is not allowed.</h3>";
                }
                break;
            default:
                echo "<h3>Invalid Operation</h3>";
        }
    }
    ?>
</body>
</html>
