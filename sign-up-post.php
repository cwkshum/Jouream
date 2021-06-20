<?php
    require("database.php");

    if($_POST["submit"] == 0){
        $emailInput = $_POST["email"];

        // Check to see if email exists in the database
        $query = "SELECT email from dreamers WHERE email = '$emailInput' ";
        $result = mysqli_query($connection, $query) or die(mysql_error());

        //return the number of rows
        $numResults = mysqli_num_rows($result); 

        // send a JSON encoded result to client 
        echo json_encode($numResults);

        // Release the returned data
        mysqli_free_result($result);

        // Close the database connection
        $connection->close();
    } else if($_POST["submit"] == 1){
        if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Input user's account information into the database
            $query = "INSERT into dreamers (first_name, last_name, email, password, avatar) VALUES ('$firstName', '$lastName', '$email', '".md5($password)."', 'default')";
            $result = mysqli_query($connection, $query);

            if ($result) {
                // Set the session variable using the user's email
                session_start();
                $_SESSION['email'] = $email;
            } 
    
            // send a JSON encoded array to client
            echo json_encode($result);
            
            // close the database connection
            $connection->close();
        }
    }
    
?>