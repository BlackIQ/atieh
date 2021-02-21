<?php
// Database Connection
$server = "localhost";
$user = "milad";
$passwd = "milad";
$db = "Atieh";

$conn = mysqli_connect($server, $user, $passwd, $db);

$tcode = 123;

$sql = "SELECT * FROM class WHERE teacher_code='$tcode'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <li>
            <a class="" href="class.php?code=<?php echo $row["code"]; ?>">
                <span class="fa fa-home">&nbsp;</span> <?php echo $row["level"]; ?>
            </a>
        </li>
        <?php
    }
}