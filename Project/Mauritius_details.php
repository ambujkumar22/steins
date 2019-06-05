<!DOCTYPE HTML>
<html>
<head>
<title>Mauritius</title>
	<link rel="stylesheet" href="css/Masterpage.css">
<style>

.c {
	background-color:#333;
	margin-left:15.5%;
	position:absolute;
	margin-top: -26.5%;
	width:83.5%;
	height:auto;
	}
h2 {
	text-shadow:1px 1px black;
	color:#7B0099;
	font-size:30px;
	margin-left:75px;
	}
h3 {
	text-shadow:1px 1px black;
	color:white;
	background-color:#7B0099;
	font-size:20px;
	padding-left:5px;
	}
pre {
	text-shadow:1px 1px black;
	color: #fff;
	font-size:15px;
	float: left;
	}
	.b {
		margin-top: 3.4%;
	}
	.d {
		margin-top: 0.3%;
		background-color: #333;
		height:17%;
		width: 15.1%;
		float: left;
		position: absolute;
		z-index: 1;
	}
	.mains {
		padding: 2px;
	}
	.e {
		height: 95%;
		width: 95%;
		background-color: #111;
		margin:1%;
		padding: 1%;
		box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
	}
	.details {
		height: 90%;
		width: 95%;
		margin-left: 3%;
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
	<li><a href="About_us" class="anchor">ABOUT US</a></li>
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
<div class="d">
</div>
</div>
	<div class="c">
	<center><h2 class='mains' style="width:80%;">Know Where You Are going</h2>

	<h2 class='mains'>From DAY-1 to DAY-5</h2></center>
<div class="e">

	<table class="details" cellspacing="25px">
	<tr style="width:50px;"><td>
	<h3>DAY-1</h3>
	<pre>
Flight- New Delhi(5:25) to MRU(12:00)

Hotel- Coral Azur

Sightseeing- Day At Leisure

Meal- Dinner
	</pre>
	</td>
		<td>
		<h3>DAY-2</h3>
	<pre><br>
Hotel- Coral Azur

Sightseeing- South island tour

Meal- Breakfast & Dinner
	</pre></td>

	<td rowspan=2><h3>DAY-5</h3>
	<pre>
Flight- MRU(21:05) to New Delhi(4:25)

Hotel- Coral Azur

Sightseeing- No Sightseeing

Meal- Breakfast
	</pre>
	</td>
	</tr>

	<tr><td>
	<h3>DAY-3</h3>
	<pre>
Hotel- Coral Azur

Sightseeing- North island tour

Meal- Breakfast & Dinner
	</pre></td>
		<td><h3>DAY-4</h3>
	<pre>
Hotel- Coral Azur

Sightseeing- Ile Aux Cerf tour

Meal- breakfast & Dinner
	</pre></td>
	</tr>

	</table>

	</div>
	</div>
</body>

</html>
