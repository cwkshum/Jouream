<?php 
  //connect to db 
  require("database.php");
?>

<!DOCTYPE html> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title>Explore | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
        
        <!-- Linked Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/grids.css">
        <link rel="stylesheet" type="text/css" href="css/explore.css">  

    </head>

    <body class="main-body-grid">
        <div class="body-wrapper">
            <header>
                <!-- navigation -->
                <!-- <nav>
                    <a href="index.php">Home</a>
                    <a href="explore.php">Explore</a>
                    <a href="login.php">Login/Sign Up</a>
                </nav> -->
                <?php 
                    include("navigation-check.php"); 
                ?>
            </header>

            <!-- explore header -->
            <section id="header">
                <h1>Explore</h1>
            </section>

            <!-- filters section -->
            <section id="filters">
                <!-- sort by filter -->
                <label for="sort">Sort by:</label>
                <select id="sort" name="sort" onchange="sortFilter()">
                    <option value="recent">Most Recent</option>
                    <option value="oldest">Oldest</option>
                </select>

                <!-- <div id="tags-filter">
                    <label for="tag-search" class="entry-label">Tags: </label>
                    <input type="text" id="tag-search">
                </div> -->

                <!-- search filter -->
                <label for="search" class="entry-label">Search: </label>
                <input type="text" id="search" name="search" onkeyup="searchFilter()">
                
            </section>

            <!-- create post -->
            <?php
                if(isset($_SESSION["email"])) {
                    // display logged in navigation
                    echo '<button id="create-post">+</button>';
                } 
            ?>

            <!-- create post popup -->
            <div id="popup" class="popup-container">

            <!-- popup content -->
            <div class="popup-content">
                <!-- exit button -->
                <span class="close">&times;</span>
                <h2>New Entry</h2>
                    <div id="entry-form">
                    
                        <!-- entry title -->
                        <div id="entry-title">
                            <label for="title" class="entry-label">Dream Title</label>
                            <input type="text" id="title" name="title">
                            <p id="title-taken"></p>
                        </div>

                        <!-- entry date -->
                        <div id="entry-date">
                            <label for="date" class="entry-label">Date</label>
                            <input type="date" id="date" name="date" min="1950-01-01">
                        </div>

                        <!-- duration of sleep -->
                        <div id="entry-duration">
                            <label for="duration" class="entry-label">Duration of Sleep</label>
                            <input type="number" id="hours" name="hours" min="0"><p> hrs</p>
                            <input type="number" id="minutes" name="minutes" min="0" max="59"><p> mins</p>
                        </div>

                        <!-- rating of sleep -->
                        <div id="entry-rating">
                            <!-- dream rating label -->
                            <p class="faux-label">Dream Rating</p>

                            <!-- 5/5 rating -->
                            <input type="radio" id="5" name="rating" class="rating" value="5">
                            <label for="5" class="entry-label">
                                <img src="img/happy-5.svg" alt="a rating of 5 out of 5.">
                            </label>

                            <!-- 4/5 rating -->
                            <input type="radio" id="4" name="rating" class="rating" value="4">
                            <label for="4" class="entry-label">
                                <img src="img/okay-4.svg" alt="a rating of 4 out of 5.">
                            </label>
                           
                            <!-- 3/5 rating -->
                            <input type="radio" id="3" name="rating" class="rating" value="3">
                            <label for="3" class="entry-label">
                                <img src="img/neutral-3.svg" alt="a rating of 3 out of 5.">
                            </label>

                            <!-- 2/5 rating -->
                            <input type="radio" id="2" name="rating" class="rating" value="2">
                             <label for="2" class="entry-label">
                                <img src="img/sad-2.svg" alt="a rating of 2 out of 5.">
                            </label>

                            <!-- 1/5 rating -->
                            <input type="radio" id="1" name="rating" class="rating" value="1">
                             <label for="1" class="entry-label">
                                <img src="img/terrible-1.svg" alt="a rating of 1 out of 5.">
                            </label>
                        </div>

                        <!-- entry description -->
                        <div id="entry-description">
                            <label for="description" class="entry-label">Description</label>
                            <textarea id="description" name="description"></textarea>
                        </div>

                        <!-- tags -->
                        <div id="entry-tags">
                            <label for="tag-input" class="entry-label">Tags</label>
                            <input type="text" id="tag-input">
                        </div>

                        <!-- visibility -->
                        <div id="entry-visibility">
                            <p class="faux-label">Visibility</p>
                            <input type="radio" id="private" class="visibility" name="visibility" value="0">
                            <label for="private" class="entry-label">Private</label>
                            <input type="radio" id="public" class="visibility" name="visibility" value="1">
                            <label for="public" class="entry-label">Public</label>
                        </div>

                        <div id="entry-actions">
                            <!-- save draft -->
                            <button type="button" id="draft" disabled="true">Save Draft</button>
                            <!-- publish draft -->
                            <button type="button" id="publish" disabled="true">Publish Entry</button>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- entries section -->
            <section id="entries-container">
                <div id="entries"></div>
            </section>
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

        <!-- javascript links -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/create.js"></script>
        <script src="js/tags.js"></script>
        <script src="js/add-entry.js"></script>
        <script src="js/explore.js"></script>

    </body> 
</html>