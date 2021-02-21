<?php
// Database Connection
$server = "localhost";
$user = "milad";
$passwd = "milad";
$db = "Atieh";

$conn = mysqli_connect($server, $user, $passwd, $db);

$tcode = $_SESSION['code'];

$sql = "SELECT * FROM class WHERE teacher_code='$tcode'";
$result = mysqli_query($conn, $sql);
?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>Atieh </span>Institute</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" href="http://192.168.1.4/Atieh/student/user/logout.php">
                        <em class="fa fa-sign-out"></em>
                    </a>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="https://github.com/BlackIQ.png" class="img-responsive" alt="User Image">
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
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Menu <span data-toggle="collapse" href="#sub-item-1"
                                                                 class="icon pull-right"><em
                        class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <li>
                            <a class="" href="class.php?code=<?php echo $row["code"]; ?>">
                                <span class="fa fa-home">&nbsp;</span> <?php echo $row["level"]; ?>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </li>
    </ul>
</div><!--/.sidebar-->