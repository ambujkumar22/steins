<!DOCTYPE HTML>
<html>

<head>
	<title>Japan</title>
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
	<!-- video start-->
	<div class="introVideo">
		<video src="videos/Japan-4K.mp4" autoplay controls loop></video>
	</div>
	<!-- video end-->
	<div class="c">
		<center>
			<h2 class="mains" style="margin: 20px;padding: 5px;">EXPLORE</h2>
			<a href=#jap1><img src="images/jap1.jpg" width=400px height=300px title="Tokyo" hspace=20px></a>
			<a href=#jap2><img src="images/jap11.jpg" width=400px height=300px title="Kyoto" hspace=20px></a>
			<a href=#jap3><img src="images/jap9.jpg" width=400px height=300px title="Nara" hspace=20px></a>
			<a href=#jap4><img src="images/jap8.jpg" width=400px height=300px title="Ishigaki" hspace=20px></a>
			<a href=#jap5><img src="images/jap5.jpg" width=400px height=300px title="Mount Fuji" hspace=20px></a>
			<a href=#jap6><img src="images/jap3.jpg" width=400px height=300px title="Akihabara" hspace=20px></a>
		</center>

		<a name=jap1>
			<div class="d" >
			<h2 class="mains">Tokyo</h2>
		</a>
		<p><img src="images/jap2.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px align=left>
			Travelers who like to mingle with people will love Tokyo. The Japanese capital’s metropolitan area is the most populous in the world. From viewing spring cherry blossoms in traditional gardens to the fish market at Tuskiji. Tokyo blends the ancient with the new, from shrines to karaoke bars. Just walking the streets of this hyperactive city can be an energizing experience. When Tokyo’s pace gets too frenetic, visitors recommend unwinding at the beautiful Shinjuku Gyoen National Garden.
		</p>
	</div>

		<br>
		<a name=jap2>
			<div class="d" >
			<h2 class="mains">Kyoto</h2>
		</a>
		<p><img src="images/jap12.jpg" width=400px height=300px title="Great Barrier Reef" hspace=20px align=right>
			Kyoto today is the capital only of Kyoto prefecture, but it once served as the imperial capital of Japan for more than 1,000 years. Located on central Honshu Island, this city of 1.5 million people is known as the City of 10,000 Shrines because it has thousands of Shinto shrines, including the top rated Fushimi Inari Shrine, and Buddhist temples. Kyoto also is known for its lovely gardens and the Gion Matsuri festival, a July celebration that is considered one of the best in Japan.
		</p>
	</div>
		<br>

		<a name=jap3>
			<div class="d" >
			<h2 class="mains">Nara</h2>
		</a>
		<p><img src="images/jap10.jpg" width=400px height=300px title="Harbor Bridge, Sydney" hspace=20px align=left>
			Nara, once known as Heijo, was the first permanent capital of Japan, established in 710. The capital was moved to Nagaoka in 784 when the government was threatened by powerful Buddhist monasteries. Located less than an hour from Kyoto, seeing Japan’s oldest and largest temples is a popular tourist activity. Visitors especially like Todaiji Temple with its cantilevered buildings, manicured lawns and deer strolling the grounds.
		</p>
	</div>

		<br>
		<a name=jap4>
			<div class="d" >
			<h2 class="mains">Ishigaki</h2>
		</a>
		<p><img src="images/jap7.jpg" width=400px height=300px title="Sugar Museum" hspace=20px align=right>
			Located west of Okinawa, Ishigaki is Japan’s premier beach destination and makes a good base to explore the other islands in the Yaeyama archipelago. Blessed with Japan’s best beaches, it is particularly popular with families since the beaches at Fusaki and Maezato are net-protected. Located 1,250 miles (2,000 kilometers) south of Tokyo, Ishigaki may not have the shrines and temples that other Japanese cities have, but it does have an exuberant nightlife for visitors who have the energy after a day of beachcombing, water sports or climbing Mount Nosoko.
		</p>
	</div>

		<br>
		<a name=jap5>
			<div class="d" >
			<h2 class="mains">Mount Fuji</h2>
		</a>
		<p><img src="images/jap6.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px align=left>
			Without a doubt Japan's most recognizable landmark, majestic Mount Fuji (Fuji-san) is also the country's highest mountain peak, towering 3,776 meters over an otherwise largely flat landscape to the south and east, and tall enough to be seen from Tokyo more than 100 kilometers away. Mount Fuji has for centuries been celebrated in art and literature and is now considered so important an icon that UNESCO recognized its world cultural significance in 2013. Part of the Fuji-Hakone-Izu National Park, Mount Fuji is climbed by more than a million people each summer as an act of pilgrimage, which culminates in watching the sunrise from its summit. While some still choose to begin their climb from the base, the majority of climbers now start from above the halfway mark, at the 5th Station, resulting in a more manageable six or so hour ascent.
		</p>
	</div>

		<br>
		<a name=jap6>
			<div class="d" >
			<h2 class="mains">Akihabara</h2>
		</a>
		<p><img src="images/jap4.jpg" width=400px height=300px title="Parc Francois Leguat" hspace=20px align=right>
			One of most popular districts in Tokyo, Akihabara is known as the paradise for electronic products and geek culture. They say anything related to Otaku culture can be found in Akihabara such as Anime, Gaming, Manga, figures, underground idols,etc. Stores like Mandarake and Animate are hugely popular as a wide variety of product range and many rare items can be found.
			<br>
			<font>Famous for:</font>Anime and Gaming Adventure Tour in Akihabara.
		</p>
	</div>
	<!-- comment section start-->
		<hr style="  border: 3px solid #7b0099;border-radius: 2px;width:90%;">
		<div class="e">
			<h2 class="mains" style="width:99%; padding:5px;">Leave Your Comments Here</h2>
			<form class="" action="Japan_images.php" method="post">
				<center>
					<div class="commentArea">
						<textarea name="commentBox" class="commentBox" rows="5" cols="100" placeholder="Type here..."></textarea>
					</div>
					<input type="submit" class="commentBtn" name="comment" value="Comment">
					<center>
							<?php
							$link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);
							$location = "JAPAN";

							if (isset($_POST["comment"])) {
							  $userComment = $_POST["commentBox"];
							  $commentId = $_SESSION['primeid'];
							  $usercomm = $_SESSION['user_name'];



							$inputcomm = mysqli_query($link3,"INSERT INTO maucomm (comment_id,location,user_comm,comment) VALUES ('$commentId','$location','$usercomm','$userComment')") or die("failed to query database".mysqli_error());
								header("Location: Japan_images.php");
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
											header("Location: Japan_images.php");

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
