<?php 
if (isset($_GET["error"])) {
    
    if ($_GET["error"] == "none-acc") {
        echo'<p id="popup1">Data successfully updated!</p>';
    }
    if ($_GET["error"] == "invalidupdate") {
        echo'<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "invalidinput") {
        echo'<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "emailexists") {
        echo'<p id="popup2">Email already exists in our system.</p>';
    }
}