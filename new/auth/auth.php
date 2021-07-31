<?php

session_start();

include("../pack/config/configuration.php");


$errors = array();

if (isset($_POST['logging'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);

    if (empty($id)) {
        array_push($errors, "Id is required.");
    }
    if (empty($password)) {
        array_push($errors, "Password is required.");
    }
    if (empty($role)) {
        array_push($errors, "Role is required.");
    }

    if (count($errors) == 0) {
        if ($role == 'student') {
            $get_student_query = "SELECT * FROM students WHERE `id` = '$id' AND `password` = '$password'";
            $result_student_query = mysqli_query($connection, $get_student_query);
            if (mysqli_num_rows($result_student_query) == 1) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_role'] = $role;
                $_SESSION['session_status'] = true;
                ?>
                <script>
                    window.location.replace("../user/student");
                </script>
                <?php
            }
            else {
                array_push($errors, "Id or password is wrong.");
            }
        }
        if ($role == 'teacher') {
            $get_teacher_query = "SELECT * FROM teachers WHERE `id` = '$id' AND `password` = '$password'";
            $result_teacher_query = mysqli_query($connection, $get_teacher_query);
            if (mysqli_num_rows($result_teacher_query) == 1) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_role'] = $role;
                $_SESSION['session_status'] = true;
                ?>
                <script>
                    window.location.replace("../user/teacher");
                </script>
                <?php
            }
            else {
                array_push($errors, "Id or password is wrong.");
            }
        }
        if ($role == 'agent') {
            $get_agent_query = "SELECT * FROM agents WHERE `id` = '$id' AND `password` = '$password'";
            $result_agent_query = mysqli_query($connection, $get_agent_query);
            if (mysqli_num_rows($result_agent_query) == 1) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_role'] = $role;
                $_SESSION['session_status'] = true;
                ?>
                <script>
                    window.location.replace("../user/agent");
                </script>
                <?php
            }
            else {
                array_push($errors, "Id or password is wrong.");
            }
        }
        if ($role == 'admin') {
            $get_admin_query = "SELECT * FROM admins WHERE `id` = '$id' AND `password` = '$password'";
            $result_admin_query = mysqli_query($connection, $get_admin_query);
            if (mysqli_num_rows($result_admin_query) == 1) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_role'] = $role;
                $_SESSION['session_status'] = true;
                ?>
                <script>
                    window.location.replace("../user/admin");
                </script>
                <?php
            }
            else {
                array_push($errors, "Id or password is wrong.");
            }
        }
        else {
            array_push($errors, "Sorry, something went wrong.");
        }
    }
}