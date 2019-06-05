<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" href="css/Masterpage.css">
  <style>
  body {
    font-family: Open Sans, Arial;
    background-color: black;
  }
  .c {
    top: 1%;
    z-index: -1;
    height: 118%;
    width: 99%;
    margin-left: 0px;
  }

  /* signup form start*/
  .title {
    padding: 10px 0px 10px;
    display: inline-flex;
    text-align: center;
    margin-left: 40%;
  }

  .title h1 {
    margin: 0;
    padding: 4px 8px;
    color: white;
    font-family: Open Sans, Arial;
    text-transform: uppercase;
    font-size: 36px;
  }
  .title h1:hover {
    background-color: #111;
    cursor: pointer;
    transition-duration: 0.3s;
  }

    .signbox {
      width: 90%;
      margin: auto;
      height: 810px;
      background: #111;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    }

    .signbox .leftimg {
      float: left;
      width: 50%;
      height: 810px;
      background-size: cover;
      box-sizing: border-box;
      border: 10px solid #111;
    }

    .signbox .right {
      float: left;
      width: 50%;
      height: 550px;
      box-sizing: border-box;
    }

    .formbox {
      width: 100%;
      height: 550px;
      padding: 10px 10px;
      box-sizing: border-box;
      background: #111;
    }

    .formbox p {
      margin-left: 50px;
      padding: 0;
      font-weight: bold;
      color: #fff;
      letter-spacing: 0.1em;
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
      width:70%;
      color: white;
      margin-left: 50px;
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
      .formbox input[type="radio"]:focus {
        color: #7b0099;
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

    /* sign up form end*/
  </style>
</head>

<body>

  <!-- saves the data into the database -->
  <?php
  if (!empty($_POST)) { // condition for empty email textbox
    $email = $_POST['email_id'];
    if(filter_var($email,FILTER_VALIDATE_EMAIL) == true) { // validates the email-address.
      $mysqli = new mysqli('localhost','root','','tours_travels') or die(mysqli_error($mysqli));


      if (isset($_POST["save"])) {
        $fname = $_POST["first_name"];
        $lname = $_POST["last_name"];
        $mnum = $_POST["mobile_number"];
        $emid = $_POST["email_id"];
        $pswrd = $_POST["pass_word"];
        $genselect = $_POST["gselect"];

      $mysqli->query("INSERT INTO userinfo (f_name,l_name,m_number,e_id,pass,gender) VALUES ('$fname','$lname','$mnum','$emid','$pswrd','$genselect')") or die($mysqli->error);
      /* clears data remaining in the form on reload */
      header("Location: Log_in.php");
      exit;
      /* clears data remaining in the form on reload end */
      }
    } else {
      echo "<script>
      alert('invalid email-ID');
      </script>";
    }
  }

  ?>
<!-- saves the data into the database end -->


  <div class="c">
    <div class="title">
    <a href="Log_in.php"><h1>LOG IN</h1></a><a href="Sign_up.php"><h1 style="background-color: #7b0099;">SIGN UP</h1></a>
    </div>
    <div class="signbox">
      <div class="left"><img src="images/trekking.jpg" alt="img not available" class="leftimg" /></div>
      <div class="right">
        <div class="formbox">
          <!-- sign up form start-->
          <form action="Sign_up.php" method="post">
            <p><label>First Name: </label></p>
            <input type="text" name="first_name" placeholder="Enter your first name" required>
            <p><label>Last Name: </label></p>
            <input type="text" name="last_name" placeholder="Enter your last name" required>
            <p><label>Mobile Number: </label></p>
            <input type="number" name="mobile_number" placeholder="Enter your mobile number" required>
            <p><label>E-mail ID: </label></p>
            <input type="text" name="email_id" id="email_id" placeholder="Enter your E-mail" required>
            <p><label>Password: </label></p>
            <input type="password" name="pass_word" placeholder="Enter your password" required>
            <p><label>Confirm Password: </label></p>
            <input type="password" name="pswrd" placeholder="Re-enter your Password" required>
            <p><label>Gender: </label></p>
            <p>
              <input type="radio" name="gselect" value="Male"><label>Male</label>
              <input type="radio" name="gselect" value="Female"><label>Female</label>
              <input type="radio" name="gselect" value="Others"><label>Others</label>
            </p>
            <center>
              <input type="submit" name="save" value="Submit" onclick="">
            </center>
              <br>
          </form>

          <!-- sign up form end-->
        </div>
      </div>
    </div>
  </div>
</body>

</html>
