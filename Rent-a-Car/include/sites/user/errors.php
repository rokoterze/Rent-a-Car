<?php
if (isset($_GET["error"])) {

    if ($_GET["error"] == "none-checkin") {
        echo '<p id="popup1">Check-In successfully created!</p>';
    }
    if ($_GET["error"] == "none-checkout") {
        echo '<p id="popup1">Check-Out successfully created!</p>';
    }
    if ($_GET["error"] == "none-create") {
        echo '<p id="popup1">Vehicle added successfully!</p>';
    }
    if ($_GET["error"] == "none-update") {
        echo '<p id="popup1">Update successful!</p>';
    }
    if ($_GET["error"] == "invaliddate") {
        echo '<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "invalidinput") {
        echo '<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "errorquery") {
        echo '<p id="popup2">Query error!</p>';
    }
    if ($_GET["error"] == "plateexists") {
        echo '<p id="popup2">Plate already exists in database!</p>';
    }
    // if ($_GET["error"] == "plateexistsotheruser") {
    //     echo '<p id="popup2">Plate already exists in database (other user)!</p>';
    // }
    if ($_GET["error"] == "invalidinputupdate") {
        echo '<p id="popup2">Please populate all mandatory fields correctly.</p>';
    }
    if ($_GET["error"] == "plateempty") {
        echo '<p id="popup2">Please select a vehicle for Check-Out!</p>';
    }
}