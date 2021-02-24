<?php

// Database Connection
$server = "localhost";
$user = "milad";
$passwd = "milad";
$db = "Atieh";

$code = $_GET["code"];
$session = $_GET["session"];
$action = $_GET["action"];

$conn = mysqli_connect($server, $user, $passwd, $db);

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
            elseif (is_null($s)) {
                $sql = "UPDATE status SET $x='p' WHERE student_code='$code'";
                if (mysqli_query($conn, $sql)) {
                    echo 'Done !';
                }
                else {
                    echo mysqli_error($conn);
                }
//                header("Location: http://192.168.1.4/Atieh/teacher");
                break;
            }
        }
    }
}