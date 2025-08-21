<?php
date_default_timezone_set("Asia/Kolkata");

// Check for last visit cookie
if (isset($_COOKIE["lastVisit"])) {
    $lastVisit = $_COOKIE["lastVisit"];
} else {
    $lastVisit = "This is your first visit!";
}

// Set new cookie
$currentTime = date("Y-m-d H:i:s");
setcookie("lastVisit", $currentTime, time() + (365 * 24 * 60 * 60)); // 1 year
?>

<!DOCTYPE html>
<html>
<head>
    <title>PSG College of Arts & Science</title>
</head>
<body>

<!-- Simple Navigation -->
<table width="100%" bgcolor="gray">
    <tr>
        <td><b style="color:white;">PSG COLLEGE OF ARTS & SCIENCE</b></td>
        <td align="right">
            <a href="admissions.php">Admissions</a> |
            <a href="index.php">Home</a> |
            <a href="programmes.php">Programs</a> |
            <a href="about.php">About</a>
        </td>
    </tr>
</table>

<!-- Content Section -->
<center>
    <h2>WELCOME TO PSG COLLEGE OF ARTS & SCIENCE</h2>
    <p>Explore our wide range of academic programs, state-of-the-art facilities and diverse student community.</p>
    <p style="color:red;">Your last visited on this page on <?php echo $lastVisit; ?></p>
    <img src="college.jpg" alt="College Image" width="70%">
</center>

</body>
</html>


Admissions.php
<!DOCTYPE html>
<html>
<head>
    <title>Admissions - PSG College</title>
</head>
<body>
    <table width="100%" bgcolor="gray">
        <tr>
            <td><b style="color:white;">PSG COLLEGE OF ARTS & SCIENCE</b></td>
            <td align="right">
                <a href="admissions.php">Admissions</a> |
                <a href="index.php">Home</a> |
                <a href="programmes.php">Programs</a> |
                <a href="about.php">About</a>
            </td>
        </tr>
    </table>

    <center>
        <h2>Admissions</h2>
        <p>Admission process details will be displayed here.</p>
    </center>
</body>
</html>
