<?php

session_start();

// Database Connection
$server = "localhost";
$user = "narbon";
$passwd = "narbon";
$db = "narbon";

$conn = mysqli_connect($server, $user, $passwd, $db);

$tcode = $_SESSION['code'];

$sql = "SELECT * FROM class WHERE teacher_code='$tcode'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <li>
            <a class="" href=#">
                <span class="fa fa-user">&nbsp;</span> <?php echo $row["level"]; ?>
            </a>
        </li>
        <?php
    }
}