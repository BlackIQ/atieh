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

if ($_SESSION['status'] == true && $_SESSION['person'] == "teacher") {
    $tcode = $_SESSION['code'];

    $sql = "SELECT * FROM teacher WHERE code='$tcode'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $code = $row["code"];
            $username = $row["username"];
            $fullname = $row["full_name"];
            $email = $row["email"];
            $phone = $row["phone"];
        }
    }
}
elseif ($_SESSION['person'] == "student") {
    header("Location: http://$ip/Narbon/people/student");
}
elseif ($_SESSION['person'] == "agent") {
    header("Location: http://$ip/Narbon/people/agent");
}
elseif ($_SESSION['person'] == "admin") {
    header("Location: http://$ip/Narbon/people/admin");
}
else {
    header("Location: http://$ip/Narbon");
}