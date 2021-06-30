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
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../">Atieh Institute</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="../../account/logout.php">
                        <em class="fa fa-sign-out"></em>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="../pack/pic.jpeg" class="img-responsive" alt="User Image">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $username; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Teacher</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Classes
                <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
                    <em class="fa fa-plus"></em>
                </span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <?php
                $sql = "SELECT * FROM class WHERE tcode='$id'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row["sex"] == "male") {
                            $icon = "male";
                        }
                        elseif ($row["sex"] == "female") {
                            $icon = "female";
                        }
                        else {
                            $icon = "times";
                        }
                        ?>
                        <li>
                            <a class="" href="class.php?code=<?php echo $row["ccode"]; ?>">
                                <span class="fa fa-<?php echo $icon; ?>">&nbsp;</span> <?php echo $row["level"]; ?>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../teacher">
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
                    My Classes
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
                                $sql = "SELECT * FROM class WHERE tcode='$id'";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if ($row["sex"] == "male") {
                                            $iconcolor = "blue";
                                        }
                                        elseif ($row["sex"] == "female") {
                                            $iconcolor = "red";
                                        }
                                        
                                        ?>
                                        <tr class="color-<?php echo $iconcolor; ?>">
                                            <th><a class="color-<?php echo $iconcolor; ?>" href="class.php?code=<?php echo $row["ccode"]; ?>"><i class="fa fa-<?php echo $row["sex"]; ?>"></i> <?php echo $row["level"]; ?></a></th>
                                            <td><?php echo $row["start"]; ?></td>
                                            <td><?php echo $row["end"]; ?></td>
                                            <td><?php echo $row["days"]; ?></td>
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
<script src="../../pack/js/custom.js"></script></body>
</html>