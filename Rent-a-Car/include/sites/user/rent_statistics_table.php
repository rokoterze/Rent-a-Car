<?php
    $username = $_COOKIE['global-user'];

    $query_total = "SELECT * FROM vehiclerenting WHERE Username = '$username'";
    $query_run = mysqli_query($conn,$query_total);
    
    $total_sum = 0;

    while ($row = mysqli_fetch_assoc($query_run)) {
        $total_sum += $row['TotalPrice'];
    }
    
?>

<label for="total">Earnings Total: </label>
<input type="text" class="displaydata" disabled value="<?php echo $total_sum?> €">
<hr>
<form action="" method="post"><input type="submit" name="showall" id="showall" value="Show Table"></form>

<!-- ZADATAK PROFESOR -->
<form action="" method="post"><input type="submit" name="deleteall" id="deleteall" value="Delete All"></form> 
<!-- ZADATAK PROFESOR -->

    <h4>Complete Rent Statistics</h4><hr>
    <table>
        <thead>
            <tr>
                <th width="5%"></th>
                <th width="5%">ID</th>
                <th width="10%">Customer Name</th>
                <th width="10%">Customer Surname</th>
                <th width="10%">Customer OIB</th>
                <th width="10%">Plate</th>
                <th width="15%">Check-In</th>
                <th width="10%">Check-Out</th>
                <th width="10%">Total</th>
                <th width="15%">Current Rent Status</th>
        </thead>
    
        <tbody id="output">
        <?php
        $serverName = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "rent-a-car";

        $conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

        if (!$conn) {
            die("Connection failed: " .mysqli_connect_error());
        }

        //<!-- ZADATAK PROFESOR -->
        if (isset($_POST['deleteall'])) {

            $sql_delete = "TRUNCATE TABLE vehiclerenting"; 
            //Ako zelimo izbrisati sve retke iz tablice najmova

            // $sql_delete = "DELETE FROM vehiclerenting WHERE Username = '$username'";
            //Ako zelimo izbrisati samo najmove od logiranog korisnika

            $result_delete= mysqli_query($conn, $sql_delete);

            if($result_delete)
            {
            echo("Complete renting history has been deleted.");
            }
        }
        //<!-- ZADATAK PROFESOR -->

        if (isset($_POST['showall'])) {
            $sql = "SELECT * FROM vehiclerenting WHERE Username = '$username' ORDER BY 1 DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td></td>
                        <td>" . $row['ID'] . "</td>
                        <td>" . $row['CustomerName'] . "</td>
                        <td>" . $row['CustomerSurname'] . "</td>
                        <td>" . $row['CustomerOIB'] . "</td>
                        <td>" . $row['Plate'] . "</td>
                        <td>" . $row['CheckinDate'] . "</td>
                        <td>" . $row['CheckoutDate'] . "</td>
                        <td>" . $row['TotalPrice'] . " €</td>
                        <td>" . $row['IsActive'] . "</td>
                    </tr>";
                }
            } else echo "<tr><td>0 results found!</td></tr>";
        }
        ?>
        </tbody>
    </table>
