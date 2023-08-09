<?php 
if (isset($_GET["error"])) {
    
    if ($_GET["error"] == "invalidemail") {
        echo'<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    
    if ($_GET["error"] == "wrongcodeoremail") {
        echo'<p id="popup2">Wrong code or email!</p>';
    }
    
    if ($_GET["error"] == "accountalreadyactivated") {
        echo'<p id="popup2">Account is already activated!</p>';
    }
    if ($_GET["error"] == "none") {
        echo'<p id="popup1">Account is succesfully activated!</p>';
    }
   
}