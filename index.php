<?php

session_start();

include('pack/config.php');

$connection = mysqli_connect($msi, $msu, $msp, $msd);

$sql = "SELECT * FROM post ORDER BY id DESC;";
$result = mysqli_query($connection, $sql);

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

    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
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
        <a class="navbar-brand" href="."><span>Atieh </span>Institute</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-home"></i> Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <h3 style="color: white"></h3>

                <?php
                if ($_SESSION['status'] == true) {
                    if ($_SESSION["person"] == "teacher") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/teacher"><i class="fa fa-dashboard"></i> Teacher Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="account/logout.php"><i
                                        class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "student") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/student"><i class="fa fa-dashboard"></i> Student Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="account/logout.php"><i
                                        class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "agent") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/agent"><i class="fa fa-dashboard"></i> Agent Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="account/logout.php"><i
                                        class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                    elseif ($_SESSION["person"] == "admin") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="people/admin"><i class="fa fa-dashboard"></i> Admin Panel</a
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="account/logout.php"><i
                                        class="fa fa-sign-out"></i> Sign out</a>
                        </li>
                        <?php
                    }
                }
                else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="account"><i class="fa fa-sign-in"></i> Login</a>
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
        <div class="col-md-8">
            <h1 class="my-4">Atieh insitute
                <small>is here!</small>
            </h1>
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
                            <?php echo "Posted on " . $row["dt"] . " By " . $row["who"]; ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="col-md-4">
            <div class="card my-4">
                <h5 class="card-header">Institute work time</h5>
                <div class="card-body">
                    <p>Institute is always open</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="m-0 text-left text-white">
                    <p class="text-primary"><b>Atieh Institute</b></p>
                    <p class="text-white">Created by <a href="http://blackiq.ir">Amirhossein Mohammadi</a>
                    </p>
                    <p class="text-white">
                        Powered By <a href="http://neotrinost.ir">Neotrinost LLC</a>
                        <i class="fa fa-copyright"></i> <?php echo date("Y"); ?>
                    </p>
                    <p>
                        <i class="fa fa-telegram text-primary"></i>
                        <i class="fa fa-instagram text-danger"></i>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>