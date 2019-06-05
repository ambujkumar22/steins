<!DOCTYPE HTML>
<html>

<head>
	<title>Mauritius</title>
	<link rel="stylesheet" href="css/Masterpage.css">
	<style>
		body {
			background-color: black;
		}

		.c {
			background-color: #333;
			margin-top: 46%;
			margin-left: 0%;
			width: 99.8%;
			height: auto;
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
		<video src="videos/Mauritius-4K.mp4" controls autoplay loop></video>
	</div>
	<!-- video end-->
	<div class="c">

		<center>
			<h2 class="mains" style="margin: 20px;padding: 5px;">EXPLORE</h2>
			<a href=#mau1><img src="images/mau1.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px></a>
			<a href=#mau2><img src="images/mau2.jpg" width=400px height=300px title="Tamarind Waterfalls" hspace=20px></a>
			<a href=#mau3><img src="images/mau3.jpg" width=400px height=300px title="Moka" hspace=20px></a>
			<a href=#mau4><img src="images/mau4.jpg" width=400px height=300px title="Sugar Museum" hspace=20px></a>
			<a href=#mau5><img src="images/mau5.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px></a>
			<a href=#mau6><img src="images/mau6.jpg" width=400px height=300px title="Parc Francois Leguat" hspace=20px></a>
		</center>
		<br>
		<a name=mau1>
			<div class="d" >
				<h2 class="mains">Trou Aux Biches</h2>
			</a>
			<p>
				<img src="images/mau11.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px align=left>
				For those who love snorkeling and swimming, Trou Aux Biches should be the first place to visit in Mauritius. With gentle sands shelving calm, shallow and clear water, this is an ideal place for a beach picnic with family and friends. If you
				love street food, hog at the numerous stalls and cafes along the coast. A variety of cuisines can be tried here.
				<br>
				<font>Famous for:</font>Trou Aux Biches is best known for swimming and snorkeling.
			</p>
			</div>
				<br>

		<a name=mau2>
			<div class="d">
			<h2 class="mains">Tamarind Waterfalls</h2>
		</a>
		<p><img src="images/mau21.jpg" width=400px height=300px title="Tamarind Waterfalls" hspace=20px align=right>
			Tamarind Waterfalls are one of the best things to see in Mauritius. The waterfalls comprise of a series of seven cataracts located on the Tamarin River, and hence are often called the Seven Cascades.
			<br>
			<font>Famous for:</font>A variety of activities like hiking, canyoneering, cliff jumping, bird-watching, and swimming.
		</p>
	</div>
		<br>

		<a name=mau3>
			<div class="d" >
			<h2 class="mains">Moka</h2>
		</a>
		<p><img src="images/mau31.jpg" width=400px height=300px title="Moka" hspace=20px align=left>
			This is the place for lifestyle shopping from your favorite brands such as Armani Jeans, Body & Soul, Celio, Colors & Senses, Esprit, and Hugo Boss, among others.
		</p>
	</div>
		<br>

		<a name=mau4>
			<div class="d" >
			<h2 class="mains">Sugar Museum</h2>
		</a>
		<p><img src="images/mau41.jpg" width=400px height=300px title="Sugar Museum" hspace=20px align=right>
			And just when you thought places to visit in Mauritius got boring, the Sugar museum amuses you. It dates back to the time when sugar was given equal importance as gold. It is a treat for historians as it displays the 250 years old heritage of
			the sugar adventure that the whole country saw. Once you are free from the 1.5 hour tour, rum and sugar tasting sessions will be waiting for you to end the journey on a high note (hick-hick).
		</p>
		</div>
		<br>

		<a name=mau5>
			<div class="d" >
			<h2 class="mains">Mauritius Aquarium</h2>
		</a>
		<p><img src="images/mau51.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px align=left>
			The aquarium, located in a small relaxing village in the North West of Mauritius, is home to a large number of species including over 200 species of fish, invertebrates, live coral and sponges, originating from the waters around the island.
			The newly designed architecture of the aquarium shows off what the aquarium has to offer to a better degree.
			<br>
			In the Aquarium you are able to enjoy a unique walk on the ocean floor observing the many types of aquatic animals that Mauritius ocean eco-system has to offer.
		</p>
	</div>
		<br>

		<a name=mau6>
			<div class="d" >
			<h2 class="mains">Parc Francois Leguat</h2>
		</a>
		<p><img src="images/mau61.jpg" width=400px height=300px title="Parc Francois Leguat" hspace=20px align=right>
			Parc Francois Leguat is one of the sought after wildlife parks in Rodrigues Island, Mauritius. It is even called the turtle park, as there are hundreds and thousands of turtles of different ages. This place should be preferred if you are
			looking forward to some quality family time.
			<br>
			<font>Famous for:</font>Turtle population; BTW, do you like turtles?
		</p>
	</div>
	<!-- comment section start-->
		<hr style="  border: 3px solid #7b0099;border-radius: 2px;width:90%;">
		<div class="e">
			<h2 class="mains" style="width:99%; padding:5px;">Leave Your Comments Here</h2>
			<form class="" action="Mauritius_images.php" method="post">
				<center>
					<div class="commentArea">
						<textarea name="commentBox" class="commentBox" rows="5" cols="100" placeholder="Type here..."></textarea>
					</div>
					<input type="submit" class="commentBtn" name="comment" value="Comment">
					<center>
							<?php
							$link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);
							$location = "MAURITIUS";

							if (isset($_POST["comment"])) {
							  $userComment = $_POST["commentBox"];
							  $commentId = $_SESSION['primeid'];
							  $usercomm = $_SESSION['user_name'];



							$inputcomm = mysqli_query($link3,"INSERT INTO maucomm (comment_id,location,user_comm,comment) VALUES ('$commentId','$location','$usercomm','$userComment')") or die("failed to query database".mysqli_error());
								header("Location: Mauritius_images.php");
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
											header("Location: Mauritius_images.php");
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
