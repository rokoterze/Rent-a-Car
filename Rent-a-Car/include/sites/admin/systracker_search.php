<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

$sql = "SELECT * FROM syschanges WHERE Username LIKE '%".$_POST['name']."%' OR Location LIKE '%".$_POST['name']."%' ORDER BY 1 DESC";
$result = mysqli_query($conn, $sql);

$sqlfull = "SELECT * FROM syschanges;";
$resultfull = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)  {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <td>".$row['Location']."</td>
            <td>".$row['SystemChange']."</td>
            <td>".$row['Description']."</td>
            <td>".$row['DateTime']."</td>
            <td>".$row['Username']."</td>
        </tr>";
    }
} else {
    echo "<tr><td>0 results found!</td></tr>";
   
}