<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>
    <header class="header" data-header>
        <div class="overlay" data-overlay></div>

        <!-- <div class="header-top">
            <div class="container">

                <ul class="header-top-list">
                    <li><a href="mailto:info@project.com" class="header-top-link">
                        <ion-icon name="mail-outline"></ion-icon>
                        <span>info@project.com</span>
                    </a></li>
                    <li><a href="#" class="header-top-link">
                        <ion-icon name="location-outline"></ion-icon>
                        <span>Lorem ipsum dolor sit amet.</span>
                    </a></li>
                </ul>

                <div class="header-top-btn">Add Listing</div>


            </div>
        </div> -->

        <div class="header-bottom">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="./assets/images/logo.jpg" alt="Ghardekho logo">
                </a>

                <nav class="navbar" data-navbar>
                    <div class="navbar-top">
                        <a href="index.php" class="logo">
                            <img src="./assets/images/logo.jpg" alt="Ghardekho logo">
                        </a>
                        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                            <ion-icon name="close-outline"></ion-icon>
                        </button>
                    </div>

                    <div class="navbar-bottom">
                        <ul class="navbar-list">
                            <li><a href="index.php" class="navbar-link" data-nav-link>Home</a></li>
                            <li><a class="active" href="about.php" class="navbar-link" data-nav-link>About</a></li>
                            <li><a href="service.php" class="navbar-link" data-nav-link>Service</a></li>
                            <li><a href="#" class="navbar-link" data-nav-link>Property</a></li>
                            <li><a href="blog.php" class="navbar-link" data-nav-link>Blog</a></li>
                            <li><a href="contact.php" class="navbar-link" data-nav-link>Contact</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="header-bottom-actions">
                    <button class="header-bottom-actions-btn" aria-label="Search">
                        <ion-icon name="search-outline"></ion-icon>
                        <span>Search</span>
                    </button>

                    <button class="header-bottom-actions-btn" onclick="window.location.href='login.php';">
                        <ion-icon name="person-outline"></ion-icon>
                        <span>Profile</span>
                    </button>

                    <button class="header-bottom-actions-btn" aria-label="Cart">
                        <ion-icon name="cart-outline"></ion-icon>
                        <span>Cart</span>
                    </button>

                    <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
                        <ion-icon name="menu-outline"></ion-icon>
                        <span>Menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="container">
            <figure class="about-banner">
                <img src="./assets/images/about-banner-1.png" alt="House interior">
                <img src="./assets/images/about-banner-2.jpg" alt="House interior" class="abs-img">
            </figure>

            <div class="about-content">
                <p class="section-subtitle">About Us</p>
                <h2 class="h2 section-title">The Leading Real Estate Rental Marketplace.</h2>
                <p class="about-text">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                
                <ul class="about-list">

                    <li class="about-item">

                        <div class="about-item-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>

                        <p class="about-item-text">Smart Home Design</p>
                    </li>

                    <li class="about-item">

                        <div class="about-item-icon">
                            <ion-icon name="leaf-outline"></ion-icon>
                        </div>

                        <p class="about-item-text">Beautiful Scene Around</p>
                    </li>

                    <li class="about-item">

                        <div class="about-item-icon">
                            <ion-icon name="wine-outline"></ion-icon>
                        </div>

                        <p class="about-item-text">Exceptional Lifestyle</p>
                    </li>

                    <li class="about-item">

                        <div class="about-item-icon">
                            <ion-icon name="shield-checkmark-outline"></ion-icon>
                        </div>

                        <p class="about-item-text">Complete 24/7 Security</p>
                    </li>

                </ul>

                <p class="callout">
                    Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </p>

                <a href="#service" class="btn">Our Services</a>
            </div>
        </div>
    </section>

    <section class="page-header" class="blog-header">
        
        <h2>#KnowUs</h2>
        
        <p>Read all case studies about our property!</p>
        
    </section>

    <section id="about-head">
        <img src="./assets/images/about.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ea sed in deserunt dolores neque facere impedit accusamus voluptatum nisi.</p>
            <abbr title="">Creating stunning image with as much or as little control as you like thanks to a choice of Basic and Creative modes. </abbr>

            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Creating stunning image with as much or as little control as you like thanks to a choice of Basic and Creative modes.</marquee>

        </div>
    </section>

    <section id="about-app">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="./assets/images/app.mp4"></video>
        </div>
    </section>

    <section id="feature">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Home Loans</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Online Review</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Pay on Credit</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Save Money</h6>
        </div>
    </section>

    <section class="newsletter" class="section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="btn">Sign Up</button>
        </div>
    </section>

    <footer>
        <div class="col">
            <img src="./assets/images/logo.jpg" alt="GharDekho">
            <h4>Contact</h4>
            <p><strong>Address: </strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dolorem totam recusandae corrupti </p>
            <p><strong>Phone:</strong> 9786545673/9674523134</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>Company</h4>
            <a href="about.php">About Us</a>
            <a href="blog.php">Blog</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="contact.php">Contact Us</a>
            <a href="#">FAQ</a>
        </div>

        <div class="col">
            <h4>Services</h4>
            <a href="login.php">Sign In</a>
            <a href="login.php">My account</a>
            <a href="login.php">My Wishlist</a>
            <a href="login.php">Track My Order</a>
            <a href="contact.php">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <!-- <img src="./assets/images/play.png" alt="">
                <img src="./assets/images/app.png" alt=""> -->
                <i class="fab fa-google-play"></i>
                <i class="fab fa-app-store"></i>
            </div>
            <p>Secured Payment Gateways</p>
            <i class="fab fa-paypal"></i>
        </div>

        <div class="copyright">
            <p>&copy 2023,TE2mini_project.</p>
        </div>
    </footer>


    <!-- custom js line -->
    <script src="./assets/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="+K7"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="htpps://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>