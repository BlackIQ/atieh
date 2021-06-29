<?php

include('check.php');

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

    <?php
    include("../pack/panels/footer.php");
    ?>

</div>    <!--/.main-->

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