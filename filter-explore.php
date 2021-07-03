<?php
    // connect to db
    require("database.php");

    $whereSearchQuery = "";
    $whereTagsQuery = "";
    $search = $_POST["search"];
    $order = $_POST["sort"];
    $tags = $_POST["tags"];

    $query = "SELECT * FROM entries";

    // filter entries by search
    if(!empty($search)){
        $whereSearchQuery .= " WHERE AND title LIKE '%$search%' OR tags LIKE '%$search%' OR content LIKE '%$search%'";
        $query .= $whereSearchQuery;
    }

    // filter entries by tag
    if(!empty($tags)){
        if(!empty($whereSearchQuery)){
            $whereTagsQuery .= " AND tags LIKE '%$tags%'";
        } else{
            $whereTagsQuery .= " WHERE tags LIKE '%$tags%'";
        }
        $query .= $whereTagsQuery; 
    }

    // only display public entries
    if(!empty($whereSearchQuery) || !empty($whereTagsQuery)){
        $query .= " AND visibility = true";
    } else{
        $query .= " WHERE visibility = false";
    }

    // order the entries by the selected sort option
    if($order == "recent"){
        $query .= " ORDER BY date ASC";
    } else{
        $query .= " ORDER BY date DESC";
    }

    // get results from db
    $result_array = array();
    $result = $connection->query($query);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($result_array, $row);
        }
    }

    // send a JSON encoded array to client
    echo json_encode($result_array);

    // close connection to db
    $connection->close();
?>