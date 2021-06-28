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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');

        body {
            font-family: 'Nunito', sans-serif;
            padding-top: 56px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href=".">Atieh Institute</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <?php
            if ($_SESSION['status'] == true) {
                if ($_SESSION["person"] == "teacher") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="people/teacher"><i class="fa fa-dashboard"></i> Teacher Panel</a>
                    </li>
                    <li class="navbar-nav">
                        <a class="nav-link active" href="account/logout.php">
                            <i class="fa fa-sign-out"></i> Sign out
                        </a>
                    </li>
                    <?php
                }
                elseif ($_SESSION["person"] == "student") {
                    ?>
                    <li class="navbar-nav">
                        <a class="nav-link active" href="people/student"><i class="fa fa-dashboard"></i> Student Panel</a
                    </li>
                    <li class="navbar-nav">
                        <a class="nav-link active" href="account/logout.php">
                            <i class="fa fa-sign-out"></i> Sign out
                        </a>
                    </li>
                    <?php
                }
                elseif ($_SESSION["person"] == "agent") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="people/agent"><i class="fa fa-dashboard"></i> Agent Panel</a
                    </li>
                    <li class="navbar-nav">
                        <a class="nav-link active" href="account/logout.php">
                            <i class="fa fa-sign-out"></i> Sign out
                        </a>
                    </li>
                    <?php
                }
                elseif ($_SESSION["person"] == "admin") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="people/admin"><i class="fa fa-dashboard"></i> Admin Panel</a
                    </li>
                    <li class="navbar-nav">
                        <a class="nav-link active" href="account/logout.php">
                            <i class="fa fa-sign-out"></i> Sign out
                        </a>
                    </li>
                    <?php
                }
            }
            else {
                ?>
                <li class="navbar-nav">
                    <a class="nav-link active" href="account"><i class="fa fa-sign-in"></i> Login</a>
                </li>
                <?php
            }
            ?>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8">
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
                        &nbsp;
                        <i class="fa fa-instagram text-danger"></i>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>