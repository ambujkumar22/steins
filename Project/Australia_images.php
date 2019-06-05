<!DOCTYPE HTML>
<html>

<head>
	<title>Australia</title>
	<link rel="stylesheet" href="css/Masterpage.css">
	</link>
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
					<a href="Australia_details.php">MAURITIUS</a>
	        <a href="Australia_details.php">AUSTRALIA</a>
	        <a href="Australia_details.php">JAPAN</a>
	        <a href="Australia_details.php">MALAYSIA</a>
	        <a href="Australia_details.php">SINGAPORE</a>
	        <a href="Australia_details.php">THAILAND</a>
	        <a href="Australia_details.php">HONG KONG</a>
	        <a href="Australia_details.php">PARIS</a>
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
			<li style="float:right; background-color:#7B0099; color:white;text-align:center; padding:12px 12px;text-width:bold; font-family:'comic sans ms';text-shadow:2px 2px black">STAR TRAVELS</li>
		</ul>
	</div>
	<!-- video start-->
	<div class="introVideo">
		<video src="videos/Australia-4K.mp4" controls autoplay loop></video>
	</div>
	<!-- video end-->
	<div class="c">
		<center>
			<h2 class="mains" style="margin: 20px;padding: 5px;">EXPLORE</h2>
			<a href=#aus1><img src="images/aus1.jpg" width=400px height=300px title=" Opera House, Sydney" hspace=20px></a>
			<a href=#aus2><img src="images/aus2.jpg" width=400px height=300px title="Great Barrier Reef" hspace=20px></a>
			<a href=#aus3><img src="images/aus3.jpg" width=400px height=300px title="Harbor Bridge, Sydney" hspace=20px></a>
			<a href=#aus4><img src="images/aus4.jpg" width=400px height=300px title=" Blue Mountains National Park" hspace=20px></a>
			<a href=#aus5><img src="images/aus5.jpg" width=400px height=300px title="Great Ocean Road" hspace=20px></a>
			<a href=#aus6><img src="images/aus6.jpg" width=400px height=300px title=" Sky diving in Melbourne" hspace=20px></a>
		</center>

		<a name=aus1>
			<div class="d" >
			<h2 class="mains"> Opera House, Sydney</h2>
		</a>
		<p><img src="images/Australia.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px align=left>
			Flanked by the scenic Harbor Bridge and the beautiful Royal Botanic Gardens, the Sydney Opera House is one of the most popular Australian tourist attractions. Considered as an architectural masterpiece of the century, this feat by mankind,
			hosts multiple venues designed to reflect the image of a huge sailing ship and resembles billowing sails or shells.
		</p>
	</div>

		<br>
		<a name=aus2>
			<div class="d" >
			<h2 class="mains">Great Barrier Reef</h2>
		</a>
		<p><img src="images/aus21.jpg" width=400px height=300px title="Great Barrier Reef" hspace=20px align=right>
			One of the seven wonders of the natural world, the world’s largest barrier reef system is the Great Barrier Reef. Located in the Coral Sea, this world heritage-listed site is visible from outer space and is one of the largest living structures
			on the planet. It occupies a mammoth area including more than 3000 coral reefs and hundreds of scenic Islands.
		</p>
	</div>
		<br>

		<a name=aus3>
			<div class="d" >
			<h2 class="mains">Harbor Bridge, Sydney</h2>
		</a>
		<p><img src="images/aus31.jpg" width=400px height=300px title="Harbor Bridge, Sydney" hspace=20px align=left>
			Among the most celebrated Australia tourist attractions, the Sydney Harbor Bridge is a must-visit. Rising 134 m above the harbor, the bridge is affectionately called “the Coat hanger”. This engineering marvel is also the largest steel arch
			bridge in the world.
		</p>
	</div>

		<br>
		<a name=aus4>
			<div class="d" >
			<h2 class="mains"> Blue Mountains National Park</h2>
		</a>
		<p><img src="images/aus41.jpg" width=400px height=300px title="Sugar Museum" hspace=20px align=right>
			The beautiful Blue Mountains National Park another UNESCO World Heritage Site – is a popular day trip from Sidney. It is named after the blue haze emanating from the many eucalyptus trees, which is a spectacular panoramic view to behold!
			<br>
			<font>Things To See:</font> Three Sisters a sandstone rock formation towering 900 meters above the Jamison Valley, majestic views of gorges, paintings, and exotic wildlife species.
		</p>
	</div>

		<br>
		<a name=aus5>
			<div class="d" >
			<h2 class="mains">Great Ocean Road</h2>
		</a>
		<p><img src="images/aus51.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px align=left>
			Located in Victoria, the Great Ocean road is considered to be one of the most scenic and best driven roads in the world. Don’t miss Twelve Apostles, the spectacular formations of limestone stacks beside the stunning turquoise ocean. The 243 km
			ride from Torquay to Allansford is itself a blissful drive.
			<font>Things To See:</font>Port Campbell National Park, Otway National Park, picturesque rain forest, hiking trails and scenic waterfalls.
		</p>
	</div>

		<br>
		<a name=aus6>
			<div class="d" >
			<h2 class="mains"> Sky diving in Melbourne</h2>
		</a>
		<p><img src="images/aus61.jpg" width=400px height=300px title="Parc Francois Leguat" hspace=20px align=right>
			If you're an adventurous soul roaming around Melbourne, you'd certainly want to check out the numerous skydiving schools here. It's a mind-blowing experience as you free fall over to some of the gorgeous landscapes looking amazing right below
			you.
			<br>
			<font>Things To See:</font>Sky diving over the Yarra Valley or The Great Ocean Road.
		</p>
	</div>
	<!-- comment section start-->
		<hr style="  border: 3px solid #7b0099;border-radius: 2px;width:90%;">
		<div class="e">
			<h2 class="mains" style="width:99%; padding:5px;">Leave Your Comments Here</h2>
			<form class="" action="Australia_images.php" method="post">
				<center>
					<div class="commentArea">
						<textarea name="commentBox" class="commentBox" rows="5" cols="100" placeholder="Type here..."></textarea>
					</div>
					<input type="submit" class="commentBtn" name="comment" value="Comment">
					<center>
							<?php
							$link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);
							$location = "AUSTRALIA";

							if (isset($_POST["comment"])) {
							  $userComment = $_POST["commentBox"];
							  $commentId = $_SESSION['primeid'];
							  $usercomm = $_SESSION['user_name'];



							$inputcomm = mysqli_query($link3,"INSERT INTO maucomm (comment_id,location,user_comm,comment) VALUES ('$commentId','$location','$usercomm','$userComment')") or die("failed to query database".mysqli_error());
								header("Location: Australia_images.php");
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
											header("Location: Australia_images.php");
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
