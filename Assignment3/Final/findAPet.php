<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Adopt a Dog/Cat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
  </head>
  <body>
    <?php require "php/header.php"?>
    <main>
      <nav>
        <a class="non-active" href="index.php">Home</a>
        <a class="non-active" href="browsePets.php">Browse Pets</a>
        <a class="active" href="findAPet.php">Find a Dog/Cat</a>
        <a class="non-active" href="dogCare.php">Dog Care</a>
        <a class="non-active" href="catCare.php">Cat Care</a>
        <a class="non-active" href="giveAwayPet.php">Give Away a Pet</a>
        <a class="non-active" href="contact.php">Contact Us</a>
        <a class="non-active" href="register.php">Register</a>
      </nav>
      <div class="content">
        <div class="tabs">
            <div class="tabs-topbar">
                <h2>Choose What Pet to Search For:</h2>
                <div class="button-container">
                    <button class="tabs-button" data-for-tab="dog">Dog</button>
                    <button class="tabs-button" data-for-tab="cat">Cat</button>
                </div>
            </div>
            <form class="tabs-content" data-tab="dog" action="php/findPet.php" method="post">
                <div class="form-row">
                    <h2 class="form-title">Find a Dog:</h2>
                </div>
                <div class="form-row">
                    <div class="form-column">
                        <div class="form-item horizontal-items">
                            <label for="dogBreed">Breed of Dog</label>
                            <select id="dogBreed" name="breed">
                                <option>German Shepard</option>
                                <option>Poodle</option>
                                <option>Bulldog</option>
                                <option>Golden Retriever</option>
                                <option>Beagle</option>
                                <option>Pug</option>
                                <option>French Bulldog</option>
                            </select>
                        </div>
                        <div class="form-item horizontal-items">
                            <label for="dogAge">Prefered Age</label>
                            <select id="dogAge" name="age">
                                <option>Puppy</option>
                                <option>2-4 years</option>
                                <option>5-8 years</option>
                                <option>9-12 years</option>
                                <option>13-16 years</option>
                                <option>Dosen't Matter</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-column">
                        <h3>Preffered Gender:</h3>
                        <div class="form-item">
                            <div class="vertical-items-container">
                              <div class="item">
                                <label for="male_dog">Male</label>
                                <input type="radio" id="male_dog" name="gender" value="male">
                              </div>
                              <div class="item">
                                <label for="female_dog">Female</label>
                                <input type="radio" id="female_dog" name="gender" value="female">
                              </div>
                              <div class="item">
                                <label for="Dosen't_Matter_dog">Dosen't Matter</label>
                                <input type="radio" id="Dosen't_Matter_dog" name="gender" value="dosen't matter">
                              </div>
                              <div class="error"></div>
                            </div>  
                        </div>
                        <div class="form-item">
                          <div class="vertical-items-container">
                            <h3>Temperment:</h3>
                            <div class="item">
                              <label for="mild_dog">Mild</label>
                              <input type="radio" id="mild_dog" name="temperment">
                            </div>
                            <div class="item">
                              <label for="agressive_dog">Agressive</label>
                              <input type="radio" id="agressive_dog" name="temperment">
                            </div>
                            <div class="error"></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="submit">
                        <input type="submit" id="submit_dog" name="submit_dog">
                        <input type="reset" id="reset_dog" name="reset">
                    </div>
                </div>
            </form>
            <form class="tabs-content" data-tab="cat" action="php/findPet.php" method="post">
                <div class="form-row">
                    <h2 class="form-title">Find a Cat:</h2>
                </div>
                <div class="form-row">
                    <div class="form-column">
                        <div class="form-item">
                            <label for="catBreed">Breed of Cat</label>
                            <select id="catBreed" name="breed">
                                <option>Maine Coon</option>
                                <option>Persian</option>
                                <option>Siamese</option>
                                <option>Ragdoll</option>
                                <option>Sphynx</option>
                                <option>Bengal</option>
                                <option>Exotic Shorthair</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <label for="catAge">Prefered Age</label>
                            <select id="catAge" name="age">
                                <option>Kitten</option>
                                <option>2-4 years</option>
                                <option>5-8 years</option>
                                <option>9-12 years</option>
                                <option>13-16 years</option>
                                <option>Dosen't Matter</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-column">
                        <div class="form-item">
                          <div class="vertical-items-container">
                            <h3>Preffered Gender:</h3>
                            <div class="item">
                              <label for="male_cat">Male</label>
                              <input type="radio" id="male_cat" name="gender" value="male">
                            </div>
                            <div class="item">
                              <label for="female_cat">Female</label>
                              <input type="radio" id="female_cat" name="gender" value="female">
                            </div>
                            <div class="item">
                              <label for="Dosen't_Matter_cat">Dosen't Matter</label>
                              <input type="radio" id="Dosen't_Matter_cat" name="gender" value="dosen't matter">
                            </div>
                            <div class="error"></div>
                          </div>  
                        </div>
                        <div class="form-item">
                          <div class="vertical-items-container">
                            <h3>Temperment:</h3>
                            <div class="item">
                              <label for="mild_cat">Mild</label>
                              <input type="radio" id="mild_cat" name="temperment">
                            </div>
                            <div class="item">
                              <label for="agressive_cat">Agressive</label>
                              <input type="radio" id="agressive_cat" name="temperment">                              
                            </div>
                            <div class="error"></div>
                          </div>  
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="submit">
                        <input type="submit" id="submit_cat" name="submit_cat">
                        <input type="reset" id="reset_cat" name="reset">
                    </div>
                </div>
            </form>
        </div>
      </div>
    </main>
    <?php require "php/footer.php"?>
    <script src="js/findAPet.js"></script>
    <script src="js/validateForm.js"></script>
  </body>
</html>