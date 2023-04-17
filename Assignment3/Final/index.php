<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Adopt a Dog/Cat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <?php require 'php/header.php';?>
    <main>
      <nav>
        <a class="active" href="index.php">Home</a>
        <a class="non-active" href="browsePets.php">Browse Pets</a>
        <a class="non-active" href="findAPet.php">Find a Dog/Cat</a>
        <a class="non-active" href="dogCare.php">Dog Care</a>
        <a class="non-active" href="catCare.php">Cat Care</a>
        <a class="non-active" href="giveAwayPet.php">Give Away a Pet</a>
        <a class="non-active" href="contact.php">Contact Us</a>
        <a class="non-active" href="register.php">Register</a>
      </nav>
      <div class="content">
        <div class="text-box">
          <div class="title-container">
            <h3>Welcome to the adopt a pet initiative!</h3>
          </div>
          <div class="text-container">
            <p>The goal of our organization is to match pets with owners.</p>
            <p>We have a wide range of cat and dog breeds to adopt from as well as the ability to temporarly house any donated pets until their adoption.</p>
          </div>
        </div>
        <div class="image-box">
          <div class="image-container">
            <img alt="Adopted Pet" src="Pictures/Adopting_a_Pet.webp">
          </div>
          <div class="image-container">
            <img alt="Happy Pet" src="Pictures/Happy_Pet.jpg">
          </div>
        </div>
      </div>
    </main>
    <?php require 'php/footer.php';?>
  </body>
</html>
