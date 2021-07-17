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

    } else if($_POST["publish"] == 1 || $_POST["publish"] == 2){
        $title = $_POST["title"];
        $date = $_POST["date"];
        $rating = $_POST["rating"];
        $hours = $_POST["hours"];
        $minutes = $_POST["minutes"];
        $tags = $_POST["tags"];
        $description = $_POST["description"];
        $visibility = $_POST["visibility"];

        $insertQuery = "(";
        $valuesQuery = "(";

        if($title != ""){
            $insertQuery .= "title";
            $valuesQuery .= "'$title'";
        }

        if($date != ""){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "date";
            $valuesQuery .= "'$date'";
        }

        if($rating != ""){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "rating";
            $valuesQuery .= "$rating";
        }

        if($hours != ""){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "hours";
            $valuesQuery .= "$hours";
        }

        if($minutes != ""){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "minutes";
            $valuesQuery .= "$minutes";
        }

        if($tags != ""){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "tags";
            $valuesQuery .= "'$tags'";
        }

        if($description != ""){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "content";
            $valuesQuery .= "'$description'";
        }

        if($visibility != ""){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "visibility";
            $valuesQuery .= "$visibility";
        } 

        // $query = "INSERT INTO entries (title, date, rating, hours, minutes, tags, content, visibility, dreamer_email) VALUES ('$title', '$date', $rating, $hours, $minutes, '$tags', '$description', $visibility, '" . $_SESSION['email'] . "')";
        if($_POST["publish"] == 1){
            $query = "INSERT INTO entries $insertQuery, dreamer_email) VALUES $valuesQuery, '" . $_SESSION['email'] . "')";
        } else if($_POST["publish"] == 2){
            $query = "INSERT INTO draft_entries $insertQuery, dreamer_email) VALUES $valuesQuery, '" . $_SESSION['email'] . "')";
        }
        $result = mysqli_query($connection, $query);

        // send a JSON encoded array to client
        echo json_encode($result);


        // close the database connection
        $connection->close();
        
    } 
?>