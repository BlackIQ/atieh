<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Atieh - Index</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="vendor/css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><span>Atieh </span>Institute</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                
                <h3 style="color: white"> </h3>
                
                <?php
                if ($_SESSION['status'] == true) {
                    if ($_SESSION["person"] == "teacher") {
                        ?>
                <li class="nav-item">
                    <a class="nav-link" href="people/teacher/"><i class="fa fa-sign-in"></i> Teacher Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login/"><i class="fa fa-sign-in"></i> Sign out</a>
                </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "student") {
                        ?>
                <li class="nav-item">
                    <a class="nav-link" href="people/student"><i class="fa fa-sign-in"></i> Student Panel</a
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login/"><i class="fa fa-sign-in"></i> Sign out</a>
                </li>
                        <?php
                    }
                }
                else {
                    ?>
                <li class="nav-item">
                    <a class="nav-link" href="login/"><i class="fa fa-sign-in"></i> Login</a>
                </li>
                    <?php
                }
                ?>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Order By
          <small>New to Old</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <!--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">-->
          <div class="card-body">
            <h2 class="card-title">Final news</h2>
            <p class="card-text">Final is next weed at Saturday</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Agents</a>
          </div>
        </div>
        
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/TaicKGcS88HAJ9eHtx6JwH-480-80.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Mac Book Air</h2>
            <p class="card-text">My new mac book ! that is by my dear girl friend !</p>
            <p class="card-text">Thanks Girl !</p>
            <a href="#" class="btn btn-primary">Read More <i class="fa fa-arrow-right"></i></a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Amir</a>
          </div>
        </div>

        <!-- Pagination -->
<!--        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>-->

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go !</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">ITTI</a>
                  </li>
                  <li>
                    <a href="#">TESOL</a>
                  </li>
                  <li>
                    <a href="#">TTC</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">AEF</a>
                  </li>
                  <li>
                    <a href="#">FCE</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
              <p>Today is ,</p>
              <b>
                  <?php echo date("D"); ?>
                  <br>
                  <?php echo date("Y / m / d"); ?>
              </b>
              <hr>
              <p>Your IP</p>
              <b><?php echo $_SERVER['REMOTE_ADDR']; ?></b>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <div class="m-0 text-center text-white">
        <p class="text-white">Designed by <a href="https://www.github.com/BlackIQ">Amirhossein Mohammadi</a> <i class="fa fa-heart color-red"></i></p>
        <p class="text-white">Everything Belongs To <a href="https://www.github.com/BlackIQ">Atieh</a> <i class="fa fa-copyright"></i> 2021</p>
        <p>
            <i class="fa fa-telegram text-primary"></i>
            <i class="fa fa-instagram text-danger"></i>
            <i class="fa fa-twitter text-primary"></i>
            <i class="fa fa-facebook text-info"></i>
        </p>
    </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
