<?php

session_start();

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

if ($_SESSION['status'] == true && $_SESSION['person'] == "agent" ) {
    // Database Connection
    $server = "localhost";
    $user = "milad";
    $passwd = "milad";
    $db = "Atieh";

    $conn = mysqli_connect($server, $user, $passwd, $db);

    $stdnt = $_SESSION['code'];

    $sql = "SELECT * FROM agent WHERE agent_code='$stdnt'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $code = $row["agent_code"];
            $username = $row["username"];
            $fullname = $row["full_name"];
            $email = $row["email"];
            $phone = $row["phone"];
        }
    }
}
elseif ($_SESSION['person'] == "teacher") {
    header("Location: http://$ip/Atieh/people/teacher");
}
elseif ($_SESSION['person'] == "student") {
    header("Location: http://$ip/Atieh/people/student");
}
else {
    header("Location: http://$ip/Atieh");
}