<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check which form was submitted
    if (isset($_POST['submit_dog'])) {
        $animal = "dog";
        $breed = $_POST["dogBreed"];
        $age = $_POST["dogAge"];
    } else if (isset($_POST['submit_cat'])) {
        $animal = "cat";
        $breed = $_POST["catBreed"];
        $age = $_POST["catAge"];
    }
    $gender = $_POST["gender"];
    $tempermentArray = $_POST["temperment"];
    $comments = $_POST["comments"];
    $name = $_POST["name"];

    $temperment = "";
    foreach ($tempermentArray as $value) {
        $temperment = $temperment . " " . $value;
    }
    $temperment = trim($temperment);

    $filename = "../files/availablePetInformation.txt";

    $read = fopen($filename, "r") or die("Unable to open file!");

    $last_line = fgets($read);
    if (filesize($filename) == 0) {
        $currentPetIndex = 0;
    } else {
        // Get last line of file
        $lines = file($filename);
        $last_line = $lines[count($lines)-1];
        $currentPetIndex = (int) explode(":", $last_line)[0];
    }
    fclose($read);

    // Create new account
    $write = fopen($filename, "a") or die("Unable to open file!");
    $txt = ($currentPetIndex + 1) . ":" . $name . ":" . $animal . ":" . $breed . ":" . $age . ":" . $gender . ":" . $temperment . ":" . $comments . "\n";
    fwrite($write, $txt);

    fclose($write);
    
    // Redirect back to the original file
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    echo "bad";
}
?>