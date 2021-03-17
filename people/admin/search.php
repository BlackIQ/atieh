<?php

include("include/data.php");

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Narbon - Student Search</title>
    <link href="../pack/css/bootstrap.min.css" rel="stylesheet">
    <link href="../pack/css/font-awesome.min.css" rel="stylesheet">
    <link href="../pack/css/datepicker3.css" rel="stylesheet">
    <link href="../pack/css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include("panels/sidebar.php");
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../teacher">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Search</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Search</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <?php
        include("panels/bar.php");
        ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Search student
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-group" action="search.php" method="get">
                        <label for="code">Code</label>
                        <br>
                        <input type="text" name="code" class="form-control" placeholder="Code">
                        <div class="radio">
                            <label>
                                <input type="radio" name="person" value="student"> Student
                            </label>
                            <label>
                                <input type="radio" name="person" value="teacher"> Teacher
                            </label>
                            <label>
                                <input type="radio" name="person" value="agent"> Agent
                            </label>
                        </div>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                    
                    <?php
                    
                    if (isset($_GET['code']) && isset($_GET['person'])) {
                        $code = $_GET['code'];
                        $radio = $_GET['person'];
                        if ($radio == "student") {
                            
                            // Database Connection
                            $server = "localhost";
                            $user = "milad";
                            $passwd = "milad";
                            $db = "Atieh";

                            $conn = mysqli_connect($server, $user, $passwd, $db);

                            $sql = "SELECT * FROM student WHERE code='$code'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $scode = $row["code"];
                                    $username = $row["username"];
                                    $fullname = $row["full_name"];
                                    $email = $row["email"];
                                    $phone = $row["phone"];
                                    $home = $row["home_phone"];
                                    $parent = $row["parent_phone"];
                                    $level = $row["level"];
                                    $payment = $row["payment_status"];
                                    $sex = $row['sex'];
                                    $sex = "male";
                                    $class = $row['class'];
                                }
                            }
                            
                            echo '<hr>';

                            if ($sex == "male") {
                                echo '<h2 class="text-success"><i class="color-blue fa fa-male"></i> ' . $fullname .'</h2>';
                                echo '<h3 class="text-primary">Username : ' . $username .'</h3>';
                                echo '<h3 class="text-primary">Email : ' . $email .'</h3>';
                                echo '<h3 class="text-primary">Phone : ' . $phone .'</h3>';
                                echo '<h3 class="text-info">Home Phone : ' . $home .'</h3>';
                                echo '<h3 class="text-info">Parent Phone : ' . $parent .'</h3>';
                                echo '<h3 class="text-danger">Class : ' . $class .'</h3>';
                                echo '<h3 class="text-danger">Level : ' . $level .'</h3>';
                                echo '<h3 class="text-warning">Payment : ' . $payment .'</h3>';
                                echo '<h3 class="text-warning">Code : ' . $scode .'</h3>';
                            }
                            elseif ($sex == "female") {
                                echo '<h2 class="text-success"><i class="color-red fa fa-female"></i> ' . $fullname .'</h2>';
                                echo '<h3 class="text-primary">Username : ' . $username .'</h3>';
                                echo '<h3 class="text-primary">Email : ' . $email .'</h3>';
                                echo '<h3 class="text-primary">Phone : ' . $phone .'</h3>';
                                echo '<h3 class="text-info">Home Phone : ' . $home .'</h3>';
                                echo '<h3 class="text-info">Parent Phone : ' . $parent .'</h3>';
                                echo '<h3 class="text-danger">Class : ' . $class .'</h3>';
                                echo '<h3 class="text-danger">Level : ' . $level .'</h3>';
                                echo '<h3 class="text-warning">Payment : ' . $payment .'</h3>';
                                echo '<h3 class="text-warning">Code : ' . $scode .'</h3>';
                            }

                        }
                        elseif ($radio == "agent") {
                            // Database Connection
                            $server = "localhost";
                            $user = "milad";
                            $passwd = "milad";
                            $db = "Atieh";

                            $conn = mysqli_connect($server, $user, $passwd, $db);

                            $sql = "SELECT * FROM agent WHERE agent_code='$code'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $scode = $row["agent_code"];
                                    $username = $row["username"];
                                    $fullname = $row["full_name"];
                                    $email = $row["email"];
                                    $phone = $row["phone"];
//                                    $sex = $row['sex'];
                                    $sex = "male";
                                }
                            }

                            echo '<hr>';
                            
                            if ($sex == "male") {
                                echo '<h2 class="text-success"><i class="color-blue fa fa-male"></i> ' . $fullname .'</h2>';
                                echo '<h3 class="text-primary">Username : ' . $username .'</h3>';
                                echo '<h3 class="text-warning">Email : ' . $email .'</h3>';
                                echo '<h3 class="text-warning">Phone : ' . $phone .'</h3>';
                                echo '<h3 class="text-danger">Code : ' . $scode .'</h3>';
                            }
                            elseif ($sex == "female") {
                                echo '<h2 class="text-success"><i class="color-red fa fa-female"></i> ' . $fullname .'</h2>';
                                echo '<h3 class="text-primary">Username : ' . $username .'</h3>';
                                echo '<h3 class="text-warning">Email : ' . $email .'</h3>';
                                echo '<h3 class="text-warning">Phone : ' . $phone .'</h3>';
                                echo '<h3 class="text-danger">Code : ' . $scode .'</h3>';
                            }
                        }
                        elseif ($radio == "teacher") {
                            $ccode = $_GET["code"];

                            // Database Connection
                            $server = "localhost";
                            $user = "milad";
                            $passwd = "milad";
                            $db = "Atieh";

                            $conn = mysqli_connect($server, $user, $passwd, $db);

                            $sql = "SELECT * FROM teacher WHERE code='$ccode'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $scode = $row["code"];
                                    $username = $row["username"];
                                    $fullname = $row["full_name"];
                                    $email = $row["email"];
                                    $phone = $row["phone"];
//                                    $sex = $row['sex'];
                                    $sex = "female";
                                    $class = $row['class'];
                                }
                            }

                            echo '<hr>';
                            
                            if ($sex == "male") {
                                echo '<h2 class="text-success"><i class="color-blue fa fa-male"></i> ' . $fullname .'</h2>';
                                echo '<h3 class="text-primary">Username : ' . $username .'</h3>';
                                echo '<h3 class="text-warning">Email : ' . $email .'</h3>';
                                echo '<h3 class="text-warning">Phone : ' . $phone .'</h3>';
                                echo '<h3 class="text-danger">Code : ' . $scode .'</h3>';
                            }
                            elseif ($sex == "female") {
                                echo '<h2 class="text-success"><i class="color-red fa fa-female"></i> ' . $fullname .'</h2>';
                                echo '<h3 class="text-primary">Username : ' . $username .'</h3>';
                                echo '<h3 class="text-warning">Email : ' . $email .'</h3>';
                                echo '<h3 class="text-warning">Phone : ' . $phone .'</h3>';
                                echo '<h3 class="text-danger">Code : ' . $scode .'</h3>';
                            }
                        }
                    }
                    
                    ?>
                    
                    <br>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    include("panels/footer.php");
    ?>
</div>    <!--/.main-->

<script src="../pack/js/jquery-1.11.1.min.js"></script>
<script src="../pack/js/bootstrap.min.js"></script>
<script src="../pack/js/chart.min.js"></script>
<script src="../pack/js/chart-data.js"></script>
<script src="../pack/js/easypiechart.js"></script>
<script src="../pack/js/easypiechart-data.js"></script>
<script src="../pack/js/bootstrap-datepicker.js"></script>
<script src="../pack/js/custom.js"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
</html>
