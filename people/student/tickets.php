<?php
include("../pack/include/data.php");

$person = $_SESSION["id"];

$sql = "SELECT * FROM report WHERE person = '$person'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Narbon - Profile</title>
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
            <li class="active">Profile</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
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
                    My Tickets
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-info">Tickets that you sent</h1>
                    <hr>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        ?>
                        <table class="table table-hover table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr title="<?php echo $row["txt"]; ?>" data-toggle="tooltip" data-placement="right">
                                    <th scope="row"><?php echo $row['code']; ?></th>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row["dt"]; ?></td>
                                    <td>Read</td>
                                </tr>
                            <?php
                                }
                                ?>
                            </tbody>
                        </table>
                                <?php
                            }
                            else {
                                ?>
                                <h2>No ticket found</h2>   
                                <?php
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("../pack/panels/footer.php");
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