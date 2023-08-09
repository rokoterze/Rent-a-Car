<?php
if (isset($_POST["reset-request-submit"])) {
    
    $email = $_POST["email"];
    
    require_once '../../database/dbh.inc.php';

    if (invalidEmail($email) !== false) {
        header("location: ../../../reset.php?error=invalidemail");
        exit();
    } 
    if (resetEmailExists($conn,$email) !== false) {
        header("location: ../../../reset.php?error=emaildoesnotexist");
        exit();
    } 
    else {
        header("location: ../../../reset.php?error=none");
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
function resetEmailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE Email = '$email'";
    $result0 = $conn->query($sql);
    
    if (mysqli_num_rows($result0) > 0)
    {
        $result = false;
    } 
    else {
        $result = true;
    }
    return $result;
}