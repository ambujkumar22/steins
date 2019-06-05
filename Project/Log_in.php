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
      height: 99%;
      width: 99%;
      margin-left: 0px;
    }

    /* login form*/
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
    .logbox {
      width: 90%;
      margin: auto;
      height: 650px;
      background: #111;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    }

    .logbox .rightimg {
      float: right;
      width: 50%;
      height: 650px;
      background-size: cover;
      box-sizing: border-box;
      border: 10px solid #111;
    }

    .logbox .left {
      float: left;
      width: 50%;
      height: 550px;
      box-sizing: border-box;
    }

    .formbox {
      width: 100%;
      height: 550px;
      padding: 200px 70px;
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
    .formbox input[type="password"] {
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
    .formbox input[type="password"]:focus {
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
      margin-left: 18% ;
      margin-top: 20%;
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

    /* login form end*/

  </style>
</head>

<body>
  <!-- login form -->
  <?php
    include 'login.php';
   ?>
   <!-- login form end -->


  <div class="c">
    <div class="title">
    <a href="Log_in.php"><h1 style="background-color: #7b0099;">LOG IN</h1></a><a href="Sign_up.php"><h1>SIGN UP</h1></a>
    </div>
    <div class="logbox">
      <div class="left">
        <div class="formbox">
          <!-- login form start-->
          <form action="Log_in.php" method="post">
            <p><label>Username: </label></p>
            <input type="text" placeholder="E-mail ID" name="emailid" required>
            <p><label>Password: </label></p>
            <input type="password" placeholder="Password" name="passwrd" required>

            <input type="submit" value="Log In" name="login">

              <br>
          </form>
          <!-- login form end-->
        </div>
      </div>
      <div class="right"><img src="images/eric-nopanen.jpg" alt="img not available" class="rightimg" /></div>
    </div>
  </div>
</body>
<?php
    session_unset();

 ?>

</html>
