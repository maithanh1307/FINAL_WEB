<?php

    
    session_start();
        if (isset($_SESSION['user'])){
            header('Location: index.php');
            die();
        }
    $user= '';
    $pass='';
    $error='';  //no error

    if (isset($_POST['user']) && isset ($_POST['pass'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        if(empty($user)){
            $error='Please enter your user name';

        }else if(empty($pass)){
            $error='Please enter your password';
        }else if(strlen($pass)<3){
            $error='Password must have at laest 4 characters';
        }else if($user !== 'admin' || $pass !=='4567'){
            $error= 'Invalid username or password';
        }else{
            //login success
            $_SESSION['user']=$user;
            header('location: index.php');
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reis-Explore the World</title>
    <link rel="stylesheet" href="css/register_style.css" />

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- link icon -->
    <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"

      href="/css/app-wa-8d95b745961f6b33ab3aa1b98a45291a.css?vsn=d"
    >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css"
      >
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="register.html" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="img/icon.png" alt="easyclass" />
                <h4 style="font-size: 40px ;">REIS</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="signup.html" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    value="<?= $user?>" 
                    name="user" 
                    id="username"
                    placeholder="Username"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    value="<?= $pass?>" 
                    name="pass" 
                    id="password"
                    type="password"
                    placeholder="Password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            
        </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="img_register/plane2.png" class="image img-1 show" alt="" />
              <img src="img_register/plane8.png" class="image img-2" alt="" />
              <img src="img_register/plane7.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Discover your next adventure</h2>
                  <h2>Book your flights effortlessly</h2>
                  <h2>Find your perfect stay with ease</h2>
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

    <!-- Javascript file -->

    <script src="js/app.js"></script>
  </body>
</html>