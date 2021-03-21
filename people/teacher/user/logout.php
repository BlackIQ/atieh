<?php

include("../include/data.php");

session_start();

session_destroy();

header("Location: http://$ip/Narbon/user/logout.php");