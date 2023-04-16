<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Assignment 3 - ValidatePhoneNumber</title>
    <style>
        h1, form {
            text-align: center;
        }
        input {
            margin: 1em;
        }

    </style>
</head>
<body>
    <h1>Validate Phone Number:</h1>
    <fieldset>
        <legend>Phone Number Validation</legend>
        <form action="validatePhoneNumber.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value=""><br>
            <label for="phoneNum">Phone Number:</label><br>
            <input type="text" id="phoneNum" name="phoneNum" value="ddd-ddd-dddd"><br>
            <input type="submit" value="click" name="submit"></input>
        </form>
    </fieldset>
    <?php 
        function validatePhoneNumber() {
            $pattern = "/^(\d{3})-(\d{3})-(\d{4})$/m";
            $number = $_POST["phoneNum"];
            if (preg_match($pattern, $number)) {
                echo $_POST["name"]. ", your phone number: " . $number . " is valid.";
            } else {
                echo "Invalid phone number: " . $number;
            }
        }
        
        if(isset($_POST['submit'])) {
            validatePhoneNumber();
        } else {
            echo "bad"; 
        }
    ?>
</body>
</html>