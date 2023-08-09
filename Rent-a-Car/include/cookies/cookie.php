<?php
$username = $_COOKIE['username'] ?? '';
$password = $_COOKIE['pwd'] ?? '';
$global_admin = $_COOKIE['global-admin'] ?? '';
$global_user = $_COOKIE['global-user'] ?? '';
$message = '';

include '../../include/database/dbh.inc.php';

$sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password';";

$result = mysqli_query($conn, $sql);

$result2 = mysqli_fetch_array($result);

if (!$global_admin && !$global_user) {
    header('Location: ../../login.php');
    exit();
}

if (mysqli_num_rows($result) > 0)
{
    $message = "Welcome back " . $result2['Name']. " " . $result2['Surname']."!";
}
 
else {
    header('Location: ../../login.php');
    exit();
}

