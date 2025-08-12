<!DOCTYPE html>
<html>
<head>
    <title>College Library Form</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<?php
// Initialize variables
$name = $roll = $email = $dept = "";
$nameErr = $rollErr = $emailErr = $deptErr = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // Validate Roll Number
    if (empty($_POST["roll"])) {
        $rollErr = "Roll number is required";
    } else {
        $roll = test_input($_POST["roll"]);
        if (!preg_match("/^[0-9]+$/", $roll)) {
            $rollErr = "Only numbers allowed";
        }
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Department
    if (empty($_POST["dept"])) {
        $deptErr = "Department is required";
    } else {
        $dept = test_input($_POST["dept"]);
    }
}

// Function to clean input
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<h2>College Library Student Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span><br><br>

    Roll No: <input type="text" name="roll" value="<?php echo $roll; ?>">
    <span class="error">* <?php echo $rollErr; ?></span><br><br>

    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span><br><br>

    Department:
    <select name="dept">
        <option value="">Select</option>
        <option value="Computer Science" <?php if($dept=="Computer Science") echo "selected"; ?>>Computer Science</option>
        <option value="Data Analytics" <?php if($dept=="Data Analytics") echo "selected"; ?>>Data Analytics</option>
        <option value="Mathematics" <?php if($dept=="Mathematics") echo "selected"; ?>>Mathematics</option>
    </select>
    <span class="error">* <?php echo $deptErr; ?></span><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
// If all fields are valid, display details
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($rollErr) && empty($emailErr) && empty($deptErr)) {
    echo "<h3>Student Details Entered:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Roll No: " . $roll . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Department: " . $dept . "<br>";
}
?>

</body>
</html>
