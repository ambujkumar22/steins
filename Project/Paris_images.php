<!DOCTYPE HTML>
<html>

<head>
	<title>Paris</title>
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
      top: -86px;
      left: 0px;
      height: 730px;
      width: 1518px;
      overflow: hidden;
    }
    .introVideo video {
      min-width: 100%;
      min-height: 100%;
    }
		/* video end*/
		.c {
			margin-top: 42%;
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
		<video src="videos/Paris-4K.mp4" controls autoplay loop></video>
	</div>
	<!-- video end-->
	<div class="c">

		<center>
			<h2 class="mains" style="margin: 20px;padding: 5px;">EXPLORE</h2>
			<a href=#par1><img src="images/par1.jpg" width=400px height=300px title="The Eiffel Tower" hspace=20px></a>
			<a href=#par2><img src="images/par3.jpg" width=400px height=300px title="Arc de Triomphe and Champs" hspace=20px></a>
			<a href=#par3><img src="images/par5.jpg" width=400px height=300px title="Buttes Chaumont Park" hspace=20px></a>
			<a href=#par4><img src="images/par7.jpg" width=400px height=300px title="Château de Versailles" hspace=20px></a>
			<a href=#par5><img src="images/par9.jpg" width=400px height=300px title="Louvre Museum" hspace=20px></a>
			<a href=#par6><img src="images/par11.jpg" width=400px height=300px title="Notre-Dame-de-Paris" hspace=20px></a>
		</center>
		<br>
		<a name=par1>
			<div class="d" >
				<h2 class="mains">The Eiffel Tower</h2>
			</a>
			<p>
				<img src="images/par2.jpg" width=400px height=300px title="Trou Aux Biches" hspace=20px align=left>
				The Eiffel Tower is the emblem of Paris, and it would be an absolute sacrilege to not at least go by and take its picture. 325 meters high (or 1066 ft), the Eiffel Tower was built for the Paris World Exhibition of 1889 by Gustave Eiffel. It held the world’s highest building record until 1930, when the Chrysler Building was built in New York City. Today it is the second most visited building in France, right after the Notre-Dame-de-Paris cathedral. Brave the queue and the height and climb to the top, and you won’t be disappointed by the view of Paris and the Champ de Mars!
			</p>
			</div>
				<br>

		<a name=par2>
			<div class="d" >
			<h2 class="mains">Arc de Triomphe and Champs</h2>
		</a>
		<p><img src="images/par4.jpg" width=400px height=300px title="Tamarind Waterfalls" hspace=20px align=right>
			Another symbol of the French power, the Arc de Triomphe was ordered by Napoleon Bonaparte to commemorate the victory of the Battle of Austerlitz in 1806. Today it commemorates the First World War and holds the flame of the Unknown Soldier. The Arc de Triomphe also overlooks Paris, the Avenue des Champs-Elysées in particular, known to be the most beautiful avenue in the whole world. The Champs-Elysées are also great for shopping, because they gather the biggest French and international brands!
		</p>
	</div>
		<br>

		<a name=par3>
			<div class="d" >
			<h2 class="mains">Buttes Chaumont Park</h2>
		</a>
		<p><img src="images/par6.jpg" width=400px height=300px title="Moka" hspace=20px align=left>
			Located in the northeast region of Paris, the Buttes Chaumont Park is one of the biggest parks of Paris. Its setting in a pit gives you access to some beautiful views of the city, especially of the Montmartre neighbourhood. With its caves and cascades, it might make you forget that you’re still in Paris! You will easily be able to organize a picnic in the park with your family or friends.
		</p>
	</div>
		<br>

		<a name=par4>
			<div class="d" >
			<h2 class="mains">Château de Versailles</h2>
		</a>
		<p><img src="images/par8.jpg" width=400px height=300px title="Sugar Museum" hspace=20px align=right>
			An absolute masterpiece, the Château de Versailles is the symbol of the French monarchy and used to be the home of the Sun King Louis XIV as well as his descendants Louis XV and Louis XVI. Originally a simple hunting pavilion for King Louis XIII, it was transformed into the marvel it is today under Louis XIV’s orders as a means to establish dominance over the nobles and to leave his trace upon the world. Spend a day out of time by visiting the Château de Versailles, but also its gardens, the Petit Trianon, the Grand Trianon and the Hameau de la Reine!
		</p>
		</div>
		<br>

		<a name=par5>
			<div class="d" >
			<h2 class="mains">Louvre Museum</h2>
		</a>
		<p><img src="images/par10.jpg" width=400px height=300px title="Mauritius Aquarium" hspace=20px align=left>
			Royal residence for 300 years, the Palais du Louvre has been hosting the Louvre Museum since 1793. Gathering thousands of pieces of artwork from Ancient Egypt to the Romantic Period, the Louvre is the symbol of the History of France. You will find there some classic works, like Leonardo Da Vinci’s Mona Lisa, Eugène Delacroix’s Liberty Leading the People, Géricault’s Raft of the Medusa, the Winged Victory of Samothrace or even the Venus de Milo.
		</p>
	</div>
		<br>

		<a name=par6>
			<div class="d" >
			<h2 class="mains">Notre-Dame-de-Paris</h2>
		</a>
		<p><img src="images/par12.jpg" width=400px height=300px title="Parc Francois Leguat" hspace=20px align=right>
			Located on the Ile de la Cité, the Notre-Dame-de-Paris cathedral was for a long time the main symbol of Paris, before the Eiffel Tower was built. It is by the way at the center of Victor Hugo’s novel Notre-Dame de Paris. Among other things, it was the location of Napoleon Bonaparte’s coronation in 1804.
		</p>
	</div>
		<br>
		<!-- comment section start-->
			<hr style="  border: 3px solid #7b0099;border-radius: 2px;width:90%;">
			<div class="e">
				<h2 class="mains" style="width:99%; padding:5px;">Leave Your Comments Here</h2>
				<form class="" action="Paris_images.php" method="post">
					<center>
						<div class="commentArea">
							<textarea name="commentBox" class="commentBox" rows="5" cols="100" placeholder="Type here..."></textarea>
						</div>
						<input type="submit" class="commentBtn" name="comment" value="Comment">
						<center>
								<?php
								$link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);
								$location = "PARIS";

								if (isset($_POST["comment"])) {
									$userComment = $_POST["commentBox"];
									$commentId = $_SESSION['primeid'];
									$usercomm = $_SESSION['user_name'];



								$inputcomm = mysqli_query($link3,"INSERT INTO maucomm (comment_id,location,user_comm,comment) VALUES ('$commentId','$location','$usercomm','$userComment')") or die("failed to query database".mysqli_error());
									header("Location: Paris_images.php");
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
												header("Location: Paris_images.php");

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
