<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form Validation</title>
    <style>.error { color: red; }</style>
</head>
<body>
<h2>Simple PHP Form Validation</h2>
<?php
$name = $email = $password = "";
$nameErr = $emailErr = $passwordErr = "";
function clean($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean($_POST["name"] ?? '');
    $email = clean($_POST["email"] ?? '');
    $password = clean($_POST["password"] ?? '');
    if (!$name) {
        $nameErr = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $name)) {
        $nameErr = "Only letters allowed";
    }
    if (!$email) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    if (!$password) {
        $passwordErr = "Password is required";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&_]).{7,}$/", $password)) {
        $passwordErr = "Password must be 7+ chars with uppercase, number & special char";
    }
    // Display inputs if no errors
    if (!$nameErr && !$emailErr && !$passwordErr) {
        echo "<h3>Your Input:</h3>";
        echo "Name: $name<br>Email: $email<br>Password: $password<br>";
    }
}
?>
<form method="post" action="">
    Name: <input type="text" name="name">
    <span class="error"><?= $nameErr ?></span><br><br>
    Email: <input type="text" name="email">
    <span class="error"><?= $emailErr ?></span><br><br>
    Password: <input type="password" name="password">
    <span class="error"><?= $passwordErr ?></span><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
