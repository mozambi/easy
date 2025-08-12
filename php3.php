<!DOCTYPE html>
<html>
<head>
    <title>Uppercase and Lowercase Counter</title>
</head>
<body>
    <center>
        <h1>Calculate Uppercase and Lowercase</h1>
    </center>
    
    <form action="" method="GET">
        <h2>Enter your text</h2>
        <input type="text" name="b"><br><br>
        <input type="submit" value="Submit"><br>
    </form>

    <?php
    if (isset($_GET["b"])) {
        $n = $_GET["b"];
        $length = strlen($n);
        $upper = 0;
        $lower = 0;

        for ($i = 0; $i < $length; $i++) {
            $char = $n[$i]; // Fix: use square brackets to access characters
            if (ctype_upper($char)) {
                $upper++;
            } elseif (ctype_lower($char)) {
                $lower++;
            }
        }

        echo "<h3>Uppercase letters: $upper</h3>";
        echo "<h3>Lowercase letters: $lower</h3>";
    }
    ?>
</body>`
</html>
