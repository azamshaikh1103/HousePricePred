<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
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
                            <li><a href="about.php" class="navbar-link" data-nav-link>About</a></li>
                            <li><a class="active" href="service.php" class="navbar-link" data-nav-link>Service</a></li>
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

    <!-- SERVICE -->
    <section class="service" id="service">
        <div class="container">
            <p class="section-subtitle">Our Services</p>
            <h2 class="h2 section-title">Our Main Focus</h2>
            <ul class="service-list">
                <li>
                    <div class="service-card">
                        <div class="card-icon">
                            <img src="./assets/images/service-1.png" alt="Service icon">
                        </div>

                        <h3 class="h3 card-title">
                            <a href="#">Buy a home</a>
                        </h3>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatem magni sint corporis repellat.
                        </p>

                        <a href="#" class="card-link">
                            <span>Find A Home</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </li>

                <li>
                    <div class="service-card">
                        <div class="card-icon">
                            <img src="./assets/images/service-2.png" alt="Service icon">
                        </div>

                        <h3 class="h3 card-title">
                            <a href="#">Rent a home</a>
                        </h3>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatem magni sint corporis repellat.
                        </p>

                        <a href="#" class="card-link">
                            <span>Find A Home</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </li>

                <li>
                    <div class="service-card">
                        <div class="card-icon">
                            <img src="./assets/images/service-3.png" alt="Service icon">
                        </div>

                        <h3 class="h3 card-title">
                            <a href="#">Sell a home</a>
                        </h3>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatem magni sint corporis repellat.
                        </p>

                        <a href="#" class="card-link">
                            <span>Find A Home</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section  class="page-header">
        
        <h2>#Stayhome</h2>
        
        <p>Opening Doors to Your Next Chapter: Explore Our Listings Now!</p>
        
    </section>

    <section id="product1">
        <p class="section-subtitle">Featured Property</p>
        <h2 class="h2 section-title">For Rent</h2>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="./assets/images/property-1.jpg" alt="">
                <div class="des">
                    <span>2BHK</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$5999/Month</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="./assets/images/property-2.jpg" alt="">
                <div class="des">
                    <span>2BHK</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$5999/Month</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="./assets/images/property-4.png" alt="">
                <div class="des">
                    <span>2BHK</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$5999/Month</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="./assets/images/property-1.jpg" alt="">
                <div class="des">
                    <span>2BHK</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$5999/Month</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="./assets/images/property-2.jpg" alt="">
                <div class="des">
                    <span>2BHK</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$5999/Month</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="./assets/images/property-4.png" alt="">
                <div class="des">
                    <span>2BHK</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$5999/Month</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="./assets/images/property-1.jpg" alt="">
                <div class="des">
                    <span>2BHK</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$5999/Month</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="./assets/images/property-2.jpg" alt="">
                <div class="des">
                    <span>2BHK</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$5999/Month</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="pagination">
        <!-- <a href="#" class="btn">1</a>
        <a href="#" class="btn">2</a>
        <a href="#" class="btn"><i><ion-icon name="arrow-forward-outline"></ion-icon></i></a> -->
        <button class="btn">1</button>
        <button class="btn">2</button>
        <button class="btn"><i><ion-icon name="arrow-forward-outline"></ion-icon></i></button>
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
            <a href="blog.php">Privacy Policy</a>
            <a href="blog.php">Terms & Condition</a>
            <a href="contact.php">Contact Us</a>
            <a href="blog.php">FAQ</a>
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