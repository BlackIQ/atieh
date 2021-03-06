<?php

session_start();

$server = "localhost";
$user = "narbon";
$passwd = "narbon";
$db = "narbonn";

$conn = mysqli_connect($server, $user, $passwd, $db);

$id = $_SESSION['id'];

$sql = "SELECT * FROM student WHERE mcode='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $code = $row["mcode"];
        $username = $row["username"];
        $fullname = $row["fname"];
        $email = $row["email"];
        $phone = $row["phone"];
        $home = $row["home"];
        $parent = $row["parent"];
        $level = $row["level"];
        $payment = $row["payment"];
        $uclass = $row["class"];
        $institute = $row["icode"];
    }
}

$sql = "SELECT * FROM class WHERE ccode='$uclass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $class = $row["ccode"];
        $tcode = $row["tcode"];
        $start = $row["start"];
        $end = $row["end"];
        $whatapp = $row["whatsapp"];
        $skype = $row["skype"];
        $price = $row["tuition"];
    }
}

$sql = "SELECT * FROM teacher WHERE mcode='$tcode'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $teacher = $row["username"];
        $fteacher = $row['fname'];
    }
}

$sql = "SELECT * FROM homework WHERE ccode='$uclass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $class = $row["ccode"];
        $homeworksession = $row["session"];
        $homeworktitle = $row["title"];
        $homeworktext = $row["txt"];
    }
}

if ($payment == "true") {
    $payment = "<span class='text-success'>Payed</span>";
    $panel = '<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Payment Status
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                    <em class="fa fa-toggle-up"></em>
                </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-success">Tuition is <b>payed</b></h1>
                    <hr>
                    <h4>Date <b>date</b></h4>
                    <h4>Time <b>time</b></h4>
                    <h4>Code <b>748159263</b></h4>
                </div>
            </div>
        </div>
    </div>';
}
else {
    $payment = "<span class='text-danger'>N-Payed</span>";
    $panel = '<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Payment Status
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                    <em class="fa fa-toggle-up"></em>
                </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-danger">Your tuition is <b>not payed</b></h1>
                    <hr>
                    <h3>You can pay tuition online or pay offline</h3>
                    <br>
                    <h4>Tuition price : 195.000 Toman</h4>
                    <br>
                    <a class="btn btn-success" href="#">Pay Now</a>
                </div>
            </div>
        </div>
    </div>';
}