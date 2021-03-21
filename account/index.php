<?php

include("data.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Narbon - Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
              <img src="assets/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <a href="http://<?php echo $ip; ?>/Narbon"><img src="assets/images/logo.svg" alt="logo" class="logo"></a>
              </div>
              <p class="login-card-description">Sign into your account</p>
                <?php
                    if ($_SESSION["error"] == "404") {
                        echo "<h4 class='text-danger'><b>> User not found !</b></h4>";
                    }
                    elseif ($_SESSION["error"] == "500") {
                        echo "<h4 class='text-danger'><b>> Fill them all !</b></h4>";
                    }
                ?>
              <br>
              <form action="login.php" method="post">
                  <div class="form-group">
                    <label for="code" class="sr-only">Code</label>
                    <input type="text" name="code" id="code" class="form-control" placeholder="User Code">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="User Password">
                  </div>
                  <div class="radio-inline">
                      <label>
                          <input type="radio" name="person" value="student"> Student
                      </label>
                      <label>
                          <input type="radio" name="person" value="teacher"> Teacher
                      </label>
                      <label>
                          <input type="radio" name="person" value="agent"> Agent
                      </label>
                      <label>
                          <input type="radio" name="person" value="admin"> Admin
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="remember" type="checkbox" id="remember">
                      <label class="form-check-label" for="remember">
                        Remember Me
                      </label>
                    </div>
                  <br>
                  <button name="login" id="login" class="btn btn-block login-btn mb-4" type="submit">Login</button>
                </form>
              <br>
                <a href="#" class="forgot-password-link">Forgot password ?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>