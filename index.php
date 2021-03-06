<?php

session_start();

$server = "localhost";
$user = "milad";
$passwd = "milad";
$db = "Atieh";

$conn = mysqli_connect($server, $user, $passwd, $db);

$getip = "SELECT * FROM development";
$res = mysqli_query($conn, $getip);

while ($row = mysqli_fetch_assoc($res)) {
    $ip = $row['ip'];
}

$sql = "SELECT * FROM post ORDER BY id DESC;";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Atieh - Index</title>

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  
  <link href="http://192.168.1.5/Atieh/people/pack/css/font-awesome.min.css" rel="stylesheet">

  
  <!-- Bootstrap core CSS -->

  <!-- Custom styles for this template -->  
  <style>
    body {
        padding-top: 56px;
    }
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="."><span>Atieh </span>Project</a>
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
                            <a class="nav-link" href="people/teacher/"><i class="fa fa-dashboard"></i> Teacher Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="http://<?php echo $ip; ?>/Atieh/people/teacher/user/logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "student") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/student"><i class="fa fa-dashboard"></i> Student Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://<?php echo $ip; ?>/Atieh/people/student/user/logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "agent") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/agent/"><i class="fa fa-dashboard"></i> Agent Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://<?php echo $ip; ?>/Atieh/people/agent/user/logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
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
          
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $row["title"]; ?></h2>
                        <p class="card-text"><?php echo $row["txt"]; ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        <?php echo $row["dt"]." By ".$row["who"]; ?>
                    </div>
                </div>
                <?php
            }
        }

        ?>
        
        <!-- Blog Post -->
<!--        <div class="card mb-4">
          <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/TaicKGcS88HAJ9eHtx6JwH-480-80.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Mac Book Air</h2>
            <p class="card-text">My new mac book !!</p>
            <p class="card-text">Thanks !</p>
            <a href="#" class="btn btn-primary">Read More <i class="fa fa-arrow-right"></i></a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Amir</a>
          </div>
        </div>-->

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
        <div class="row">
            <div class="col-md-4">
                <div class="m-0 text-left text-white">
                    <p class="text-primary"><b>Atieh Project</b></p>
                    <p class="text-white">Created by <a href="https://www.github.com/BlackIQ">Amirhossein Mohammadi</a></p>
                    <p class="text-white">Powered By <a href="https://www.linkedin.com/company/neotrinost">Neotrinost</a> <i class="fa fa-copyright"></i> <?php echo date("Y"); ?></p>
                    <p>
                        <i class="fa fa-telegram text-primary"></i>
                        <i class="fa fa-instagram text-danger"></i>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="m-0 text-left text-white">
                    <p class="text-white"><a href="https://www.github.com/BlackIQ">Amirhossein Mohammadi</a></p>
                    <p class="text-white">Young programmer</p>
                    <p class="text-white">CEO and Founder of <a href="https://www.linkedin.com/company/neotrinost">Neotrinost</a></p>
                    <p>
                        <i class="fa fa-github text-muted"></i>
                        <i class="fa fa-telegram text-primary"></i>
                        <i class="fa fa-instagram text-danger"></i>
                        <i class="fa fa-twitter text-primary"></i>
                        <i class="fa fa-facebook text-info"></i>
                        <i class="fa fa-medium text-info"></i>
                        <i class="fa fa-linkedin text-info"></i>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="m-0 text-left text-white">
                    <p class="text-white"><a href="https://www.linkedin.com/company/neotrinost">Neotrinost</a></p>
                    <p class="text-white">Neotrinost is a development company <b>( Team )</b></p>
                    <p>
                        <i class="fa fa-linkedin text-info"></i>
                        <i class="fa fa-github text-muted"></i>
                        <i class="fa fa-telegram text-primary"></i>
                        <i class="fa fa-instagram text-danger"></i>
                        <i class="fa fa-twitter text-primary"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
