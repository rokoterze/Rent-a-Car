<?php
if (isset($_GET["error"])) {
    

    if ($_GET["error"] == "badinput") {
        echo'<p id="popup2">Please populate all the fields correctly!</p>';
    }
    if ($_GET["error"] == "usernamedoesnotexist") {
        echo'<p id="popup2">Username does not exist!</p>';
    }
    if ($_GET["error"] == "wronglogin") {
        echo'<p id="popup2">Incorrect password!</p>';
    }
    if ($_GET["error"] == "accountnotactivated") {
        echo'<p id="popup2">Your account is not activated!</p>';
    }
    if ($_GET["error"] == "accountislocked") {
        echo'<p id="popup2">Your account is LOCKED, please contact us!</p>';
    }
}