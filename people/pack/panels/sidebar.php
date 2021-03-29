<?php

include("../include/data.php");

if ($_SESSION["person"] == "student") {
    ?>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="http://<?php echo $ip; ?>/Narbon"><span>Narbon </span>Project</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" href="http://<?php echo $ip; ?>/Narbon/account/logout.php">
                            <em class="fa fa-sign-out"></em>
                        </a>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../pack/pic.jpeg" class="img-responsive" alt="User Image">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php echo $username; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Student</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li>
                <a class="" href="tickets.php">
                    <span class="fa fa-envelope">&nbsp;</span> Tickets
                </a>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-navicon">&nbsp;</em> Menu <span data-toggle="collapse" href="#sub-item-1"
                                                                     class="icon pull-right"><em
                            class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="profile.php">
                            <span class="fa fa-user">&nbsp;</span> Profile
                        </a>
                    </li>
                    <li>
                        <a class="" href="class.php">
                            <span class="fa fa-home">&nbsp;</span> Class
                        </a>
                    </li>
                    <li>
                        <a class="" href="payment.php">
                            <span class="fa fa-money">&nbsp;</span> Payment
                        </a>
                    </li>
                    <li>
                        <a class="" href="setting.php">
                            <span class="fa fa-cogs">&nbsp;</span> Setting
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <?php
}
elseif ($_SESSION["person"] == "teacher") {
    ?>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="http://<?php echo $ip; ?>/Narbon"><span>Narbon </span>Project</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" href="http://<?php echo $ip; ?>/Narbon/account/logout.php">
                            <em class="fa fa-sign-out"></em>
                        </a>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
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
            <li>
                <a class="" href="tickets.php">
                    <span class="fa fa-envelope">&nbsp;</span> Tickets
                </a>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-navicon">&nbsp;</em> Menu <span data-toggle="collapse" href="#sub-item-1"
                                                                     class="icon pull-right"><em
                            class="fa fa-plus"></em></span>
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
    <?php
}
elseif ($_SESSION["person"] == "agent") {
    ?>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="http://<?php echo $ip; ?>/Narbon"><span>Narbon </span>Project</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" href="http://<?php echo $ip; ?>/Narbon/account/logout.php">
                            <em class="fa fa-sign-out"></em>
                        </a>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../pack/pic.jpeg" class="img-responsive" alt="User Image">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php echo $username; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Agent</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li>
                <a class="" href="tickets.php">
                    <span class="fa fa-envelope">&nbsp;</span> Tickets
                </a>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-navicon">&nbsp;</em> Menu <span data-toggle="collapse" href="#sub-item-1"
                                                                     class="icon pull-right"><em
                            class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="post.php">
                            <span class="fa fa-sticky-note">&nbsp;</span> New Post
                        </a>
                    </li>
                    <li>
                        <a class="" href="posts.php">
                            <span class="fa fa-book">&nbsp;</span> Posts
                        </a>
                    </li>
                    <li>
                        <a class="" href="profile.php">
                            <span class="fa fa-user">&nbsp;</span> Profile
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <?php
}
elseif ($_SESSION["person"] == "admin") {
    ?>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="http://<?php echo $ip; ?>/Narbon"><span>Narbon </span>Project</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" href="http://<?php echo $ip; ?>/Narbon/account/logout.php">
                            <em class="fa fa-sign-out"></em>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../pack/pic.jpeg" class="img-responsive" alt="User Image">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php echo $username; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Admin</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li>
                <a class="" href="tickets.php">
                    <span class="fa fa-envelope">&nbsp;</span> Tickets
                </a>
            </li>
            <li>
                <a class="" href="search.php">
                    <span class="fa fa-search">&nbsp;</span> Search
                </a>
            </li>
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
                                <a class="" href="class.php?code=<?php echo $row["code"]; ?>">
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
    <?php
}
elseif ($_SESSION['person'] == "parent") {
    ?>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="http://<?php echo $ip; ?>/Narbon"><span>Narbon </span>Project</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" href="http://<?php echo $ip; ?>/Narbon/account/logout.php">
                            <em class="fa fa-sign-out"></em>
                        </a>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../pack/pic.jpeg" class="img-responsive" alt="User Image">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php echo $username; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Student</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li>
                <a class="" href="tickets.php">
                    <span class="fa fa-envelope">&nbsp;</span> Tickets
                </a>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-navicon">&nbsp;</em> Menu <span data-toggle="collapse" href="#sub-item-1"
                                                                     class="icon pull-right"><em
                            class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="profile.php">
                            <span class="fa fa-user">&nbsp;</span> Profile
                        </a>
                    </li>
                    <li>
                        <a class="" href="class.php">
                            <span class="fa fa-home">&nbsp;</span> Class
                        </a>
                    </li>
                    <li>
                        <a class="" href="payment.php">
                            <span class="fa fa-money">&nbsp;</span> Payment
                        </a>
                    </li>
                    <li>
                        <a class="" href="setting.php">
                            <span class="fa fa-cogs">&nbsp;</span> Setting
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <?php
}

?>