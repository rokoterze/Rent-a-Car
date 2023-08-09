<?php
if (isset($_POST["submit"])) { 
    
    $emailFrom = $_POST["senderEmail"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $emailTo = "projekt.aspira.rokoterze@gmail.com";
    $headers = "From: " .$emailFrom;
    $txt = "From: ".$emailFrom."\n\n".$message."";
    
    include '../../database/dbh.inc.php';

    if (badInputContact($emailFrom, $subject, $message) !== false) {
        header("location: ../../../contact.php?error=badinput");
        exit();
    }

    if (invalidEmail($emailFrom) !== false) {
        header("location: ../../../contact.php?error=invalidemail");
        exit();
    }

    else{
        mail($emailTo, $subject, $txt, $headers);
        header("location: ../../../contact.php?error=none");
        exit();
    }
    
}
function badInputContact($emailFrom, $subject, $message){
    $result = null;
    if(empty($emailFrom) ||empty($subject) || empty($message)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($emailFrom){
    $result = null;
    if (!filter_var($emailFrom, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function userExists($conn,$emailFrom){ //popravit!!!!!!!!ako ima usera neka mi posalje podatke u email!!!
    $sql = "SELECT * FROM users WHERE Email = '$emailFrom'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck > 0){
        while($row=mysqli_fetch_assoc($result))
        {
            $ID=$row['ID'];
            $Name=['Name'];
            $Surname=$row['Surname'];
            $Username=$row['Username'];
        }
    }
}