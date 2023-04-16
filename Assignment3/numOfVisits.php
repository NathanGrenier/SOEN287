<?php
if (!isset($_COOKIE["lastVisit"])) {
    setcookie("lastVisit", date("l, F jS, H:i:s T Y"), time() + (86400 * 30), "/");
    setcookie("visitCount", 2, time() + (86400 * 30), "/"); // 86400 = 1 day
} else {
    $lastVisit = $_COOKIE["lastVisit"];
    setcookie("lastVisit", date("l, F jS, H:i:s T Y"), time() + (86400 * 30), "/");
    setcookie("visitCount", $_COOKIE["visitCount"] + 1, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 3 - numOfVisits</title>
</head>
<body>
    <h1 style="text-align:center;">Cookies Test Web Page</h1>
    
    <?php
    if (!isset($_COOKIE["lastVisit"])) {
        echo "Welcome to my webpage! It is your first time that you are here!<br>";
    } else {
        echo "Hello, this is the " . $_COOKIE["visitCount"] . " time that you are visiting my webpage.<br>";
        echo "Last time you visited my webpage on: " . $lastVisit;
    }
    ?>
</body>
</html>