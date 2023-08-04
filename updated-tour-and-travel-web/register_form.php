<?php
session_start();
$errors = array();
$conn = mysqli_connect('localhost','root','','travel');
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }

 if(isset($_POST['send'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists    
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
      }

    if (count($errors) == 0) {
    $request = "INSERT INTO users(fname, lname, email, password) VALUES ('$fname','$lname','$email','$password')";

    mysqli_query($conn, $request);
    header('location:projectlogin.php');
    }
 }
mysqli_close($conn);
?>