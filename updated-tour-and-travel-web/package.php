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

        <title>Package</title>
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
                <a href="about.php">About</a>
                <a class="point" href="package.php">Package</a>
                <a href="book.php">Book</a>
                <span> Welcome <?= $_SESSION['name']?> </span>
                <a href="home.php?logout='1'"><button class="button" style="background-color: #222;color: #fff;font-size: 1.7rem;padding: 1rem 3rem;cursor: pointer;">Logout</button></a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!--Header section ends-->
        <div class="heading" style="background:url(images/packages.jpg) no-repeat">
            <h1>Packages</h1>
        </div>

        <!--Packages Section starts -->  
        <section class="packages">
            <h1 class="heading-title">Top Destination</h1>

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
                        <a href="book.php"class="btn">Book Now</a>
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
                        <a href="book.php"class="btn">Book Now</a>
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
                        <a href="book.php"class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package_4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Gateway of India</h3>
                        <p>Gateway of India, monument in Mumbai that was completed in 1924.
                            Situated on the Apollo Bunder overlooking the Arabian Sea<br>
                            Tour Date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php"class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>SwitzerLand</h3>
                        <p>Switzerland, officially the Swiss Confederation, is a landlocked country located at the confluence of Western, Central and Southern Europe.
                         It is bordered by Italy to the south, France to the west<br>
                         Tour Date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php"class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Germany</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere illo reiciendis quae illum sit beatae fugit, 
                            iure ullam explicabo ut doloremque minus fugiat tempore nesciunt animi. Quo praesentium eos commodi!
                            Tour Date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php"class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>New York</h3>
                        <p>New York, often called New York City or NYC, is the most populous city in the United States.<br>
                        Tour Date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php"class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Bangalore</h3>
                        <p> Bangalore, India Officially referred to as "Bengaluru," 
                            Bangalore is the largest city and the current capital of the Indian State of Karnataka.<br>
                            Tour Date: 27 April 
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php"class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Goa Beach</h3>
                        <p>Chris Mellor/Getty Images. Calangute Beach is the busiest and most commercial beach in Goa<br>
                        Tour Date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php"class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/package10.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Jejuri</h3>
                        <p>The Khandoba temple of Jejuri is a Hindu temple dedicated to the god Khandoba, located on a hill in the town of Jejuri, 
                            Maharashtra, India.It is one of the most prominent Hindu pilgrimage centres of Maharashtra<br>
                            Tour Date: 27 April
                        </p>
                        <h3>Price: 3000<h3>
                        <a href="book.php"class="btn">Book Now</a>
                    </div>
                </div>
            </div>

            <!--<div class="load-more"><span class="btn">Load More</span></div> -->
        </section>

         <!--Packages Section ends -->

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