<?php

include("data.php");

$code = $_GET['code'];

$sql = "DELETE FROM post WHERE code=$code";
$result = mysqli_query($conn, $sql);

header("Location: http://$ip/Narbon/people/agent/posts.php");