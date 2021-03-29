<?php

include("data.php");

if ($_SESSION['status'] == true) {
    $person = $_SESSION['person'];
    header("Location: http://$ip/Narbon/people/$person");
}

$code = $_POST['code'];
$password = $_POST['password'];
$radio = $_POST["person"];
$check = $_POST["remember"];

if (isset($code) && isset($password) && isset($radio)) {
    if ($radio == "1") {
        $sql = "SELECT * FROM student WHERE mcode='$code' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["error"] = "200";
                $_SESSION["person"] = "student";
                $_SESSION["username"] = $row["username"];
                $_SESSION["icode"] = $row["icode"];
                header("Location: http://$ip/Narbon/people/student");
            }
        }
        else {
            $_SESSION["error"] = "404";
            header("Location: http://$ip/Narbon/account");
        }
    }
    elseif ($radio == "2") {
        $sql = "SELECT * FROM teacher WHERE mcode='$code' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["error"] = "200";
                $_SESSION["person"] = "teacher";
                $_SESSION["username"] = $row["username"];
                $_SESSION["icode"] = $row["icode"];
                header("Location: http://$ip/Narbon/people/teacher");
            }
        }
        else {
            $_SESSION["error"] = "404";
            header("Location: http://$ip/Narbon/account");
        }
    }
    elseif ($radio == "3") {
        $sql = "SELECT * FROM agent WHERE mcode='$code' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["error"] = "200";
                $_SESSION["person"] = "agent";
                $_SESSION["username"] = $row["username"];
                $_SESSION["icode"] = $row["icode"];
                header("Location: http://$ip/Narbon/people/agent");
            }
        }
        else {
            $_SESSION["error"] = "404";
            header("Location: http://$ip/Narbon/account");
        }
    }
    elseif ($radio == "4") {
        $sql = "SELECT * FROM admin WHERE mcode='$code' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["error"] = "200";
                $_SESSION["person"] = "admin";
                $_SESSION["username"] = $row["username"];
                $_SESSION["icode"] = $row["icode"];
                header("Location: http://$ip/Narbon/people/admin");
            }
        }
        else {
            $_SESSION["error"] = "404";
            header("Location: http://$ip/Narbon/account");
        }
    }
    elseif ($radio == "5") {
        $sql = "SELECT * FROM parent WHERE mcode='$code' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['status'] = true;
                $_SESSION['id'] = $code;
                $_SESSION["error"] = "200";
                $_SESSION["person"] = "parent";
                $_SESSION["username"] = $row["username"];
                $_SESSION["icode"] = $row["icode"];
                header("Location: http://$ip/Narbon/people/parent");
            }
        }
        else {
            $_SESSION["error"] = "404";
            header("Location: http://$ip/Narbon/account");
        }
    }
}
else {
    $_SESSION["error"] = "500";
    header("Location: http://$ip/Narbon/account");
}