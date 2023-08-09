<?php
$message = "";
include '../../templates/sites/header.php';
?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2>Check-In</h2>
            <form action="./logout.php" method="post" id="logoutform"> 
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>
        <div id="mainCont_checkin">
            <div id="checkin_title"><h2>Create a Check-In</h2></div>
            <div id="form_checkin">

            <?php 
                $id = $_GET['select'] ?? '';
                $username = $_COOKIE['global-user'];
                $plate = "";
                $price = "";
                if ($id) {
                    $sql = "SELECT * FROM vehicledatabase WHERE Username = '$username' AND ID = '$id';";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $plate = $row['Plate'];
                        $price = $row['Price'];
                    }
                }
            ?>
                <div id="form_checkin_vehicle">
                    <form action="../../include/sites/user/checkin.inc.php" method="post">
                    <br>
                    <input type="text" placeholder="Plate" name="plate" id="plate" value="<?php echo $plate?>" readonly class="input-form display"><br>

                    <label for="checkindate"><span class='asterix'>*</span>Check-In</label><br>
                    <input type="date" name="checkindate" id="checkindate" onchange="checkDateData(); totalPrice();"><br>

                    <label for="checkoutdate"><span class='asterix'>*</span>Check-Out</label><br>
                    <input type="date" name="checkoutdate" id="checkoutdate" onchange="checkDateData(); totalPrice();"><br>

                    <input type="text" name="dayprice" id="dayprice" class="inputint" value="<?php echo $price?>€/day"placeholder="€" readonly hidden><br>
                    
                    <label for="totalprice">Payment Amount<br>
                    <input type="text" name="totalprice" id="totalprice" class="inputint" placeholder="€" readonly>
                </div>

                <div id="form_checkin_customer">
                    <br>
                    <label for="customername"><span class='asterix'>*</span>Customer Name</label><br>
                    <input type="text" placeholder=" *Customer name" name="customername" id="customername" class="input-form" onkeydown="return /[a-z]/i.test(event.key)" onblur="isNameEmpty();"><br>

                    <label for="customersurname"><span class='asterix'>*</span>Customer Surname</label><br>
                    <input type="text" placeholder=" *Customer surname" name="customersurname" id="customersurname" class="input-form" onkeydown="return /[a-z]/i.test(event.key)" onblur ="isSurnameEmpty();"><br>

                    <label for="customeroib"><span class='asterix'>*</span>OIB</label><br>
                    <input type="text" placeholder=" *OIB" name="customeroib" id="customeroib" class="input-form" onblur="isOIBEmpty();"><br>
                    <span id="customeroibspan" class="error-span"></span>
                    <br>
                    <input type="submit" name="submit" id="submit" value="Check-In">
                    <?php include '../../include/sites/user/errors.php'; ?>
                </div>
                    </form>
            </div>    
            
            <div id="table_checkin"> 
                <div id="main">

                    <form action="" method="post">

                        <label for="search" style="color: white;">Search: </label>
                        <input type="number" name="searchlow" id="searchlow" class="inputint" placeholder="min €" min="0">
    	                <input type="number" name="searchhigh" id="searchhigh" class="inputint" placeholder="max €" min="0">

                        <select name="typesearch" id="typesearch">
                            <option value="Car">Car</option>
                            <option value="Bicycle">Bicycle</option>
                            <option value="Scooter">Scooter</option>
                        </select>
                        <input type="submit" name="searchbtn" id="searchbtn" value="Search">
                    </form>
                    <!-- <form action="" method="post"><input type="submit" name="deleteall" id="deleteall" value="Delete All"></form>  -->
                    <!-- ZADATAK PROFESOR -->
                    <h4>Vehicles available for Check-In</h4><hr>
                    <table>
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="20%">Make</th>
                            <th width="20%">Model</th>
                            <th width="10%">Plate</th>
                            <th width="10%">Price /day</th>
                            <th width="10%">Type</th>
                            <th width="15%">Status</th>
                            <th width="10%">Select</th>
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


                    // if (isset($_POST['deleteall'])) {

                    //     $sql_delete = "TRUNCATE TABLE vehiclerenting";
                    //     $result_delete= mysqli_query($conn, $sql_delete);
            
                    //     if($result_delete)
                    //     {
                    //     echo("All rents are deleted.");
                    //     }
                    // }

                    

                    
                    if (isset($_POST['searchbtn'])) {
                        $typesearch = $_POST['typesearch'];
                        $min = $_POST['searchlow'];
                        $max = $_POST['searchhigh'];

                        if (!empty($min) && !empty($max) && $min>1 && $max>1) {
                            $sql = "SELECT * FROM vehicledatabase WHERE Username = '$username' AND Type = '$typesearch' AND IsActive = 'Active' AND IsAvailable ='Available' AND Price BETWEEN '$min' AND '$max' ORDER BY 1 DESC";
                        }
                        else {
                            $sql = "SELECT * FROM vehicledatabase WHERE Username = '$username' AND Type = '$typesearch' AND IsActive = 'Active' AND IsAvailable ='Available' ORDER BY 1 DESC";
                        }

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
                                    <td>".$row['IsAvailable']."</td>
                                    <td><a href='checkin.php?select={$row["ID"]}'>Select</a><td>
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
                <button class="accordion" id="activeLink"><a href="./checkin.php">Check In</a></button>
                <button class="accordion"><a href="./checkout.php">Check Out</a></button>
                <button class="accordion"><a href="./rentstatistics.php">Rent Statistics</a></button>
            </div>
        <div id="rightCont"></div>
<?php include '../../templates/sites/footer.php';?>