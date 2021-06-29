<?php

include('core.php');

include("../pack/include/data.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atieh - Payment</title>
    <link href="../../pack/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../pack/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../pack/css/datepicker3.css" rel="stylesheet">
    <link href="../../pack/css/styles.css" rel="stylesheet">
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
            <li class="active">Payment</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payment</h1>
        </div>
    </div><!--/.row-->
    <div class="panel panel-container">
        <?php
        include("../pack/panels/bar.php");
        ?>
    </div>

    <?php
    echo $panel;
    ?>

    <div class="row">
        <div class="col-sm-12">
            <p class="back-link"><a href="http://<?php echo $ip; ?>/Narbon">Narbon</a></p>
            <p class="back-link">Created by <a href="https://www.github.com/BlackIQ">Amirhossein Mohammadi</a></p>
            <p class="back-link">Powered By <a href="https://www.linkedin.com/company/neotrinost">Neotrinost</a> <i class="fa fa-copyright"></i> <?php echo date("Y"); ?></p>
            <p class="back-link">
                <i class="fa fa-lg fa-linkedin-square text-info"></i>
                <i class="fa fa-lg fa-github"></i>
                <i class="fa fa-lg fa-telegram text-primary"></i>
                <i class="fa fa-lg fa-instagram text-danger"></i>
            </p>
        </div>
    </div>
</div>
<script src="../../pack/js/jquery-1.11.1.min.js"></script>
<script src="../../pack/js/bootstrap.min.js"></script>
<script src="../../pack/js/chart.min.js"></script>
<script src="../../pack/js/chart-data.js"></script>
<script src="../../pack/js/easypiechart.js"></script>
<script src="../../pack/js/easypiechart-data.js"></script>
<script src="../../pack/js/bootstrap-datepicker.js"></script>
<script src="../../pack/js/custom.js"></script>
</body>
</html>