<?php

session_start();

include("../pack/config/configuration.php");

$errors = array();

if (isset($_POST['logging'])) {
    $id = mysqli_real_escape_string($connetion, $_POST['id']);
    $password = mysqli_real_escape_string($connetion, $_POST['password']);
    $role = mysqli_real_escape_string($connetion, $_POST['type']);

    if (empty($id)) {
        array_push($errors, "Id is required.");
    }
    if (empty($password)) {
        array_push($errors, "Password is required.");
    }
    if ($role == "none") {
        array_push($errors, "Role is required.");
    }

    if (count($errors) == 0) {
        
    }
}