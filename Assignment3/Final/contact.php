<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Adopt a Dog/Cat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
  </head>
  <body>
    <?php require "php/header.php"?>
    <main>
      <nav>
        <a class="non-active" href="../index.php">Home</a>
        <a class="non-active" href="browsePets.php">Browse Pets</a>
        <a class="non-active" href="findAPet.php">Find a Dog/Cat</a>
        <a class="non-active" href="dogCare.php">Dog Care</a>
        <a class="non-active" href="catCare.php">Cat Care</a>
        <a class="non-active" href="giveAwayPet.php">Give Away a Pet</a>
        <a class="active" href="contact.php">Contact Us</a>
      </nav>
      <div class="content">
          <h2 class="title">Contact Us</h2>
            <div class="info-container">
                <div class="info-item">
                    <label>Name: </label><span>Nathan Grenier</span>
                </div>
                <div class="info-item">
                    <label>Student ID: </label><span>40250986</span>
                </div>
                <div class="info-item">
                    <label>Email: </label><span>nathangrenier01@gmail.com</span>
                </div>
                <div class="info-item">
                    <label>Phone Number: </label><span>514-771-5729</span>
                </div>
            </div>
        <h2 class="title">Socials</h2>
            <div class="socials-container">
                <div class="socials-item">
                    <a href="https://www.instagram.com/" target="blank_"><img alt="Instagram" src="Pictures/instagramLogo.webp"></a>
                </div>
                <div class="socials-item">
                    <a href="https://www.facebook.com/" target="blank_"><img alt="Facebook" src="Pictures/facebookLogo.png"></a>
                </div>
                <div class="socials-item">
                    <a href="https://www.youtube.com/" target="blank_"><img alt="Youtube" src="Pictures/youtubeLogo.webp"></a>
                </div>
            </div>
      </div>
    </main>
    <?php require "php/footer.php"?>
  </body>
</html>