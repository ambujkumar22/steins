<!DOCTYPE HTML>
<html>

<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/Masterpage.css">
	</link>
	<style>
		.c {
			background-color: #333;
			margin-left: 0px;
			margin-right: 0px;
			margin-top:1px;
			width:99%;
			height: auto;
			position: absolute;
		}
		.title {
	    padding: 10px 0px 10px;
	    display: inline-flex;
	    text-align: center;
	    margin-left: 40%;
	  }

	   h1 {
	    margin: 0;
	    padding: 4px 8px;
	    color: white;
	    font-family: Open Sans, Arial;
	    text-transform: uppercase;
	    font-size: 36px;
	  }
		h2 {
		 margin: 0;
		 padding: 4px 8px;
		 color: white;
		 font-family: Open Sans, Arial;
		 text-transform: uppercase;
		 font-size: 30px;
	 }


	    .signbox {
	      width: 90%;
	      margin: auto;
	      height: 710px;
	      background: #111;
	      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
	    }

	    .signbox .leftimg {
	      float: left;
	      width: 50%;
	      height: 710px;
	      background-size: cover;
	      box-sizing: border-box;
	      border: 10px solid #111;
	    }

	    .signbox .right {
	      float: left;
	      width: 50%;
	      height: 450px;
	      box-sizing: border-box;
	    }

	    .formbox {
	      width: 100%;
	      height: 450px;
	      padding: 10px 10px;
	      box-sizing: border-box;
	      background: #111;
	    }

	    .formbox p {
	      margin-left: 50px;
	      padding: 0;
	      color: #fff;
	      letter-spacing: 0.1em;
	    }

	    ::placeholder {
	    color: #bbb;
	    }

	    .formbox form input[type="reset"] {
	      display: block;
				margin-top: 10px;
	      padding: 12px 150px;
	      border-radius: 40px;
	      box-shadow: none;
	      border: none;
	      outline: none;
	      cursor: pointer;
	      background: #333;
	      color: #fff;
	      box-shadow: 0 5px 10px rgba(0, 0, 0, .5);
	    }

	    .formbox form input[type="reset"]:hover {
	      background: #7b0099;
	      transition-duration: 0.5s;
	    }
			p {
				color: #fff;
				font-family: Open Sans, Arial;
			}
			.panel {
				background-color: #222;
				height: 20%;
				width: 80%;
				margin:2%;
				padding:5%;
			}
			.follow {
				background-color: #222;
				height: 30%;
				width: 80%;
				margin:2%;
				padding:5%;
			}
			.feedback {
				background-color: #222;
				height: 30%;
				width: 80%;
				margin:2%;
				padding:5%;
			}
			.ufeedback {
				border: 1px solid #fff;
				border-radius: 2px;
				background: #222;
				outline: none;
				color: #fff;
				font-size: 16px;
				resize: none;
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

	<img src="images/photo.jpg" height=400px width=100% style="margin-top:3%;">
		<div class="c">
	    <div class="title">
	    <h1 class="mains">Contact Us</h1>
	    </div>
	    <div class="signbox">
	      <div class="left"><img src="images/pexels.jpeg" alt="img not available" class="leftimg" /></div>
	      <div class="right">
	        <div class="formbox">
	          <!--  form start-->
	          <form action="contact_us.php" method="post">

	            <div class="panel">
								<center><h2>For more information</h2>
								<p>1800-2900-100</p>
								<p>(8am - 8pm)</p></center>
	            </div>
							<div class="follow">
								<center><h2>you can also follow us on</h2></center>
								<ul style="color:#fff;">
									<li><p><b>Instagram-</b> <a href="www.insta.com">StarTravels007</a></p></li>
									<li><p><b>Facebook-</b> <a href="www.fb.com">StarTravelsForFun</a></p></li>
									<li><p><b>Twitter-</b> <a href="www.tweet.com">Star007Travels</a></p></li>
								</ul>
	            </div>
							<div class="feedback">
								<center><textarea rows="4" cols="50" class="ufeedback" placeholder="Type your feedback here..." required></textarea>
									<br><br>
		              <input type="reset" value="Submit" class="reset" onclick="message()">
		            </center>
							</div>

	              <br>
	          </form>
	          <!-- form end-->
	        </div>
	      </div>
	    </div>
	  </div>

</body>
<script type="text/javascript">

		function message(){
			alert('Your feedback is Valuable to us!');
		};

</script>
</html>
