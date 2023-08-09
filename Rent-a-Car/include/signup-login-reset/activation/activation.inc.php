<?php
if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $verificationCode = $_POST["verificationcode"];
    
    require_once '../../database/dbh.inc.php';

    if (invalidEmail($email) !== false) {
        header("location: ../../../activation.php?error=invalidemail");
        exit();
    } 
    if (isActivated($conn, $email) !== false) {
        header("location: ../../../activation.php?error=accountalreadyactivated");
        exit();
    } 
    if (activateAccount($conn, $email, $verificationCode) !== false) {
        header("location: ../../../activation.php?error=wrongcodeoremail");
        exit();
    } 
    
    else {
        header("location: ../../../activation.php?error=none");
        exit();
    }
}

function invalidEmail($email){
    $result = null;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function isActivated($conn, $email)
{
    $sql = "SELECT * FROM users WHERE Email = '$email' AND IsActivated = 'Active';";
    $result0 = $conn->query($sql);

    if(mysqli_num_rows($result0) > 0){
        $result = true;
    } 
    else {
        $result = false;
    } 
    return $result;
}
function activateAccount($conn, $email, $verificationCode)
{
    $sql = "SELECT * FROM users WHERE Email = '$email' AND VerificationCode = '$verificationCode';";
    $result0 = $conn->query($sql);

    if (mysqli_num_rows($result0) > 0)
    {
        $sql = "UPDATE users SET isActivated = 'Active' WHERE Email = '$email' AND VerificationCode = '$verificationCode';";
        $conn->query($sql);
        $result = false;
    } 
    else {
        $result = true;
    }
    return $result;
}