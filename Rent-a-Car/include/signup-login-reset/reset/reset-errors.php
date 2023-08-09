<?php 
        if (isset($_GET["error"])) {
            
            if ($_GET["error"] == "none") {
                echo'<p id="popup1">Password reset email has been successfully sent to Your email address!</p>';
            }
            if ($_GET["error"] == "invalidemail") {
                echo '<p id="popup2">Please populate all mandatory fields correctly.</p>';
            }    
            if ($_GET["error"] == "emaildoesnotexist") {
                echo '<p id="popup2">Email does not exist in our system.</p>';
            }    
        }
      