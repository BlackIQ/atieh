<?php

include("../include/data.php");

if ($_SESSION["person"] == "student") {
    ?>
    <div class="row">
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-money color-blue"></em>
                    <div class="large"><?php echo $payment; ?></div>
                    <br>
                    <div class="text-muted">Payment Status</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-clock-o color-orange"></em>
                    <div class="large"><?php echo $start; ?></div>
                    <br>
                    <div class="text-muted">Start Time</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-book color-teal"></em>
                    <div class="large"><?php echo $level; ?></div>
                    <br>
                    <div class="text-muted">Level</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-red panel-widget ">
                <div class="row no-padding"><em class="fa fa-xl fa-user color-red"></em>
                    <div class="large"><?php echo $teacher; ?></div>
                    <br>
                    <div class="text-muted">Teacher</div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
elseif ($_SESSION['person'] == "teacher") {
    ?>
    <div class="row">
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-home color-blue"></em>
                    <div class="large">8</div>
                    <br>
                    <div class="text-muted">Total Classes</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-clock-o color-orange"></em>
                    <div class="large">12 H</div>
                    <br>
                    <div class="text-muted">Total Class Time</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-book color-teal"></em>
                    <div class="large"></div>
                    <br>
                    <div class="text-muted"></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-red panel-widget ">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-red"></em>
                    <div class="large">54</div>
                    <br>
                    <div class="text-muted">Total Students</div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
elseif ($_SESSION['person'] == "agent") {
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
    <?php
}
elseif ($_SESSION["person"] == "admin") {
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
    <?php
}

?>