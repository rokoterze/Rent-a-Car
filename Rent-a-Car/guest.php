<?php include 'templates/sites/header-guest.php';?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2>Welcome Guest!</h2>
            <form action="./logout.php" method="post" id="logoutform"> 
                <a href="login.php"><img src="resources/icons/logout.png" alt="logout" id="logouticon"></a>
            </form>
        </div>

    <div id="mainCont">

    <form action="" method="post"><input type="submit" name="showall" id="showall" value="Show Table"></form>
    <h4>Complete Rent-a-Car Vehicles Available</h4><hr>
    <table>
        <thead>
                <tr>
                    <th width="5%"></th>
                    <th width="15%">Make</th>
                    <th width="10%">Model</th>
                    <th width="10%">Plate</th>
                    <th width="10%">Price /day</th>
                    <th width="10%">Type</th>
                    <th width="10%">Availability</th>
        </thead>
        <tbody>
            <?php
            $serverName = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "rent-a-car";

            $conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

            if (!$conn) {
                die("Connection failed: " .mysqli_connect_error());
            }

            if (isset($_POST['showall'])) {
                $sql = "SELECT * FROM vehicledatabase ORDER BY 1 DESC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <tr>
                            <td></td>
                            <td>".$row['Make']."</td>
                            <td>".$row['Model']."</td>
                            <td>".$row['Plate']."</td>
                            <td>".$row['Price']." €</td>
                            <td>".$row['Type']."</td>
                            <td>".$row['IsAvailable']."</td>
                        </tr>";
                    }
                } else echo "<tr><td>0 results found!</td></tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
    <div id="navigationContainer"></div>
    <div id="rightCont"></div>
        
<?php include 'templates/sites/footer-guest.php';?>