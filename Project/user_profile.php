<!-- login form -->
<?php
  session_start();
  include 'login.php';
  error_reporting();
  $useremail = $_SESSION['email_id'];
  $userid = $_SESSION['primeid'];

  $link3 = mysqli_connect("localhost", "root", "", "tours_travels") or die($link3);

  $result = mysqli_query($link3,"SELECT * from userinfo where e_id = '$useremail'") or die("failed to query database".mysqli_error());
  $result2 = mysqli_query($link3,"SELECT * from registerform where user_id = '$userid' ORDER by id DESC") or die("failed to query database".mysqli_error());


  //verify and print
  $row = mysqli_fetch_array($result);
  $row2 = mysqli_fetch_array($result2);


 ?>
 <!-- login form end-->
<!DOCTYPE HTML>
<html>

<head>
  <title>Profile</title>
  <link rel="stylesheet" href="css/Masterpage.css">

  <style>
	.home {
		z-index: 2;
	}
  div.b {
      margin-top: 3.5%;
  }
    h1 {
      color: #fff;
      background-color: #7b0099;
      text-shadow: 1px 1px 2px #111;
      width: 30%;
      padding: 3px 0 3px 0;
      font-family: Open sans, Arial;
      text-transform: uppercase;
      box-shadow: 2px 2px 3px #111;
    }

    div.c {
			z-index: -1;
      height: auto;
      margin-top:-26.7%;
    }
    div.d {
      height: 80%;
      width:15.1%;
      background-color: #333;
      top: 82.5%;
      margin-left: 0px;
      float: left;
      position: absolute;
    }
    div.profile {
      margin-top: 2%;
      margin-bottom: 20px;
      width: 97%;
      height: auto;
      margin-right:auto;
      margin-left: auto;
      padding: 10px 10px;
      box-sizing: border-box;
      background: #111;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    }
    .userName {
      height: 5%;
      width: 50%;
      color: #fff;
      font-size: 2.5em;
      margin-left: 2%;
      margin-top: 2%;
      font-family: Open sans, Arial;
      text-transform: uppercase;

    }
    .userDetails {
      color: #fff;
      font-size: 1em;
      margin-left: 2%;
      font-family: Open sans, Arial;

    }
    .divide{
      border: 3px solid #7b0099;
      border-radius: 2px;
      width:90%;
    }
    .packInformation {
      z-index: 2;
      margin: 2% 2% ;
      width:95%;
      color: #fff;
      background-color: #222;
      padding: 10px;
      font-family: Open sans, Arial;

    }
    .tableInfo {
      margin-left: 5%;
      width: 80%;
      padding:5px;
      text-align: left;
        }

    .tableInfo td {
      padding: 5px;
    }
</style>
</head>

<body>


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
        <div class="u_name">
          <a href="user_profile.php">
          <div class="u_name2">
            <?php echo $_SESSION['user_name']; ?>
          </div>
          </a>
        </div>
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

  <div class="b" style="">
    <ul>

      <li><a href="Mauritius_images.php" class="sidebar">MAURITIUS</a></li>
			<li><a href="Australia_images.php" class="sidebar">AUSTRALIA</a></li>
			<li><a href="Thailand_images.php" class="sidebar">THAILAND</a></li>
			<li><a href="Singapore_images.php" class="sidebar">SINGAPORE</a></li>
			<li><a href="Malaysia_images.php" class="sidebar">MALAYSIA</a></li>
			<li><a href="Paris_images.php" class="sidebar">PARIS</a></li>
			<li><a href="Hong Kong_images.php" class="sidebar">HONG KONG</a></li>
			<li><a href="Japan_images.php" class="sidebar">JAPAN</a></li>

    </ul>
  </div>
  <div class="d"></div>
  <div class="c">
    <div class="profile">
      <div class="userName"><?php echo $row['f_name']." ".$row['l_name'];  ?></div>
      <div class="userDetails">
          E-mail Address: <?php echo $row['e_id']; ?> <br>
          Mobile Number: <?php echo $row['m_number']; ?><br>
          Gender: <?php echo $row['gender']; ?><br>
      </div>
      <br>
      <hr class="divide">
      <?php
      $idlen = $row2['id'];

     do {
       $Plocation = $row2['location'];
       $Pdate_dep = $row2['date_dep'];
       $Pnum_people = $row2['num_people'];
       $Ppack_details = $row2['pack_details'];
       $Ptotal_price = $row2['total_price'];

        echo "<div class='packInformation'>
        <table class='tableInfo'>
          <tr><td>Location: </td><td style='background-color:#7b0099;'>".$Plocation."</td>
          </tr>
          <tr><td>Date: </td><td>".$Pdate_dep."</td>
          </tr>
          <tr><td>Number of People: </td><td>".$Pnum_people."</td>
          </tr>
          <tr><td>Package Details: </td><td>".$Ppack_details."</td>
          </tr>
          <tr><td>Total Amount: </td><td>".$Ptotal_price."</td>
          </tr>
        </table>
      </div>";
      } while($row2 = mysqli_fetch_array($result2)) ?>

    </div>
  </div>
</body>
</html>
