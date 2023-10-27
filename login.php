<?php
@include 'config.php';
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'" ;

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';

    }else{

        if($pass != $cpass){
            $error[] = 'Password not matched!';            
        }else{
            $insert = "INSERT INTO user_form(username,email,password) VALUES('$username', '$email', '$pass')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    }
};


session_start();
if(isset($_POST['login'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>



        :root {
            /* colors */

            --dark-jungle-green: #071a1d;
            --prussian-blue: #0b2c3c;
            --raisin-black-1: #23182b;
            --raisin-black-2: #5f6686;
            --yellow-green: #76c520;
            --orange-soda: #ff5a3d;
            --cultured-1: #ededed;
            --cultured-2: #f2f6f7;
            --misty-rose: #f5dedb;
            --alice-blue: #f0f7ff;
            --seashell: #fff2f0;
            --cadet: #5d737e;
            --white: #fff;
            --black: #000;
            --opal: #8bb1b1;

            /* shadow */

            --shadow-1: 0 5px 20px 0 #182d541a;
            --shadow-2: 0 16px 32px #071a1d1a;
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        *,
        *::before,
        *::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body,
        input {
            font-family: "Poppins", sans-serif;
        }

        main {
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            background-color: #fff;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            position: relative;
            width: 100%;
            max-width: 1020px;
            height: 640px;
            background-color: #fff;
            border-radius: 3.3rem;
            box-shadow: var(--shadow-2)
        }

        .inner-box {
            position: absolute;
            width: calc(100% - 4.1rem);
            height: calc(100% - 4.1rem);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .forms-wrap {
            position: absolute;
            height: 100%;
            width: 45%;
            top: 0;
            left: 0;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            transition: 0.8s ease-in-out;
        }

        form {
            max-width: 260px;
            width: 100%;
            margin: 0 auto;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            grid-column: 1 / 2;
            grid-row: 1 / 2;
            transition: opacity 0.02s 0.4s;
        }

        form.sign-up-form {
            opacity: 0;
            pointer-events: none;
        }

        .logoo {
            display: flex;
            align-items: center;
        }

        .logoo img {
            width: 27px;
            margin-right: 0.3rem;
        }

        .logoo h4 {
            font-size: 1.1rem;
            margin-top: -9px;
            letter-spacing: -0.5px;
            color: #151111;
        }

        .heading h2 {
            font-size: 2.1rem;
            font-weight: 600;
            color: #151111;
        }

        .heading h6 {
            color: #bababa;
            font-weight: 400;
            font-size: 0.75rem;
            display: inline;
        }

        .toggle {
            color: #151111;
            text-decoration: none;
            font-size: 0.75rem;
            font-weight: 500;
            transition: 0.3s;
        }

        .toggle:hover {
            color: var(--orange-soda);
        }

        .input-wrap {
            position: relative;
            height: 37px;
            margin-bottom: 2rem;
        }

        .input-field {
            position: absolute;
            width: 100%;
            height: 100%;
            background: none;
            border: none;
            outline: none;
            border-bottom: 1px solid #bbb;
            padding: 0;
            font-size: 0.95rem;
            color: #151111;
            transition: 0.4s;
        }

        label {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.95rem;
            color: #bbb;
            pointer-events: none;
            transition: 0.4s;
        }

        .input-field.active {
            border-bottom-color: #151111;
        }

        .input-field.active + label {
            font-size: 0.75rem;
            top: -2px;
        }

        .sign-btn {
            display: inline-block;
            width: 100%;
            height: 43px;
            background-color: #151111;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 0.8rem;
            font-size: 0.8rem;
            margin-bottom: 2rem;
            transition: 0.3s;
        }

        .sign-btn:hover {
            background-color: var(--orange-soda);
        }

        .text {
            color: #bbb;
            font-size: 0.7rem;
        }

        .text a {
            color: #bbb;
            transition: 0.3s;
        }

        .text a:hover {
            color: var(--orange-soda);
        }

        main.sign-up-mode form.sign-in-form {
            opacity: 0;
            pointer-events: none;
        }

        main.sign-up-mode form.sign-up-form {
            opacity: 1;
            pointer-events: all;
        }

        main.sign-up-mode .forms-wrap {
            left: 55%;
        }

        main.sign-up-mode .carousel {
            left: 0%;
        }

        .carousel {
            position: absolute;
            height: 100%;
            width: 55%;
            left: 45%;
            top: 0;
            background-color: #fff;
            border-radius: 2rem;
            display: grid;
            grid-template-rows: auto 1fr;
            padding-bottom: 2rem;
            overflow: hidden;
            transition: 0.8s ease-in-out;
        }

        .images-wrapper {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
        }

        .image {
            width: 100%;
            grid-column: 1/2;
            grid-row: 1/2;
            opacity: 0;
            transition: opacity 0.3s, transform 0.5s;
        }

        .img-1 {
        transform: translate(0, -50px);
        }

        .img-2 {
        transform: scale(0.4, 0.5);
        }

        .img-3 {
        transform: scale(0.3) rotate(-20deg);
        }

        .image.show {
        opacity: 1;
        transform: none;
        }

        .text-slider {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        }

        .text-wrap {
        max-height: 2.2rem;
        overflow: hidden;
        margin-bottom: 2.5rem;
        }

        .text-group {
        display: flex;
        flex-direction: column;
        text-align: center;
        transform: translateY(0);
        transition: 0.5s;
        }

        .text-group h2 {
        line-height: 2.2rem;
        font-weight: 600;
        font-size: 1.6rem;
        }

        .bullets {
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .bullets span {
        display: block;
        width: 0.5rem;
        height: 0.5rem;
        background-color: #aaa;
        margin: 0 0.25rem;
        border-radius: 50%;
        cursor: pointer;
        transition: 0.3s;
        }

        .bullets span.active {
        width: 1.1rem;
        background-color: #151111;
        border-radius: 1rem;
        }

        @media (max-width: 850px) {
        .box {
            height: auto;
            max-width: 550px;
            overflow: hidden;
        }

        .inner-box {
            position: static;
            transform: none;
            width: revert;
            height: revert;
            padding: 2rem;
        }

        .forms-wrap {
            position: revert;
            width: 100%;
            height: auto;
        }

        form {
            max-width: revert;
            padding: 1.5rem 2.5rem 2rem;
            transition: transform 0.8s ease-in-out, opacity 0.45s linear;
        }

        .heading {
            margin: 2rem 0;
        }

        form.sign-up-form {
            transform: translateX(100%);
        }

        main.sign-up-mode form.sign-in-form {
            transform: translateX(-100%);
        }

        main.sign-up-mode form.sign-up-form {
            transform: translateX(0%);
        }

        .carousel {
            position: revert;
            height: auto;
            width: 100%;
            padding: 3rem 2rem;
            display: flex;
        }

        .images-wrapper {
            display: none;
        }

        .text-slider {
            width: 100%;
        }
        }

        @media (max-width: 530px) {
        main {
            padding: 1rem;
        }

        .box {
            border-radius: 2rem;
        }

        .inner-box {
            padding: 1rem;
        }

        .carousel {
            padding: 1.5rem 1rem;
            border-radius: 1.6rem;
        }

        .text-wrap {
            margin-bottom: 1rem;
        }

        .text-group h2 {
            font-size: 1.2rem;
        }

        form {
            padding: 1rem 2rem 1.5rem;
        }

        .error-mssg{
            margin: 10px 0;
            display: block;
            background: crimson;
            color: #fff;
            border-radius: 20px;
        }
    }
    </style>

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
    <main>
        <div class="box">
          <div class="inner-box">
            <div class="forms-wrap">
              <form action="login.php" autocomplete="off" class="sign-in-form">
                <div class="logoo">
                  <img src="./assets/images/" alt="Ghardekho" />
                  <h4>Ghardekho</h4>
                </div>
  
                <div class="heading">
                  <h2>Welcome Back</h2>
                  <h6>Not registred yet?</h6>

                  <a href="#" class="toggle">Sign up</a>
                </div>
    

                  <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-mssg">'.$error.'</span> ';
                        };
                    };
                ?>
                <div class="actual-form">
                  <div class="input-wrap">
                    <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                    <label>Username</label>
                  </div>
  
                  <div class="input-wrap">
                    <input type="password" minlength="4" class="input-field" autocomplete="off" required />
                    <label>Password</label>
                  </div>
  
                  <input name="login" type="submit" value="Sign In" class="sign-btn" />
  
                  <p class="text">
                    Forgotten your password or you login datails?
                    <a href="blog.php">Get help</a> signing in
                  </p>
                </div>
              </form>
  
              <form action="index.php" method="post" autocomplete="off" class="sign-up-form">
                <div class="logoo">
                  <img src="./assets/images/" alt="Ghardekho" />
                  <h4>Ghardekho</h4>
                </div>
  
                <div class="heading">
                  <h2>Get Started</h2>
                  <h6>Already have an account?</h6>
                  <a href="#" class="toggle">Sign in</a>
                </div>
  

                <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-mssg">'.$error.'</span> ';
                        };
                    };
                ?>
                <div class="actual-form">
                  <div class="input-wrap">
                    <input name="username" type="text" minlength="4" class="input-field" autocomplete="off" required />
                    <label>Username</label>
                  </div>
  
                  <div class="input-wrap">
                    <input name="email" type="email" minlength="4" class="input-field" autocomplete="off" required />
                    <label>Email</label>
                  </div>
  
                  <div class="input-wrap">
                    <input name="password" type="password" minlength="8" class="input-field" autocomplete="off" required />
                    <label>Password</label>
                  </div>

                  <div class="input-wrap">
                    <input name="cpassword" type="password" minlength="8" class="input-field" autocomplete="off" required />
                    <label>Confirm Password</label>
                  </div>
  
                  <input name="submit" type="submit" value="Sign Up" class="sign-btn" />
  
                  <p class="text">
                    By signing up, I agree to the
                    <a href="#">Terms of Services</a> and
                    <a href="#">Privacy Policy</a>
                  </p>
                </div>
              </form>
            </div>
  
            <div class="carousel">
              <div class="images-wrapper">
                <img src="./assets/images/property-1.jpg" class="image img-1 show" alt="" />
                <img src="./assets/images/property-2.jpg" class="image img-2" alt="" />
                <img src="./assets/images/property-4.png" class="image img-3" alt="" />
              </div>
  
              <div class="text-slider">
                <div class="text-wrap">
                  <div class="text-group">
                    <h2>Find Your Dream Home Today.</h2>
                    <h2>Unlock Your Home's Potential</h2>
                    <h2>Your Ideal Home Awaits You</h2>
                  </div>
                </div>
  
                <div class="bullets">
                  <span class="active" data-value="1"></span>
                  <span data-value="2"></span>
                  <span data-value="3"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>


    <!-- custom js line -->
    <script>
        const inputs = document.querySelectorAll(".input-field");
        const toggle_btn = document.querySelectorAll(".toggle");
        const main = document.querySelector("main");
        const bullets = document.querySelectorAll(".bullets span");
        const images = document.querySelectorAll(".image");

        inputs.forEach((inp) => {
        inp.addEventListener("focus", () => {
            inp.classList.add("active");
        });
        inp.addEventListener("blur", () => {
            if (inp.value != "") return;
            inp.classList.remove("active");
        });
        });

        toggle_btn.forEach((btn) => {
        btn.addEventListener("click", () => {
            main.classList.toggle("sign-up-mode");
        });
        });

        function moveSlider() {
        let index = this.dataset.value;

        let currentImage = document.querySelector(`.img-${index}`);
        images.forEach((img) => img.classList.remove("show"));
        currentImage.classList.add("show");

        const textSlider = document.querySelector(".text-group");
        textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

        bullets.forEach((bull) => bull.classList.remove("active"));
        this.classList.add("active");
        }

        bullets.forEach((bullet) => {
        bullet.addEventListener("click", moveSlider);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="+K7"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="htpps://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- fontawesome link -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</body>
</html>