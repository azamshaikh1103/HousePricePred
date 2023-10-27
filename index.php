<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghar Dekho - Find your dream house</title>

    <link rel="stylesheet" href="./assets/css/style.css"> <!-- custom css line -->

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
                <a href="#" class="logo">
                    <img src="./assets/images/logo.jpg" alt="Ghardekho logo">
                </a>
                <nav class="navbar" data-navbar>
                    <div class="navbar-top">
                        <a href="#" class="logo">
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

    <main>
        <article>

            <!-- HERO -->
            <section class="hero" id="home">
                <div class="container">

                    <div class="hero-content">
                        <p class="hero-subtitle">
                            <ion-icon name="home"></ion-icon>
                            <span>Real Estate Agency</span>
                        </p>
                        <h2 class="h1 hero-title">Find Your Dream Home By Us</h2>
                        <p class="hero-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error minima quidem suscipit vel accusamus.
                        </p>

                        <form action="./index.php" method="post" class="enquiry-bar">
                            <label class="enquiry-item">
                                <span>Want to</span>
    
                                <select name="want-to" class="enqiyry-item-field">
                                    <option value="buy" selected>Buy</option>
                                    <option value="sell">Sell</option>
                                    <option value="rent">Rent</option>
                                </select>
    
                                <ion-icon class="symbols-rounded" name="home-outline"></ion-icon>
                            </label>
    
                            <label class="enquiry-item">
                                <span>Property type</span>
    
                                <select name="want-to" class="enqiyry-item-field">
                                    <option value="any" selected>Any</option>
                                    <option value="houses">Houses</option>
                                    <option value="apartments">Apartments</option>
                                    <option value="villa">Villa</option>
                                    <option value="townhome">Townhome</option>
                                    <option value="bungalow">Bungalow</option>
                                    <option value="penthouse">Penthouse</option>
                                </select>
    
                                <ion-icon class="symbols-rounded" name="card-outline"></ion-icon>
                            </label>
    
                            <label class="enquiry-item">
                                <span>Location</span>
    
                                <input type="text" name="location" placeholder="Street, City, Zip..." class="enqiury-item-field">
    
                                <ion-icon class="symbols-rounded" name="location-outline"></ion-icon>
                            </label>
                            <li class="btn" onclick="window.location.href='contact.php';">Make An Enquiry</li>
                            <!-- <button class="btn" onclick="window.location.href='contact.php';">Make An Enquiry</button> -->
                        </form>
                    </div>

                    <figure class="hero-banner">
                        <img src="./assets/images/hero-banners.png" alt="Modern house model" class="w-100">
                    </figure>
                </div>
            </section>

            <!-- EDGE -->
            <!-- <section class="edge">
                <div class="container">
                    <p class="section-subtitle">House Edge</p>
                    <h2 class="h2 section-title"></h2>
                    <button class="btn">Explore All</button>

                    <ul class="edge-list has-scrollbar">
                        <li>
                            <div class="fe-box">
                                <img src="./assets/images/edge1.sv" alt="">
                                <h6>Home Loans</h6>
                            </div>
                        </li>

                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>Online Review</h6>
                            </div>
                        </li>

                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>Pay on Credit</h6>
                            </div>
                        </li>

                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>Happy Sell</h6>
                            </div>
                        </li>
                        
                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>Save Money</h6>
                            </div>
                        </li>

                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>F24/7 Support</h6>
                            </div>
                        </li>

                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>F24/7 Support</h6>
                            </div>
                        </li>

                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>F24/7 Support</h6>
                            </div>
                        </li>

                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>F24/7 Support</h6>
                            </div>
                        </li>

                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>F24/7 Support</h6>
                            </div>
                        </li>
                        
                        <li>
                            <div class="fe-box">
                                <img src="img/features/f1.png" alt="">
                                <h6>F24/7 Support</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>  -->

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

            <!-- <section id="about-head">
                <img src="./assets/images/property-1.jpg" alt="">
                <div>
                    <h2>We Specialize in Quality Home Renovations</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, saepe inventore sit consequatur ut delectus sequi ipsum, esse velit expedita voluptatum. Fuga voluptate accusamus deleniti dolor atque!</p>
                </div>
            </section> -->

            <!-- <section id="about-head-1">
                <img src="./assets/images/property-2.jpg" width="70%" alt="">
                <div>
                    <h2>We Specialize in Quality Home Renovations</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, saepe inventore sit consequatur ut delectus sequi ipsum, esse velit expedita voluptatum. Fuga voluptate accusamus deleniti dolor atque!</p>
                </div>
            </section> -->

            <!-- PROPERTY -->
            <section class="property" id="property">
                <div class="container">
                    <p class="section-subtitle">Properties</p>
                    <h2 class="h2 section-title">Featured Listings</h2>
                    <ul class="property-list has-scrollbar">

                        <li onclick="window.location.href='sproduct.php';">
                            <div class="property-card">
            
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="./assets/images/property-1.jpg" alt="New Apartment Nice View" class="w-100">
                                    </a>
            
                                    <div class="card-badge green">For Rent</div>
            
                                    <div class="banner-actions">
                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address>Lorem ipsum dolor sit.</address>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>Lorem ipsum dolor sit.</span>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>
            
                                <div class="card-content">
                                    <div class="card-price">
                                        <strong>545894</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">New Apartment Nice View</a>
                                    </h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque tenetur nulla aut!
                                    </p>
                                    <ul class="card-list">
            
                                        <li class="card-item">
                                            <strong>3</strong>
                                            <ion-icon name="bed-outline"></ion-icon>
                                            <span>Bedroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>2</strong>
                                            <ion-icon name="man-outline"></ion-icon>
                                            <span>Bathroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>3450</strong>
                                            <ion-icon name="square-outline"></ion-icon>
                                            <span>Square Fit</span>
                                        </li>
                                    </ul>
                                </div>
            
                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="./assets/images/author.jpg" alt="Gupta G" class="w-100">
                                        </figure>
            
                                        <div>
                                            <p class="author-name">Gupta G</p>
                                            <p class="author-title">Estate Agent</p>
                                        </div>
                                    </div>
            
                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
            
                        <li onclick="window.location.href='sproduct.php';">
                            <div class="property-card">
            
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="./assets/images/property-2.jpg" alt="New Apartment Nice View" class="w-100">
                                    </a>
            
                                    <div class="card-badge orange">For Sale</div>
            
                                    <div class="banner-actions">
                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address>Lorem ipsum dolor sit.</address>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>Lorem ipsum dolor sit.</span>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>
            
                                <div class="card-content">
                                    <div class="card-price">
                                        <strong>545894</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">New Apartment Nice View</a>
                                    </h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque tenetur nulla aut!
                                    </p>
                                    <ul class="card-list">
            
                                        <li class="card-item">
                                            <strong>3</strong>
                                            <ion-icon name="bed-outline"></ion-icon>
                                            <span>Bedroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>2</strong>
                                            <ion-icon name="man-outline"></ion-icon>
                                            <span>Bathroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>3450</strong>
                                            <ion-icon name="square-outline"></ion-icon>
                                            <span>Square Fit</span>
                                        </li>
                                    </ul>
                                </div>
            
                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="./assets/images/author.jpg" alt="Gupta G" class="w-100">
                                        </figure>
            
                                        <div>
                                            <p class="author-name">Gupta G</p>
                                            <p class="author-title">Estate Agent</p>
                                        </div>
                                    </div>
            
                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
            
                        <li onclick="window.location.href='sproduct.php';">
                            <div class="property-card">
            
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="./assets/images/property-4.png" alt="New Apartment Nice View" class="w-100">
                                    </a>
            
                                    <div class="card-badge green">For Rent</div>
            
                                    <div class="banner-actions">
                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address>Lorem ipsum dolor sit.</address>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>Lorem ipsum dolor sit.</span>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>
            
                                <div class="card-content">
                                    <div class="card-price">
                                        <strong>545894</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">New Apartment Nice View</a>
                                    </h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque tenetur nulla aut!
                                    </p>
                                    <ul class="card-list">
            
                                        <li class="card-item">
                                            <strong>3</strong>
                                            <ion-icon name="bed-outline"></ion-icon>
                                            <span>Bedroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>2</strong>
                                            <ion-icon name="man-outline"></ion-icon>
                                            <span>Bathroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>3450</strong>
                                            <ion-icon name="square-outline"></ion-icon>
                                            <span>Square Fit</span>
                                        </li>
                                    </ul>
                                </div>
            
                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="./assets/images/author.jpg" alt="Gupta G" class="w-100">
                                        </figure>
            
                                        <div>
                                            <p class="author-name">Gupta G</p>
                                            <p class="author-title">Estate Agent</p>
                                        </div>
                                    </div>
            
                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
            
                        <li onclick="window.location.href='sproduct.php';">
                            <div class="property-card">
            
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="./assets/images/property-1.jpg" alt="New Apartment Nice View" class="w-100">
                                    </a>
            
                                    <div class="card-badge green">For Rent</div>
            
                                    <div class="banner-actions">
                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address>Lorem ipsum dolor sit.</address>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>Lorem ipsum dolor sit.</span>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>
            
                                <div class="card-content">
                                    <div class="card-price">
                                        <strong>545894</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">New Apartment Nice View</a>
                                    </h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque tenetur nulla aut!
                                    </p>
                                    <ul class="card-list">
            
                                        <li class="card-item">
                                            <strong>3</strong>
                                            <ion-icon name="bed-outline"></ion-icon>
                                            <span>Bedroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>2</strong>
                                            <ion-icon name="man-outline"></ion-icon>
                                            <span>Bathroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>3450</strong>
                                            <ion-icon name="square-outline"></ion-icon>
                                            <span>Square Fit</span>
                                        </li>
                                    </ul>
                                </div>
            
                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="./assets/images/author.jpg" alt="Gupta G" class="w-100">
                                        </figure>
            
                                        <div>
                                            <p class="author-name">Gupta G</p>
                                            <p class="author-title">Estate Agent</p>
                                        </div>
                                    </div>
            
                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
            
                        <li onclick="window.location.href='sproduct.php';">
                            <div class="property-card">
            
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="./assets/images/property-1.jpg" alt="New Apartment Nice View" class="w-100">
                                    </a>
            
                                    <div class="card-badge orange">For Sale</div>
            
                                    <div class="banner-actions">
                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address>Lorem ipsum dolor sit.</address>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>Lorem ipsum dolor sit.</span>
                                        </button>
            
                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>
            
                                <div class="card-content">
                                    <div class="card-price">
                                        <strong>545894</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">New Apartment Nice View</a>
                                    </h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque tenetur nulla aut!
                                    </p>
                                    <ul class="card-list">
            
                                        <li class="card-item">
                                            <strong>3</strong>
                                            <ion-icon name="bed-outline"></ion-icon>
                                            <span>Bedroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>2</strong>
                                            <ion-icon name="man-outline"></ion-icon>
                                            <span>Bathroom</span>
                                        </li>
            
                                        <li class="card-item">
                                            <strong>3450</strong>
                                            <ion-icon name="square-outline"></ion-icon>
                                            <span>Square Fit</span>
                                        </li>
                                    </ul>
                                </div>
            
                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="./assets/images/author.jpg" alt="Gupta G" class="w-100">
                                        </figure>
            
                                        <div>
                                            <p class="author-name">Gupta G</p>
                                            <p class="author-title">Estate Agent</p>
                                        </div>
                                    </div>
            
                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
            
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
            
                    </ul>
                </div>
            </section>



            <!-- FEATURES -->
            <section class="features">
                <div class="container">

                    <p class="section-subtitle">Our Aminities</p>

                    <h2 class="h2 section-title">Building Aminities</h2>

                    <ul class="features-list">

                        <li>
                            <a href="#" class="features-card">
                                <div class="card-icon">
                                    <ion-icon name="car-sport-outline"></ion-icon>
                                </div>
                                <h3 class="card-title">Parking Space</h3>
                                <div class="card-btn">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="features-card">
                                <div class="card-icon">
                                    <ion-icon name="water-outline"></ion-icon>
                                </div>
                                <h3 class="card-title">Swimming Pool</h3>
                                <div class="card-btn">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="features-card">
                                <div class="card-icon">
                                    <ion-icon name="shield-checkmark-outline"></ion-icon>
                                </div>
                                <h3 class="card-title">Private Security</h3>
                                <div class="card-btn">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="features-card">
                                <div class="card-icon">
                                    <ion-icon name="library-outline"></ion-icon>
                                </div>
                                <h3 class="card-title">Library Area</h3>
                                <div class="card-btn">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="features-card">
                                <div class="card-icon">
                                    <ion-icon name="fitness-outline"></ion-icon>
                                </div>
                                <h3 class="card-title">Medical Center</h3>
                                <div class="card-btn">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="features-card">
                                <div class="card-icon">
                                    <ion-icon name="bed-outline"></ion-icon>
                                </div>
                                <h3 class="card-title">King Size Beds</h3>
                                <div class="card-btn">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="features-card">
                                <div class="card-icon">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <h3 class="card-title">Smart Homes</h3>
                                <div class="card-btn">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="features-card">
                                <div class="card-icon">
                                    <ion-icon name="football-outline"></ion-icon>
                                </div>
                                <h3 class="card-title">Kid's Playland</h3>
                                <div class="card-btn">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </section>

            <!-- CTA -->
            <section class="cta">
                <div class="container">
                    <div class="cta-card">
                        <div class="card-content">
                            <h2 class="h2 card-title">Looking for a dream home?</h2>
                            <p class="card-text">We can help you realize your dream of a new home</p>
                        </div>
                        <button class="btn cta-btn">
                            <span>Explore Properties</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </section>

            <!-- NEWSLETTER -->
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

        </article>
    </main>


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