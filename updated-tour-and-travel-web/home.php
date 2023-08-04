<?php 
session_start();
  if (!isset($_SESSION['name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: projectlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: projectlogin.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <title>Home</title>
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
                <a class="point" href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
                <span> Welcome <?= $_SESSION['name']?> </span>
                <a href="home.php?logout='1'"><button class="button" style="background-color: #222;color: #fff;font-size: 1.7rem;padding: 1rem 3rem;cursor: pointer;">Logout</button></a>
            </nav>


            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!--Header section ends-->



        <!-- Home section starts -->
        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background:url(images/package3.jpg) no-repeat">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>Travel around the world</h3>
                            <a href="package.php" class="btn">Discover more</a>
                        </div>
                    </div>
            </div>
        </section>



        <!-- Home package section starts -->
        <section class="home-packages">
            <h1 class="heading-title"> Our Packages </h1>
            <div class="box-container">


                <div class="box">
                    <div class="image">
                        <img src="images/package1.jpg" alt="">
                    </div>
                    <div class="content">
                    <h3>Taj Mahal</h3>
                        <p>The Taj Mahal is a mausoleum complex in Agra, western Uttar Pradesh state, northern India.<br>
                            Tour date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package2.jpg" alt="">
                    </div>
                    <div class="content">
                    <h3>Ramoji Filmcity</h3>
                        <p>Ramoji Film City Asia Sixth Best Amusement Park in India rated by Tripadvisor. 
                        A Perfect Holiday Destination for Fun Filled Vacation is one of the Prime Attractions of Hyderabad.<br>
                        Tour date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package3.jpg" alt="">
                    </div>
                    <div class="content">
                    <h3>Chikhaldara Hill Station</h3>
                        <p>Chikhaldara is a quaint hill station that can be visited any time of the year, 
                            although this destination is popular among people as a summer retreat.<br>
                            Tour Date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
        </section>
        <!-- Home package section ends -->


        <!--Home About section starts here-->
        <section class="home-about">
            <div class="image">
                <img src="images/heading.jpg" alt="">
            </div>

            <div class="content">
                <h3>About Us</h3>
                <p>“Travel is the main thing you purchase that makes you more extravagant”. We, at ‘Tourism’, 
                    swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly. 
                    We have been moving excellent encounters for a considerable length of time through our cutting-edge 
                    planned occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life, 
                    brimming with extraordinary travel encounters.</p>
                <a href="about.php" class="btn">Read More</a>    
            </div>
        </section>

        <!--Home About section ends here-->



        <!-- Home section ends here -->


        <!--Services section starts here
        <section class="serivices">
            <h1 class="heading-title"> Our Services </h1>
            <div class="box-container">

            </div>   
        </section>
        Services section ends here -->










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