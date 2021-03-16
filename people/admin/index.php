<?php
include("include/data.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atieh - Dashboard</title>
    <script>
        window.alert("<?php echo $username; ?> , Welcome To Student Panel !");
    </script>
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
            <li><a href="../agent/">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
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
                    New Post
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-warning">Table of classes</h1>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Class Level</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Days</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM class WHERE icode='$code'";
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
                                        $sex = $row['sex'];
                                        $level = $row['level'];
                                        $days = $row['days'];
                                        
                                        if ($sex == "male") {
                                            $iconcolor = "blue";
                                        }
                                        elseif ($sex == "female") {
                                            $iconcolor = "red";
                                        }
                                        
                                        ?>
                                        <tr class="color-<?php echo $iconcolor; ?>">
                                            <th><a class="color-<?php echo $iconcolor; ?>" href="class.php?code=<?php echo $code; ?>"><i class="fa fa-<?php echo $sex; ?>"></i> <?php echo $level; ?></a></th>
                                            <td><?php echo $starttime; ?></td>
                                            <td><?php echo $endtime; ?></td>
                                            <td><?php echo $days; ?></td>
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
    </div><!--/.row-->

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