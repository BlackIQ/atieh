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
if ($_SESSION['user_role'] != "agent") {
    $role = $_SESSION['user_role'];
    ?>
    <script>
        window.location.replace("../<?php echo $role; ?>");
    </script>
    <?php
}

?>
