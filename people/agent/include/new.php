<?php

session_start();

include("data.php");

$servername = "localhost";
$user = "milad";
$password = "milad";
$dbname = "Atieh";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);

$getip = "SELECT * FROM development";
$res = mysqli_query($conn, $getip);

while ($row = mysqli_fetch_assoc($res)) {
    $ip = $row['ip'];
}

$titlw = $_POST['title'];
$description = $_POST['description'];
$date = date("M , d , Y");
$who = $username;
$code = rand(1000 , 9999);

$sql = "INSERT INTO post (code , title , txt , dt , who) VALUES ('$code' , '$titlw' , '$description' , '$date' , '$who')";

mysqli_query($conn, $sql);

header("Location: http://$ip/Atieh/people/agent");