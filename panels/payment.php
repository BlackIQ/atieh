<?php

// Database Connection
$server = "localhost";
$user = "milad";
$passwd = "milad";
$db = "Atieh";

$conn = mysqli_connect($server, $user, $passwd, $db);

$stdnt = "0481244859";

$sql = "SELECT * FROM student WHERE student_code='$stdnt'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
//        $payment = $row["payment_status"];
        $payment = "Hello";
    }
}

if ($payment == "payed") {
    ?>
    <div class="row">
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
    </div>
    <?php
} else {
    ?>
    <div class="row">
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
                    <h4 class="text-primary"><i class="fa fa-shopping-basket"></i> Pay online</h4>
                    <a class="btn btn-primary" href="#">Pay Now</a>
                </div>
            </div>
        </div>
    </div>
    <?php
}