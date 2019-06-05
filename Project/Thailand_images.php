<!DOCTYPE HTML>
<html>

<head>
	<title>Thailand</title>
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
      top: -62px;
      left: 0px;
      height: 740px;
      width: 1518px;
      overflow: hidden;
    }
    .introVideo video {
      min-width: 100%;
      min-height: 100%;
    }
		/* video end*/
		.c {
			margin-top: 45%;
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
		<video src="videos/Thailand-4K.mp4" controls autoplay loop></video>
	</div>
	<!-- video end-->
	<div class="c">

		<center>
			<h2 class="mains" style="margin: 20px;padding: 5px;">EXPLORE</h2>
			<a href=#thi1><img src="images/thi1.jpg" width=400px height=300px title="Mu Ko Chang National Park" hspace=20px></a>
			<a href=#thi2><img src="images/thi3.jpg" width=400px height=300px title="Ayutthaya" hspace=20px></a>
			<a href=#thi3><img src="images/thi5.jpg" width=400px height=300px title="Mae Hong Son" hspace=20px></a>
			<a href=#thi4><img src="images/thi7.jpg" width=400px height=300px title="Phuket" hspace=20px></a>
			<a href=#thi5><img src="images/thi9.jpg" width=400px height=300px title="Koh Tao" hspace=20px></a>
			<a href=#thi6><img src="images/thi11.jpg" width=400px height=300px title="Island Hopping" hspace=20px></a>
		</center>
		<br>
		<a name=thi1>
			<div class="d" >
				<h2 class="mains">Mu Ko Chang National Park</h2>
			</a>
			<p>
				<img src="images/thi2.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px align=left>
				Soak yourself in this jewel of 50 islands. Spend your mornings with wilderness and bookmark the evenings for the thriving parties. Cherish doing nothing on the white sand beaches and then break the day’s rhythm with snorkelling and diving. From being around the whimsical waterfalls to fishing to diving to kayaking, do something new every day. So, while you’re wondering what to do in this scenic place, try exploring one of the best places to visit in Thailand!
				<br>
				<font>Famous for:</font>Wildlife and views.
			</p>
			</div>
				<br>

		<a name=thi2>
			<div class="d" >
			<h2 class="mains">Ayutthaya</h2>
		</a>
		<p><img src="images/thi4.jpg" width=400px height=300px title="Tamarind Waterfalls" hspace=20px align=right>
			Stroll around the Thai capital for 417 years and you will get the feel of an open – air museum. Every corner of Ayutthaya speaks of structures dating back to centuries, ruins of the second capital of Siam and marvels of art and architecture. This is one of the best places to see in Thailand to learn about the country’s glorious past. This place is ideal for those who really have some interest in the history of a particular country as each and every monument situated at this place tells us about the past of Thailand.
			<br>
			<font>Famous for:</font>Temples.
		</p>
	</div>
		<br>

		<a name=thi3>
			<div class="d" >
			<h2 class="mains">Mae Hong Son</h2>
		</a>
		<p><img src="images/thi6.jpg" width=400px height=300px title="Moka" hspace=20px align=left>
			One must have heard about this place and the reason why this place is popular is that this by far one of the most adventurous places of Thailand. This is the ideal place for those who love bike riding and racing. One must have tried these rides on a plane road, but if you want some real adventure, come to Mae Hong Son and visit the 1,864 curves that this place has. It is requested to the people who do not have that strong heart, to not come here and ever try this as this is very risky and dangerous.
			<br>
			<font>Famous for:</font>Trekking, Kayaking and other adventure sports.
		</p>
	</div>
		<br>

		<a name=thi4>
			<div class="d" >
			<h2 class="mains">Phuket</h2>
		</a>
		<p><img src="images/thi8.jpg" width=400px height=300px title="Sugar Museum" hspace=20px align=right>
			Coming to Thailand means coming to the places that has all the charm and all the heat within it. Almost all the places in Thailand are beautiful and therefore it is said that the whole country is beauty personified. So, among every other beautiful city that Thailand has, Phuket is the most popular one. This is the most visited place in Thailand. Phuket is known for the incredible night life that it offers to its tourists. 1-2 days are not enough for anyone to have a complete tour of this beautiful place.
			<br>
			<font>Famous for:</font>Nightlife, beaches and water sports.
		</p>
		</div>
		<br>

		<a name=thi5>
			<div class="d" >
			<h2 class="mains">Koh Tao</h2>
		</a>
		<p><img src="images/thi10.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px align=left>
			The smallest island of Thailand, Koh Tao is one of the best places to visit in Thailand. It owes its name to the copious sea turtles that inhabit its shores. Drifting tranquility in the Gulf of Thailand, this island is famed for its laid- back nature. Its got diverse diving sites off its shores. Do dance with sharks and raise a toast to Thailand on its white beaches. Ko Tao is also called the Turtle Island and is considered as one of those places that are a must-visit in Thailand.
			<br>
			<font>Famous for:</font>Beaches, swimming, snorkeling.
		</p>
	</div>
		<br>

		<a name=thi6>
			<div class="d" >
			<h2 class="mains">Island Hopping</h2>
		</a>
		<p><img src="images/thi12.jpg" width=400px height=300px title="Parc Francois Leguat" hspace=20px align=right>
			Sail through Thailand and find out what makes it truly enchanting. Relax on the yacht’s deck, order delicious Thai cuisine for lunch and in the evening swim through the secret spots. The tour takes you through Phuket/Phang Nga Bay, Phang Nga Bay, Phang Nga Bay/Railay Beach, Railay Beach/Ko Phi Phi, Ko Phi Phi/Ko Yao Yai, Ko Yao Yai/Phang Nga Bay and Ko Phi Phi/Phuket.
			<br>
			<font>Famous for:</font>Beaches, marine life, snorkeling.
		</p>
	</div>
		<br>
		<!-- comment section start-->
			<hr style="  border: 3px solid #7b0099;border-radius: 2px;width:90%;">
			<div class="e">
				<h2 class="mains" style="width:99%; padding:5px;">Leave Your Comments Here</h2>
				<form class="" action="Thailand_images.php" method="post">
					<center>
						<div class="commentArea">
							<textarea name="commentBox" class="commentBox" rows="5" cols="100" placeholder="Type here..."></textarea>
						</div>
						<input type="submit" class="commentBtn" name="comment" value="Comment">
						<center>
								<?php
								$link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);
								$location = "THAILAND";

								if (isset($_POST["comment"])) {
									$userComment = $_POST["commentBox"];
									$commentId = $_SESSION['primeid'];
									$usercomm = $_SESSION['user_name'];



								$inputcomm = mysqli_query($link3,"INSERT INTO maucomm (comment_id,location,user_comm,comment) VALUES ('$commentId','$location','$usercomm','$userComment')") or die("failed to query database".mysqli_error());
									header("Location: Thailand_images.php");
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
												header("Location: Thailand_images.php");

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
