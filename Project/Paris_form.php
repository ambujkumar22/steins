<!-- login form -->
<?php
  session_start();
  include 'login.php';
  error_reporting();

//   saves the data into the database
  if (!empty($_POST)) {
      $link2 = new mysqli('localhost','root','','tours_travels') or die(mysqli_error($link2));


      if (isset($_POST["register"])) {
        $location = $_POST["location"];
        $numberPeople = $_POST["number_people"];
        $dateOfDep = $_POST["dateofD"];
        $packPrice = $_POST["choosePack"];
        $packDetails = $_POST["details"];
        $totalPrice = $_POST["total"];
        $usrid = $_SESSION['primeid'];

      $link2->query("INSERT INTO registerform (user_id,location,num_people,date_dep,pack_price,pack_details,total_price) VALUES ('$usrid','$location','$numberPeople','$dateOfDep','$packPrice','$packDetails','$totalPrice')") or die($link2->error);

      /* clears data remaining in the form on reload */
      header("Location: homepage.php");
      exit;
      /* clears data remaining in the form on reload end */
      } else {
        echo "<script>
        alert('not connected');
        </script>";
      }
    }

// saves the data into the database end
 ?>
 <!-- login form end-->
<!DOCTYPE HTML>
<html>

<head>
  <title>Paris</title>
  <link rel="stylesheet" href="css/Masterpage.css">
  <link rel="stylesheet" href="jQuery/jqueryui/jquery-ui.css">
  <link rel="stylesheet" href="jQuery/jqueryui/jquery-ui.structure.css">
  <link rel="stylesheet" href="jQuery/jqueryui/jquery-ui.theme.css">
  <style>
	.home {
		z-index: 2;
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
			z-index: 1;
      height: 180%;
    }
    div.d {
      height: 105%;
      width:15.1%;
      background-color: #333;
      top: 136%;
      margin-left: 0px;
      float: left;
      position: absolute;
    }

    td {
      color: white;
      text-shadow: 1px 1px black;
      font-weight: bold;
      font-size: 25px;
    }

    .formbox {
			margin-bottom: 20px;
      width: 97%;
      margin: auto;
      height: 90%;
      padding: 10px 10px;
      box-sizing: border-box;
      background: #111;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    }

    .formbox p {
      margin-left: 100px;
      padding: 0;
      font-weight: bold;
      color: #fff;
      letter-spacing: 0.1em;
      font-family: Open Sans, Arial;
    }

    .formbox input {
      margin-bottom: 20px;
    }

    .formbox input[type="text"],
    .formbox input[type="password"],
    .formbox input[type="number"] {
      border: none;
      background: #111;
      border-bottom: 2px solid #fff;
      outline: none;
      width: 83%;
      color: white;
      margin-left: 100px;
      height: 30px;
    }

    ::placeholder {
      color: #bbb;
    }


    .formbox input[type="text"]:focus,
    .formbox input[type="password"]:focus,
    .formbox input[type="number"]:focus {
      border-bottom: 2px solid #7b0099;
      color: white;
      font-weight: bold;
    }


    .formbox form input[type="submit"] {
      display: block;
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

    .formbox form input[type="submit"]:hover {
      background: #7b0099;
      transition-duration: 0.5s;
    }

    /*image packages start*/
    .imgPackage {
      height: 300px;
      width: 300px;
      display: inline-block;
      margin: 10px;
      background-size: cover;
      border-radius: 16px;
      box-shadow: 0 0 16px rgba(0, 0, 0, 0.5);
      position: relative;
			margin: 10px 25px;
    }
  .imgPackage *{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 2;
  }
  .imgPackage div.package {
    z-index: 1;
    color: #fff;
    text-align: left;
    padding: 8px;
    padding-left: 10%;
    padding-top: 5%;
    font-size: 18px;
    background-color: rgba(0,0,0,0.5);
    border-radius: 16px;
  }
  .selectPack {
    z-index: 1;
    display: block;
    margin-left: 17%;
    margin-top: 77%;
    margin-bottom: 10%;
    width: 200px;
    text-align:center;
    border-radius: 40px;
    box-shadow: none;
    border: none;
    outline: none;
    cursor: pointer;
    background: #333;
    opacity: 0.5;
    color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .5);
  }

  .selectPack:hover {
    opacity: 1;
    background-color: #7b0099;
    transition: 0.4s;
  }
  .formbox input[type=radio] {
    margin-left: 50px;
    margin-top: -30px;
    opacity: 0;
    width: 100px;
    height: 100px;
    cursor: pointer;
    z-index: 3;
  }

  .formbox input[type=radio]:checked + span {
    background-color: #7b0099;
    border-radius: 40px;
  }

  .choosePack {
    margin-top: 20px;
    margin-left: 20px;
  }
    /*image packages end*/

	.sidetext {
			margin-left: 10px;
			color: white;
			float: right;
			margin-right: 25%;
		}

    /* calculate */
    .formbox form input[type=button] {
      color: #fff;
      height: 30px;
      width: 80px;
      margin-left: 47%;
      border: 2px solid #fff;
      opacity: 0.8;
      cursor: pointer;
    }
    .formbox form input[type=button]:hover {
      opacity: 1;
    }

    /* calculate end*/

    /* datepicker start */
    .ui-datepicker {
      width: 21em;
    }
    /* datepicker end */
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

  <img src="images/Paris1.jpg" height=400px width=100% style="margin-top:3%;">

  <div class="b">
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
  <div class="d">

  </div>
  <div class="c">
    <center>
      <h1>PARIS</h1>
    </center>

    <div class="formbox">
      <!-- form start-->
      <form action="Paris_form.php" method="post">
        <p><label>Name: </label></p>
        <input type="text" name="first_name" class="Fname" placeholder="Enter your first name" value="<?php echo $_SESSION['user_name']; ?>" readonly>
        <p><label>E-mail ID: </label></p>
        <input type="text" name="email_id" id="email_id" placeholder="Enter your E-mail" value="<?php echo $_SESSION['email_id'] ?>" readonly>
        <p><label>Location: </label></p>
        <input type="text" name="location" id="location" value="Malaysia" readonly>
        <p><label>Number of People: </label></p>
        <input type="number" name="number_people" id="number_people" placeholder="Number of People" required>
        <p><label>Date of Departure: </label></p>
        <input type="text" name="dateofD" id="dateofD" placeholder="MM/DD/YYYY" style="width: 25%; " required>
        <!-- image select start-->
        <p><label>Select Package: </label></p>
        <center>
          <!-- radio1 -->
          <div class="imgPackage" style="background-image: url('images/par1.jpg');">
            <div class="package">
                Sites to Visit: The Eiffel Tower,Arc de Triomphe and Champs and Buttes Chaumont Park. <br>
                Duration: 1N/2D <br>
                Hotel: 4star <br>
                Price: Rs.42,430 (Per Person) <br>
                <div class="selectPack" name="selectPack" ><input type="radio" name="choosePack" id="choosePack1" value='42430'><span></span></div>
            </div>
          </div>
          <!-- radio2 -->
          <div class="imgPackage" style="background-image: url('images/par3.jpg');">
            <div class="package">
              Sites to Visit: The Eiffel Tower,Arc de Triomphe and Champs,Louvre Museum and Buttes Chaumont Park. <br>
              Duration: 2N/3D <br>
              Hotel: 4star <br>
              Price: Rs.55,000 (Per Person) <br>
              <div class="selectPack" name="selectPack"><input type="radio" name="choosePack" id="choosePack2" value='55000' ><span></span></div>
            </div>
          </div>
          <!-- radio3 -->
          <div class="imgPackage" style="background-image: url('images/par5.jpg');">
            <div class="package">
              Sites to Visit: The Eiffel Tower,Arc de Triomphe and Champs,Louvre Museum,Château de Versailles, Notre-Dame-de-Paris and Buttes Chaumont Park. <br>
              Duration: 4N/5D <br>
              Hotel: 4star <br>
              Price: Rs.62,000 (Per Person) <br>
              <div class="selectPack" name="selectPack" ><input type="radio" name="choosePack" id="choosePack3" value='62000' ><span></span></div>
            </div>
          </div>
        </center>
        <!-- image select end-->
        <br><br>
      <input type="button" class="calculate" onclick="func()" name="calculate" value="Calculate" style="border-radius:5px; background-color: #111; z-index: 3;">
        <br>
				<div class="statusInfo">
					<p><label>Total Amount(INR): <input type="text" name="total"  id="total" size="10" readonly style="width:20%; margin-left: 55%;"> </label>
					</p>
          <textarea type="text" name="details"  id="details" readonly style="width:30%;z-index: -2; visibility:hidden; overflow:hidden;" rows="1"></textarea>
        </div>

				<br>
        <center>
          <input type="submit" name="register" value="Submit">
        </center>
        <br>
      </form>
      <!-- form end-->
    </div>
  </div>
</body>
<script src="jQuery/jquery.js" type="text/javascript"></script>
<script src="jQuery/jqueryui/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript">
// radio button and calculations and details.
function func(){
  var numberPeople = document.getElementById("number_people");


  var choosepack1 = document.getElementById("choosePack1");
  var choosepack2 = document.getElementById("choosePack2");
  var choosepack3 = document.getElementById("choosePack3");

  var calculate;
  var total = document.getElementById("total");
  var details = document.getElementById("details");

    if (choosepack1.checked==true) {
      calculate = parseFloat(numberPeople.value)*parseFloat(choosepack1.value);
      total.value = calculate;
      details.value = "Sites to Visit: The Eiffel Tower,Arc de Triomphe and Champs and Buttes Chaumont Park. <br> Duration: 1N/2D <br> Hotel: 4star <br> Price: Rs.42,430 (Per Person) <br>";

    } else if (choosepack2.checked==true) {
        calculate = parseFloat(numberPeople.value)*parseFloat(choosepack2.value);
        total.value = calculate;
        details.value = "Sites to Visit: The Eiffel Tower,Arc de Triomphe and Champs,Louvre Museum and Buttes Chaumont Park. <br> Duration: 2N/3D <br> Hotel: 4star <br> Price: Rs.55,000 (Per Person) <br>";
      } else if (choosepack3.checked==true) {
          calculate = parseFloat(numberPeople.value)*parseFloat(choosepack3.value);
          total.value = calculate;
          details.value = "Sites to Visit: The Eiffel Tower,Arc de Triomphe and Champs,Louvre Museum,Château de Versailles, Notre-Dame-de-Paris and Buttes Chaumont Park. <br> Duration: 4N/5D <br> Hotel: 4star <br> Price: Rs.62,000 (Per Person) <br>";
        } else {
          alert("wrong input");
        }
  }
// calculations end.

// datepicker start
  $('#dateofD').datepicker({
    numberOfMonths: 1,
    changeYear:true,
    changeYear:true,
    showOtherMonths:true,
  });
//datepicker end
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
