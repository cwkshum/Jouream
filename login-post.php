<?php 
    //connect to db 
    require("database.php");

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // checking if the user exists in the database
        $query = "SELECT * FROM dreamers WHERE email = '$email' AND password = '".md5($password)."'";

        // get results from DB 
        $result_array = array();
        $result = $connection->query($query);
        if ($result->num_rows > 0) {
        
            // set the session variable using the user's email
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