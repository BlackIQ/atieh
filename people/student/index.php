<?php

include('check.php');

include("../pack/include/data.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atieh - Dashboard</title>
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
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <div class="panel panel-container">
        <?php
        include("../pack/panels/bar.php");
        ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Class
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-warning">Class Information</h1>
                    <hr>
                    <h4 class="text-primary">Teacher's name</h4>
                    <p class="text-success"><b><i class="fa fa-user"></i> <?php echo $fteacher; ?></b></p>
                    <br>
                    <h4 class="text-primary"><i class="fa fa-link"></i> Class links</h4>
                    <p class="text-danger"><b>
                        <b class="text-primary"><i class="fa fa-skype"></i> Skype</b> | <b class="text-success"><i class="fa fa-whatsapp"></i> WhatsApp</b>
                    </p>
                    <br>
                    <h4 class="text-primary"><i class="fa fa-clock-o"></i> Class period</h4>
                    <p class="text-muted"><b class="text-danger"><?php echo $start; ?></b> until <b class="text-success"><?php echo $end; ?></b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Homework
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-warning">Session <?php echo $homeworksession; ?></h1>
                    <hr>
                    <h3 class="text-primary"><?php echo $homeworktitle; ?></h3>
                    <p class="text-success"><?php echo $homeworktext; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../pack/panels/footer.php");
    ?>
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