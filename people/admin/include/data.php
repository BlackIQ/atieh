<?php

session_start();

$server = "localhost";
$user = "narbon";
$passwd = "narbon";
$db = "narbon";

$conn = mysqli_connect($server, $user, $passwd, $db);

$getip = "SELECT * FROM development";
$res = mysqli_query($conn, $getip);

while ($row = mysqli_fetch_assoc($res)) {
    $ip = $row['ip'];
}

if ($_SESSION['status'] == true && $_SESSION['person'] == "admin" ) {
    $stdnt = $_SESSION['code'];

    $sql = "SELECT * FROM institute WHERE code ='$stdnt'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row["admin_user"];
            $teachers = $row["teachers"];
            $students = $row["students"];
            $agents = $row["agents"];
            $classes = $row["classes"];
        }
    }
}
elseif ($_SESSION['person'] == "teacher") {
    header("Location: http://$ip/Narbon/people/teacher");
}
elseif ($_SESSION['person'] == "student") {
    header("Location: http://$ip/Narbon/people/student");
}
elseif ($_SESSION['person'] == "agent") {
    header("Location: http://$ip/Narbon/people/agent");
}
else {
    header("Location: http://$ip/Narbon");
}