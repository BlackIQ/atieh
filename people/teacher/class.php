<?php
include("check.php");
include("../pack/include/data.php");

$code = $_GET["code"];

$sql = "SELECT * FROM class WHERE ccode='$code'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $stime = $row['start'];
    $etime = $row['end'];
    $level = $row['level'];
    $days = $row['days'];
    $sex = $row['sex'];
    $whatapp = $row['whatsapp'];
    $skype = $row['skype'];
}

if ($sex == 'male') {
    $color = "blue";
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Narbon - Class <?php echo $code; ?></title>
    <link href="http://office.narbon.ir:4488/pack/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://office.narbon.ir:4488/pack/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://office.narbon.ir:4488/pack/css/datepicker3.css" rel="stylesheet">
    <link href="http://office.narbon.ir:4488/pack/css/styles.css" rel="stylesheet">

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
        include("../pack/panels/bar.php");
        ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Class information
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="color-<?php echo $color; ?> text-warning">Class <?php echo $level; ?> - <i class="fa fa-<?php echo $sex; ?>"></i></h1>
                    <hr>
                    <h4 class="text-primary">Class code</h4>
                    <p class="text-success"><?php echo $code; ?></p>
                    <br>
                    <h4 class="text-primary">Start Time</h4>
                    <p class="text-success"><?php echo $stime ?></p>
                    <br>
                    <h4 class="text-primary">End Time</h4>
                    <p class="text-success"><?php echo $etime; ?></p>
                    <br>
                    <h4 class="text-primary">Days</h4>
                    <p class="text-success"><?php echo $days; ?> Days</p>
                    <br>
                    <h4 class="text-primary">Class Links</h4>
                    <p><i class="text-success fa fa-whatsapp"></i> <a class="text-success" href="<?php echo $whatapp; ?>">WhatsApp link</a></p>
                    <p><i class="color-blue fa fa-skype"></i> <a class="text-info" href="<?php echo $skype; ?>">Skype link</a></p>
                    <br>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Set present or not
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-warning">List of students in <?php echo $level; ?></h1>
                    <hr>
                    <label>Session</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                        <?php
                                for($i = 1 ; $i <= 16 ; $i++) {
                                    ?>
                                    <option><?php echo $i; ?></option>    
                                    <?php
                                }
                        ?>
                    </select>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Set Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM student WHERE class='$code'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $code = $row["mcode"];
                                    $fullname = $row["fname"];
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $fullname; ?></th>
                                        <td>
                                            <a href="include/set.php?code=<?php echo $code; ?>&action=p">
                                                <i class="fa fa-check color-teal"></i>
                                            </a>
                                            | 
                                            <a href="include/set.php?code=<?php echo $code; ?>&action=a">
                                                <i class="fa fa-times color-red"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
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