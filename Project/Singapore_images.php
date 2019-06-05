<!DOCTYPE HTML>
<html>

<head>
	<title>Singapore</title>
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
		<video src="videos/Singapore-4K.mp4" controls autoplay loop></video>
	</div>
	<!-- video end-->
	<div class="c">

		<center>
			<h2 class="mains" style="margin: 20px;padding: 5px;">EXPLORE</h2>
			<a href=#sin1><img src="images/sin1_2.jpg" width=400px height=300px title="Marina Bay Sands" hspace=20px></a>
			<a href=#sin2><img src="images/sin3.jpg" width=400px height=300px title="Gardens by the Bay" hspace=20px></a>
			<a href=#sin3><img src="images/sin5.jpg" width=400px height=300px title="Singapore Zoo" hspace=20px></a>
			<a href=#sin4><img src="images/sin7.jpg" width=400px height=300px title="Chinatown" hspace=20px></a>
			<a href=#sin5><img src="images/sin9.jpg" width=400px height=300px title="Universal Studios Singapore" hspace=20px></a>
			<a href=#sin6><img src="images/sin11.jpg" width=400px height=300px title="Merlion Park" hspace=20px></a>
		</center>
		<br>
		<a name=sin1>
			<div class="d" >
				<h2 class="mains">Marina Bay Sands</h2>
			</a>
			<p>
				<img src="images/sin2.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px align=left>
				The opulent Marina Bay Sands resort complex includes a high-end luxury hotel, a mall with a canal running through it, the ArtScience Museum, and the Marina Bay Sands Skypark - a vantage point for taking in the entire city. The Skypark's viewing deck and infinity pool are found in the ship (yes, ship) that tops the hotel. Only hotel guests are allowed to use the infinity pool, but anyone can visit the observation deck. From the Skypark, you can see the innovative double helix bridge, the port, the Gardens by the Bay, and the impressive skyline. While up there on top of the city, guests can grab a snack or a coffee at the rooftop restaurant or pick up some keepsakes from the souvenir stand.

			</p>
			</div>
				<br>

		<a name=sin2>
			<div class="d" >
			<h2 class="mains">Gardens by the Bay</h2>
		</a>
		<p><img src="images/sin4.jpg" width=400px height=300px title="Tamarind Waterfalls" hspace=20px align=right>
			Once you've glimpsed this beautifully designed green space (from the top of the Marina Bay Sands, perhaps) you won't be able to stay away. Wander through the Bay East Garden, perfect for enjoying the vibrant plant life and escaping the city bustle for a moment. You won't want to miss Supertree Grove, where you'll find a cluster of the iconic, futuristic structures designed to perform environmentally sustainable functions. Then, head to the Cloud Forest Dome to see the world's tallest indoor waterfall and learn a bit about biodiversity.

		</p>
	</div>
		<br>

		<a name=sin3>
			<div class="d" >
			<h2 class="mains">Singapore Zoo</h2>
		</a>
		<p><img src="images/sin6.jpg" width=400px height=300px title="Moka" hspace=20px align=left>
			Billing itself as the world's best rainforest zoo, the Singapore Zoo is a pretty impressive place. The facility is clean and inviting, and the animals appear well treated, with plenty of lush vegetation and habitat space. The orangutans are particularly impressive, and visitors can watch as babies and adults alike swing high above their platforms and snack on bananas. There is also a large chimpanzee family, zebras, meerkats, a komodo dragon, mole rats, white tigers, kangaroos, and many other creatures.
			Guests can observe feedings for some of the animals. Allow at least three hours to make your way around the zoo.
		</p>
	</div>
		<br>

		<a name=sin4>
			<div class="d" >
			<h2 class="mains">Chinatown</h2>
		</a>
		<p><img src="images/sin8.jpg" width=400px height=300px title="Sugar Museum" hspace=20px align=right>
			If you've ever visited China, Singapore's Chinatown neighborhood will bring you right back there. From the small mom-and-pop stores and authentic Chinese food to the bright red lanterns, there's an excitement and hustle in this district. You can visit the Chinese Heritage Centre and see the impressive and beautiful Sri Mariamman Hindu temple. Another temple worth seeing is the Buddha Tooth Relic temple. If you're up early enough (think 4am), you can hear the morning drum ceremony. Or you can just check out the closing ceremony in the evening after viewing the relic.
		</p>
		</div>
		<br>

		<a name=sin5>
			<div class="d" >
			<h2 class="mains">Universal Studios Singapore</h2>
		</a>
		<p><img src="images/sin10.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px align=left>
			Universal Studios Singapore occupies 49 acres of Resorts World Sentosa. The park is arranged thematically, with each area paying tribute to a location, film, or television show. Destinations include New York City, Hollywood, Madagascar, and a trip back to Ancient Egypt. Fiction-themed areas include Shrek's Far Far Away, the Lost World, and Sci-Fi City where a pair of Battlestar Galactica-themed roller coasters dominate. In addition to the many rides that range from kiddie-friendly to daredevil, the park has diverse dining options, shopping, and live shows throughout the day and night.
		</p>
	</div>
		<br>

		<a name=sin6>
			<div class="d" >
			<h2 class="mains">Merlion Park</h2>
		</a>
		<p><img src="images/sin12.jpg" width=400px height=300px title="Parc Francois Leguat" hspace=20px align=right>
			Singapore's Merlion is just what it sounds like - the figure of a mythical creature that has the head of a lion and the body and tail of a fish. The Merlion represents the city's humble start as a fishing village combined with its traditional Malay name Singapura - "lion city." The structure, which was relocated to Merlion Park in 2002, where it can overlook Marina Bay, weighs 70 tonnes and stands at 8.6 meters tall, spouting water from its mouth in a fountain. The "Merlion Cub" sits nearby, only two meters tall but a hefty three tonnes, and there are five additional official Merlion statues throughout the city. Merlion Park is an ideal spot for photo-ops, whether you are taking a selfie in front of the iconic creature or capturing the magnificent views from the park as it looks out over the bay
		</p>
	</div>
		<br>
		<!-- comment section start-->
			<hr style="  border: 3px solid #7b0099;border-radius: 2px;width:90%;">
			<div class="e">
				<h2 class="mains" style="width:99%; padding:5px;">Leave Your Comments Here</h2>
				<form class="" action="Singapore_images.php" method="post">
					<center>
						<div class="commentArea">
							<textarea name="commentBox" class="commentBox" rows="5" cols="100" placeholder="Type here..."></textarea>
						</div>
						<input type="submit" class="commentBtn" name="comment" value="Comment">
						<center>
								<?php
								$link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);
								$location = "SINGAPORE";

								if (isset($_POST["comment"])) {
									$userComment = $_POST["commentBox"];
									$commentId = $_SESSION['primeid'];
									$usercomm = $_SESSION['user_name'];



								$inputcomm = mysqli_query($link3,"INSERT INTO maucomm (comment_id,location,user_comm,comment) VALUES ('$commentId','$location','$usercomm','$userComment')") or die("failed to query database".mysqli_error());
									header("Location: Singapore_images.php");
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
												header("Location: Singapore_images.php");

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
