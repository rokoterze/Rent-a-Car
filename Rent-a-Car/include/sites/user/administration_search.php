<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
$username = $_COOKIE['global-user'];

$name = $_POST['name'];
//$sql = "SELECT * FROM vehicledatabase WHERE Username = '$username' AND Plate LIKE '%".$_POST['name']."%' OR ID = '".$_POST['name']."' ORDER BY 1 DESC";
$sql = "SELECT * FROM vehicledatabase WHERE Username = '$username' AND Plate LIKE '%".$_POST['name']."%' OR Type LIKE '%".$_POST['name']."%' ORDER BY 1 DESC";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)  {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <td>".$row['ID']."</td>
            <td>".$row['Make']."</td>
            <td>".$row['Model']."</td>
            <td>".$row['Plate']."</td>
            <td>".$row['Price']." €</td>
            <td>".$row['Type']."</td>
            <td>".$row['DateOfCreation']."</td>
            <td>".$row['IsActive']."</td>
            <td>".$row['IsAvailable']."</td>
            <td><a href='administration.php?edit={$row["ID"]}'>Select</a><td>
        </tr>";
    }
} else {
    echo "<tr><td>0 results found!</td></tr>";
}

