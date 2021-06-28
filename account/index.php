<?php

include('../pack/config.php');

$connection = mysqli_connect($msi, $msu, $msp, $msd);

$errors = array();

if (isset($_POST['login'])) {
    $code = mysqli_real_escape_string($connection, $_POST['code']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $person = mysqli_real_escape_string($connection, $_POST["person"]);

    if (empty($code)) {
        array_push($errors, "User code is required");
    }
    if (empty($password)) {
        array_push($errors, "User Password is required");
    }

    if (count($errors) == 0) {
        if ($person == "student") {
            $sql = "SELECT * FROM student WHERE mcode = '$code' AND password = '$password'";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);

                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["person"] = "student";
                $_SESSION["icode"] = $row["icode"];
                ?>
                <script>
                    window.location.replace("../people/student")
                </script>
                <?php
            }
            else {
                array_push($errors, "Sorry, user didnt found");
            }
        }
        elseif ($person == "teacher") {
            $sql = "SELECT * FROM teacher WHERE mcode = '$code' AND password = '$password'";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);

                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["person"] = "teacher";
                $_SESSION["icode"] = $row["icode"];
                ?>
                <script>
                    window.location.replace("../people/teacher")
                </script>
                <?php
            }
            else {
                array_push($errors, "Sorry, user didnt found");
            }
        }
        elseif ($person == "agent") {
            $sql = "SELECT * FROM agent WHERE mcode = '$code' AND password = '$password'";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);

                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["person"] = "agent";
                $_SESSION["icode"] = $row["icode"];
                ?>
                <script>
                    window.location.replace("../people/agent")
                </script>
                <?php
            }
            else {
                array_push($errors, "Sorry, user didnt found");
            }
        }
        elseif ($person == "admin") {
            $sql = "SELECT * FROM admin WHERE mcode = '$code' AND password = '$password'";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);

                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["person"] = "admin";
                $_SESSION["icode"] = $row["icode"];
                ?>
                <script>
                    window.location.replace("../people/admin")
                </script>
                <?php
            }
            else {
                array_push($errors, "Sorry, user didnt found");
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');

        body {
            padding: 50px;
        }
        .all {
            font-family: 'Lato', sans-serif;
            border-radius: 20px;
            border-top-left-radius: 0px;
            border-bottom-right-radius: 0px;
            padding: 50px;
            top: 50%;
        }

        .blk {
            background: black;
            color: white;

        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atieh - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="all border border-success">
                <h3 class="text-success">Login</h3>
                <br>
                <?php
                if (count($errors) > 0) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php
                        foreach ($errors as $error) {
                            echo "<p>" . $error . "</p>";
                        }
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>
                <br>
                <form method="post" action="index.php">
                    <div class="group">
                        <input name="code" type="text" class="form-control border border-success" placeholder="User Code">
                        <br>
                        <input name="password" type="password" class="form-control border border-success" placeholder="User Password">
                        <br>
                        <select name="person" class="form-select border border-success">
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                            <option value="agent">Agent</option>
                            <option value="admin">Admin</option>
                        </select>
                        <br>
                        <button name="login" class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
                <br>
                <p class="text-danger">Forgot Password ?</p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>