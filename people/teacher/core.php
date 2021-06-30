<?php

session_start();

$id = $_SESSION['id'];

$sql = "SELECT * FROM teacher WHERE mcode='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $code = $row["mcode"];
        $username = $row["username"];
        $fullname = $row["fname"];
        $email = $row["email"];
        $phone = $row["phone"];
        $institute = $row["icode"];
    }
}