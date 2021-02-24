<?php

// Database Connection
$server = "localhost";
$user = "milad";
$passwd = "milad";
$db = "Atieh";

$conn = mysqli_connect($server, $user, $passwd, $db);

$sql = "SELECT * FROM status WHERE student_code='0481244859'";
$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        for($i = 1 ; $i <= 16 ; $i++) {
            $x = 'S'.$i;
            $s = $row[$x];
//            $s = "S3";
            if ($s == "p") {
                continue;
            }
            elseif (is_null($s)) {
                $sql = "UPDATE status SET $x='p' WHERE student_code='0481244859'";
                mysqli_query($conn, $sql);
                break;
            }
        }
    }
}
?>

<!--
<td>
    <a href="include/set.php?code='<?php echo $code; ?>'&session=15&action=p">
        <i class="fa fa-check color-teal"></i>
    </a>
    | 
    <a href="include/set.php?code='<?php echo $code; ?>'&session=15&action=a">
        <i class="fa fa-times color-red"></i>
    </a>
</td>
-->