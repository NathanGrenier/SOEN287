<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Adopt a Dog/Cat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/browsePets.css">
    <style>
      .title-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-basis: 25%;
      }      
    </style>
  </head>
  <body>
    <?php require 'php/header.php';?>
    <main>
      <nav>
        <a class="non-active" href="index.php">Home</a>
        <a class="active" href="browsePets.php">Browse Pets</a>
        <a class="non-active" href="findAPet.php">Find a Dog/Cat</a>
        <a class="non-active" href="dogCare.php">Dog Care</a>
        <a class="non-active" href="catCare.php">Cat Care</a>
        <a class="non-active" href="giveAwayPet.php">Give Away a Pet</a>
        <a class="non-active" href="contact.php">Contact Us</a>
        <a class="non-active" href="register.php">Register</a>
      </nav>
      <div class="content">
        <?php
          if (isset($_GET["animal"])) {
            $matchFound = false;
            $filename = "files/availablePetInformation.txt";
            $read = fopen($filename, "r") or die("Unable to open file!");
        
            // Loop through each line in the file.
            while (($line = fgets($read)) !== false) {
                $lineArray = explode(":", $line);
                
                $breed = strtolower($lineArray[3]);
                $age = strtolower($lineArray[4]);
                $gender = strtolower($lineArray[5]);
                $temperment = explode(" ", $lineArray[6]);
                $temperment_out = "";
                for ($i=0; $i < count($temperment); $i++) {
                  $temperment[$i] = str_replace("_", " ", $temperment[$i]);
                  $temperment_out .= $temperment[$i] . "<br>";
                }
                if ($breed === strtolower($_GET["breed"]) && $age === strtolower($_GET["age"]) && $gender ===  strtolower($_GET["gender"])) {
                  $matchFound = true;
                  echo '
                  <div class="pet-container">
                    <img src="Pictures/' . $lineArray[3] . '.webp" alt="">
                    <div class="pet-information">
                      <h2>Information:</h2>
                      <div class="category-container">
                        <div class="category">
                          <div class="title">Breed: </div>
                          <div class="information">'. $lineArray[3] .'</div>
                        </div>
                        <div class="category">
                          <div class="title">Age: </div>
                          <div class="information">'. $lineArray[4] .'</div>
                        </div>
                        <div class="category">
                          <div class="title">Gender: </div>
                          <div class="information">'. $lineArray[5] .'</div>
                        </div>
                        <div class="category">
                          <div class="title">Temperment: </div>
                          <div class="information">'. $temperment_out .'</div>
                        </div>
                        <div class="category">
                          <div class="additional-information-container">
                            <div class="title">Additional Information: </div>
                            <div class="information additional-information">'. $lineArray[7] .'</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pet-information">
                      <button type="button" class="interested-button">Interested</button>
                    </div>
                  </div>
                  ';
                }
            }
            if (!$matchFound) {
              echo '<div class="title-container">
                      <h2 class="title" style="font-size: 3em;">No Match Found. <a href="findAPet.php">Try Again</a></h2>
                    </div>';
            }
          } else {
            echo '<div class="title-container">
                    <h2 class="title" style="font-size: 3em;"><a href="findAPet.php">Search for pets</a> first.</h2>
                  </div>';
          }
        ?>
      </div>
    </main>
    <?php require 'php/footer.php';?>
    <script src="js/popup.js"></script>
  </body>
</html>