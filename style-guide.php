<!DOCTYPE html> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title>Home | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
        
        <!-- Linked Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/grids.css"> 
        <link rel="stylesheet" type="text/css" href="css/style-guide.css"> 

    </head>

    <body class="main-body-grid">
        <div class="body-wrapper">
            <header>
                <!-- navigation -->
                <nav>
                    <p class="logo">LOGO</p>
                    <a href="index.php">Home</a>
                    <a href="explore.php">Explore</a>

                    <!-- **IMPORTANT**: CHANGE SIGN UP AFTER AUTHENTICATION IMPLEMENTATION -->
                    <a href="login.php" class="last-link">Login/Sign Up</a>
                </nav>
            </header>

            <h1 id="style-guide-h1">Style Guide</h1>

             <!-- side target navigation -->
             <nav id="target-nav">
                 <h3>Jump To</h3>
                 <a href="#">CTA Button</a>
                 <a href="#">Color Palette</a>
                 <a href="#">Entry Card</a>
                 <a href="#">Forms</a>
                 <a href="#">Footer</a>
                 <a href="#">Text Link</a>
                 <a href="#">Typography</a>
             </nav>

            <!-- UI Elements column -->
             <div class="element-wrapper">

                <!-- CTA BUTTON -->
                <div class="element-container" id="cta-button">
                    <h2>Call-To-Action Button</h2>
                   
                    <!-- cta example -->
                    <div class="two-col">
                        <!-- enabled button exam -->
                        <div class="col-1"> 
                            <h3>Enabled</h3>
                            <button class="cta">Button</button>
                        </div>

                        <!-- disabled button exam -->
                        <div class="col-2">
                            <h3>Disabled</h3>
                            <button type="button" class="cta" disabled>Button</button>
                        </div>
                    </div>
                    
                    <!-- element notes -->
                    <div class="comments">
                        <h3>Note</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam.</p>
                    </div>
                    
                    <!-- code snippet -->
                    <div class="comments">
                        <h3>Code Snippet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam.</p>
                    </div>
                </div>

                <!-- Color Palette -->
                <div class="element-container" id="color-palette">
                    <h2>Color Palette</h2>
                   
                    <!-- color -->
                    <div class="two-col">
                    <!-- FIRST COLUMN -->

                        <!-- purple milk -->
                        <div class="col-1" id="purple-milk"> 
                            <div class="swatch-container">
                                <div class="swatch purple-milk"></div>
                                <div class="color-tag">
                                    <p>#EDEDF1</p>
                                    <p>rgb(237, 237, 241)</p>
                                    <p class="color-use">accents</p>
                                </div>
                            </div>
                        </div>

                        <!-- dusty lavender -->
                        <div class="col-1" id="dusty-lavender"> 
                            <div class="swatch-container">
                                <div class="swatch dusty-lavender"></div>
                                <div class="color-tag">
                                    <p>#9C9EB3</p>
                                    <p>rgb(156, 158, 179)</p>
                                    <p class="color-use">interactives</p>
                                </div>
                            </div>
                        </div>

                        <!-- plum purple -->
                        <div class="col-1" id="plum-purple"> 
                            <div class="swatch-container">
                                <div class="swatch plum-purple"></div>
                                <div class="color-tag">
                                    <p>#646788</p>
                                    <p>rgb(136, 123, 152)</p>
                                    <p class="color-use">h1 headings</p>
                                </div>
                            </div>
                        </div>
                            
                    
                    <!-- SECOND COLUMN -->
                        <!-- golden yellow -->
                        <div class="col-2" id="golden-yellow"> 
                            <div class="swatch-container">
                                <div class="swatch golden-yellow"></div>
                                <div class="color-tag">
                                    <p>#BEA35E</p>
                                    <p>rgb(190, 163, 94)</p>
                                    <p class="color-use">interactive hover states</p>
                                </div>
                            </div>
                        </div>

                        <!-- navy blue -->
                        <div class="col-2" id="navy-blue"> 
                            <div class="swatch-container">
                                <div class="swatch navy-blue"></div>
                                <div class="color-tag">
                                    <p>#3F4262</p>
                                    <p>rgb(63, 66, 98)</p>
                                    <p class="color-use">headings</p>
                                </div>
                            </div>
                        </div>

                        <!-- navy blue -->
                        <div class="col-2" id="past-dusk-blue"> 
                            <div class="swatch-container">
                                <div class="swatch past-dusk-blue"></div>
                                <div class="color-tag">
                                    <p>#646788</p>
                                    <p>rgb(100, 103, 136)</p>
                                    <p class="color-use">body copy</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <!-- element notes -->
                    <div class="comments">
                        <h3>Note</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam.</p>
                    </div>
                    
                    <!-- code snippet -->
                    <div class="comments">
                        <h3>Code Snippet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam.</p>
                    </div>
                </div>

             </div>

            

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
                <a href="style-guide.php">Style Guide</a>
                <a href="citations.html">Citations</a>
            </div>
        </footer>

    </body>
</html>