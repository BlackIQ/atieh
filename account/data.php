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
    $person = $_SESSION['person'];
    header("Location: http://$ip/Narbon/people/$person");
}

?>
