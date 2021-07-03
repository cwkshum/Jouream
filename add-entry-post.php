<?php
    require("database.php");
    require("session-not-active-check.php");

    if($_POST["publish"] == 0){
        $titleInput = $_POST["title"];

        // Check to see if title exists in the database
        $query = "SELECT title from entries WHERE dreamer_email = '" . $_SESSION['email'] . "' AND title = '$titleInput' ";
        $result = mysqli_query($connection, $query) or die(mysql_error());

        //return the number of rows
        $numResults = mysqli_num_rows($result); 

        // send a JSON encoded result to client 
        echo json_encode($numResults);

        // Release the returned data
        mysqli_free_result($result);

        // Close the database connection
        $connection->close();

    } else if($_POST["publish"] == 1){

    }



?>