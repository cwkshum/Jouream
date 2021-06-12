<?php 
  //connect to db 
  require("database.php");
?>

<!DOCTYPE html> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title>Sign Up | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
        
        <!-- linked stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 

    </head>3

    <body>
        <header>
            <!-- navigation -->
            <nav>
                <a href="index.php">Home</a>
                <a href="explore.php">Explore</a>

                <!-- **IMPORTANT**: CHANGE SIGN UP AFTER AUTHENTICATION IMPLEMENTATION -->
                <a href="login.php">Login/Sign Up</a>
            </nav>
        </header>

       <?php
            require('database.php');

            // default variables 
            $firstName = ""; 
            $lastName = ""; 
            $email = "";
            $password = "";
            $cpassword = ""; 
            $message = "";
            $submission = false;
            $allFields = false;  
            $inputError = false; 
            $passwordError = false;

            // Form handling
			if (isset($_POST["submit"])){
                // if name isn't empty, post
                // if empty, say that its required 
				if (!empty($_POST["first_name"])) {

                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]+$/", $_POST["first_name"])) {
                        $nameError = "Only letters and white space allowed";
                        $inputError = true; 
                    } else { 
                        $firstName = $_POST["first_name"];
                        $allFields = true;
                    }
				} else {
                    $firstName = "First name is required. <br />";
                    echo $firstName;
                    $allFields = false;
                }

                // if last name isn't empty, post
                // if empty, say that its required 
                if (!empty($_POST["last_name"])) {
                    
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]+$/", $_POST["last_name"])) {
                        $nameError = "Only letters and white space allowed";
                        $inputError = true; 
                    } else {
                        $lastName = $_POST["last_name"];
                        $allFields = true; 
                    }
				} else {
                    $lastName = "Last name is required. <br />";
                    echo $lastName;
                    $allFields = false;
                }

                // if email isn't empty, post
                // if empty, say that its required 
                if (!empty($_POST["email"])) {
                    // check if e-mail address syntax is valid
                    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                        $emailError = "Invalid email format";
                        $inputError = true; 
                    } else { 
                        $allFields = true;
                        //removes backslashes
                        $email = stripslashes($_POST['email']);
                        //escapes special characters in a string
                        $email = mysqli_real_escape_string($connection, $email);
                    }
                } else {
                    $email = "Email is required. <br />";
                    echo $email;
                    $allFields = false;
                }

                // if password isn't empty, post
                // if empty, say that its required 
                if (!empty($_POST["password"])) {
                    $password = $_POST["password"];
                    $allFields = true;
                } else {
                    $password = "Password is required.  <br />";
                    echo $password;
                    $allFields = false;
                }

                // if confirmed password isn't empty, post
                // if empty, say that its required 
                if (!empty($_POST["confirm_password"])) {
                    $cpassword = $_POST["confirm_password"]; 
                    $allFields = true;
                    // check if passwords match
                    if ($cpassword != $password) {
                        $cpassword = "Passwords do not match. <br />";  
                        $passwordError = true;
                        $inputError = true;
                        $allFields = false;
                    } else {
                        $password = stripslashes($_POST['password']);
                        $password = mysqli_real_escape_string($connection, $password);
                    }  
                } else {
                    $cpassword = "Please confirm your password. <br />";
                    echo $cpassword;
                    $allFields = false;
                }

                // if all fields are filled in, we can move on and give the user a welcome message 
                if ($allFields) {
                    $submission = true;
                }

            }


            // checking is user existing in the database or not
            $query = "SELECT * FROM dreamers WHERE email = '$email'";
            $result = mysqli_query($connection, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);

            if($rows == 1){
                // display error message
            } else{
                if(!$inputError){
                    // Input user's account information into the database
                    $query = "INSERT into dreamer (first_name, last_name, email, password, avatar) VALUES ('$first_name', '$last_name', '$email', '".md5($password)."', 'default')";
                    $result = mysqli_query($connection, $query);

                    if($result){
                        
                    }
                }
            }

        ?>

        <!-- footer -->
        <footer>
            <!-- branding -->
            <div>
                <h3>Jouream</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>© 2021 Carissa Shum & Rowina Chan</p>
            </div>

            <!-- navigation -->
            <div>
                <h3>Navigation</h3>
                <a href="index.php">Home</a>
                <a href="explore.php">Explore</a>
                <a href="index.php/#about">About</a>

                <!-- **IMPORTANT**: CHANGE FOOTER CONTENT AFTER AUTHENTICATION IMPLEMENTATION -->
                <a href="entries.php">Entries</a>
                <a href="account.php">Account</a>
            </div>

            <!-- resources -->
            <div>
                <h3>Resources</h3>
                <a href="style-guide.html">Style Guide</a>
                <a href="citations.html">Citations</a>
            </div>
        </footer>


    </body> 
</html>