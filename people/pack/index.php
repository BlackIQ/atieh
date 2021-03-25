<?php

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

session_start();

$person = $_SESSION['person'];

if ($_SESSION['status'] == true) {
    header("Location: http://$ip/Narbon/people/$person");
}
else {
    header("Location: http://$ip/Narbon");
}