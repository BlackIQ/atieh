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
                <li class="dropdown"><a class="dropdown-toggle count-info" href="user/logout.php">
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
</div><!--/.sidebar-->