<!--loginn--> 
<?php
session_start();

//if (isset($_SESSION['user'])) {
  //header('Location: ../admin/index.php');
  //die();;
//}

$user = '';
$pass = '';
$error = '';



$conn = new mysqli('localhost', 'root', '', 'finalweb'); //servername, username, password, database's name
if ($conn->connect_error) {
  die("Connection Failed : " . $conn->connect_error);
} 
else {
  if (isset($_POST['user']) && isset($_POST['pass'])) { // kiem tra xem bien co ton tai hay hong
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user === 'admin' && $pass === '1230') {
      $_SESSION['user'] = 'admin';
      header('Location: ../admin/index.php');
    } else {
      $stmt = $conn->prepare("SELECT * FROM login WHERE userName = ? AND loginpassword = ?"); // so sanh bien nhap vao voi database
      $stmt->bind_param("ss", $user, $pass);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows <= 0) {
        $error = 'Invalid username or password';
      } else if ($result->num_rows > 0) {
        $_SESSION['user'] = $user;
        header('Location: ../frontend/index.php');
      }
      $stmt->close();
      $conn->close();
    }
  }

  if (isset($_POST['sbm'])) {
    print_r($_POST);
    // Process form data
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["loginpassword"];

    $sql = "INSERT INTO login (userName, email, loginpassword)
    VALUES ('$userName', '$email', '$password')";
    $query = mysqli_query($conn, $sql);
    echo 'success';
    
    // Here you would typically validate the form data and save it to a database
    
    // Redirect user to another page after successful registration
    //header("Location: index.php");
    //exit();
  }
  else {
    echo 'failed';
  }

}

//require_once '../admin/connectData.php';
  


   // require_once '../admin/connectData.php';
    
    //if(isset($_POST['sbm'])) {
      //  $userName = $_POST['userName'];
      //  $userEmail = $_POST['email'];
        //$userPassword = $_POST['loginpassword'];
        

        //$sql = "INSERT INTO login (userName, email, loginpassword)
        //VALUES ('$userName', '$userEmail', '$userPassword')";
        //$query = mysqli_query($conn, $sql);
        //header('location: index.php');
    //}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up</title>
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
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="img/icon.png" alt="easyclass" />
                <h4 style="font-size: 40px ;">REIS</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    name="user"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="pass"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" name="signin" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <!--sign in-->

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="img/icon.png" alt="easyclass" />
                <h4 style="font-size: 40px ;">REIS</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle"><input type="submit" name="signin" value="Sign in"></a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    name="userName"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    name="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="loginpassword"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <button name="sbm" class="sign-btn" type="submit">Sign up</button>

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
