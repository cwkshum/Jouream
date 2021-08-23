<?php
    // $_SESSION['entryTitle'] = $_POST["entry_title"];
    session_start();
    $_SESSION['entryId'] = $_POST["entry_id"];

    // send a JSON encoded array to client
    echo json_encode(1);
?>