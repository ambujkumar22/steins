<!DOCTYPE HTML>
<html>
<head>
<title>Japan</title>
<link rel="stylesheet" href="css/Masterpage.css">
<style>

.c{background-color:#333;
	margin-left:15.5%;
	position:absolute;
	top:60px;
	width:83.5%;
	height:89.5%;
	}
h1{text-shadow:1px 1px #111;
	color:#7B0099;
	font-size:40px;
	}
h2{text-shadow:1px 1px black;
	color:#7B0099;
	font-size:30px;
	margin-left:75px;
	}
h3{text-shadow:1px 1px black;
	color:white;
	background-color:#7B0099;
	font-size:25px;


	}
p{text-shadow:1px 1px black;
	color:White;
	font-size:18px;

	}
</style>
</head>
<body>
	<!-- login form -->
	<?php
		session_start();
		include 'login.php';
		error_reporting();
	 ?>
	 <!-- login form end -->
<div >
	<ul class="home">
	<li><a href="homepage.php" class="anchor">HOME</a></li>
	<!-- dropdown-->
	<li class="dropdown"><a class="dropbtn">ACTIVITIES</a>
		<div class="dropdown-content">
			<a href="#">MAURITIUS</a>
			<a href="#">AUSTRALIA</a>
			<a href="#">JAPAN</a>
			<a href="#">MALAYSIA</a>
			<a href="#">SINGAPORE</a>
			<a href="#">THAILAND</a>
			<a href="#">HONG KONG</a>
			<a href="#">PARIS</a>
		</div>
	</li>
	<!-- dropdown end -->
	<li><a href="contact_us.php" class="anchor">CONTACT US</a></li>
	<li><a href="About_us.php" class="anchor">ABOUT US</a></li>
	<!--the username display start-->
	<li><div class="u_name">
		<div class="u_name2">
		<?php   echo $_SESSION['user_name']; ?></div>
		</div>
	</li>
	<!--the username display end-->

	<!-- logout form here -->
	<li>
		<div class="container">
			<a href="Log_in.php"><div class="logout">LOG OUT</div></a>
		</div>
	</li>
	<!-- logout form end here -->
	<li style="float:right; background-color:#7B0099; color:white;text-align:center; padding:12px 12px;text-width:bold; font-family:'comic sans ms';text-shadow:2px 2px black">STAR TRAVELS</li>
	</ul>
</div>

<div class="b">
	<ul>
		<li><a href="Mauritius_images.php" class="sidebar">MAURITIUS</a></li>
		<li><a href="Australia_images.php" class="sidebar">AUSTRALIA</a></li>
		<li><a href="Thailand_images.php" class="sidebar">THAILAND</a></li>
		<li><a href="Singapore_images.php" class="sidebar">SINGAPORE</a></li>
		<li><a href="Malaysia_images.php" class="sidebar">MALAYSIA</a></li>
		<li><a href="Paris_images.php" class="sidebar">PARIS</a></li>
		<li><a href="Hong Kong_images.php" class="sidebar">HONG KONG</a></li>
		<li><a href="Japan_images.php" class="sidebar">JAPAN</a></li>

	</ul>

</div>
	<div class="c">
	<center><h1>Know Where You Are going</h1></center>
	<h2>From DAY-1 to DAY-4</h2>
	<center>
	<table  cellspacing=20 cellpadding=20>
	<tr><td>
	<h3>DAY-1</h3>
	<p>Flight- &nbsp&nbsp&nbsp&nbsp Ahmedabad(5:25) to Tokyo Narita(12:00)
		<br>
		Hotel- &nbsp&nbsp&nbsp&nbsp Hotel Mystays Maihama
		<br>
		Sightseeing- &nbsp&nbsp&nbsp&nbsp A Day at Disneyland
		<br>
		Meal- &nbsp&nbsp&nbsp&nbsp Dinner
	</p></td>
		<td><h3>DAY-2</h3>
	<p><br>Hotel- &nbsp&nbsp&nbsp&nbsp Hotel Mystays Maihama
		<br>
		Sightseeing- &nbsp&nbsp&nbsp&nbsp Full Day Tokyo City Tour
		<br>
		Meal- &nbsp&nbsp&nbsp&nbsp Breakfast & Dinner
	</p></td>


	</tr>

	<tr><td>
	<h3>DAY-3</h3>
	<p><br>
		Hotel- &nbsp&nbsp&nbsp&nbsp New Hankyu Osaka
		<br>
		Sightseeing- &nbsp&nbsp&nbsp&nbsp Visit the Nation's Kitchen - Osaka
		<br>
		Meal- &nbsp&nbsp&nbsp&nbsp Breakfast & Dinner
	</p></td>
		<td><h3>DAY-4</h3>
	<p>Flight- &nbsp&nbsp&nbsp&nbsp Osaka Itami(21:05) to Ahmedabad(4:25)
		<br>
		Hotel- &nbsp&nbsp&nbsp&nbsp New Hankyu Osaka
		<br>
		Sightseeing- &nbsp&nbsp&nbsp&nbsp Sayōnara (depart from Osaka)
		<br>
		Meal- &nbsp&nbsp&nbsp&nbsp Breakfast
	</p>
	</td>
	</tr>

	</table>
	</center>
	</div>
</body>
<script src="jQuery/jquery.js"></script>
<script src="jQuery/login-signup.js"></script>
<html>
