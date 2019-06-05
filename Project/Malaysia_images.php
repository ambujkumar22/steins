<!DOCTYPE HTML>
<html>

<head>
	<title>Malaysia</title>
	<link rel="stylesheet" href="css/Masterpage.css">
	<style>
		body {
			background-color: black;
		}

		.c {
			background-color: #333;
			margin-top: 3%;
			margin-left: 0%;
			width: 99.8%;
			height: 501%;
			position: relative;
			z-index: -1;
		}

		a {
			color: white;
			text-decoration: none;
		}

		img {
			box-shadow: 0px 5px 3px 0px rgba(0, 0, 0, 0.5);
			margin: 10px;

		}

		h2.mains {
			text-shadow: 1px 1px black;
			text-align: center;
			margin: auto;
			font-family: Open sans, Arial;
		}

		p {
			color: white;
			text-shadow: 1px 1px black;
			font-size: 22px;
			margin-left: 5px;
			font-family: Open sans, Arial;
		}

		font {
			color: #7B0099;
		}
		/* video start*/

    .introVideo {
    	z-index: 0;
      position: absolute;
      top: -59px;
      left: 0px;
      height: 750px;
      width: 1518px;
      overflow: hidden;
    }
    .introVideo video {
      min-width: 100%;
      min-height: 100%;
    }
		/* video end*/
		.c {
			margin-top: 46%;
		}
		.d {
			background-color: #111;
			padding: 10px;
			height: 370px;
			margin: 30px;
			box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
		}
		/* comment box start*/
		.e {
			background-color: #111;
			padding: 10px;
			margin: 30px;
			box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
			color: #fff;
			height: auto;
		}
		.commentArea {
			margin: 2%;
		}
		.commentBox {
			border: 2px solid #7b0099;
			background: #111;
			outline: none;
			width:50%;
			color: white;
			font-size: 16px;
			resize: none;
		}
		.commentBox:placeholder {
			color: #ccc;
		}
		.commentBtn {
			margin-top: -6%;
			float: right;
			margin-right: 10%;
			width: 13%;
			padding: 5px;
			border: 2px solid #fff;
			background-color: #111;
			border-radius: 5px;
			color: #fff;
			font-size: 15px;
			font-family: Open sans, Arial;
			cursor: pointer;
		}
		.commentBtn:hover {
			background-color: #7b0099;
			transition-duration: 0.3s;
		}
		.f {
			background-color: #222;
			padding: 1%;
			margin: 30px;
			box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
			color: #fff;
			height: auto;
		}
		.commentDelete {
			background-color: #222;
			border: 1px solid #fff;
			color: #fff;
			cursor: pointer;
		}
		/* comment box end*/
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
					<a href="Log_in.php">
						<div class="logout">LOG OUT</div>
					</a>
				</div>
			</li>
			<!-- logout form end here -->
			<li style="float:right; background-color:#7B0099; color:white;text-align:center; padding:12px 12px;text-width:bold; font-family:'comic sans ms';text-shadow:2px 2px black">STAR TRAVELS</li>
		</ul>
	</div>
	<!-- video start-->
	<div class="introVideo">
		<video src="videos/Malaysia-4K.mp4" controls autoplay loop></video>
	</div>
	<!-- video end-->
	<div class="c">

		<center>
			<h2 class="mains" style="margin: 20px;padding: 5px;">EXPLORE</h2>
			<a href=#mal1><img src="images/mal1.jpg" width=400px height=300px title="Gunung Mulu National Park" hspace=20px></a>
			<a href=#mal2><img src="images/mal3.jpg" width=400px height=300px title="Langkawi" hspace=20px></a>
			<a href=#mal3><img src="images/mal5.jpg" width=400px height=300px title="Taman Negara" hspace=20px></a>
			<a href=#mal4><img src="images/mal7.jpg" width=400px height=300px title="Kuala Lumpur" hspace=20px></a>
			<a href=#mal5><img src="images/mal9.jpg" width=400px height=300px title="Cameron Highlands" hspace=20px></a>
			<a href=#mal6><img src="images/mal11.jpg" width=400px height=300px title="Melaka" hspace=20px></a>
		</center>
		<br>
		<a name=mal1>
			<div class="d" >
				<h2 class="mains">Gunung Mulu National Park</h2>
			</a>
			<p>
				<img src="images/mal2.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px align=left>
				Gunung Mulu National Park is one of the most awe-inspiring natural attractions in all of Southeast Asia. Located in Malaysian Borneo in the Sarawak State, this national park features some of the largest and longest cave systems in the world. Included in these is the world’s largest cave chamber, the Sarawak Chamber, which is estimated large enough to hold 40 Boeing 747 aircraft.
				<br>
				<font>Famous for:</font>Extraordinary limestone karst formations and phenomenal cave systems.
			</p>
			</div>
				<br>

		<a name=mal2>
			<div class="d" >
			<h2 class="mains">Langkawi</h2>
		</a>
		<p><img src="images/mal4.jpg" width=400px height=300px title="Tamarind Waterfalls" hspace=20px align=right>
			Located off Malaysia’s northwestern coast in the Andaman Sea, Langkawi is an archipelago of 99 islands boasting picturesque beaches, rainforest, mangroves and forest-clad mountains. In recent years, resorts, hotels, restaurants and other tourist facilities have developed in Langkawi, offering visitors the opportunity to experience the archipelago’s exceptional natural beauty.
		</p>
	</div>
		<br>

		<a name=mal3>
			<div class="d" >
			<h2 class="mains">Taman Negara</h2>
		</a>
		<p><img src="images/mal6.jpg" width=400px height=300px title="Moka" hspace=20px align=left>
			Encompassing three states across the northern part of West Malaysia, Taman Negara is reputed to be the oldest tropical rainforest in the world. A popular ecotourism and adventure destination, this national park is teeming in in wildlife from rare plants to exotic birds and scarce animals like the Malayan Tiger, Asian elephant and Sumatran Rhinoceros. One of the most popular things to do in Taman Negara is the Canopy Walk, a long suspension bridge high above the treetops where visitors can walk and glimpse exotic birds. Guided night safaris are also available to see plants that only bloom at night, glow-in-the-dark fungi and nocturnal creatures like owls, leopard cats and water dragons.
		</p>
	</div>
		<br>

		<a name=mal4>
			<div class="d" >
			<h2 class="mains">Kuala Lumpur</h2>
		</a>
		<p><img src="images/mal8.jpg" width=400px height=300px title="Sugar Museum" hspace=20px align=right>
			Less than 200 year ago, Kuala Lumpur was just a quiet tin-mining town in West Malaysia. Today, this same sleepy village has flourished into the country’s federal capital and largest metropolis. Commonly called KL by locals, this vibrant city is a cultural melting pot, noted for its impressive skyscrapers and buzzing scenes of shopping and dining. KL doesn’t really have a city center but rather several hubs of activity. The former colonial district features distinctive architecture and the pleasant Merdeka Square. Chinatown is a busy tourist hub while the Golden Triangle presents the city’s modern face, with the famous Petronas Towers as its most striking building.
		</p>
		</div>
		<br>

		<a name=mal5>
			<div class="d" >
			<h2 class="mains">Cameron Highlands</h2>
		</a>
		<p><img src="images/mal10.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px align=left>
			Providing a cool escape from the heat of the lowlands, the Cameron Highlands in the Titiwangsa Mountains are one of Malaysia’s oldest tourist destinations. Developed with an English garden charm, this beautiful tableland offers lush scenery, forests, lakes, wildlife and outdoor recreation. As Malaysia’s chief tea and flower producer, the Cameron Highlands also abounds in sprawling tea plantations and colorful flower farms. Many of these establishments are open to the public. Several pictorial golf courses are available for golfers.
		</p>
	</div>
		<br>

		<a name=mal6>
			<div class="d" >
			<h2 class="mains">Melaka</h2>
		</a>
		<p><img src="images/mal12.png" width=400px height=300px title="Parc Francois Leguat" hspace=20px align=right>
			Commanding an important position on the busy sea route between India and China on West Malaysia’s southwestern coast, Melaka was ruled and battled over for centuries between Indian, Portuguese, British and Dutch governments. As a result, this modern day Malaysian city is now one of the best places to visit in Malaysia packed with architecture, culture, traditions and cuisine all reflecting its rich heritage. The Portuguese Settlement in Melaka is characterized by charming villas and the remains of an old fort while the Dutch district features some of the oldest Dutch architecture in the East.

		</p>
	</div>
		<br>
		<!-- comment section start-->
			<hr style="  border: 3px solid #7b0099;border-radius: 2px;width:90%;">
			<div class="e">
				<h2 class="mains" style="width:99%; padding:5px;">Leave Your Comments Here</h2>
				<form class="" action="Malaysia_images.php" method="post">
					<center>
						<div class="commentArea">
							<textarea name="commentBox" class="commentBox" rows="5" cols="100" placeholder="Type here..."></textarea>
						</div>
						<input type="submit" class="commentBtn" name="comment" value="Comment">
						<center>
								<?php
								$link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);
								$location = "MALAYSIA";

								if (isset($_POST["comment"])) {
									$userComment = $_POST["commentBox"];
									$commentId = $_SESSION['primeid'];
									$usercomm = $_SESSION['user_name'];



								$inputcomm = mysqli_query($link3,"INSERT INTO maucomm (comment_id,location,user_comm,comment) VALUES ('$commentId','$location','$usercomm','$userComment')") or die("failed to query database".mysqli_error());
									header("Location: Malaysia_images.php");
								}

								$result3 = mysqli_query($link3,"SELECT * from maucomm WHERE location='$location'") or die("failed to query database".mysqli_error());
								$row3 = mysqli_fetch_assoc($result3);

										do {
											$commid = $row3['id'];
											$username = $row3['user_comm'];
											$comment = $row3['comment'];
											$adminid = $_SESSION['email_id'];


										if($adminid == 'ambuj@gmail.com'){
										echo "<div class='f'>
										<table style='width:80%;'>
											<tr>
												<td style='color:#7B0099;font-size:1.5em;font-family:Open sans, Arial;'>".$username.": </td>

												<td style='color:#fff;font-size:1em;font-family:Open sans, Arial;text-align:left;margin-left:0px;'>".$comment."</td>


												<td style='float:right;'>
												<form action='".deleteComments($link3)."' method='post' >
												<input type='hidden' name='cid' value='".$commid."'>
												<button name='commentDelete' class='commentDelete' type='submit'>Delete</button>
												</form></td>
											</tr>
										</table>
									</div>";
										} else{
											echo "<div class='f'>
											<table style='width:80%;'>
												<tr>
													<td style='color:#7B0099;font-size:1.5em;font-family:Open sans, Arial;'>".$username.": </td>

													<td style='color:#fff;font-size:1em;font-family:Open sans, Arial;text-align:left;margin-left:0px;'>".$comment."</td>


													<td style='float:right;'>
													</td>
												</tr>
											</table>
										</div>";
											}
										} while($row3 = mysqli_fetch_assoc($result3));

										function 	deleteComments($link3){
											if(isset($_POST['commentDelete'])) {
												$cid = $_POST['cid'];
												$link3->query("DELETE FROM maucomm WHERE id='$cid'");
												header("Location: Malaysia_images.php");

											}
										}

											?>

				</form>
			</div>

	</div>
</body>
<script src="jQuery/jquery.js"></script>
<script src="jQuery/login-signup.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
