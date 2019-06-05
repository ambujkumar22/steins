<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" href="css/Masterpage.css" type="text/css">
<style media="screen">
		body{
			font-family: Open sans, Arial;
		}
</style>

</head>
<body>
	<!-- login form -->
	<?php
		session_start();
		include 'login.php';
		error_reporting(0);
	 ?>
	 <!-- login form end -->
	<div>
	  <ul class="home">
	    <li><a href="homepage.php" class="anchor">HOME</a></li>
	    <!-- dropdown-->
	    <li class="dropdown"><a class="dropbtn">ACTIVITIES</a>
	      <div class="dropdown-content">
					<a href="Mauritius_details.php">MAURITIUS</a>
	        <a href="Australia_details.php">AUSTRALIA</a>
	        <a href="Japan_details.php">JAPAN</a>
	        <a href="Malaysia_details.php">MALAYSIA</a>
	        <a href="Mauritius_details.php">SINGAPORE</a>
	        <a href="Australia_details.php">THAILAND</a>
	        <a href="Japan_details.php">HONG KONG</a>
	        <a href="Malaysia_details.php">PARIS</a>
	      </div>
	    </li>
	    <!-- dropdown end -->
	    <li><a href="contact_us.php" class="anchor">CONTACT US</a></li>
	    <li><a href="About_us.php" class="anchor">ABOUT US</a></li>
			<!--the username display start-->
			<li>
				<a href="user_profile.php">
				<div class="u_name">
				<div class="u_name2">
				<?php   echo $_SESSION['user_name']; ?></div>
				</div>
				</a>
			</li>
			<!--the username display end-->

			<!-- logout form here -->
	    <li>
	      <div class="container">
	        <a href="Log_in.php"><div class="logout">LOG OUT</div></a>
	      </div>
	    </li>
	    <!-- logout form end here -->
	    <li style="float:right; background-color:#7B0099; color:white;text-align:center; padding:12px 12px;text-width:bold; font-family:'comic sans ms';text-shadow:2px 2px black;margin-right:0px">STAR TRAVELS</li>
	  </ul>
	</div>

	<img src="images/boat-01.jpeg" height=400px width=100% style="margin-top:3%; z-index:-1;">

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
		<center>
			<h2 class="mains">Grab Our Best Deals</h2>
			<table width=85% cellpadding=5>
				<tr>
					<td>
						<div class="trans"><a href="Mauritius_form.php">
								<img src="images/Mauritius.jpg" class="img" height=140px width=190px style="box-shadow:0px 2px 2px 0px rgba(0,0.2,0.2,0);">

								<div class="overlay">
									<div class="text">MAURITIUS</div>
								</div>
						</div>
						</a>
						<div class="font">
							<br>Duration: 1N/2D<br>Hotel: 4star<br>Price:<font> Rs.48,000</font>&nbsp(Per Person)
						</div>
					</td>

					<td>
						<div class="trans"><a href="Australia_form.php">
								<img src="images/Australia.jpg" class="img" height=140px width=190px style="box-shadow:0px 2px 2px 0px rgba(0,0.2,0.2,0);">
								<div class="overlay">
									<div class="text">AUSTRALIA</div>
								</div>
						</div>
						</a>
						<div class="font">
							<br>Duration: 2N/3D<br>Hotel: 5star<br>Price:<font> Rs.58,385</font>&nbsp(Per Person)
						</div>
					</td>

					<td>
						<div class="trans"><a href="Japan_form.php">
								<img src="images/Japan.jpg" class="img" height=140px width=190px style="box-shadow:0px 2px 2px 0px rgba(0,0.2,0.2,0);">
								<div class="overlay">
									<div class="text">JAPAN</div>
								</div>
						</div>
						</a>
						<div class="font">
							<br>Duration: 1N/2D<br>Hotel: 4star<br>Price:<font> Rs.36,000</font>&nbsp(Per Person)
						</div>
					</td>
					<td>
						<div class="trans"><a href="Malaysia_form.php">
								<img src="images/Malaysia.jpg" class="img" height=140px width=190px style="box-shadow:0px 2px 2px 0px rgba(0,0.2,0.2,0);">
								<div class="overlay">
									<div class="text">MALAYSIA</div>
								</div>
						</div>
						</a>
						<div class="font">
							<br>Duration: 1N/2D<br>Hotel: 4star<br>Price:<font> Rs.16,600</font>&nbsp(Per Person)
						</div>
					</td>
				</tr>


				<tr>
					<td>
						<div class="trans"><a href="Singapore_form.php">
								<img src="images/Singapore.jpg" class="img" height=140px width=190px style="box-shadow:0px 2px 2px 0px rgba(0,0.2,0.2,0);">
								<div class="overlay">
									<div class="text">SINGAPORE</div>
								</div>
						</div>
						</a>
						<div class="font">
							<br>Duration: 1N/2D<br>Hotel: 3.5star<br>Price:<font> Rs.22,990</font>&nbsp(Per Person)
						</div>
					</td>


					<td>
						<div class="trans"><a href="Thailand_form.php">
								<img src="images/Thailand.jpg" class="img" height=140px width=190px style="box-shadow:0px 2px 2px 0px rgba(0,0.2,0.2,0);">
								<div class="overlay">
									<div class="text">THAILAND</div>
								</div>
						</div>
						</a>
						<div class="font">
							<br>Duration: 2N/3D<br>Hotel: 4star<br>Price:<font> Rs.21,990</font>&nbsp(Per Person)
						</div>
					</td>
					<td>
						<div class="trans"><a href="Hong Kong_form.php">
								<img src="images/Hong Kong.jpg" class="img" height=140px width=190px style="box-shadow:0px 2px 2px 0px rgba(0,0.2,0.2,0);">
								<div class="overlay">
									<div class="text" style="color: white;font-size: 20px; position:absolute;top:50%;left: 55%;transform:translate(-50%,-50%);-moz-transform:translate(-50%, -50%);">HONG KONG</div>
								</div>
						</div>
						</a>
						<div class="font">
							<br>Duration: 2N/3D<br>Hotel: 4star<br>Price:<font> Rs.25,660</font>&nbsp(Per Person)
						</div>
					</td>


					<td>
						<div class="trans"><a href="Paris_form.php">
								<img src="images/Paris.jpg" class="img" height=140px width=190px style="box-shadow:0px 2px 2px 0px rgba(0,0.2,0.2,0);">
								<div class="overlay">
									<div class="text">PARIS</div>
								</div>
						</div>
						</a>
						<div class="font">
							<br>Duration: 1N/2D<br>Hotel: 5star<br>Price:<font> Rs.42,430</font>&nbsp(Per Person)
						</div>
					</td>
				</tr>

			</table>
		</center>
	</div>
</body>

</html>
