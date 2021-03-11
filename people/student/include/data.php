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

if ($_SESSION['status'] == true && $_SESSION['person'] == "student" ) {
    // Database Connection
    $server = "localhost";
    $user = "milad";
    $passwd = "milad";
    $db = "Atieh";

    $conn = mysqli_connect($server, $user, $passwd, $db);

    $stdnt = $_SESSION['code'];

    $sql = "SELECT * FROM student WHERE code='$stdnt'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $code = $row["code"];
            $username = $row["username"];
            $fullname = $row["full_name"];
            $email = $row["email"];
            $phone = $row["phone"];
            $home = $row["home_number"];
            $parent = $row["parent_number"];
            $level = $row["level"];
            $payment = $row["payment_status"];
            // $payment = "Hello";
            $class = $row["class"];
        }
    }

    $sql = "SELECT * FROM class WHERE code='$class'";
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
        }
    }

    if ($payment == "payed") {
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
                    <h4 class="text-primary">Date</h4>
                    <p class="text-success"><b><i class="fa fa-calendar"></i> 2020/10/5</b></p>
                    <br>
                    <h4 class="text-primary">Time</h4>
                    <p class="text-success"><b><i class="fa fa-clock-o"></i> 10:54:26</b></p>
                    <br>
                    <h4 class="text-primary">Code</h4>
                    <p class="text-success"><b><i class="fa fa-paypal"></i> 2020/10/5</b></p>
                </div>
            </div>
        </div>
    </div>';
    } else {
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
                    <h1 class="text-danger">Tuition is <b>not payed</b></h1>
                    <hr>
                    <h3 class="text-success"><i class="fa fa-caret-right"></i> You can pay tuition online or pay offline</h3>
                    <br>
                    <h4 class="text-warning">Price : 195.000 Toman</h4>
                    <br>
                    <h4 class="text-primary"><i class="fa fa-shopping-basket"></i> Pay online</h4>
                    <a class="btn btn-primary" href="#">Pay Now</a>
                </div>
            </div>
        </div>
    </div>';
    }
}
elseif ($_SESSION['person'] == "teacher") {
    header("Location: http://$ip/Atieh/people/teacher");
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