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

if ($_SESSION['status'] == true && $_SESSION['person'] == "teacher") {
    // Database Connection
    $server = "localhost";
    $user = "milad";
    $passwd = "milad";
    $db = "Atieh";

    $conn = mysqli_connect($server, $user, $passwd, $db);

    $tcode = $_SESSION['code'];

    $sql = "SELECT * FROM teacher WHERE code='$tcode'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $code = $row["code"];
            $username = $row["username"];
            $fullname = $row["full_name"];
            $email = $row["email"];
            $phone = $row["phone"];
        }
    }

    $sql = "SELECT * FROM class WHERE teacher_code='$tcode'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $code = $row["code"];
            $teacher = $row["teacher"];
            $starttime = $row["start_time"];
            $endtime = $row["end_time"];
            $whatapp = $row["whatsapp_link"];
            $skype = $row["skype_link"];
            $price = $row["tuition_price"];
            $homeworksession = $row["homework_session"];
            $homeworktitle = $row["homework_title"];
            $homeworktext = $row["homework_text"];
            $sex = $row['sex'];
            $level = $row['level'];
            $days = $row['days'];
        }
    }
}
elseif ($_SESSION['person'] == "student") {
    header("Location: http://$ip/Atieh/people/student");
}
elseif ($_SESSION['person'] == "agent") {
    header("Location: http://$ip/Atieh/people/agent");
}
elseif ($_SESSION['person'] == "admin") {
    header("Location: http://$ip/Atieh/people/admin");
}
else {
    header("Location: http://$ip/Atieh");
}