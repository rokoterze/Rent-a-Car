<?php 
if (isset($_GET["error"])) {
    
    if ($_GET["error"] == "none") {
        echo'<p id="popup1">Activation email has been successfully sent to Your email address!</p>';
    }
    if ($_GET["error"] == "badinput") {
        echo'<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "invalidemail") {
        echo'<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "passwordsunmatched") {
        echo'<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "usernameexists") {
        echo'<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "emailexists") {
        echo'<p id="popup2">Email already exists in our system.</p>';
    }
}