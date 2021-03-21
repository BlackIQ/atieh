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

?>