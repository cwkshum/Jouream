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

                <!-- COLOR PALETTE -->
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

                <!-- ENTRY CARD -->
                <div class="element-container" id="entry-card">
                    <h2>Entry Card</h2>
                   
                    <!-- entry card example -->
                    <div class="entry-card">
                        <h4 class="entry-card-title">Entry Title</h4>
                        <p class="entry-card-date">May 18, 2021</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est...</p>
                        <p class="entry-card-tag">#teeth #supernatural</p>

                        <!-- divider -->
                        <div class="entry-card-divider">
                            <img src="img/cloud-moon.svg" >
                        </div>

                        <!-- continue reading link -->
                        <div class="cont-reading">
                        <a>continue reading ›</a>
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

                <!-- FORMS -->
                <div class="element-container" id="forms">
                    <h2>Entry Card</h2>
                    
                    <!-- form examples -->
                    <div class="two-col">
                        <!-- first column -->
                        <div class="col-1"> 
                            <!-- text input and labels -->
                            <h3>Text Input & Label</h3>
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first-name" placeholder="First Name">  
                        </div>  

                        <div class="col-2"> 
                            <h3>Rating Input</h3>

                             <!-- emotion ratings -->
                             <div id="ratings">
                                <!-- happy -->
                                <label>
                                    <input type="radio" name="rating" value="5" checked>
                                    <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="stroke" cx="24.9348" cy="25.5" r="23.4348" stroke="#646788" stroke-width="3"/>
                                        <circle class="eye" cx="16.2977" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <circle class="eye" cx="34.245" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <path d="M25.2714 36.2827C18.9409 36.2827 18.1953 30.8914 18.1953 30.8914H32.3475C32.3475 30.8914 31.6019 36.2827 25.2714 36.2827Z" stroke="#646788" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </label>

                                <!-- okay -->
                                <label>
                                    <input type="radio" name="rating" value="4">
                                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="stroke" cx="25.217" cy="25.5" r="23.4348" stroke="#646788" stroke-width="3"/>
                                        <circle class="eye" cx="16.5809" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <circle class="eye" cx="34.5282" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <path d="M19.1523 31.5652C19.1523 31.5652 21.1741 34.2602 25.7187 34.2602C29.935 34.2602 31.9567 31.5652 31.9567 31.5652" stroke="#646788" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </label>

                                <!-- neutral -->
                                <label>
                                    <input type="radio" name="rating" value="3">
                                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="stroke" cx="25.5002" cy="25.5" r="23.4348" stroke="#646788" stroke-width="3"/>
                                        <circle class="eye" cx="16.8651" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <circle class="eye" cx="34.8114" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <line x1="20.9346" y1="31.4131" x2="30.7389" y2="31.4131" stroke="#646788" stroke-width="3" stroke-linecap="round"/>
                                    </svg>
                                </label>

                                <!-- sad -->
                                <label>
                                    <input type="radio" name="rating" value="2">
                                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="stroke" cx="25.7825" cy="25.5" r="23.4348" stroke="#646788" stroke-width="3"/>
                                        <circle class="eye" cx="17.1464" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <circle class="eye" cx="35.0926" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <path d="M32.5215 32.9124C32.5215 32.9124 30.4997 30.2174 25.9551 30.2174C21.7389 30.2174 19.7171 32.9124 19.7171 32.9124" stroke="#646788" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </label>

                                <!-- terrible -->
                                <label>
                                    <input type="radio" name="rating" value="1">
                                    <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="stroke" cx="25.0657" cy="25.5" r="23.4348"/>
                                        <circle class="eye" cx="16.4305" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <circle class="eye" cx="34.3768" cy="24.4525" r="2.82018" fill="#646788"/>
                                        <path d="M25.4024 28.8696C31.7329 28.8696 32.4785 34.2609 32.4785 34.2609L18.3263 34.2609C18.3263 34.2609 19.0719 28.8696 25.4024 28.8696Z" stroke="#646788" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <line x1="17.5285" y1="17.3288" x2="18.3335" y2="16.8641" stroke="#646788" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="32.5061" y1="16.864" x2="33.3111" y2="17.3288" stroke="#646788" stroke-width="3" stroke-linecap="round"/>
                                    </svg>
                                </label>
                            </div>
                        </div> 
                    </div>

                    <div class="three-col">
                        <!-- date input -->
                        <div class="col-1">
                            <h3>Date</h3>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" />
                        </div>

                        <!-- duration -->
                        <div class="col-2 duration">
                            <h3>Duration Input</h3>
                            <input type="number" name="hour"/> <p>hrs</p>
                            <input type="number" name="minute"/> <p>mins</p>
                        </div>

                        <!-- radio buttons -->
                        <div class="col-3 visibility">
                            <h3>Radio Button</h3>
                            <!-- private -->
                            <input type="radio" id="private" name="visibility" value="private" checked>
                            <label for="private">Private</label>

                            <!-- public -->
                            <input type="radio" id="public" name="visibility" value="public">
                            <label for="public">Public</label>
                        </div>
                    </div>

                    <!-- description text box -->
                    <h3>Description</h3>
                    <input type="text" id="description" name="description">
                    
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