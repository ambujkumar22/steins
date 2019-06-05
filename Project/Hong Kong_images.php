<!DOCTYPE HTML>
<html>

<head>
	<title>Hong Kong</title>
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
		<video src="videos/Hong Kong-4K.mp4" controls autoplay loop></video>
	</div>
	<!-- video end-->
	<div class="c">

		<center>
			<h2 class="mains" style="margin: 20px;padding: 5px;">EXPLORE</h2>
			<a href=#hk1><img src="images/hk1_2.jpg" width=400px height=300px title="Hong Kong Disneyland" hspace=20px></a>
			<a href=#hk2><img src="images/hk3.jpg" width=400px height=300px title="Hong Kong Wet Land Park" hspace=20px></a>
			<a href=#hk3><img src="images/hk5.jpg" width=400px height=300px title="Big Buddha" hspace=20px></a>
			<a href=#hk4><img src="images/hk7.jpg" width=400px height=300px title="Victoria’s Peak" hspace=20px></a>
			<a href=#hk5><img src="images/hk9.jpg" width=400px height=300px title="Lantau Island" hspace=20px></a>
			<a href=#hk6><img src="images/hk11.jpg" width=400px height=300px title="Edward Youde Aviary" hspace=20px></a>
		</center>
		<br>
		<a name=hk1>
			<div class="d" >
				<h2 class="mains">Hong Kong Disneyland</h2>
			</a>
			<p>
				<img src="images/hk2.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px align=left>
				How can one go to Hong Kong and not visit this most favourite place of all kids and elders alike! Get to this magic land and experience the various colourful and musical shows they put up and revisit your childhood. To make sure you don’t miss out on the best that Disneyland at Hong Kong has to offer, take the Disney Spectacular Tour that covers all major aspects of the theme park.
			</p>
			</div>
				<br>

		<a name=hk2>
			<div class="d" >
			<h2 class="mains">Hong Kong Wet Land Park</h2>
		</a>
		<p><img src="images/hk4.jpg" width=400px height=300px title="Tamarind Waterfalls" hspace=20px align=right>
			The park is home to a collection of mammals, reptiles, fish, amphibians, birds, butterflies, & dragonflies. This flourishing biodiversity spot is among the eminent tourist places in Hong Kong, that aims at promoting eco-tourism through education and awareness regarding protection of the environment and conservation of wetlands.
		</p>
	</div>
		<br>

		<a name=hk3>
			<div class="d" >
			<h2 class="mains">Big Buddha</h2>
		</a>
		<p><img src="images/hk6.jpg" width=400px height=300px title="Moka" hspace=20px align=left>
			The world’s second largest outdoor bronze statue– the Giant Buddha, is among the top rated tourist places in Hong Kong. In fact, the statue is so huge that you can easily spot this impressive 112 feet long figure near the Po Lin Monastery from your flight’s window seat! The Big Buddha, or Tian Tan, is also visible from the Ngong Ping 360 Cable Car, which gives an almost eye-level view of the massive statue. But in order to truly experience this sanctum’s peaceful, charismatic and enlightening influences, one should definitely climb the 268 steps leading to the statue itself!
		</p>
	</div>
		<br>

		<a name=hk4>
			<div class="d" >
			<h2 class="mains">Victoria’s Peak</h2>
		</a>
		<p><img src="images/hk8.jpg" width=400px height=300px title="Sugar Museum" hspace=20px align=right>
			The Peak is one of the most prominent tourist places to visit in Hong Kong. Being the highest point on the Hong Kong island, Victoria’s Peak provides breathtaking views of the cityscape with its skyscrapers glistening in the sunlight. Apart from witnessing the stunning views of the city, one can also enjoy other sightseeing titbits on The Peak like Madame Tussauds wax museum, the Peak Tower, & Sky Terrace 428.
		</p>
		</div>
		<br>

		<a name=hk5>
			<div class="d" >
			<h2 class="mains">Lantau Island</h2>
		</a>
		<p><img src="images/hk10.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px align=left>
			Though there are many ways one could get to Lantau Island, the Ngong Ping 360 Cable Car is undoubtedly the best one out of those. While the island is known for its rich ecological environment, its culture and customs, the cable car ride too is an absolute thrill in itself. Apart from giving one splendid views of the island and the Ngong Ping Village, the cable car ride would also provide mind blowing vistas of the famous statue of Giant Buddha. Owing to its profound natural beauty, Lantau Island is among the most preferred tourist places in Hong Kong.
		</p>
	</div>
		<br>

		<a name=hk6>
			<div class="d" >
			<h2 class="mains">Edward Youde Aviary</h2>
		</a>
		<p><img src="images/hk12.jpg" width=400px height=300px title="Parc Francois Leguat" hspace=20px align=right>
			A great place to get closer to get closer to birds, this is a perfect venue to bring your kids in. The Edward Youde Aviary houses 600 species of birds. Housed in this natural valley of the Victory Peak, the birds live in lush greenery while the park settings give the visitors optimum space to interact in them. There are a lot of exhibits going on here which will provide more information on the birds who are residents over here.

		</p>
	</div>
		<br>
		<!-- comment section start-->
			<hr style="  border: 3px solid #7b0099;border-radius: 2px;width:90%;">
			<div class="e">
				<h2 class="mains" style="width:99%; padding:5px;">Leave Your Comments Here</h2>
				<form class="" action="Hong Kong_images.php" method="post">
					<center>
						<div class="commentArea">
							<textarea name="commentBox" class="commentBox" rows="5" cols="100" placeholder="Type here..."></textarea>
						</div>
						<input type="submit" class="commentBtn" name="comment" value="Comment">
						<center>
								<?php
								$link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);
								$location = "HONG KONG";

								if (isset($_POST["comment"])) {
									$userComment = $_POST["commentBox"];
									$commentId = $_SESSION['primeid'];
									$usercomm = $_SESSION['user_name'];



								$inputcomm = mysqli_query($link3,"INSERT INTO maucomm (comment_id,location,user_comm,comment) VALUES ('$commentId','$location','$usercomm','$userComment')") or die("failed to query database".mysqli_error());
									header("Location: Hong Kong_images.php");
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
												header("Location: Hong Kong_images.php");

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
