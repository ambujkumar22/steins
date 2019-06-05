<?php
// to fetch data from user entered field
if(isset($_POST['login'])){
$userid = $_POST['emailid'];
$password = $_POST['passwrd'];

// session start
session_start();

// connecting to database
$link = mysqli_connect("localhost", "root", "", "tours_travels") or die($link);

// to prevent mysql injection
$userid = stripcslashes('emailid');
$password = stripcslashes('passwrd');
$userid = mysqli_real_escape_string($link,$_POST['emailid']);
$password = mysqli_real_escape_string($link,$_POST['passwrd']);

//query
$result = mysqli_query($link,"SELECT * from userinfo where e_id = '$userid' and pass = '$password'") or die("failed to query database".mysqli_error());

//verify and print
$row = mysqli_fetch_array($result);
if ($row['e_id'] == $userid && $row['pass'] == $password) {
  $_SESSION['user_name'] = $row['f_name'];
  $_SESSION['email_id'] = $row['e_id'];
  $_SESSION['primeid'] = $row['id'];
  /* clears data remaining in the form on reload */
  header("Location: homepage.php");
  exit;
  /* clears data remaining in the form on reload end */
    //  echo "welcome to my world: ".$row['f_name']; prints the username.

} else {
  echo "<script>
    alert('Invalid username or password');
  </script>";
}
}

 ?>
