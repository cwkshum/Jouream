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

        // if(isset($_POST["title"])){
        //     $title = $_POST["title"];
        //     $insertQuery += "title";
        //     $valuesQuery += "'$title'";
        // }

        // if(isset($_POST["date"])){
        //     $date = $_POST["date"];
        //     if(!empty($insertQuery)){
        //         $insertQuery += ", ";
        //         $valuesQuery += ", ";
        //     }
            
        //     $insertQuery += "date";
        //     $valuesQuery += "$date";
        // }

        // if(isset($_POST["rating"])){
        //     $rating = $_POST["rating"];
        //     if(!empty($insertQuery)){
        //         $insertQuery += ", ";
        //         $valuesQuery += ", ";
        //     }
            
        //     $insertQuery += "rating";
        //     $valuesQuery += "$rating";
        // }

        // if(isset($_POST["hours"])){
        //     $hours = $_POST["hours"];
        //     if(!empty($insertQuery)){
        //         $insertQuery += ", ";
        //         $valuesQuery += ", ";
        //     }
            
        //     $insertQuery += "hours";
        //     $valuesQuery += "$hours";
        // }

        // if(isset($_POST["minutes"])){
        //     $minutes = $_POST["minutes"];
        //     if(!empty($insertQuery)){
        //         $insertQuery += ", ";
        //         $valuesQuery += ", ";
        //     }
            
        //     $insertQuery += "minutes";
        //     $valuesQuery += "$minutes";
        // }

        // if(isset($_POST["tags"])){
        //     $tags = $_POST["tags"];
        //     if(!empty($insertQuery)){
        //         $insertQuery += ", ";
        //         $valuesQuery += ", ";
        //     }
            
        //     $insertQuery += "tags";
        //     $valuesQuery += "'$tags'";
        // }

        // if(isset($_POST["description"])){
        //     $description = $_POST["description"];
        //     if(!empty($insertQuery)){
        //         $insertQuery += ", ";
        //         $valuesQuery += ", ";
        //     }
            
        //     $insertQuery += "content";
        //     $valuesQuery += "'$content'";
        // }

        // if(isset($_POST["visibility"])){
        //     $visibility = $_POST["visibility"];
        //     if(!empty($insertQuery)){
        //         $insertQuery += ", ";
        //         $valuesQuery += ", ";
        //     }
            
        //     $insertQuery += "visibility";
        //     $valuesQuery += "$visibility";
        // }

        if(!empty($title)){
            $insertQuery .= "title";
            $valuesQuery .= "'$title'";
        }

        if(!empty($date)){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "date";
            $valuesQuery .= "$date";
        }

        if(!empty($rating)){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "rating";
            $valuesQuery .= "$rating";
        }

        if(!empty($hours)){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "hours";
            $valuesQuery .= "$hours";
        }

        if(!empty($minutes)){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "minutes";
            $valuesQuery .= "$minutes";
        }

        if(!empty($tags)){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "tags";
            $valuesQuery .= "'$tags'";
        }

        if(!empty($description)){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "content";
            $valuesQuery .= "'$description'";
        }

        if(!empty($visibility)){
            if(!empty($insertQuery)){
                $insertQuery .= ", ";
                $valuesQuery .= ", ";
            }
            
            $insertQuery .= "visibility";
            $valuesQuery .= "$visibility";
        }

        // $query = "INSERT INTO entries (title, date, rating, hours, minutes, tags, content, visibility, dreamer_email) VALUES ('$title', '$date', $rating, $hours, $minutes, '$tags', '$description', $visibility, '" . $_SESSION['email'] . "')";
        $query = "INSERT INTO entries $insertQuery, dreamer_email) VALUES $valuesQuery, '" . $_SESSION['email'] . "')";
        $result = mysqli_query($connection, $query);

        // send a JSON encoded array to client
        echo json_encode($result);

        // close the database connection
        $connection->close();
        
    } else if($_POST["publish"] == 2){

    }
?>