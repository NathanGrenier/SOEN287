<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check which form was submitted
    if (isset($_POST['submit_dog'])) {
        $animal = "dog";
    } else if (isset($_POST['submit_cat'])) {
        $animal = "cat";
    }
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    // Redirect back to the original file
    header("Location: ../browsePets.php?animal={$animal}&breed={$breed}&age={$age}&gender={$gender}");
    exit();
}
?>