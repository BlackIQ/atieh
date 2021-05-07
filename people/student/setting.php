<?php

include('check.php');

include("../pack/include/data.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Narbon - Setting</title>
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
include("../pack/panels/sidebar.php");
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../student">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Setting</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Setting</h1>
        </div>
    </div><!--/.row-->
    <div class="panel panel-container">
        <?php
        include("../pack/panels/bar.php");
        ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profile Setting ( Setting 1 )
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-warning">Change Contact Ways</h1>
                    <hr>
                    <form>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">E-mail</label>
                                <br>
                                <br>
                                <input type="text" class="form-control" placeholder="New E-mail" name="email">
                                <p class="text-muted">Current E-Mail : <?php echo $email; ?></p>
                                <br>
                                <button class="btn btn-primary">Change E-Mail</button>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label">Phone</label>
                                <br>
                                <br>
                                <input type="text" class="form-control" placeholder="New Phone" name="phone">
                                <p class="text-muted">Current Phone : <?php echo $phone; ?></p>
                                <br>
                                <button class="btn btn-primary">Change Phone</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profile Setting ( Setting 2 )
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-warning">Change Security Data</h1>
                    <hr>
                    <form>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <br>
                                <br>
                                <input type="text" class="form-control" placeholder="Username" name="username">
                                <p class="text-muted">Current Username : <?php echo $username; ?></p>
                                <br>
                                <button class="btn btn-primary">Change Username</button>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <br>
                                <br>
                                <input type="text" class="form-control" placeholder="New Password" name="password"">
                                <p class="text-danger">We can't show your current password</p>
                                <br>
                                <button class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../pack/panels/footer.php");
    ?>
</div>    <!--/.main-->

<script src="http://office.narbon.ir:4488/pack/js/jquery-1.11.1.min.js"></script>
<script src="http://office.narbon.ir:4488/pack/js/bootstrap.min.js"></script>
<script src="http://office.narbon.ir:4488/pack/js/chart.min.js"></script>
<script src="http://office.narbon.ir:4488/pack/js/chart-data.js"></script>
<script src="http://office.narbon.ir:4488/pack/js/easypiechart.js"></script>
<script src="http://office.narbon.ir:4488/pack/js/easypiechart-data.js"></script>
<script src="http://office.narbon.ir:4488/pack/js/bootstrap-datepicker.js"></script>
<script src="http://office.narbon.ir:4488/pack/js/custom.js"></script>
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