<?php

session_start();

include("../../pack/config/configuration.php");

if ($_SESSION['session_status'] != true) {
    ?>
    <script>
        window.location.replace("../../");
    </script>
    <?php
}
if ($_SESSION['user_role'] != "admin") {
    $role = $_SESSION['user_role'];
    ?>
    <script>
        window.location.replace("../<?php echo $role; ?>");
    </script>
    <?php
}

$id = $_SESSION['user_id'];
$get_user_data = "SELECT * FROM admin WHERE id = '$id'";
$get_user_result = mysqli_query($connection, $get_user_data);
$user = mysqli_fetch_assoc($get_user_result);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Narbon - Dashboard</title>
    <link href="../bundle/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bundle/css/font-awesome.min.css" rel="stylesheet">
    <link href="../bundle/css/datepicker3.css" rel="stylesheet">
    <link href="../bundle/css/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="../../"><span>Atieh</span></a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="../../auth/logout.php">
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
            <img src="../../people/pack/pic.jpeg" class="img-responsive" alt="User Image">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $user['firstname']; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Admin</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li>
            <a class="" href="posts/new.php">
                <span class="fa fa-paper-plane-o">&nbsp;</span> Posting
            </a>
        </li>
        <li>
            <a class="" href="people/new.php">
                <span class="fa fa-user-plus">&nbsp;</span> Add new user
            </a>
        </li>
        <li class="parent ">
            <a data-toggle="collapse" href="#people">
                <em class="fa fa-navicon">&nbsp;</em>
                People
                <span data-toggle="collapse" href="#people" class="icon pull-right">
                    <em class="fa fa-plus"></em>
                </span>
            </a>
            <ul class="children collapse" id="people">
                <li>
                    <a class="" href="people/student.php">
                        <span class="fa fa-graduation-cap">&nbsp;</span> Students
                    </a>
                </li>
                <li>
                    <a class="" href="people/teacher.php">
                        <span class="fa fa-book">&nbsp;</span> Teachers
                    </a>
                </li>
                <li>
                    <a class="" href="people/agent.php">
                        <span class="fa fa-microphone">&nbsp;</span> Agents
                    </a>
                </li>
                <li>
                    <a class="" href="people/admin.php">
                        <span class="fa fa-map-marker">&nbsp;</span> Admins
                    </a>
                </li>
            </ul>
        </li>
        <li class="parent ">
            <a data-toggle="collapse" href="#etc">
                <em class="fa fa-navicon">&nbsp;</em>
                Others
                <span data-toggle="collapse" href="#etc" class="icon pull-right">
                    <em class="fa fa-plus"></em>
                </span>
            </a>
            <ul class="children collapse" id="etc">
                <li>
                    <a class="" href="etc/settings.php">
                        <span class="fa fa-cogs">&nbsp;</span> Setting
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../admin">
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
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
                        <div class="large">1</div>
                        <br>
                        <div class="text-muted">Teachers</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-orange"></em>
                        <div class="large">1</div>
                        <br>
                        <div class="text-muted">Students</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-red"></em>
                        <div class="large">1</div>
                        <br>
                        <div class="text-muted">Agents</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-home color-gray"></em>
                        <div class="large">1</div>
                        <br>
                        <div class="text-muted">Classes</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Fast shortcuts</h3>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Post
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <form>
                        <label for="title" class="form-label">Post Title</label>
                        <input id="title" type="text" name="title" placeholder="Post Title" class="form-control">
                        <br>
                        <label for="text">Post text</label>
                        <textarea class="form-control" id="text" name="text" placeholder="Post Text" rows="5"></textarea>
                        <br>
                        <label for="type">Choose a type</label>
                        <select class="form-control" id="type" name="type">
                            <option selected>Choose a type</option>
                            <option value="normal">Normal Post</option>
                            <option value="news">News Post</option>
                            <option value="offer">Offer Post</option>
                        </select>
                        <br>
                        <button class="btn btn-success" name="fastpost">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../bundle/js/jquery-1.11.1.min.js"></script>
<script src="../bundle/js/bootstrap.min.js"></script>
<script src="../bundle/js/chart.min.js"></script>
<script src="../bundle/js/chart-data.js"></script>
<script src="../bundle/js/bootstrap-datepicker.js"></script>
<script src="../bundle/js/custom.js"></script>
</body>
</html>