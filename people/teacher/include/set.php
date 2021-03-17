<?php

// Database Connection
$server = "localhost";
$user = "narbon";
$passwd = "narbon";
$db = "narbon";

$code = $_GET["code"];
$action = $_GET["action"];

$conn = mysqli_connect($server, $user, $passwd, $db);

$getip = "SELECT * FROM development";
$res = mysqli_query($conn, $getip);

while ($row = mysqli_fetch_assoc($res)) {
    $ip = $row['ip'];
}

$sql = "SELECT * FROM status WHERE student_code='$code'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        for($i = 1 ; $i <= 16 ; $i++) {
            $x = 'S'.$i;
            $s = $row[$x];
            if ($s == "p") {
                continue;
            }
            elseif ($s == null) {
                $sql = "UPDATE status SET $x='$action' WHERE student_code='$code'";
                if (mysqli_query($conn, $sql)) {
                    echo 'Done !';
                }
                else {
                    echo mysqli_error($conn);
                }
                break;
            }
        }
        header("Location: http://$ip/Narbon/teacher");
    }
}