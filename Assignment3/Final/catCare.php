<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Adopt a Dog/Cat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/petCare.css">
  </head>
  <body>
    <?php require "php/header.php"?>
    <main>
      <nav>
        <a class="non-active" href="index.php">Home</a>
        <a class="non-active" href="browsePets.php">Browse Pets</a>
        <a class="non-active" href="findAPet.php">Find a Dog/Cat</a>
        <a class="non-active" href="dogCare.php">Dog Care</a>
        <a class="active" href="catCare.php">Cat Care</a>
        <a class="non-active" href="giveAwayPet.php">Give Away a Pet</a>
        <a class="non-active" href="contact.php">Contact Us</a>
        <a class="non-active" href="register.php">Register</a>
      </nav>
      <div class="content">
        <div class="title-container">
            <h2 class="title">Useful Information to Know about Cats</h2>
        </div>
        <div class="information-container">
            <div class="information-item">
                <a href="https://icatcare.org/advice/thinking-of-getting-a-cat/" target="_blank"><img alt="Cat Care" src="Pictures/catCare.jpg"></a>
                <h2>How to Care for Cats</h2>
            </div>
            <div class="information-item">
                <a href="https://www.aspca.org/pet-care/cat-care/common-cat-behavior-issues" target="_blank"><img alt="Cat Behavior" src="Pictures/catBehavior.jpg"></a>
                <h2>Cat Behavior</h2>
            </div>
            <div class="information-item">
                <a href="https://www.aspca.org/pet-care/cat-care/cat-nutrition-tips" target="_blank"><img alt="Cat Diet" src="Pictures/catEating.webp"></a>
                <h2>Cat Diet</h2>
            </div>
        </div>
      </div>
    </main>
    <?php require "php/footer.php"?>
  </body>
</html>