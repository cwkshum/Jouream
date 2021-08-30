<?php 
    // connect to db
    require("database.php");
    require("session-not-active-check.php");

    $deleteQuery = "DELETE FROM entries WHERE entry_id =" . $_POST["entry_id"] . " AND dreamer_email ='".$_SESSION["email"]."'";
    // $deleteEntry = mysqli_query($connection, $removeCartQuery) or die(mysql_error());

?>