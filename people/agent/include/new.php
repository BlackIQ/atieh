<?php

session_start();

include("data.php");

$servername = "localhost";
$user = "milad";
$password = "milad";
$dbname = "Atieh";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);

$titlw = $_POST['title'];
$description = $_POST['description'];
$date = date("M , d , Y");
$who = $username;
$code = rand(1000 , 9999);

$sql = "INSERT INTO post VALUES ('$code' , '$titlw' , '$description' , '$date' , '$who')";

if (mysqli_query($conn, $sql)) {
    echo 'Done !';
}