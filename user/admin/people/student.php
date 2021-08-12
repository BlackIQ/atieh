<?php

session_start();

include("../../../pack/config/configuration.php");

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
    <title>Atieh - Student</title>
    <link href="../../bundle/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../bundle/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../bundle/css/datepicker3.css" rel="stylesheet">
    <link href="../../bundle/css/styles.css" rel="stylesheet">
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
            <a class="navbar-brand" href="../../../"><span>Atieh</span></a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="../../../auth/logout.php">
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
            <img src="../../../people/pack/pic.jpeg" class="img-responsive" alt="User Image">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $user['firstname']; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Admin</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class=""><a href="../index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li>
            <a class="" href="../posts/new.php">
                <span class="fa fa-paper-plane-o">&nbsp;</span> Posting
            </a>
        </li>
        <li>
            <a class="" href="../people/new.php">
                <span class="fa fa-user-plus">&nbsp;</span> Add new user
            </a>
        </li>
        <li class="parent active">
            <a data-toggle="collapse" href="#people">
                <em class="fa fa-navicon">&nbsp;</em>
                People
                <span data-toggle="collapse" href="#people" class="icon pull-right">
                    <em class="fa fa-plus"></em>
                </span>
            </a>
            <ul class="children collapse" id="people">
                <li>
                    <a class="active" href=".">
                        <span class="fa fa-graduation-cap">&nbsp;</span> Students
                    </a>
                </li>
                <li>
                    <a class="" href="teacher.php">
                        <span class="fa fa-book">&nbsp;</span> Teachers
                    </a>
                </li>
                <li>
                    <a class="" href="agent.php">
                        <span class="fa fa-microphone">&nbsp;</span> Agents
                    </a>
                </li>
                <li>
                    <a class="" href="admin.php">
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
                    <a class="" href="../etc/settings.php">
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
            <li><a href="../">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">people / student</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student</h1>
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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All of students
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Phone</td>
                            <td>Email</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $get_all_admins_query = "SELECT * FROM students";
                        $get_all_admins_result = mysqli_query($connection, $get_all_admins_query);

                        while ($admin_row = mysqli_fetch_assoc($get_all_admins_result)) {
                            ?>
                            <tr>
                                <td><?php echo $admin_row["id"]; ?></td>
                                <td><?php echo $admin_row["firstname"]; ?></td>
                                <td><?php echo $admin_row["lastname"]; ?></td>
                                <td><?php echo $admin_row["email"]; ?></td>
                                <td><?php echo $admin_row["phone"]; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Selected Student
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <p>Will add.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add new Student
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fname" class="form-label">First Name</label>
                                <input id="fname" name="fname" class="form-control" placeholder="First name">
                                <br>
                            </div>
                            <div class="col-md-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input id="lname" name="lname" class="form-control" placeholder="Last name">
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input id="phone" name="phone" class="form-control" placeholder="Phone">
                                <br>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" class="form-control" placeholder="Email">
                                <br>
                            </div>
                        </div>
                        <label for="id" class="form-label">ID</label>
                        <input id="id" name="id" class="form-control" placeholder="ID">
                        <br>
                        <div>
                            <button class="btn btn-success" type="submit" name="addstudent">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../bundle/js/jquery-1.11.1.min.js"></script>
<script src="../../bundle/js/bootstrap.min.js"></script>
<script src="../../bundle/js/chart.min.js"></script>
<script src="../../bundle/js/chart-data.js"></script>
<script src="../../bundle/js/bootstrap-datepicker.js"></script>
<script src="../../bundle/js/custom.js"></script>
</body>
</html>