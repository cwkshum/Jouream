<?php 
    //connect to db 
    require("database.php");

    // include("session-active-check.php"); 

    if(isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['email']) && isset($_POST['password'])){
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // check if user exists in the database 
        $query = "SELECT * FROM dreamers WHERE email = '$email'";
        $result = mysqli_query($connection, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if($rows == 1){
            // display error message
            echo "<h1>Oops!</h1>";
            echo "<h2>It appears this email has already been registered.</h2>";

        } else{
            if(!$inputError){
                // Input user's account information into the database
                $query = "INSERT into dreamers (first_name, last_name, email, password, avatar) VALUES ('$firstName', '$lastName', '$email', '".md5($password)."', 'default')";
                $result = mysqli_query($connection, $query);

                if($result){
                    $_SESSION['email'] = $email;

                    // redirect user to their account page
                    header("Location: account.php");
                }
            } else if($passwordError){
                // Display Error Message
                echo "<h1>Oops!</h1>";
                echo "<h2>Passwords entered did not match.</h2>";
            
                // Sign up and Log in links
                // echo "<div class='center-content'>";
                //     echo "<a href='signup_form.php' class='button'>SIGN UP</a>";
                //     echo "<h4 class='container-item'>OR</h4>";
                //     echo "<a href='login.php' class='button'>LOG IN</a>";
                // echo "</div>";

            } else{
                // Display Error Message
                echo "<h1>Oops!</h1>";
                echo "<h2>Please use valid characters when signing up.</h2>";
            
                // Sign up and Log in links
                // echo "<div class='center-content'>";
                //     echo "<a href='signup_form.php' class='button'>SIGN UP</a>";
                //     echo "<h4 class='container-item'>OR</h4>";
                //     echo "<a href='login.php' class='button'>LOG IN</a>";
                // echo "</div>";
            }
        }

        

        //Checking if the user exists in the database or not
        $query = "SELECT * FROM members WHERE email = '$email' and password = '".md5($password)."'";

        // get results from DB 
        $result_array = array();
        $result = $connection->query($query);
        if ($result->num_rows > 0) {
            // Set the session variable using the user's email
            session_start();
            $_SESSION['email'] = $email;

            while($row = $result->fetch_assoc()) {
                array_push($result_array, $row);
            }
        }

        // send a JSON encoded array to client
        echo json_encode($result_array);
        
        // close the database connection
        $connection->close();
    }



  ?>