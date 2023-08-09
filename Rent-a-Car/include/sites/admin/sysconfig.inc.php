<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

$sql_login = "SELECT * FROM sysconfig WHERE Type = 'Login Attempts';";
$result_login = mysqli_query($conn, $sql_login);

if (mysqli_num_rows($result_login) > 0) {
    while ($row = mysqli_fetch_assoc($result_login)) {
        $loginattempts = $row['Value'];
    }
}

$sql_page = "SELECT * FROM sysconfig WHERE Type = 'Pagination Number';";
$result_page = mysqli_query($conn, $sql_page);

if (mysqli_num_rows($result_page) > 0) {
    while ($row = mysqli_fetch_assoc($result_page)) {
        $pagination = $row['Value'];
    }
}

$sql_cookie = "SELECT * FROM sysconfig WHERE Type = 'Cookie Lifetime';";
$result_cookie = mysqli_query($conn, $sql_cookie);

if (mysqli_num_rows($result_page) > 0) {
    while ($row = mysqli_fetch_assoc($result_cookie)) {
        $cookie_days = $row['Value'];
    }
}

if (isset($_POST['submit'])) {

    $value_login = $_POST['loginattempt'];
    $value_page = $_POST['page'];
    $value_cookie = $_POST['cookietime'];

    $location = "System Configuration";
    $systemChange = "UPDATE";


    if (!is_numeric($value_login) || !is_numeric($value_page) || !is_numeric($value_cookie)) {
        header("location: ../../../sites/admin/sysconfig.php?error=invalidinput");
        exit();
    }

    if ($value_login <1 || $value_page < 1 || $value_cookie <1 ) {
        header("location: ../../../sites/admin/sysconfig.php?error=invalidinput");
        exit();
    }

    if ($value_login != $loginattempts) {
        $sql_login_update = "UPDATE sysconfig SET Value ='$value_login' WHERE Type = 'Login Attempts';";
        $result = mysqli_query($conn, $sql_login_update);

        if ($result) {
            include_once '../../system/system.inc.php';
            $description = "Login Attempt: OLD: $loginattempts / NEW: $value_login";
            systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);
        } 
        else {
            header("location: ../../../sites/admin/sysconfig.php?error=dberror");
            exit();
        }
    }

    if ($value_page != $pagination) {
        $sql_page_update = "UPDATE sysconfig SET Value ='$value_page' WHERE Type = 'Pagination Number';";
        $result = mysqli_query($conn, $sql_page_update);

        if ($result) {
            include_once '../../system/system.inc.php'; 
            $description = "Pagination Number: OLD: $pagination / NEW: $value_page";
            systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);
        } 
        else {
            header("location: ../../../sites/admin/sysconfig.php?error=dberror");
            exit();
        }
    }

    if ($value_cookie != $cookie_days) {
        $sql_cookie_update = "UPDATE sysconfig SET Value ='$value_cookie' WHERE Type = 'Cookie Lifetime';";
        $result = mysqli_query($conn, $sql_cookie_update);

        if ($result) {
            include_once '../../system/system.inc.php'; 
            $description = "Cookie Lifetime [Days]: OLD: $cookie_days / NEW: $value_cookie";
            systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);
        } 
        else {
            header("location: ../../../sites/admin/sysconfig.php?error=dberror");
            exit();
        }
    }

    header("location: ../../../sites/admin/sysconfig.php?error=none");
    exit();
}