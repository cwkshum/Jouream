<?php
    session_start();
    $_SESSION['entryId'] = $_POST["entry_id"];
    $_SESSION['fromEntries'] = $_POST["fromEntries"];

    // send a JSON encoded array to client
    echo json_encode(1);
?>