<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atieh - Index</title>
    <script>
        window.alert("Hello ! Welcome To Atieh !");
    </script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
<!--    <div>
        <div class="well">
            <div class="media">
                <div class="media-body">
                    <h4 class="media-heading">Are you ready for it ?</h4>
                    <p class="text-right">By Atieh Agent</p>
                    <p>Ready for a big update !</p>
                    <hr>
                    <p><i class="fa fa-calendar"></i> 2021/5/4 | <i class="fa fa-clock-o"></i> 15:30</p>
                </div>
            </div>
        </div>
    </div>-->

 
<div class="main">
    <?php
    include("panels/sidebar.php");
    ?>
    
    <br>
    
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <div id="postlist">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h3 class="pull-left">Title</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        Text for test
                        <hr>
                        <small><i class="fa fa-calendar"></i> 2021/5/4 | <i class="fa fa-clock-o"></i> 15:30</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("panels/footer.php");
    ?>
    
</div>

    
       
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
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