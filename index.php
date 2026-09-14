<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>MaxWheels | Car Selling Website</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet"
        href="styel.css">

    <link rel="stylesheet"
        href="responsive.css">

</head>

<body>


<!-- =========================================================
     HEADER START
========================================================= -->

<header class="header">

    <!-- Menu Button -->

    <div id="menu-btn"
        class="fas fa-bars">
    </div>


    <!-- Logo -->

    <a href="#home"
        class="logo">

        <span>Max</span>wheels

    </a>


    <!-- Navbar -->

    <nav class="navbar">

        <a href="#home">
            Home
        </a>

        <a href="#vehicles">
            Vehicles
        </a>

        <a href="#services">
            Services
        </a>

        <a href="#featured">
            Featured
        </a>

        <a href="#reviews">
            Reviews
        </a>

        <a href="#contact">
            Contact
        </a>

    </nav>


    <!-- Login -->

    <div id="login-btn">

        <?php if (isset($_SESSION["user_name"])): ?>

            <span class="user-name">

                <i class="fas fa-user-circle"></i>

                <?php
                echo htmlspecialchars($_SESSION["user_name"]);
                ?>

            </span>

            <a href="logout.html"
                class="btn">

                Logout

            </a>

        <?php else: ?>

            <a href="login.html"
                class="btn">

                Login

            </a>

        <?php endif; ?>

    </div>

</header>

<!-- =========================================================
     HEADER END
========================================================= -->



<!-- =========================================================
     HOME START
========================================================= -->

<section class="home"
    id="home">


    <!-- Hero Heading -->

    <h1>
        Find Your Dream Car
    </h1>


    <!-- Cars Image -->

    <img src="js/img/home-img.png"
        alt="Dream Cars">


    <!-- Explore Button -->

    <a href="#vehicles"
        class="btn">

        Explore Cars

    </a>


</section>

<!-- =========================================================
     HOME END
========================================================= -->



<!-- =========================================================
     STATISTICS START
========================================================= -->

<section class="icons-container">


    <!-- Branches -->

    <div class="icons">

        <i class="fas fa-home"></i>

        <div class="content">

            <h3>
                150+
            </h3>

            <p>
                Branches
            </p>

        </div>

    </div>



    <!-- Cars Sold -->

    <div class="icons">

        <i class="fas fa-car"></i>

        <div class="content">

            <h3>
                4770+
            </h3>

            <p>
                Cars Sold
            </p>

        </div>

    </div>



    <!-- Happy Clients -->

    <div class="icons">

        <i class="fas fa-users"></i>

        <div class="content">

            <h3>
                320+
            </h3>

            <p>
                Happy Clients
            </p>

        </div>

    </div>



    <!-- New Cars -->

    <div class="icons">

        <i class="fas fa-car-side"></i>

        <div class="content">

            <h3>
                1500+
            </h3>

            <p>
                New Cars
            </p>

        </div>

    </div>


</section>

<!-- =========================================================
     STATISTICS END
========================================================= -->
<!-- =========================================================
     PART 2 - POPULAR VEHICLES START
========================================================= -->

<section class="vehicles" id="vehicles">

    <h1 class="heading">
        Popular <span>Vehicles</span>
    </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">


            <!-- ================= VEHICLE 1 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car1.jpg"
                     alt="Porsche Grey">

                <div class="content">

                    <h3>Porsche</h3>

                    <div class="price">
                        <span>Price : </span>
                        $55,000/-
                    </div>

                    <p>

                        New
                        <span class="fas fa-circle"></span>

                        2021
                        <span class="fas fa-circle"></span>

                        Automatic
                        <span class="fas fa-circle"></span>

                        Petrol
                        <span class="fas fa-circle"></span>

                        183mph

                    </p>

<a href="booking.html?vehicle=Porsche" class="btn">
    Book Service
</a>



                </div>

            </div>


            <!-- ================= VEHICLE 2 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car2.jpg"
                     alt="Porsche White">

                <div class="content">

                    <h3>Porsche</h3>

                    <div class="price">
                        <span>Price : </span>
                        $62,000/-
                    </div>

                    <p>

                        New
                        <span class="fas fa-circle"></span>

                        2021
                        <span class="fas fa-circle"></span>

                        Automatic
                        <span class="fas fa-circle"></span>

                        Petrol
                        <span class="fas fa-circle"></span>

                        180mph

                    </p>

<a href="booking.html?vehicle=Porsche" class="btn">
    Book Service
</a>



                </div>

            </div>


            <!-- ================= VEHICLE 3 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car3.jpg"
                     alt="Porsche Yellow">

                <div class="content">

                    <h3>Porsche</h3>

                    <div class="price">
                        <span>Price : </span>
                        $72,000/-
                    </div>

                    <p>

                        New
                        <span class="fas fa-circle"></span>

                        2022
                        <span class="fas fa-circle"></span>

                        Automatic
                        <span class="fas fa-circle"></span>

                        Petrol
                        <span class="fas fa-circle"></span>

                        190mph

                    </p>

                 <a href="booking.html?vehicle=Porsche" class="btn">
    Book Service
</a>



                </div>

            </div>


            <!-- ================= VEHICLE 4 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car4.jpg"
                     alt="BMW">

                <div class="content">

                    <h3>BMW</h3>

                    <div class="price">
                        <span>Price : </span>
                        $68,000/-
                    </div>

                    <p>

                        New
                        <span class="fas fa-circle"></span>

                        2022
                        <span class="fas fa-circle"></span>

                        Automatic
                        <span class="fas fa-circle"></span>

                        Petrol
                        <span class="fas fa-circle"></span>

                        185mph

                    </p>

                  <a href="booking.html?vehicle=Porsche" class="btn">
    Book Service
</a>



                </div>

            </div>


            <!-- ================= VEHICLE 5 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car5.jpg"
                     alt="Mercedes">

                <div class="content">

                    <h3>Mercedes</h3>

                    <div class="price">
                        <span>Price : </span>
                        $82,000/-
                    </div>

                    <p>

                        New
                        <span class="fas fa-circle"></span>

                        2023
                        <span class="fas fa-circle"></span>

                        Automatic
                        <span class="fas fa-circle"></span>

                        Petrol
                        <span class="fas fa-circle"></span>

                        195mph

                    </p>

                 <a href="booking.html?vehicle=Porsche" class="btn">
    Book Service
</a>


                </div>

            </div>


        </div>


        <!-- ================= PAGINATION ================= -->

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- =========================================================
     PART 2 - POPULAR VEHICLES END
========================================================= -->
<!-- =========================================================
     PART 3 - OUR SERVICES START
========================================================= -->

<section class="services" id="services">

    <!-- Heading -->

    <h1 class="heading">
        Our <span>Services</span>
    </h1>


    <!-- Services Container -->

    <div class="box-container">


        <!-- ================= SERVICE 1 ================= -->

        <div class="box">

            <i class="fas fa-car"></i>

            <h3>
                Car Selling
            </h3>

            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Corporis, nisi.
            </p>

            <a href="#contact" class="btn">
                Read More
            </a>

        </div>


        <!-- ================= SERVICE 2 ================= -->

        <div class="box">

            <i class="fas fa-tools"></i>

            <h3>
                Parts Repair
            </h3>

            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Corporis, nisi.
            </p>

            <a href="#contact" class="btn">
                Read More
            </a>

        </div>


        <!-- ================= SERVICE 3 ================= -->

        <div class="box">

            <i class="fas fa-car-crash"></i>

            <h3>
                Car Insurance
            </h3>

            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Corporis, nisi.
            </p>

            <a href="#contact" class="btn">
                Read More
            </a>

        </div>


        <!-- ================= SERVICE 4 ================= -->

        <div class="box">

            <i class="fas fa-car-battery"></i>

            <h3>
                Battery Replacement
            </h3>

            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Corporis, nisi.
            </p>

            <a href="#contact" class="btn">
                Read More
            </a>

        </div>


        <!-- ================= SERVICE 5 ================= -->

        <div class="box">

            <i class="fas fa-gas-pump"></i>

            <h3>
                Oil Change
            </h3>

            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Corporis, nisi.
            </p>

            <a href="#contact" class="btn">
                Read More
            </a>

        </div>


        <!-- ================= SERVICE 6 ================= -->

        <div class="box">

            <i class="fas fa-headset"></i>

            <h3>
                24/7 Support
            </h3>

            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Corporis, nisi.
            </p>

            <a href="#contact" class="btn">
                Read More
            </a>

        </div>


    </div>

</section>

<!-- =========================================================
     PART 3 - OUR SERVICES END
========================================================= -->
<!-- =========================================================
     PART 4 - FEATURED CARS START
========================================================= -->

<section class="featured" id="featured">

    <h1 class="heading">
        <span>Featured</span> Cars
    </h1>

    <div class="featured-slider swiper">

        <div class="swiper-wrapper">


            <!-- ================= CAR 1 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car5.jpg" alt="Featured Car 1">

                <h3>New Model</h3>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="price">
                    $55,000/-
                </div>

                <a href="#contact" class="btn">
                    Check Out
                </a>

            </div>


            <!-- ================= CAR 2 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car6.jpg" alt="Featured Car 2">

                <h3>New Model</h3>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="price">
                    $55,000/-
                </div>

                <a href="#contact" class="btn">
                    Check Out
                </a>

            </div>


            <!-- ================= CAR 3 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car7.jpg" alt="Featured Car 3">

                <h3>New Model</h3>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="price">
                    $55,000/-
                </div>

                <a href="#contact" class="btn">
                    Check Out
                </a>

            </div>


            <!-- ================= CAR 4 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car8.jpg" alt="Featured Car 4">

                <h3>New Model</h3>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="price">
                    $55,000/-
                </div>

                <a href="#contact" class="btn">
                    Check Out
                </a>

            </div>


            <!-- ================= CAR 5 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car9.jpg" alt="Featured Car 5">

                <h3>New Model</h3>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="price">
                    $55,000/-
                </div>

                <a href="#contact" class="btn">
                    Check Out
                </a>

            </div>


            <!-- ================= CAR 6 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car1.jpg" alt="Featured Car 6">

                <h3>New Model</h3>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="price">
                    $55,000/-
                </div>

                <a href="#contact" class="btn">
                    Check Out
                </a>

            </div>


            <!-- ================= CAR 7 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car-2.jpg" alt="Featured Car 7">

                <h3>New Model</h3>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="price">
                    $55,000/-
                </div>

                <a href="#contact" class="btn">
                    Check Out
                </a>

            </div>


            <!-- ================= CAR 8 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/car-3.jpg" alt="Featured Car 8">

                <h3>New Model</h3>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="price">
                    $55,000/-
                </div>

                <a href="#contact" class="btn">
                    Check Out
                </a>

            </div>


        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- =========================================================
     PART 4 - FEATURED CARS END
========================================================= -->
<!-- =========================================================
     PART 5 - NEWSLETTER START
========================================================= -->

<section class="newsletter">

    <div class="newsletter-content">

        <h3>
            Subscribe For Latest Updates
        </h3>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatum, suscipit.
        </p>

        <form action="#" method="POST">

            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required
            >

            <input
                type="submit"
                value="Subscribe"
                class="btn"
            >

        </form>

    </div>

</section>

<!-- =========================================================
     PART 5 - NEWSLETTER END
========================================================= -->
<!-- =========================================================
     PART 6 - CLIENT'S REVIEWS START
========================================================= -->

<section class="reviews" id="reviews">

    <h1 class="heading">
        Client's <span>Review</span>
    </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">


            <!-- ================= REVIEW 1 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/cli1.jpg" alt="Client">

                <p>
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Ipsam incidunt quod
                    praesentium iusto id autem possimus
                    assumenda at ut saepe.
                </p>

                <h3>
                    John Deo
                </h3>

                <div class="stars">

                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>

            </div>


            <!-- ================= REVIEW 2 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/cli2.jpg" alt="Client">

                <p>
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Ipsam incidunt quod
                    praesentium iusto id autem possimus
                    assumenda at ut saepe.
                </p>

                <h3>
                    John Deo
                </h3>

                <div class="stars">

                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>

            </div>


            <!-- ================= REVIEW 3 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/cli3.jpg" alt="Client">

                <p>
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Ipsam incidunt quod
                    praesentium iusto id autem possimus
                    assumenda at ut saepe.
                </p>

                <h3>
                    John Deo
                </h3>

                <div class="stars">

                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>

            </div>


            <!-- ================= REVIEW 4 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/cli4.jpg" alt="Client">

                <p>
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Ipsam incidunt quod
                    praesentium iusto id autem possimus
                    assumenda at ut saepe.
                </p>

                <h3>
                    John Deo
                </h3>

                <div class="stars">

                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>

            </div>


            <!-- ================= REVIEW 5 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/cli5.jpg" alt="Client">

                <p>
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Ipsam incidunt quod
                    praesentium iusto id autem possimus
                    assumenda at ut saepe.
                </p>

                <h3>
                    John Deo
                </h3>

                <div class="stars">

                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>

            </div>


            <!-- ================= REVIEW 6 ================= -->

            <div class="swiper-slide box">

                <img src="js/img/cli6.jpg" alt="Client">

                <p>
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Ipsam incidunt quod
                    praesentium iusto id autem possimus
                    assumenda at ut saepe.
                </p>

                <h3>
                    John Deo
                </h3>

                <div class="stars">

                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>

            </div>


        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- =========================================================
     PART 6 - CLIENT'S REVIEWS END
========================================================= -->
<!-- =========================================================
     PART 7 - CONTACT US START
========================================================= -->

<section class="contact" id="contact">

    <!-- ================= HEADING ================= -->

    <h1 class="heading">
        <span>Contact</span> Us
    </h1>


    <div class="contact-container">


        <!-- ================= MAP ================= -->

        <div class="map">

            <iframe
                src="https://www.google.com/maps?q=Surat,Gujarat,India&output=embed"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>


        <!-- ================= CONTACT FORM ================= -->

        <div class="contact-form">

            <h3>
                Get In Touch
            </h3>

       <form action="contacts.php" method="POST">

                <input
                    type="text"
                    name="name"
                    placeholder="Your Name"
                    required
                >

                <input
                    type="email"
                    name="email"
                    placeholder="Your Email"
                    required
                >

                <input
                    type="text"
                    name="subject"
                    placeholder="Subject"
                    required
                >

                <textarea
                    name="message"
                    placeholder="Your Message"
                    required
                ></textarea>

                <button
                    type="submit"
                    class="btn">
                    <i class="fas fa-paper-plane"></i>
                    Send Message
                </button>

            </form>

        </div>

    </div>

</section>

<!-- =========================================================
     PART 7 - CONTACT US END
========================================================= -->
<!-- =========================================================
     PART 8 - FOOTER START
========================================================= -->

<footer class="footer">

    <div class="footer-container">


        <!-- ================= OUR BRANCHES ================= -->

        <div class="footer-box">

            <h3>
                Our Branches
            </h3>

            <a href="#">
                <i class="fas fa-map-marker-alt"></i>
                India
            </a>

            <a href="#">
                <i class="fas fa-map-marker-alt"></i>
                Japan
            </a>

            <a href="#">
                <i class="fas fa-map-marker-alt"></i>
                France
            </a>

            <a href="#">
                <i class="fas fa-map-marker-alt"></i>
                Russia
            </a>

            <a href="#">
                <i class="fas fa-map-marker-alt"></i>
                USA
            </a>

        </div>


        <!-- ================= QUICK LINKS ================= -->

        <div class="footer-box">

            <h3>
                Quick Links
            </h3>

            <a href="#home">
                <i class="fas fa-arrow-right"></i>
                Home
            </a>

            <a href="#vehicles">
                <i class="fas fa-arrow-right"></i>
                Vehicles
            </a>

            <a href="#services">
                <i class="fas fa-arrow-right"></i>
                Services
            </a>

            <a href="#featured">
                <i class="fas fa-arrow-right"></i>
                Featured
            </a>

            <a href="#reviews">
                <i class="fas fa-arrow-right"></i>
                Reviews
            </a>

            <a href="#contact">
                <i class="fas fa-arrow-right"></i>
                Contact
            </a>

        </div>


        <!-- ================= CONTACT INFO ================= -->

        <div class="footer-box">

            <h3>
                Contact Info
            </h3>

            <a href="tel:+1234567890">
                <i class="fas fa-phone"></i>
                +123-456-7890
            </a>

            <a href="tel:+1112223333">
                <i class="fas fa-phone"></i>
                +111-222-3333
            </a>

            <a href="mailto:info@maxwheels.com">
                <i class="fas fa-envelope"></i>
                info@maxwheels.com
            </a>

            <a href="#">
                <i class="fas fa-map-marker-alt"></i>
                Surat, India - 395001
            </a>

        </div>


        <!-- ================= SOCIAL LINKS ================= -->

        <div class="footer-box">

            <h3>
                Follow Us
            </h3>

            <a href="#">
                <i class="fab fa-facebook-f"></i>
                Facebook
            </a>

            <a href="#">
                <i class="fab fa-twitter"></i>
                Twitter
            </a>

            <a href="#">
                <i class="fab fa-instagram"></i>
                Instagram
            </a>

            <a href="#">
                <i class="fab fa-linkedin"></i>
                Linkedin
            </a>

            <a href="#">
                <i class="fab fa-pinterest"></i>
                Pinterest
            </a>

        </div>


    </div>


    <!-- ================= COPYRIGHT ================= -->

    <div class="credit">

        Created By
        <span>Mr. Web Designer</span>
        | All Rights Reserved

    </div>

</footer>

<!-- =========================================================
     PART 8 - FOOTER END
========================================================= -->
<!-- =========================================================
     SWIPER JS
========================================================= -->

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<!-- YOUR JS -->

<script src="js/script.js"></script>

</body>
</html>