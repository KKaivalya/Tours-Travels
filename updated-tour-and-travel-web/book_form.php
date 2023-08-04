<?php
$conn = mysqli_connect('localhost','root','','travel');
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }

 if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = (int) $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = (int) $_POST['guests'];

    $request = "INSERT INTO book_form(name, email, phone, address, location, guests) VALUES ('$name','$email','$phone','$address','$location','$guests')";

    if (mysqli_query($conn, $request)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $request . "<br>" . mysqli_error($conn);
    }

    header('location:book.php');
 }else{
    echo 'Something went wrong try again';
 }
mysqli_close($conn);
?>