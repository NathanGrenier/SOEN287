<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $_SESSION['register_success'] = true;

    $filename = "../files/login.txt";

    $read = fopen($filename, "r") or die("Unable to open file!");

    // Loop through each line in the file.
    while (($line = fgets($read)) !== false) {
        $lineArray = explode(":", $line);

        // Check if the second value in the array matches the value we want to compare to.
        if ($lineArray[0] === $username) {
            // there is already an identical username in the database 
            $_SESSION['register_success'] = false;
            break;
        }
    }

    // Close the file read.
    fclose($read);

    if ($_SESSION['register_success']) {
        // Create new account
        $write = fopen($filename, "a") or die("Unable to open file!");
        $txt = $username . ":" . $password . "\n";
        fwrite($write, $txt);
        fclose($write);
    }
    
    // Redirect back to the original file
    header("Location: ../register.php");
    exit();
}
?>