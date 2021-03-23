<?php

session_start();

$server = "localhost";
$user = "narbon";
$passwd = "narbon";
$db = "narbonn";

$conn = mysqli_connect($server, $user, $passwd, $db);

$getip = "SELECT * FROM development";
$res = mysqli_query($conn, $getip);

while ($row = mysqli_fetch_assoc($res)) {
    $ip = $row['ip'];
}

$username = $_SESSION['username'];

if ($_SESSION['status'] == true && $_SESSION['person'] == "student" ) {
    ?>
    <script>
        window.alert("<?php echo $username; ?> , Welcome To Teacher Panel !");
    </script>
    <?php
}
elseif ($_SESSION['person'] == "teacher") {
    header("Location: http://$ip/Narbon/people/teacher");
}
elseif ($_SESSION['person'] == "agent") {
    header("Location: http://$ip/Narbon/people/agent");
}
elseif ($_SESSION['person'] == "admin") {
    header("Location: http://$ip/Narbon/people/admin");
}
else {
    header("Location: http://$ip/Narbon");
}

?>