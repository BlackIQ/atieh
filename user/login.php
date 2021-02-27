<?php

session_start();

$code = $_POST['code'];
$password = $_POST['password'];
$radio = $_POST["person"];

// Database Connection
$server = "localhost";
$user = "milad";
$passwd = "milad";
$db = "Atieh";

$conn = mysqli_connect($server, $user, $passwd, $db);

if (isset($code) && isset($password) && isset($radio)) {
    if ($radio == "student") {
        $sql = "SELECT * FROM student WHERE code='$code' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['status'] = true;
                $_SESSION['code'] = $code;
                $_SESSION["error"] = "200";
                $_SESSION["person"] = "student";
                header("Location: http://192.168.1.4/Atieh/people/student");
            }
        }
        else {
            $_SESSION["error"] = "404";
            header("Location: http://192.168.1.4/Atieh/login.php");
        }
    }
    elseif ($radio == "teacher") {
        $sql = "SELECT * FROM teacher WHERE code='$code' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['status'] = true;
                $_SESSION['code'] = $code;
                $_SESSION["error"] = "200";
                $_SESSION["person"] = "teacher";
                header("Location: http://192.168.1.4/Atieh/people/teacher");
            }
        }
        else {
            $_SESSION["error"] = "404";
            header("Location: http://192.168.1.4/Atieh/login.php");
        }
    }
}
else {
    $_SESSION["error"] = "500";
    header("Location: http://192.168.1.4/Atieh/login.php");
}