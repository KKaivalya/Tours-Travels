<?php
session_start();
$errors = array();
$conn = mysqli_connect('localhost','root','','travel');
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }

 if(isset($_POST['send'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $request = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($conn, $request);
    if (mysqli_num_rows($results) == 1) {
      $user = mysqli_fetch_assoc($results);
      $_SESSION['name'] = $user['fname'];
  	  $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    } else {
      array_push($errors, "Wrong username/password combination");
    }
 }
mysqli_close($conn);
?>