<!-- check to see if a session is active -->
<?php
  session_start();

  if(isset($_SESSION["email"])) {
    // display logged in navigation
    include ('navigation/dreamer-nav.php'); 
  } else {
    // display logged out navigation
    include ('navigation/regular-nav.php'); 
  }

?>