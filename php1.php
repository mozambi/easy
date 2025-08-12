<!DOCTYPE html>
<html>
<head>
  <title>Sum or Factorial</title>
</head>
<body>

<h1>Choose either 1 or 2</h1>

<form action="" method="GET">
  <h2>1. Sum of digits</h2>
  <h2>2. Factorial of number</h2>

  <h3>Enter your choice:</h3>
  <input type="text" name="choice" required><br><br>

  <h3>Enter your number:</h3>
  <input type="text" name="b" required><br><br>

  <input type="submit" value="Submit"><br><br>
</form>

<?php
if (isset($_GET["b"]) && isset($_GET["choice"])) {
    $num = $_GET["b"];
    $choice = $_GET["choice"];

    // Validate input
    if (!is_numeric($num) || $num < 0 || intval($num) != $num) {
        echo "Please enter a valid non-negative integer number.<br>";
        exit;
    }

    $num = (int)$num;  // convert to integer

    switch ($choice) {
        case 1:
            // Sum of digits
            $temp = $num;
            $sum = 0;
            while ($temp > 0) {
                $r = $temp % 10;
                $sum += $r;
                $temp = (int)($temp / 10);
            }
            echo "Sum of digits of " . $num . " is " . $sum . ".<br>";
            break;

        case 2:
            // Factorial
            if ($num > 20) {
                // To avoid very large numbers
                echo "Number too large for factorial calculation.<br>";
                break;
            }
            $fact = 1;
            for ($i = 1; $i <= $num; $i++) {
                $fact *= $i;
            }
            echo "Factorial of " . $num . " is " . $fact . ".<br>";
            break;

        default:
            echo "Invalid choice. Please enter 1 or 2.<br>";
            break;
    }
}
?>

</body>
</html>
