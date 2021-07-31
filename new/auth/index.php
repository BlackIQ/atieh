<?php

session_start();

include("auth.php");
include("../pack/config/configuration.php");

if ($_SESSION['session_status']) {
    $role = $_SESSION['user_role'];
    ?>
    <script>
        window.location.replace("../user/<?php echo $role; ?>");
    </script>
    <?php
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atieh - Login</title>
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <link href="../pack/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style>
        .main {
            padding: 10%;
        }
        .dialog {
            border: solid 1px black;
            padding: 5%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="../">Atieh</a>
    </div>
</nav>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="">
                    <div class="text-center">
                        <h1><i class="fas fa-book-open"></i></h1>
                        <h1 class="">Atieh Institute</h1>
                    </div>
                    <br>
                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="dialog border border-primary">
                    <form method="post" action="auth.php">
                        <h3 class="text-primary">Login</h3>
                        <hr class="border border-primary">
                        <div>
                            <label class="form-label" for="id">User ID</label>
                            <input id="id" name="id" type="text" class="form-control" placeholder="User ID">
                            <br>
                            <label class="form-label" for="password">User Password</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="User Password">
                        </div>
                        <br>
                        <div>
                            <label class="form-label">Choose your role</label>
                            <br>
                            <input type="radio" class="btn-check" name="role" id="student" autocomplete="off">
                            <label class="btn btn-sm btn-outline-dark" for="student">Student</label>
                            &nbsp;
                            <input type="radio" class="btn-check" name="role" id="teacher" autocomplete="off">
                            <label class="btn btn-sm btn-outline-dark" for="teacher">Teacher</label>
                            &nbsp;
                            <input type="radio" class="btn-check" name="role" id="agent" autocomplete="off">
                            <label class="btn btn-sm btn-outline-dark" for="agent">Agent</label>
                            &nbsp;
                            <input type="radio" class="btn-check" name="role" id="admin" autocomplete="off">
                            <label class="btn btn-sm btn-outline-dark" for="admin">Admin</label>
                        </div>
                        <br>
                        <br>
                        <div>
                            <button type="submit" name="logging" class="btn btn-sm btn-success">Login</button>
                            <button type="reset" class="btn btn-sm btn-danger">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../pack/js/bootstrap.min.js"></script>
</body>
</html>