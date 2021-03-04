<?php

$code = $_GET['code'];

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

$sql = "DELETE FROM post WHERE code=$code";
$result = mysqli_query($conn, $sql);

header("Location: http://$ip/Atieh/people/agent/posts.php");