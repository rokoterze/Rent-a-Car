<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
$timeUnix = time();
$dateTime = date('Y-m-d H:i:s');

////////////////////// syschanges /////////////////////
function systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime){
    $global_admin = $_COOKIE['global-admin'] ?? '';
    $global_user = $_COOKIE['global-user'] ?? '';

    if($global_admin){
        $sql = "INSERT INTO syschanges (Location, SystemChange, Description, TimeUnix, DateTime, Username) VALUES ('$location','$systemChange','$description', '$timeUnix', '$dateTime', '$global_admin');";
        $conn->query($sql);
    }
    if($global_user){
        $sql = "INSERT INTO syschanges (Location, SystemChange, Description, TimeUnix, DateTime, Username) VALUES ('$location','$systemChange','$description', '$timeUnix', '$dateTime', '$global_user');";
        $conn->query($sql);
    }
    
}
/////////////////////// syslogs ///////////////////////
function systemLogin($conn, $username, $timeUnix, $dateTime)
{
    $sql = "INSERT INTO syslogs (Username, LoginTimeUnix, LoginDateTime) VALUES ('$username', '$timeUnix', '$dateTime');";
    $conn->query($sql);
}
function systemLogout($conn, $username, $timeUnix, $dateTime)
{
    $sql = "UPDATE syslogs SET LogoutTimeUnix = '$timeUnix', LogoutDateTime='$dateTime' WHERE Username = '$username' ORDER BY ID DESC LIMIT 1;";
    $conn->query($sql);
}
/////////////////////// sysconfig ///////////////////////
function getLoginAttempt($conn){
    $sql_login = "SELECT * FROM sysconfig WHERE Type = 'Login Attempts';";
    $result_login = mysqli_query($conn, $sql_login);

    if (mysqli_num_rows($result_login) > 0) {
    while ($row = mysqli_fetch_assoc($result_login)) {
        $loginattempts = $row['Value'];
    }
        return $loginattempts;
    }
}
function getPageNumber($conn){
    $sql_page = "SELECT * FROM sysconfig WHERE Type = 'Pagination Number';";
    $result_page = mysqli_query($conn, $sql_page);

    if (mysqli_num_rows($result_page) > 0) {
        while ($row = mysqli_fetch_assoc($result_page)) {
            $pagination = $row['Value'];
        }
        return $pagination;
    }
}
function getCookieLifetime($conn){
    $sql_cookie = "SELECT * FROM sysconfig WHERE Type = 'Cookie Lifetime';";
    $result_cookie = mysqli_query($conn, $sql_cookie);

    if (mysqli_num_rows($result_cookie) > 0) {
        while ($row = mysqli_fetch_assoc($result_cookie)) {
            $cookietime = $row['Value'];
            $cookietime_seconds = $cookietime * 86400;
        }
        return $cookietime_seconds;
    }
}