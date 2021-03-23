<?php

session_start();

include("data.php");

$title = $_POST['title'];
$description = $_POST['description'];
$date = date("M , d , Y");
$who = $username;
$code = rand(1000 , 9999);

if (!empty($title)) {
    if (!empty($description)) {
        $sql = "INSERT INTO post (code , title , txt , dt , who) VALUES ('$code' , '$title' , '$description' , '$date' , '$who')";

        mysqli_query($conn, $sql);
        $_SESSION['post'] = 200;
        header("Location: http://$ip/Narbon/people/agent/new.php");
    }
}
else {
    $_SESSION['post'] = 500;
    header("Location: http://$ip/Narbon/people/agent/new.php");
}