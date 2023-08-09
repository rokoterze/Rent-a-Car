<?php include '../../templates/sites/header.php';?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2>Rent Statistics</h2>
            <form action="./logout.php" method="post" id="logoutform"> 
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>

        <div id="mainCont_statistics">
            <div id="statistics_title"><h2>Complete Rent Statistics</h2></div>
            <div id="table_statistics">
            <?php include '../../include/sites/user/rent_statistics_table.php'; ?>
            </div>
        </div>
            <div id="navigationContainer">
                <button class="accordion"><a href="./administration.php">Vehicle Administration</a></button>
                <button class="accordion"><a href="./checkin.php">Check In</a></button>
                <button class="accordion"><a href="./checkout.php">Check Out</a></button>
                <button class="accordion" id="activeLink"><a href="./rentstatistics.php">Rent Statistics</a></button>
            </div>
        <div id="rightCont"></div>
      
<?php include '../../templates/sites/footer.php';?>