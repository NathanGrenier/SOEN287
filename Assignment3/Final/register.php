<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
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
        <a class="non-active" href="giveAwayPet.php">Give Away a Pet</a>
        <a class="non-active" href="contact.php">Contact Us</a>
        <a class="active" href="register.php">Register</a>
      </nav>

      <div class="content">
        <div class="tabs">
            <div class="tabs-topbar">
                <h2>Login / Register:</h2>
                <div class="button-container">
                    <button class="tabs-button" data-for-tab="login">Login</button>
                    <button class="tabs-button" data-for-tab="register">Register</button>
                </div>
            </div>
            <form class="tabs-content" data-tab="login" method="post" action="php/login.php">
                <div class="form-row">
                    <h2 class="form-title">Login:</h2>
                </div>
                <div class="form-row">
                    <div class="form-column">
                        <div class="form-item">
                            <div class="vertical-items-container">
                                <div class="form-item"> 
                                    <label for="username">Username</label>
                                    <input type="text" id="login-username" name="username">
                                </div>
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="vertical-items-container">
                                <div class="form-item">
                                    <label for="password">Password</label>
                                    <input type="text" id="login-password" name="password"></input>
                                </div>
                                <div class="error"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="submit">
                        <input type="submit" id="login-submit" name="submit">
                    </div>
                </div>
                <?php
                    if (isset($_SESSION['display_login_success_message'])) {
                        if ($_SESSION['display_login_success_message']) {
                            echo "<div class='form-row'><div class='text' style='color:green;'>You are now logged in!</div></div>";
                        } else {
                            echo "<div class='form-row'><div class='text' style='color:red;'>The username and/or password you entered is incorrect.</div></div>";
                        }
                        // Unset the session variable when the page is refreshed
                        unset($_SESSION['display_login_success_message']);
                    }
                ?> 
            </form>
            
            <form class="tabs-content" data-tab="register" method="post" action="php/POST_register.php">
                <div class="form-row">
                    <h2 class="form-title">Register:</h2>
                </div>
                <div class="form-row">
                    <div class="form-column">
                        <div class="form-item">
                            <div class="vertical-items-container">
                                <div class="form-item"> 
                                    <label for="username">Username</label>
                                    <input type="text" id="register-username" name="username">
                                </div>
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="vertical-items-container">
                                <div class="form-item">
                                    <label for="password">Password</label>
                                    <input type="text" id="register-password" name="password"></input>
                                </div>
                                <div class="error"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="submit">
                        <input type="submit" id="register-submit" name="submit">
                    </div>
                </div>
                <?php
                    if (isset($_SESSION['register_success'])) {
                        if ($_SESSION['register_success']) {
                            echo "<div class='form-row'><div class='text' style='color:green;'>New account created!</div></div>";
                        } else {
                            echo "<div class='form-row'><div class='text' style='color:red;'>The username you entered is already in use.</div></div>";
                        }
                        // Unset the session variable when the page is refreshed
                        unset($_SESSION['register_success']);
                    }
                ?> 
                <div class="form-row">
                    <div class="text">A username can contain letters (both upper and lower case) and digits only.</div>
                </div>
                <div class="form-row">
                    <div class="text">A password must be at least 4 characters long (characters are to be letters and digits only), have at least one letter and at least one digit.</div>
                </div> 
            </form>
        </div>
      </div>
    </main>
    <?php require "php/footer.php"?>
    <script src="js/findAPet.js"></script>
    <script src="js/userValidation.js"></script>
</body>
</html>