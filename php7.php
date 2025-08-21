<?php
$last_visited_time=time();
setcookie('last_visited',$last_visited_time,time()+3600);
if(isset($_COOKIE['last_visited']))
{ 
$last_visited=$_COOKIE['last_visited']; 
date_default_timezone_set("Asia/Kolkata");
$current_time=date('y-m-d H:i:s'); 
}
else
{ 
$last_visited_date="unknown";
} 
?>
<!DOCTYPE html>
<html>
<head>
<title>COLLEGE HOMEPAGE</title>
<style> body {
background-color: #ef6; margin:0; }
.header1 { display:flex; color: white;
background-color: grey; padding: 5px; }
ul { display:flex; }li { list-style:none; padding:0 15px; }
.headlist {
text-decoration:none; font-size:20px; }
.mainclass { background-
image:url("https://getmyuni.azureedge.net/co llege-image/big/psg-college-of-arts-and- science-psgcas-coimbatore.jpg");
background-repeat:no_repeat; background-size:cover;
height:630px; text-align:center;
} .lastvisit { color:red; }
.contact{
text-align:left; padding-left: 15px; padding-top: 15px;
}
.Footerdetails{ background-color:yellow; height:50px;
}
 
</style>
</head>
<body>
<header class="header1">
<img
src="https://ecampus.psgtech.ac.in/Images/P SG.png">
<h3><marquee behavior="alternate">PSG COLLEGE OF ARTS &
SCIENCE</marquee></h3>
<nav>
<ul>
<li><a class="headlist" href="login.php" style="color:yellow">Admissions</a></li>
<li><a class="headlist" href="#"
style="color:yellow">Home</a></li>
<li><a class="headlist" href="#"
style="color:yellow">Programs</a></li>
<li><a class="headlist" href="#"
style="color:yellow">Exams</a></li>
<li><a class="headlist" href="#"
style="color:yellow">Placement</a></li>
<li><a class="headlist" href="#"
style="color:yellow">About</a></li>
</ul>
</nav>
</header>
<main class="mainclass">
<br><br>
<h2>WELCOME TO PSG COLLEGE OF ARTS & SCIENCE</h2>
<p><b>Explore our wide range of academic progress, state_of_the_art facilities and
diverse students community.</b></p>
<p class="lastvisit"><b><em>Your last visited on this page on <?php echo $current_time;
?></em></b></p>
<audio autoplay loop>
<source src="background_music.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<img src="animated_logo.gif" alt="College Logo" width="150">
</main>
<div class="Footerdetails">
<p class="contact"> Contact:04212485678
