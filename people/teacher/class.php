<?php
include("core.php");

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
    <title>Atieh - Class <?php echo $code; ?></title>
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
        <li class=""><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class="parent active">
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
            <li class="active">Class</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Class</h1>
        </div>
    </div>
    <div class="panel panel-container">
        <?php
        include("../pack/panels/bar.php");
        ?>
    </div>
    <div class="row">
        <div class="col-md-6">
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
                    <h4>Class code <b><?php echo $code; ?></b></h4>
                    <br>
                    <h4>Start Time <b><?php echo $stime ?></b></h4>
                    <h4>End Time <b><?php echo $etime; ?></b></h4>
                    <br>
                    <h4>Classes are in <b><?php echo $days; ?> days</b></h4>
                    <br>
                    <h4>Class Links</h4>
                    <b>
                        <i class="text-success fa fa-whatsapp"></i> <a class="text-success" href="<?php echo $whatapp; ?>">WhatsApp link</a>
                        <i class="color-blue fa fa-skype"></i> <a class="text-info" href="<?php echo $skype; ?>">Skype link</a>
                    </b>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Set present or not
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h4>List of students in <?php echo $level; ?></h4>
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
                            <thead>
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