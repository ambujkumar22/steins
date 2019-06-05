<!DOCTYPE HTML>
<html>

<head>
	<title>About Us</title>
	<link rel="stylesheet" href="css/Masterpage.css">
	</link>
	<style>
		.c {
			background-color: #333;
			margin-left: 0px;
			margin-right: 0px;
			margin-top:1px;
			width:99%;
			height: 106%;
			position: absolute;
		}
		.title {
	    padding: 10px 0px 10px;
	    display: inline-flex;
	    text-align: center;
	    margin-left: 45%;
	  }

	   h1 {
	    margin: 0px;
	    padding: 4px 8px;
	    color: white;
	    font-family: Open Sans, Arial;
	    text-transform: uppercase;
	    font-size: 36px;

	  }
		h2 {
		 margin: 0px;
		 padding: 1%;
		 color: white;
		 font-family: Open Sans, Arial;
		 text-transform: uppercase;
		 font-size: 26px;
     background-color: #7b0099;
	   }

	    .signbox {
	      width: 90%;
	      margin: auto;
	      height: 710px;
	      background: #111;
	      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
	    }
      p {
				color: #fff;
				font-family: Open Sans, Arial;
        height: 200px;
        width: 40%;
        word-spacing: 0.5em;
        text-align: justify;
        font-size: 18px;
			}
      .developers {
        height:58.5%;
        width:100%;
        background-color: #fff;
        margin: 0px;
        box-sizing: border-box;
        color: black;
      }
      .profile {
        height:150px;
        width:150px;
        border-radius: 50%;
        border: 2px solid #111;
        margin-left: -10%;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
      }
      .cards {
        height: 220px;
        width: 15%;
        background-color: #fff;
        padding:2%;
        margin: 1% 7%;
        color:#111;
        display: inline-block;
      }
      .align {
        margin-left: 2%;
      }
      figcaption {
        margin-left: 11%;
        font-size: 16px;
        font-family: Open Sans, Arial;
        font-weight: bolder;
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

	<img src="images/collage.jpg" height=400px width=100% style="margin-top:3%;">
		<div class="c">
	    <div class="title">
	    <h1 class="mains">About Us</h1>
	    </div>
	    <div class="signbox">
        <center><h2>Want to know more about Star Travels?</h2>
        <p>Star Travels is a marketplace where you get travel packages & holiday deals by trusted travel agents across the world. You may enquire about a trip package or customize your holiday. We connect you with Verified travel agents who provide you best quotes. Check their reviews and book with the one you like most.
We have a network of 7000+ reputed and trusted travel agents. Each of these names have well planned travel itinerary to suit your need, taste and budget. </p>
        </center>
        <div class="developers">
          <center><h2 style="color:#111;background-color:#fff;font-weight: bold;font-size:30px;">Our Amazing Team</h2></center>
          <div class="align">


          <div class="cards">
            <center>
            <figure>
            <img class="profile" src="images/ambuj1.jpg" alt="not available">
            <br><br>
            <figcaption>Ambuj Kumar</figcaption>
              <span style="margin-left:10px;">(Designer)</span>
            </figure>
          </center>
          </div>
          <div class="cards">
            <center>
            <figure>
            <img class="profile" src="images/ambuj3.jpeg" alt="not available">
            <br><br>
            <figcaption>Ambuj Kumar</figcaption>
              <span style="margin-left:15px;">(Developer)</span>
            </figure>
          </center>
          </div>
          <div class="cards">
            <center>
            <figure>
            <img class="profile" src="images/ambuj2.jpeg" alt="not available">
            <br><br>
            <figcaption>Ambuj Kumar</figcaption>
              <span style="margin-left:15px;">(DB Manager)</span>
            </figure>
          </center>
          </div>
          </div>
        </div>
	    </div>
	  </div>

</body>

</html>
