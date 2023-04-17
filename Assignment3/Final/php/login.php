<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $_SESSION['login_success'] = false;
    $_SESSION['display_login_success_message'] = false;

    $filename = "../files/login.txt";

    $read = fopen($filename, "r") or die("Unable to open file!");

    // Loop through each line in the file.
    while (($line = fgets($read)) !== false) {
        $lineArray = explode(":", $line);

        if ($lineArray[0] === $username || $lineArray[1] === $password) {
            $_SESSION['login_success'] = true;
            $_SESSION['display_login_success_message'] = true;
            break;
        }
    }
    
    // Redirect back to the original file
    header("Location: ../register.php");
    exit();
}
?>