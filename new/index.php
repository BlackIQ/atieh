<?php

session_start();

include("pack/config/configuration.php");

$get_posts_query = "";
$result_posts_query = mysqli_query($connection, $get_posts_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Atieh - Index</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <style>
        body {
            padding-top: 56px;
        }
        a {
            text-decoration: none;
        }
        .link {
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href=".">Atieh</a>
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
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="user/<?php echo $_SESSION["user_role"]; ?>">
                        <i class="fa fa-dashboard"></i> <?php echo $_SESSION["user_role"]; ?> Panel
                    </a>
                </li>
                <li class="navbar-nav">
                    <a class="nav-link active" href="auth/logout.php">
                        <i class="fa fa-sign-out"></i> Sign out
                    </a>
                </li>
                <?php
            }
            else {
                ?>
                <li class="navbar-nav">
                    <a class="nav-link active" href="auth"><i class="fa fa-sign-in"></i> Login</a>
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
            if (mysqli_num_rows($result_posts_query) > 1) {
                while ($post_array = mysqli_fetch_assoc($result_posts_query)) {
                    ?>
                    <div class="card mb-4">
                        <div class="card-body" style="padding: 5%;">
                            <h2 class="card-title"><?php echo $post_array['title']; ?></h2>
                            <hr>
                            <p class="card-text"><?php echo $post_array['post']; ?></p>
                        </div>
                        <div class="card-footer text-muted" style="padding: 2%;">
                            <?php echo "Posted on " . $post_array['dt'] . " By " . $post_array['person']; ?>
                        </div>
                    </div>
                    <?php
                }
            }
            else {
                echo "<h2>No posts yet.</h2>";
            }
            ?>
        </div>
        <div class="col-md-4">
            <div class="card my-4">
                <h5 class="card-header" style="padding: 5%;">Sidebar 1</h5>
                <div class="card-body">
                    <p>Institute is always open</p>
                    <p>Institute is always open</p>
                    <p>Institute is always open</p>
                </div>
            </div>
            <div class="card my-4">
                <h5 class="card-header" style="padding: 5%;">Sidebar 2</h5>
                <div class="card-body">
                    <p>Institute is always open</p>
                    <p>Institute is always open</p>
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
                    <p class="text-primary">Atieh</p>
                    <small>
                        Atieh institute.
                        <br>
                        blah blah blah blah blah blah.
                    </small>
                    <br>
                    <br>
                    <p>
                        <a class="link" target="_blank" href="#">
                            <i class="fa fa-telegram"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="#">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="m-0 text-left text-white">
                    <p class="text-primary"><a href="https://blackiq.ir">Amirhossein Mohammadi</a></p>
                    <small>
                        Hi, I am Amir. Php and Python developer.
                        <br>
                        Artificial intelligence (AI) student.
                    </small>
                    <br>
                    <br>
                    <p>
                        <a class="link" target="_blank" href="https://t.me/BlackIQ">
                            <i class="fa fa-telegram"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="https://instagram.com/leonardo_l_larson">
                            <i class="fa fa-instagram"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="https://github.com/BlackIQ">
                            <i class="fa fa-github"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="https://twitter.com/GNU_Amir">
                            <i class="fa fa-twitter"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="https://linkedin.com/in/amirhosseinmohammadi">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="m-0 text-left text-white">
                    <p class="text-primary"><a href="https://neotrinost.ir">Neotrinost</a></p>
                    <small>
                        We are development company that develop Android, Desktop and Web based applications.
                        <br>
                        But there is a bit difference too, our other activity is to accept you projects.
                    </small>
                    <br>
                    <br>
                    <p>
                        <a class="link" target="_blank" href="https://t.me/neotrinost">
                            <i class="fa fa-telegram"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="https://instagram.com/neotrinost">
                            <i class="fa fa-instagram"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="https://github.com/neotrinost">
                            <i class="fa fa-github"></i>
                        </a>
                        &nbsp;
                        <a class="link" target="_blank" href="https://linkedin.com/company/neotrinost">
                            <i class="fa fa-linkedin"></i>
                        </a>
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