<?php

session_start();

$server = "localhost";
$user = "narbon";
$passwd = "narbon";
$db = "narbonn";

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

  <title>Narbon - Index</title>

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link href="http://<?php echo $ip; ?>/Narbon/people/pack/css/font-awesome.min.css" rel="stylesheet">

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
        <a class="navbar-brand" href="."><span>Narbon </span>Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-home"></i> Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                
                <h3 style="color: white"> </h3>
                
                <?php
                if ($_SESSION['status'] == true) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#report"><i class="fa fa-bug"></i> Report a Bug</a>
                    </li>
                    <?php
                    if ($_SESSION["person"] == "teacher") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/teacher/"><i class="fa fa-dashboard"></i> Teacher Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="http://<?php echo $ip; ?>/Narbon/account/logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "student") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/student"><i class="fa fa-dashboard"></i> Student Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://<?php echo $ip; ?>/Narbon/account/logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "agent") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/agent/"><i class="fa fa-dashboard"></i> Agent Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://<?php echo $ip; ?>/Narbon/account/logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "admin") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/admin/"><i class="fa fa-dashboard"></i> Admin Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://<?php echo $ip; ?>/Narbon/account/logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "parent") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/parent/"><i class="fa fa-dashboard"></i> Parent Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://<?php echo $ip; ?>/Narbon/account/logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                }
                else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="account/"><i class="fa fa-sign-in"></i> Login</a>
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
          
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://admission.buddy4study.com/study-abroad/wp-content/uploads/2019/09/MIT-Scholarships.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MIT</h5>
                    <p>MIT University</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://collegelearners.com/wp-content/uploads/2020/03/fff.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Oxford</h5>
                    <p>University of Oxford</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.scholarshipcare.com/wp-content/uploads/2019/01/Harvard-University-.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Harvard</h5>
                    <p>Harvard University</p>
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>
          
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $row["title"]; ?></h2>
                        <hr>
                        <p class="card-text"><?php echo $row["txt"]; ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        <?php echo "Posted on " . $row["dt"]." By ".$row["who"]; ?>
                    </div>
                </div>
                <?php
            }
        }

        ?>
       </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for . . .">
              <span class="input-group-append">
                  <button class="btn btn-secondary" type="button">Search <i class="fa fa-search"></i></button>
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
                    <p class="text-primary"><b>Narbon Project</b></p>
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
                    <p class="text-white"><b><a href="https://www.github.com/BlackIQ">Amirhossein Mohammadi</a></b></p>
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
                    <p class="text-white"><b><a href="https://www.linkedin.com/company/neotrinost">Neotrinost</a></b></p>
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

<!-- Modal -->
<div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Report a bug</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="post" action="index.php">
      <div class="modal-body">
          <div class="form-group">
            <label for="title" class="col-form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" required>
          </div>
          <div class="form-group">
            <label for="description" class="col-form-label">Description</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
          <button name="do" type="submit" class="btn btn-success">Report</button>
          <button type="reset" class="btn btn-danger">Clear</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
        <?php
            $reportcode = rand(1000 , 9999);
            $reporttitle = $_POST["title"];
            $reporttext = $_POST["description"];
            $reportdate = date("M , d , Y");
            $reportperson = $_SESSION["id"];
            $reportposition = $_SESSION["person"];
            $reporticode = $_SESSION["icode"];
            
            if (isset($reporttitle) && isset($reporttext)) {
                
                $sql = "SELECT * FROM report WHERE title = '$reporttitle' AND txt = '$reporttext'";
                $result = mysqli_query($conn, $sql);
                
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row["title"] == $reporttitle && $row["txt"] == $reporttext) {
                            ?>
                                <script>
                                    window.alert("This report is reported before.");
                                </script>
                            <?php
                        }
                    }
                }
                else {
                    $sql = "INSERT INTO report (code , title , txt , answer , dt , person , pos , icode) VALUES ('$reportcode' , '$reporttitle' , '$reporttext' , 'no' , '$reportdate' , '$reportperson' , '$reportposition' , '$reporticode')";
                
                    if (mysqli_query($conn, $sql)) {
                        ?>
                            <script>
                                window.alert("Reported. TNX!\nDont refresh the page.");
                            </script>
                        <?php
                    }
                    else {
                        ?>
                            <script>
                                window.alert("Didnt Reported. Try Again!\n<?php echo mysqli_error($conn); ?>");
                            </script>
                        <?php
                    }
                }
            }
        
        ?>
    </div>
  </div>
</div>
