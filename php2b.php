<!DOCTYPE html>
<html>
<head>
    <title>Function Selector</title>
</head>
<body>

<h1>Choose 1, 2, or 3</h1>

<form action="" method="GET">
    <h2>1. String functions</h2>
    <h2>2. Math functions</h2>
    <h2>3. Date functions</h2>

    <h3>Enter your choice:</h3>
    <input type="text" name="choice" required><br>

    <h3>Enter your string or number:</h3>
    <input type="text" name="b" required><br><br>

    <input type="submit" value="Submit"><br><br>
</form>

<?php
if (isset($_GET["b"]) && isset($_GET["choice"])) {
    $string = $_GET["b"];
    $choices = $_GET["choice"];

    switch ($choices) {
        case 1:
            echo "Length: " . strlen($string) . "<br>";
            echo "Uppercase: " . strtoupper($string) . "<br>";
            echo "Reversed: " . strrev($string) . "<br>";
            break;

        case 2:
            if (is_numeric($string)) {
                echo "Square Root: " . sqrt($string) . "<br>";
                echo "Rounded: " . round($string) . "<br>";
                echo "Power of 2: " . pow($string, 2) . "<br>";
            } else {
                echo "Please enter a valid numeric input.<br>";
            }
            break;

        case 3:
            echo "Today: " . date("Y-m-d") . "<br>";
            echo "Time: " . date("h:i:s A") . "<br>";
            echo "Day: " . date("l") . "<br>";
            break;

        default:
            echo "Invalid choice. Please enter 1, 2, or 3.<br>";
            break;
    }
}
?>

</body>
</html>
