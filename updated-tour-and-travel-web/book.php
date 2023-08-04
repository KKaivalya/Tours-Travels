<?php 
session_start();
  if (!isset($_SESSION['name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: projectlogin.php');
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <title>Book Now</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--header section starts-->
        <section class="header">
            <a href="home.php" class="logo">travel</a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="package.php">Package</a>
                <a class="point" href="book.php">Book</a>
                <span> Welcome <?= $_SESSION['name']?> </span>
                <a href="home.php?logout='1'"><button class="button" style="background-color: #222;color: #fff;font-size: 1.7rem;padding: 1rem 3rem;cursor: pointer;">Logout</button></a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!--Header section ends-->


        <!--Book Now section starts here -->
        <div class="heading" style="background:url(images/book.jpg) no-repeat">
            <h1>Book Now</h1>
        </div>

        <section class="booking">
            <h1 class="heading-title">Book Your Trip </h1>

            <form action="book_form.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="Enter your Email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>Mobile Number :</span>
                        <input type="number" placeholder="Enter your number" name="phone">
                    </div>



                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" placeholder="Enter your address" name="address">
                    </div>



                   
                    
                    <div class="inputBox">

<div class="inputBox1">
    <span>Where to :</span>
    <select name="" class="" id="">
        <option value="volvo">place you want to visit</option>
        <option value="saab">Taj Mahal</option>
        <option value="opel">Ramoji Filmcity</option>
        <option value="audi">Chikhaldara Hill Station</option>
        <option value="audi">Gateway Of India</option>
        <option value="saab">Switzerland</option>
        <option value="opel">Germany</option>
        <option value="audi">New York</option>
        <option value="audi">Bangalore</option>
        <option value="audi">Goa Beach</option>
        <option value="audi">Jejuri</option>
    </select>
</div>
</div>
                    <div class="inputBox">
                        <span>How many :</span>
                        <input type="number" placeholder="Number of guests" name="guests">
                    </div>
                </div>
                <input type="submit"<button onclick="myFunction()" Submitvalue="submit" class="btn" name="send">
                </button> 
             </form>
        </section>

        <!-- Book Now section ends here -->




        <!-- Footer Section Starts -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                </div>
                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
                </div>
                <div class="box">
                    <h3>contact links</h3>
                    <a href="#"><i class="fas fa-phone"></i>7620465518</a>
                    <a href="#"><i class="fas fa-envelope"></i>kaiwalyakulkarni160@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i>Pune, India</a>
                </div>
                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter </a>
                    <a href="#"><i class="fab fa-linkedin"></i> Linked In </a>
                </div>
            
            </div>
            <div class="credit"> created by <span> Tourism(Kaivalya) </span> | all rights reserved!|</div>

        </section>
        <!-- Footer Section Ends -->



        <script src="js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
function myFunction() {
  alert("Your Booking is confirmed Sucessfully!");
}
</script>

    </body>
</html>