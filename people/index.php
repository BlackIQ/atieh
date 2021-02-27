<?php

$ip = "192.168.1.3";

session_start();

if ($_SESSION['status'] == true) {
    if ($_SESSION['person'] == "student") {
        header("Location: http://$ip/Atieh/people/student");
    }
    if ($_SESSION['person'] == "teacher") {
        header("Location: http://$ip/Atieh/people/teacher");
    }
}
else {
    header("Location: http://$ip/Atieh");
}
