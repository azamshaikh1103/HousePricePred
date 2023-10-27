<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css">
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
                            <li><a href="service.php" class="navbar-link" data-nav-link>Service</a></li>
                            <li><a href="#" class="navbar-link" data-nav-link>Property</a></li>
                            <li><a href="blog.php" class="navbar-link" data-nav-link>Blog</a></li>
                            <li><a class="active" href="contact.php" class="navbar-link" data-nav-link>Contact</a></li>
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
    
    <section class="page-header" class="about-header">
        
        <h2>#let's_talk</h2>
        
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
        
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span><br>
            <h2>Visit one of our agency locations or contact us today</h2><br>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Lorem ipsum dolor sit amet.</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>contact@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>9584736589</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Mon to Sat: 9.00am to 16.pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.34628853968!2d72.9090081753368!3d19.048506482150444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c5f39a7d77d1%3A0x9ebbdeaea9ec24ae!2sShah%20%26%20Anchor%20Kutchhi%20Engineering%20College!5e0!3m2!1sen!2sin!4v1690116896911!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

    <section id="form-details" class="section-p1">
        <form method="POST" action="">
            <span>LEAVE A MESSAGE</span><br>
            <h2>We love to hear from you</h2><br>
            <input name="name" id="name" type="text" placeholder="Your Name">
            <input name="email" id="email" type="text" placeholder="E-mail">
            <input name="subject" id="subject" type="text" placeholder="Subject">
            <textarea name="yrmsg" id="yrmsg" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="button" class="btn" onclick="Send()" value="Submit">
        </form>

        <div class="people">
            <div>
                <img src="img/shirt.jpg" alt="">
                <p><span>Lorem, ipsum.</span>Lorem ipsum dolor, sit amet consectetur <br> elit. Odio, iusto?</p>
            </div>
            <div>
                <img src="img/tshirt.jpg" alt="">
                <p><span>Lorem, ipsum.</span>Lorem ipsum dolor, sit amet consectetur <br> elit. Odio, iusto?</p>
            </div>
            <div>
                <img src="img/shirt.jpg" alt="">
                <p><span>Lorem, ipsum.</span>Lorem ipsum dolor, sit amet consectetur <br> elit. Odio, iusto?</p>
            </div>
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
            <a href="blog.php">Privacy Policy</a>
            <a href="blog.php">Terms & Condition</a>
            <a href="contact.php">Contact Us</a>
            <a href="blog.php">FAQ</a>
        </div>

        <div class="col">
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



    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        
        function Send(){
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var yrmsg = document.getElementById("yrmsg").value;

            var body = "Thanks for contacting us! <br/> We'll reach you out within 24 hours <br/><br/><br/> Your Details are : <br/> Name :"+ name + "<br/> Email :" + email + "<br/> Message :" + yrmsg;

            console.log(body)

            Email.send({
                Host : "smtp.elasticemail.com",
                Username : "sazamx100@gmail.com",
                Password : "8F6FEAA99C81E4FAEFF9F0FD439089961D17",
                To : 'sazamx120@gmail.com',
                From : "sazamx100@gmail.com",
                Subject : subject,
                Body : body
            }).then(
                message =>{
                    if(message=='OK'){
                        swal("Successful", "We have received your message", "success");
                    }
                    else{
                        swal("Something Wrong", "We didn't receive your data", "error");
                    }
                }
            );
        }
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>






    <script src="./assets/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="+K7"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="htpps://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>