<?php
include("core.php");
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
            <li><a href="../agent/">
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
        $icode = $_SESSION['icode'];
        $sql = "SELECT * FROM institute WHERE icode = $icode";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $teachers = $row["teachers"];
            $students = $row["students"];
            $agents = $row["agents"];
            $classes = $row["classes"];
        }
        ?>
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
                        <div class="large"><?php echo $teachers; ?></div>
                        <br>
                        <div class="text-muted">Teachers</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-orange"></em>
                        <div class="large"><?php echo $students; ?></div>
                        <br>
                        <div class="text-muted">Students</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-red"></em>
                        <div class="large"><?php echo $agents; ?></div>
                        <br>
                        <div class="text-muted">Agents</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-home color-gray"></em>
                        <div class="large"><?php echo $classes; ?></div>
                        <br>
                        <div class="text-muted">Classes</div>
                    </div>
                </div>
            </div>
        </div>
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
                    <h1 class="text-warning">Insert a new post</h1>
                    <hr>
                    <form action="include/new.php" method="POST">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" />
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea rows="5" class="form-control" name="description" ></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="back-link">Atieh Institute</p>
            <p class="back-link">Created by <a href="https://BlackIQ.ir">Amirhossein Mohammadi</a></p>
            <p class="back-link">Powered By <a href="https://Neotrinost.ir">Neotrinost</a> <i class="fa fa-copyright"></i> <?php echo date("Y"); ?></p>
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