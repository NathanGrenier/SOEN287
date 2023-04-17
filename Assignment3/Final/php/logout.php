<?php
session_start();
if (isset($_POST['logout'])) {
    if (isset($_SESSION["login_success"]) && $_SESSION["login_success"]) {
        unset($_SESSION["login_success"]);
        //echo "<script>alert('Successfuly logged out')</script>";
      } else {
        //echo "<script>alert('You are not logged in')</script>";
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>