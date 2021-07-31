<?php

session_start();

include("auth.php");
include("../pack/config/configuration.php");

if ($_SESSION['session_status']) {
    $role = $_SESSION['user_role'];
    ?>
    <script>
        window.location.replace("../user/<?php echo $role; ?>");
    </script>
    <?php
}

?>
