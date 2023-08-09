<?php 
if (isset($_GET["error"])) {
    
    if ($_GET["error"] == "none") {
        echo'<p id="popup1">Your message request has been sent successfully!</p>';
    }
    
    if ($_GET["error"] == "invalidemail") {
        echo'<p id="popup2">Your email address is not valid!</p>';
    }
    
    if ($_GET["error"] == "badinput") {
        echo'<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
}