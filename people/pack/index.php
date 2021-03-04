<?php

$server = "localhost";
$user = "milad";
$passwd = "milad";
$db = "Atieh";

$conn = mysqli_connect($server, $user, $passwd, $db);

$getip = "SELECT * FROM development";
$res = mysqli_query($conn, $getip);

while ($row = mysqli_fetch_assoc($res)) {
    $ip = $row['ip'];
}

session_start();

if ($_SESSION['status'] == true) {
    if ($_SESSION['person'] == "student") {
        header("Location: http://$ip/Atieh/people/student");
    }
    if ($_SESSION['person'] == "teacher") {
        header("Location: http://$ip/Atieh/people/teacher");
    }
    if ($_SESSION['person'] == "agent") {
        header("Location: http://$ip/Atieh/people/agent");
    }
}
else {
    header("Location: http://$ip/Atieh");
}
