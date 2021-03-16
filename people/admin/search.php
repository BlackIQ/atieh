<?php

include("include/data.php");

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atieh - Student Search</title>
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
            <li class="active">Class</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Class</h1>
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
                    <?php
                        if ($_SESSION["search_error"] == "404") {
                            echo "<h4 class='text-danger'><b>> User not found !</b></h4>";
                            $_SESSION["search_error"] == "0";
                        }
                        if ($_SESSION["search_error"] == "200") {
                            echo "<h4 class='text-success'><b>> User found !</b></h4>";
                            $_SESSION["search_error"] == "0";
                        }
                        else {
                            
                        }
                    ?>
                    <form class="form-inline" action="search.php" method="post">
                        <div class="form-group">
                            <label for="scode">Student Code</label>
                            <input name="code" type="text" class="form-control" id="scode" placeholder="Student Code">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                    
                    <?php
                    
                    if (!is_null($_POST["code"])) {
                        $_SESSION["search_error"] = 200;
                        $ccode = $_POST["code"];

                        // Database Connection
                        $server = "localhost";
                        $user = "milad";
                        $passwd = "milad";
                        $db = "Atieh";

                        $conn = mysqli_connect($server, $user, $passwd, $db);

                        $sql = "SELECT * FROM student WHERE code='$ccode'";
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
                                $parent = $row["paremt_phone"];
                                $level = $row["level"];
                                $payment = $row["payment_status"];
                                $sex = $row['sex'];
                        //        $sex = "female";
                                $class = $row['class'];
                            }
                        }

                        if ($sex == "male") {
                            $iconcolor = "blue";
                        }
                        elseif ($sex == "female") {
                            $iconcolor = "red";
                        }
                    }
                    else {
                        $_SESSION["search_error"] = "404";
                    }
                    
                    ?>
                    
                    <h1><?php echo $fullname; ?></h1>

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