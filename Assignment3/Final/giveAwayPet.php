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
            <a class="non-active" href="catCare.php">Cat Care</a>
            <a class="active" href="giveAwayPet.php">Give Away a Pet</a>
            <a class="non-active" href="contact.php">Contact Us</a>
            <a class="non-active" href="register.php">Register</a>
        </nav>
        <div class="content">
            <?php
                ob_start();
            ?>
            <div class="tabs">
                <div class="tabs-topbar">
                    <h2>Choose What Pet to Give Away:</h2>
                    <div class="button-container">
                        <button class="tabs-button" data-for-tab="dog">Dog</button>
                        <button class="tabs-button" data-for-tab="cat">Cat</button>
                    </div>
                </div>
                <form class="tabs-content" data-tab="dog" method="post" action="php/addPet.php">
                    <div class="form-row">
                        <h2 class="form-title">Dog Information:</h2>
                    </div>
                    <div class="form-row">
                        <div class="form-column">
                            <div class="form-item horizontal-items">
                                <label for="dogBreed">Breed of Dog</label>
                                <select id="dogBreed" name="dogBreed">
                                    <option>German Shepard</option>
                                    <option>Poodle</option>
                                    <option>Bulldog</option>
                                    <option>Golden Retriever</option>
                                    <option>Beagle</option>
                                    <option>Pug</option>
                                    <option>French Bulldog</option>
                                    <option>Mixed</option>
                                </select>
                            </div>
                            <div class="form-item horizontal-items">
                                <label for="dogAge">Age</label>
                                <select id="dogAge" name="dogAge">
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
                            <div class="form-item">
                                <div class="vertical-items-container">
                                    <h3>Gender:</h3>
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
                                        <label for="dogCompatible_dog">Gets Along with Other Dogs</label>
                                        <input type="checkbox" id="dogCompatible_dog" name="temperment[]" value="dogCompatible">
                                    </div>
                                    <div class="item">
                                        <label for="catCompatible_dog">Gets Along with Other Cats</label>
                                        <input type="checkbox" id="catCompatible_dog" name="temperment[]" value="catCompatible">
                                    </div>
                                    <div class="item">
                                        <label for="familyCompatible_dog">Suitable for Family and Children</label>
                                        <input type="checkbox" id="familyCompatible_dog" name="temperment[]" value="familyCompatible">
                                    </div>
                                    <div class="error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item">
                            <div class="vertical-items-container">
                                <div class="item">
                                    <h3>More Information about the Pet:</h3>
                                    <textarea id="comments_dog" name="comments" rows="5" cols="50">Nothing to add</textarea>
                                </div>
                                <div class="error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <h2 class="form-title">Your Information:</h2>
                    </div>
                    <div class="form-row">
                        <div class="form-column">
                            <div class="form-item">
                                <div class="vertical-items-container">
                                    <div class="form-item">
                                        <label for="owner-name_dog">Name (First and Last)</label>
                                        <input type="text" id="owner-name_dog" name="name">
                                    </div>
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="vertical-items-container">
                                    <div class="item">
                                        <label for="email_dog">Email</label>
                                        <input type="text" id="email_dog" name="email">
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
                <form class="tabs-content" data-tab="cat" method="post" action="php/addPet.php">
                    <div class="form-row">
                        <h2 class="form-title">Cat Information:</h2>
                    </div>
                    <div class="form-row">
                        <div class="form-column">
                            <div class="form-item horizontal-items">
                                <label for="catBreed">Breed of Cat</label>
                                <select id="catBreed" name="catBreed">
                                    <option>Maine Coon</option>
                                    <option>Persian</option>
                                    <option>Siamese</option>
                                    <option>Ragdoll</option>
                                    <option>Sphynx</option>
                                    <option>Bengal</option>
                                    <option>Exotic Shorthair</option>
                                    <option>Mixed</option>
                                </select>
                            </div>
                            <div class="form-item horizontal-items">
                                <label for="catAge">Age</label>
                                <select id="catAge" name="catAge">
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
                                    <h3>Gender:</h3>
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
                                        <label for="dogCompatible_cat">Gets Along with Other Dogs</label>
                                        <input type="checkbox" id="dogCompatible_cat" name="temperment[]" value="dogCompatible">
                                    </div>
                                    <div class="item">
                                        <label for="catCompatible_cat">Gets Along with Other Cats</label>
                                        <input type="checkbox" id="catCompatible_cat" name="temperment[]" value="catCompatible">
                                    </div>
                                    <div class="item">
                                        <label for="familyCompatible_cat">Suitable for Family and Children</label>
                                        <input type="checkbox" id="familyCompatible_cat" name="temperment[]" value="familyCompatible">
                                    </div>
                                    <div class="error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item">
                            <div class="vertical-items-container">
                                <div class="item">
                                    <h3>More Information about the Pet:</h3>
                                    <textarea id="comments_cat" name="comments" rows="5" cols="50">Nothing to add</textarea>
                                </div>
                                <div class="error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <h2 class="form-title">Your Information:</h2>
                    </div>
                    <div class="form-row">
                        <div class="form-column">
                            <div class="form-item">
                                <div class="vertical-items-container">
                                    <div class="item">
                                        <label for="owner-name_cat">Name (First and Last)</label>
                                        <input type="text" id="owner-name_cat" name="name">
                                    </div>
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="vertical-items-container">
                                    <div class="item">
                                        <label for="email_cat">Email</label>
                                        <input type="text" id="email_cat" name="email">
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
            <?php
                $content = ob_get_clean();
            ?>
            <?php
                if (isset($_SESSION["login_success"]) && $_SESSION["login_success"]) {
                    echo $content;
                } else {
                    echo '<div class="title-container">
                            <h2 class="title">Before you can submit a pet, you must <a href="register.php">login</a>.</h2>
                        </div>';
                }
            ?>
        </div>
    </main>
    <?php require "php/footer.php"?>
    <script src="js/findAPet.js"></script>
    <script src="js/validateForm.js"></script>
  </body>
</html>