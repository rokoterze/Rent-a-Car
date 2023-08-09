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
 
    $make = $_POST["make"];
    $model = $_POST["model"];
    $plate = $_POST["plate"];
    $price = $_POST["price"];
    $type = $_POST["type"];
    $dateTime = date('Y-m-d H:i:s');
    $isActive = "Active";
    $username = $_COOKIE['global-user'];

    require_once '../../database/dbh.inc.php';

    if (checkInput($make, $model, $plate, $price) !== false) {
        header("location: ../../../sites/user/administration.php?error=invalidinput");
        exit();
    }

    if (checkPlate($conn, $plate, $username) !== false) {
        header("location: ../../../sites/user/administration.php?error=plateexists");
        exit();
    }
    createVehicle($conn, $make, $model, $plate, $price, $type, $dateTime, $username, $isActive);

}

function createVehicle($conn, $make, $model, $plate, $price, $type, $dateTime, $username, $isActive)
{

    $sql_create = "INSERT INTO vehicledatabase (Make, Model, Plate, Price, Type, DateOfCreation, Username, IsActive) 
    VALUES ('$make', '$model', '$plate', '$price', '$type', '$dateTime', '$username', '$isActive');";

    $result = mysqli_query($conn, $sql_create);

    if (!$result){
        header("location: ../../../sites/user/administration.php?error=errorquery");
        exit();
    }

    include_once '../../system/system.inc.php';

    $location = "Vehicle Administration";
    $systemChange = "CREATE";
    $description = "Vehicle: {$plate}";
    systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);

    header("location: ../../../sites/user/administration.php?error=none-create");
    exit();
  
}

function checkInput($make, $model, $plate, $price){
    if (empty($make) || !ctype_alpha($make) || strlen($make)<2 || empty($model) || empty($plate) || empty($price) || strlen($price)<=0) {
        $result = true;
    }
    else $result = false;

    return $result;
}


function checkPlate($conn, $plate, $username){
    
    $sql_exists = "SELECT * FROM vehicledatabase WHERE Plate = '$plate' AND Username = '$username';";
    $result_exists = mysqli_query($conn,$sql_exists);

    if (mysqli_num_rows($result_exists) > 0) {
        $result = true;
    }

    $sql_exists_other = "SELECT * FROM vehicledatabase WHERE Plate = '$plate' AND IsActive = 'Active';";
    $result_exists_other = mysqli_query($conn,$sql_exists_other);

    if (mysqli_num_rows($result_exists_other) > 0) {
        $result = true;
    }

    else $result = false;
        
    return $result;
}

