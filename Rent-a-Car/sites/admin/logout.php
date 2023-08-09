<?php
include '../../include/system/system.inc.php';
include '../../include/database/dbh.inc.php';


if (isset($_POST["logout"])) {

    systemLogout($conn,  $_COOKIE['username'], $timeUnix, $dateTime);

    setcookie ("pwd", "", (time()-100),'/Rent-a-Car/sites/admin');
    setcookie ("username", "", (time()-100),'/Rent-a-Car/sites/admin');
    setcookie ("global-admin", "", (time()-100),'/');

    header('Location: ../../login.php');
    exit();
}

