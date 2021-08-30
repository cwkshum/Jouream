<?php 
    //connect to db 
    require("database.php");

//   include("session-not-active-check.php");
    session_start();

    // Query to retrieve entry information for page
    $query = "SELECT * FROM entries WHERE entry_id = " . $_SESSION['entryId'];
    $result = mysqli_query($connection, $query); 
    $entry = mysqli_fetch_assoc($result);

    $entryTitle = $entry["title"];
    $entryDate = $entry["date"];
    $entryRating = $entry["rating"];
    $entryHours = $entry["hours"];
    $entryMinutes = $entry["minutes"];
    $entryTags = $entry["tags"];
    $entryContent = $entry["content"];

?>

<!DOCTYPE html> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title><?php echo $entryTitle ?> | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@400;700&display=swap" rel="stylesheet">
        
        <!-- Linked Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/grids.css">
        <link rel="stylesheet" type="text/css" href="css/entries.css">

    </head>

    <body class="main-body-grid">
        <div class="body-wrapper">
            <header>
                <!-- navigation -->
                <nav>
                    <a href="index.php">Home</a>
                    <a href="explore.php">Explore</a>
                    <a href="entries.php">Entries</a>
                    <a href="account.php">Account</a>
                    <a href="logout.php">Log Out</a>
                </nav>
            </header>

            <!-- entry header -->
            <section id="header">
                <h1> 
                <?php
                    echo "<a href='";
                    if($_SESSION['fromEntries'] == 'true'){
                        echo "entries.php";
                    } else{
                        echo "explore.php";
                    }
                    echo "'>< " . $entryTitle . "</a>";

                ?>
                </h1>
            </section>
            
            <?php
                echo $entryTitle . "<br>";

                $monthNames = ["January", "February", "March", "April", "May", "June",
                                "July", "August", "September", "October", "November", "December"];
                $date = explode("-", $entryDate);
                echo $monthNames[$date[1]-1] . ' ' . $date[2] . ', ' . $date[0] . "<br>";

                echo $entryContent . "<br>";

                $tags = explode(",", $entryTags);
                for($i = 0; $i < sizeof($tags); $i++){
                    echo "#" . $tags[$i] . " ";
                }

                echo "<br> <hr> <br>";
                echo "Dream Rating <br>";
                echo $entryRating . "<br>";

                echo "Duration of Sleep <br>";
                echo $entryHours . " hours " . $entryMinutes . " minutes<br>";

            ?>
        </div>

        <!-- footer -->
        <footer>
            <!-- branding -->
            <div class="branding">
                <h2 class="brand">Jouream</h2>
                <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="copyright">© 2021 Carissa Shum & Rowina Chan</p>
            </div>

            <!-- navigation -->
            <div class="footer-nav">
                <h3>Navigation</h3>
                <a href="index.php">Home</a>
                <a href="explore.php">Explore</a>
                <a href="index.php/#about">About</a>

                <!-- **IMPORTANT**: CHANGE FOOTER CONTENT AFTER AUTHENTICATION IMPLEMENTATION -->
                <a href="entries.php">Entries</a>
                <a href="account.php">Account</a>
            </div>

            <!-- resources -->
            <div class="resources">
                <h3>Resources</h3>
                <a href="style-guide.html">Style Guide</a>
                <a href="citations.html">Citations</a>
            </div>
        </footer>

        <!-- Linked JavaScript Files -->
        <!-- <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/create.js"></script>
        <script src="js/tags.js"></script>
        <script src="js/add-entry.js"></script>
        <script src="js/entries.js"></script> -->

        <?php
            // Release the returned data
            mysqli_free_result($result);

            // Close the database connection
			mysqli_close($connection);
        ?>

    </body> 
</html>