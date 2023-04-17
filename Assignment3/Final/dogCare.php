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
        <a class="active" href="dogCare.php">Dog Care</a>
        <a class="non-active" href="catCare.php">Cat Care</a>
        <a class="non-active" href="giveAwayPet.php">Give Away a Pet</a>
        <a class="non-active" href="contact.php">Contact Us</a>
        <a class="non-active" href="register.php">Register</a>
      </nav>
      <div class="content">
        <div class="title-container">
            <h2 class="title">Useful Information to Know about Dogs</h2>
        </div>
        <div class="information-container">
            <div class="information-item">
                <a href="https://www.aspca.org/pet-care/dog-care/general-dog-care" target="_blank"><img alt="Dog Care" src="Pictures/dogCare.jpg"></a>
                <h2>How to Care for Dogs</h2>
            </div>
            <div class="information-item">
                <a href="https://www.aspca.org/pet-care/dog-care/common-dog-behavior-issues" target="_blank"><img alt="Dog Behavior" src="Pictures/dogBehavior.jpg"></a>
                <h2>Dog Behavior</h2>
            </div>
            <div class="information-item">
                <a href="https://vcacanada.com/know-your-pet/nutrition-general-feeding-guidelines-for-dogs" target="_blank"><img alt="Dog Diet" src="Pictures/dogDiet1.jpg"></a>
                <h2>Dog Diet</h2>
            </div>
        </div>
      </div>
    </main>
    <?php require "php/footer.php"?>
  </body>
</html>