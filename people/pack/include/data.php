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

if ($_SESSION['status'] == true) {
    if ($_SESSION['person'] == "student") {

    }
    elseif ($_SESSION['person'] == "teacher") {
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM teacher WHERE mcode='$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $code = $row["mcode"];
                $username = $row["username"];
                $fullname = $row["fname"];
                $email = $row["email"];
                $phone = $row["phone"];
                $institute = $row["icode"];
            }
        }
    }
    elseif ($_SESSION['person'] == "agent") {
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM agent WHERE mcode='$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $code = $row["mcode"];
                $username = $row["username"];
                $fullname = $row["fname"];
                $email = $row["email"];
                $phone = $row["phone"];
            }
        }
    }
    elseif ($_SESSION['person'] == "admin") {
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM admin WHERE mcode='$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $code = $row["mcode"];
                $username = $row["username"];
                $fullname = $row["fname"];
                $email = $row["email"];
                $phone = $row["phone"];
            }
        }
    }
    elseif ($_SESSION['person'] == "parent") {
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM parent WHERE mcode='$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $code = $row["mcode"];
                $username = $row["username"];
                $fullname = $row["fname"];
                $email = $row["email"];
                $phone = $row["phone"];
                $institute = $row["icode"];
            }
        }
        
        $sql = "SELECT * FROM ztudent WHERE pcode='$code'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['fname'];
            }
        }
    }
}
else {
    header("Location: http://$ip/Narbon");
}