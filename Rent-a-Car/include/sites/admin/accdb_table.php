<?php
include '../../include/database/dbh.inc.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo("<tr><td>" . $row["ID"] 
        . "<td>" . $row["Name"]
        . "<td>". $row["Surname"]
        . "<td>". $row["Email"]
        . "<td>". $row["Username"]
        . "<td>". $row["AccountType"]
        . "<td>". $row["DateOfCreation"]
        . "<td>". $row["VerificationCode"]
        . "<td>". $row["IsActivated"]
        . "<td>". $row["IsLocked"] 
        . "<td><a href='accdb.php?edit={$row["ID"]}'>Select</a>
        <tr><td>");
    }
}

if(isset($_GET['edit'])){
    
    $id = $_GET['edit'];
    $query ="SELECT * FROM users WHERE ID = $id;";
    $result = mysqli_query($conn, $query);
 
    while($row = mysqli_fetch_assoc($result)){
        $username = $row['Username'];
        $name = $row['Name'];
        $surname = $row['Surname'];
        $email = $row['Email'];
        $accounttype = $row['AccountType'];
        $vercode = $row['VerificationCode'];
        $activestatus = $row['IsActivated'];
        $lockstatus = $row['IsLocked'];
    }
}