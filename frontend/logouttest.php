<?php
  session_start();
  unset($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reis - Explore the World</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-color: #f7e9e9;
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .card {
        max-width: 800px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #EED3D9;
        border-radius: 15px;
      }

      .card h4 {
        font-size: 24px;
        margin-bottom: 15px;
        color: #f10d5b;
      }

      .card p {
        margin-bottom: 15px;
        color: #000;
      }

      .card span#counter {
        font-size: 32px;
        font-weight: bold;
        color: #dc3545;
      }

      .card a {
        text-decoration: none;
        color: #f10d5b;
      }

      .card button {
        width: 100%;
        background-color: #F4538A;
        border-color: #F4538A;
        color:#000;
      }
      .card button:hover {
        background-color: #f10d5b;
        border-color: #f10d5b;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h4>Logout Successful</h4>
        <p>Your account has been successfully logged out of the system.</p>
        <p>
          Click <a href="login.php">here</a> to return to the login page, or the
          website will automatically redirect in
          <span id="counter" class="text-danger">10</span> seconds.
        </p>
        <button class="btn btn-success px-5">Sign In</button>
      </div>
    </div>
    <script>
      window.addEventListener('load', startTheCountdown);

      function startTheCountdown() {
        let countdown = 10;
        let counter = document.getElementById('counter');
        let id = setInterval(() => {
          countdown--;
          counter.innerHTML = countdown.toString();
          if (countdown == 0) {
            clearInterval(id);
            window.location.href='../frontend/register.php'
          }
        }, 1000);
      }
    </script>
  </body>
</html>