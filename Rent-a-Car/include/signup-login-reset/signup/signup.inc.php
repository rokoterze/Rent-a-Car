<?php
if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $adminpwd = $_POST["adminpwd"];
    $date = date('Y-m-d H:i:s');
    $verificationCode = rand(10000,99999);
    $isActivated = 'Inactive';
    $isLocked = 'Unlocked';

    require_once '../../database/dbh.inc.php';

    if (badInputSignup($name, $surname, $email, $username, $pwd, $pwdRepeat, $adminpwd) !== false) {
        header("location: ../../../signup.php?error=badinput");
        exit();
    }
    
    if (invalidEmail($email) !== false) {
        header("location: ../../../signup.php?error=invalidemail");
        exit();
    }

    if (emailExists($conn,$email) !== false) {
        header("location: ../../../signup.php?error=emailexists");
        exit();
    }
    
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../../../signup.php?error=passwordsunmatched");
        exit();
    }

    if (usernameExists($conn, $username) !== false) {
        header("location: ../../../signup.php?error=usernameexists");
        exit();
    }

    if ($adminpwd == "") {
        include '../../PHPMailer/sendEmail.php';
        createUser($conn, $name, $surname, $email, $username, $pwd, 'User', $date, $verificationCode, $isActivated, $isLocked);
    }

    if ($adminpwd == "aspira") {
        include '../../PHPMailer/sendEmail.php';
        createUser($conn, $name, $surname, $email, $username, $pwd, 'Admin', $date, $verificationCode, $isActivated, $isLocked);
    }
   
} 
else {
    header("location: ../../../signup.php");
    exit();
}

function badInputSignup($name, $surname, $email, $username, $pwd, $pwdRepeat, $adminpwd){
    $result = null;
    if(empty($name) || strlen($name)<2 ||empty($surname) || strlen($surname)<2|| empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
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
function emailExists($conn,$email){
    $sql = "SELECT * FROM users WHERE Email = '$email'";
    $result0 = $conn->query($sql);
    
    if (mysqli_num_rows($result0) > 0)
    {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result = null;
    if ($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function usernameExists($conn, $username){
  
    $sql = "SELECT * FROM users WHERE Username = ?;";
    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)){
        header("location: ../../../signup.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($statement,"s", $username);
    mysqli_stmt_execute($statement);

    $result = mysqli_stmt_get_result($statement);

    if($row = mysqli_fetch_assoc($result)){
        return $row; 
    }
    else{
        $result = false;
        return $result;
    }
}

function createUser($conn, $name, $surname, $email, $username, $pwd, $adminpwd, $date, $verificationCode, $isActivated, $isLocked){
    $sql = "INSERT INTO users (Name, Surname, Email, Username, Password, AccountType, DateOfCreation, VerificationCode, IsActivated, IsLocked) VALUES (?,?,?,?,?,?,?,?,?,?);";
    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)){
        header("location: ../../../signup.php?error=statementfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement,"ssssssssss", $name, $surname, $email, $username, $hashedPwd, $adminpwd, $date, $verificationCode, $isActivated, $isLocked);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("location: ../../../signup.php?error=none");
    exit();
}

