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

        <title>About</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--header section starts-->
        <section class="header">
            <a href="home.php" class="logo">travel</a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a class="point" href="about.php">About</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
                <span> Welcome <?= $_SESSION['name']?> </span>
                <a href="home.php?logout='1'"><button class="button" style="background-color: #222;color: #fff;font-size: 1.7rem;padding: 1rem 3rem;cursor: pointer;">Logout</button></a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!--Header section ends-->




        <div class="heading" style="background:url(images/heading.jpg) no-repeat">
            <h1>About Us</h1>
        </div>
        <!--About us section starts here -->
        <section class="about">
            <div class="image">
                <img src="images/about.jpg" alt="" >
            </div>

            <div class="content">
                <h4 class="heading-title">Why Choose Us</h4>
                <p>We are a main online travel organization in India giving the best as far as a class can tell with the objective to be 
                    Tourism. Through our site, www.travel.com, our versatile applications, and our other related stages, recreation, and 
                    business voyagers can investigate, explore, analyze costs and book an extensive variety of administrations taking into 
                    account their movement needs.<br>
                    With more than 83,000 inns contracted crosswise over India, we are India's biggest stage for residential lodgings.<br>
                    A solid and “believed” travel brand of India, our qualities incorporate a vast and faithful client base, 
                    a multi-channel stage for relaxation and business explorers, and a powerful portable eco-framework for a 
                    range of voyagers and providers.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-map"></i>
                        <span>Top Destination</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Affordable Price</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 guide service</span>
                    </div>
                </div>    
            </div>
        </section>





        <!--About us section ends here -->






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
    </body>
</html>