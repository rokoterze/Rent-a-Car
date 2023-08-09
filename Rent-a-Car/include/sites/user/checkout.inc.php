<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $username = $_COOKIE['global-user'];
    $plate = $_POST["plate"];

    if (empty($plate)) {
        header("location: ../../../sites/user/checkout.php?error=plateempty");
        exit();
    }
    require_once '../../database/dbh.inc.php';

    createCheckOut($conn, $plate, $username);
}

function createCheckOut($conn, $plate, $username){

    $sql_create = "UPDATE vehiclerenting SET IsActive = 'Inactive' WHERE Username = '$username' AND Plate = '$plate';";
    $result = mysqli_query($conn, $sql_create);

    $sql_change_availability = "UPDATE vehicledatabase SET IsAvailable = 'Available' WHERE Plate = '$plate';";
    $result = mysqli_query($conn, $sql_change_availability);
    
    if (!$result){
        header("location: ../../../sites/user/checkout.php?error=errorquery");
        exit();
    }

    include_once '../../system/system.inc.php';

    $location = "Check-Out";
    $systemChange = "CREATE";
    $description = "Vehicle: {$plate}";
    systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);

    header("location: ../../../sites/user/checkout.php?error=none-checkout");
    exit();
}
