<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    
    
    $recaptcha = $_POST['g-recaptcha-response']; 
    $secret_key = '6LfIkbsjAAAAACoJpXHLMQp0i9ke_BS5YoXD2R30'; 
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secret_key . '&response=' . $recaptcha; 
    $response = file_get_contents($url); 
    $response = json_decode($response);

    require_once '../../database/dbh.inc.php';

    if (badInputLogin($username, $pwd) !== false || $response->success != true) {
        header("location: ../../../login.php?error=badinput");
        exit();
    }
    
    if (isLocked($conn, $username)!== false) {
        header("location: ../../../login.php?error=accountislocked");
        exit();
    }

    loginUser($conn, $username, $pwd);
    
} 
else {
    header("location: ../login.php");
    exit();
}


function badInputLogin($username, $pwd){
    $result = null;
    if(empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function isLocked($conn, $username)
{
    $usernameExists1 = usernameExists($conn, $username);

    if($usernameExists1["IsLocked"]==='Locked'){
        $result = true;
    } 
    else {
        $result = false;
    } 
    return $result;
}

function lockAccount($conn, $username){
    $sql = "UPDATE users SET IsLocked = 'Locked' WHERE Username = '$username';";
    $conn->query($sql);
} 


function failedLogin($conn, $username, $unixTime, $date)
{
    checkFailedLogins($conn, $username);

    $sql = "INSERT INTO failedlogins (Username, LoginTimeUnix, LoginTime, IsActiveAttempt) VALUES ('$username', '$unixTime', '$date', 1);";
    $conn->query($sql);
}

function checkFailedLogins($conn, $username)
{
    $sql = "SELECT * FROM failedlogins Where Username = '$username' AND IsActiveAttempt = '1';";
    $result = $conn->query($sql);
    include '../../system/system.inc.php';

    if (mysqli_num_rows($result) >= getLoginAttempt($conn)){

        lockAccount($conn, $username);
        header("location: ../../../login.php?error=accountislocked");
        exit();
    }
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

function loginUser($conn, $username, $pwd){
    
    $usernameExists1 = usernameExists($conn, $username);

    if($usernameExists1 === false){ 
     header("location: ../../../login.php?error=usernamedoesnotexist");
     exit();
    }

    if($usernameExists1["IsActivated"]!=='Active'){ 
     header("location: ../../../login.php?error=accountnotactivated");
     exit();
    }

    $pwdHashed = $usernameExists1["Password"]; 
    $checkPwd = password_verify($pwd, $pwdHashed);
    
    if ($checkPwd === true && $usernameExists1["AccountType"]=='Admin') {
        
        include('../../../include/system/system.inc.php');
        setcookie(
            'global-admin',
            $username,
            (time() +getCookieLifetime($conn)),
            '/'
        );
        setcookie(
            'username',
            $username,
            (time() +getCookieLifetime($conn)),
            '/Rent-a-Car/sites/admin'
        );
        setcookie(
            'pwd',
            $pwdHashed,
            (time() +getCookieLifetime($conn)),
            '/Rent-a-Car/sites/admin'
        );

        systemLogin($conn, $username, $timeUnix, $dateTime);
                
        header('location: ../../../sites/admin/index.php');
        exit();
    }

    if ($checkPwd === true && $usernameExists1["AccountType"]=='User') { 
        
        include('../../../include/system/system.inc.php');
        setcookie(
            'global-user',
            $username,
            (time() +getCookieLifetime($conn)),
            '/'
        );
        setcookie(
            'username',
            $username,
            (time() +getCookieLifetime($conn)),
            '/Rent-a-Car/sites/user'
        );
        setcookie(
            'pwd',
            $pwdHashed,
            (time() +getCookieLifetime($conn)),
            '/Rent-a-Car/sites/user'
        );

        systemLogin($conn, $username, $timeUnix, $dateTime);
        
        header('location: ../../../sites/user/index.php');
        exit();
    }
    if ($checkPwd === false) {
        $unixTime = time();
        $date = date('Y-m-d H:i:s');
        
        failedLogin($conn, $username, $unixTime, $date);
        header("location: ../../../login.php?error=wronglogin");
        exit();
    } 
}

function countFailedLogins($conn, $username) //
{
    include '../../system/system.inc.php';
    
    
    $sql = "SELECT * FROM failedlogins Where Username = '$username' AND IsActiveAttempt = '1';";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        $rowNum = mysqli_num_rows($result);

        $messageCount = getLoginAttempt($conn)-$rowNum;
        return $messageCount;
    }
}
