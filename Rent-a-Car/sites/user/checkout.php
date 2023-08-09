<?php
$message = "";
include '../../templates/sites/header.php';
?>

<body>
    <div class="gridCont">
        <div id="headerCont">
        <h2>Check-Out</h2>
            <form action="./logout.php" method="post" id="logoutform"> 
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>
        <div id="mainCont_checkout">
            <div id="checkout_title"><h2>Create a Check-Out</h2></div>
           
            <div id="form_checkout">
            <?php
                $customername = "";
                $customersurname = "";
                $customeroib = "";
                $plate = "";
                $checkindate = "";
                $checkoutdate = "";
                $totalprice = "";

                $id = $_GET['select'] ?? '';
                $username = $_COOKIE['global-user'];
                $plate = "";
                $price = "";
            if ($id) {
                $sql = "SELECT * FROM vehiclerenting WHERE Username = '$username' AND ID = '$id';";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $customername = $row['CustomerName'];
                    $customersurname = $row['CustomerSurname'];
                    $customeroib = $row['CustomerOIB'];
                    $plate = $row['Plate'];
                    $checkindate = $row['CheckinDate'];
                    $checkoutdate = $row['CheckoutDate'];
                    $totalprice = $row['TotalPrice'];
                }
            }
            ?>
            <br>
            <form action="../../include/sites/user/checkout.inc.php" method="post">

            <input type="text" placeholder="Plate" name="plate" id="plate" value="<?php echo $plate?>" readonly class="input-form display"><br>
            
            <label for="checkindate"></span>Rent Date</label><br>
            <input type="text" name="checkindate" id="checkindate" value="<?php echo $checkindate?>" readonly class="displaydate">
            <span>-</span>
            <input type="text" name="checkoutdate" id="checkoutdate" value="<?php echo $checkoutdate ?>" readonly class="displaydate"><br>
            
            <label for="customername"></span>Customer</label><br>
            <input type="text" name="customername" id="customername" value="<?php echo $customername. ' ' .$customersurname?>" readonly class="displaydata"><br>
            <input type="text" name="customeroib" id="customeroib" value="<?php echo $customeroib?>" readonly class="displaydata"><br>
            <input type="text" name="totalprice" id="totalprice" value="<?php echo $totalprice.' €'?>" readonly class="displaydata"><br>
            
            <input type="submit" name="submit" id="submit" value="Check-Out">
            <?php include '../../include/sites/user/errors.php'; ?>  
            </form>
            </div>
              
            
            <div id="table_checkout"> 
                <div id="main">
                    <form action="" method="post">

                    <label for="search" style="color: white;">Search: </label>
                    <input type="text" name="search" id="search" placeholder=" Search by Plate..">
                    <input type="submit" name="searchbtn" id="searchbtn" value="Search">

                </form>

                <h4>Vehicles available for Check-Out</h4><hr>
                    <table>
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="10%">Customer Name</th>
                            <th width="10%">Customer Surname</th>
                            <th width="10%">Customer OIB</th>
                            <th width="10%">Plate</th>
                            <th width="15%">Check-In</th>
                            <th width="15%">Check-Out</th>
                            <th width="10%">Total</th>
                            <th width="10%">Status</th>
                            <th width="5%">Select</th>
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

                    $username = $_COOKIE['global-user'];
                    
                    if (isset($_POST['searchbtn'])) {
                        $plate = $_POST['search'];

                        if (empty($plate)) {
                            $sql = "SELECT * FROM vehiclerenting WHERE Username = '$username' AND IsActive = 'Active' ORDER BY 1 DESC";
                        }
                        else {
                            $sql = "SELECT * FROM vehiclerenting WHERE Username = '$username' AND Plate = '$plate' AND IsActive = 'Active' ORDER BY 1 DESC";
                        }

                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0)  {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "
                                <tr>
                                    <td>".$row['ID']."</td>
                                    <td>".$row['CustomerName']."</td>
                                    <td>".$row['CustomerSurname']."</td>
                                    <td>".$row['CustomerOIB']."</td>
                                    <td>".$row['Plate']."</td>
                                    <td>".$row['CheckinDate']."</td>
                                    <td>".$row['CheckoutDate']."</td>
                                    <td>".$row['TotalPrice']." €</td>
                                    <td>".$row['IsActive']."</td>
                                    <td><a href='checkout.php?select={$row["ID"]}'>Select</a><td>
                                </tr>";
                            }
                        } else echo "<tr><td>0 results found!</td></tr>"; 
                    }
                    ?>
                    </tbody>
                    </table>
                </div>    
            </div> 
        </div>
            <div id="navigationContainer">
                <button class="accordion"><a href="./administration.php">Vehicle Administration</a></button>
                <button class="accordion"><a href="./checkin.php">Check In</a></button>
                <button class="accordion" id="activeLink"><a href="./checkout.php">Check Out</a></button>
                <button class="accordion"><a href="./rentstatistics.php">Rent Statistics</a></button>
            </div>
        <div id="rightCont"></div>
      
<?php include '../../templates/sites/footer.php';?>