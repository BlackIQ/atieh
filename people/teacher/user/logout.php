<?php

$ip = "192.168.1.3";

session_start();

session_destroy();

header("Location: http://$ip/Atieh");