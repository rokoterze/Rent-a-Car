<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}



if (isset($_POST['update'])) {
 
    $usernameupd = $_POST["username"];
    $nameupd = $_POST["name"];
    $surnameupd = $_POST["surname"];
    $emailupd = $_POST["email"];
    $accounttypeupd = $_POST["accounttype"];
    $activestatusupd = $_POST["activestatus"];
    $lockstatusupd = $_POST["lockstatus"];
    $systemChange = "UPDATE";

    require_once '../../database/dbh.inc.php';

    if(!ctype_alpha($nameupd) || !ctype_alpha($surnameupd)){
        header("location: ../../../sites/admin/accdb.php?error=invalidinput");
        exit();
    }
   
    if (checkEmail($conn, $emailupd, $usernameupd) !== false) {
        header("location: ../../../sites/admin/accdb.php?error=emailexists");
        exit();
    }
    if (updateUser($conn, $nameupd, $surnameupd, $emailupd, $accounttypeupd, $activestatusupd, $lockstatusupd, $usernameupd) !== false) {
        header("location: ../../../sites/admin/accdb.php?error=invalidupdate");
        exit();
    }

    else{
        include_once '../../system/system.inc.php';

        $location = "Account Database";
        $description = "Account: {$usernameupd}";
        systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);
        
        header("location: ../../../sites/admin/accdb.php?error=none-acc");
        exit();
    }
}

else{
    $username = "";
    $name = "";
    $surname = "";
    $email = "";
    $accounttype = "Type";
    $activestatus = "Activation";
    $lockstatus = "Locking";
}

function updateUser($conn, $nameupd, $surnameupd, $emailupd, $accounttypeupd, $activestatusupd, $lockstatusupd, $usernameupd){

    $sql_check_lock = "SELECT * FROM users WHERE Username = '$usernameupd'";
    $result = mysqli_query($conn,$sql_check_lock);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $lock_check = $row['IsLocked'];
    }


    if(empty($nameupd) || strlen($nameupd)<2 ||empty($surnameupd) || strlen($surnameupd)<2|| empty($emailupd) || empty($accounttypeupd) || empty($activestatusupd) || empty($activestatusupd)){
        $result = true;
    }

    if ($lockstatusupd != $lock_check && $lockstatusupd == 'Unlocked') { 
        $sql = "UPDATE failedlogins  SET IsActiveAttempt = 0 WHERE Username = '$usernameupd';";
        mysqli_query($conn, $sql);
    
        $sql = "UPDATE users SET Name = '$nameupd', Surname = '$surnameupd', Email = '$emailupd', AccountType = '$accounttypeupd', IsActivated = '$activestatusupd', IsLocked = '$lockstatusupd' WHERE Username = '$usernameupd';";
        mysqli_query($conn, $sql);
        $result = false;
    }

    else {
    $sql = "UPDATE users SET Name = '$nameupd', Surname = '$surnameupd', Email = '$emailupd', AccountType = '$accounttypeupd', IsActivated = '$activestatusupd', IsLocked = '$lockstatusupd' WHERE Username = '$usernameupd';";
    mysqli_query($conn, $sql);
        $result = false;
    }
    return $result;  
}

function checkEmail($conn, $emailupd, $usernameupd){
    $sql_exists = "SELECT * FROM users WHERE Email = '$emailupd' AND Username = '$usernameupd';";
    $result_exists = mysqli_query($conn,$sql_exists);

    if (mysqli_num_rows($result_exists) > 0) {
        $result = false;
    }

    else{
        $sql = "SELECT * FROM users WHERE Email = '$emailupd';";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
            $result = true;
        } 
        else $result = false;
    }
    return $result;
}