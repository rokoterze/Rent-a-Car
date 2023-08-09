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
    $checkindate = $_POST["checkindate"];
    $checkoutdate = $_POST["checkoutdate"];
    $totalprice = $_POST["totalprice"];


    $customername = $_POST["customername"];
    $customersurname = $_POST["customersurname"];
    $customeroib = $_POST["customeroib"];

    require_once '../../database/dbh.inc.php';


    if(checkInput($plate, $customername, $customersurname, $customeroib, $checkindate, $checkoutdate) !== false){
        header("location: ../../../sites/user/checkin.php?error=invalidinput");
        exit();
    }

    if (checkDateInput($checkindate, $checkoutdate) !== false) {
        header("location: ../../../sites/user/checkin.php?error=invaliddate");
        exit();
    }

    createCheckIn($conn, $customername, $customersurname, $customeroib, $plate, $checkindate, $checkoutdate, $username);

}

function createCheckIn($conn, $customername, $customersurname, $customeroib, $plate, $checkindate, $checkoutdate, $username)
{
    $price = getPrice($conn, $plate, $username);
    $diff = strtotime($checkoutdate) - strtotime($checkindate); 
    $days = abs(round($diff / 86400));

    $totalprice = $price * $days;

    if ($totalprice <= $price) {
        $sql_create = "INSERT INTO vehiclerenting (CustomerName, CustomerSurname, CustomerOIB, Plate, CheckinDate, CheckoutDate, TotalPrice, Username, IsActive) 
        VALUES ('$customername', '$customersurname', '$customeroib', '$plate', '$checkindate', '$checkoutdate', '$price', '$username', 'Active');";
    } 
    else {
        $sql_create = "INSERT INTO vehiclerenting (CustomerName, CustomerSurname, CustomerOIB, Plate, CheckinDate, CheckoutDate, TotalPrice, Username, IsActive) 
    VALUES ('$customername', '$customersurname', '$customeroib', '$plate', '$checkindate', '$checkoutdate', '$totalprice', '$username', 'Active');";
    }

    
    
    $result = mysqli_query($conn, $sql_create);

    $sql_change_availability = "UPDATE vehicledatabase SET IsAvailable = 'Not Available' WHERE Plate = '$plate' AND Username = '$username';";
    $result = mysqli_query($conn, $sql_change_availability);

    if (!$result){
        header("location: ../../../sites/user/checkin.php?error=errorquery");
        exit();
    }

    include_once '../../system/system.inc.php';

    $location = "Check-In";
    $systemChange = "CREATE";
    $description = "Vehicle: {$plate}";
    systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);

    header("location: ../../../sites/user/checkin.php?error=none-checkin");
    exit();
  
}

function getPrice($conn,$plate, $username){
    $sql = "SELECT * FROM vehicledatabase WHERE Plate = '$plate' AND Username = '$username';";
    $result = mysqli_query($conn, $sql);
    
    if($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $price = $row['Price'];
        }
    }
    return $price;
}

function checkDateInput($checkindate, $checkoutdate)
{
    if ($checkindate > $checkoutdate) {
        $result = true;
    } 
    else $result = false;

    return $result;
}

function checkInput($plate, $customername, $customersurname, $customeroib, $checkindate, $checkoutdate){
    if (empty($plate) || !ctype_alpha($customername) || !ctype_alpha($customersurname) || strlen($customername)<2 || strlen($customersurname)<2 || empty($customername) || empty($customersurname) || empty($customeroib) || empty($checkindate) || empty($checkoutdate)) {
        $result = true;
    }
    else $result = false;

    return $result;
}

