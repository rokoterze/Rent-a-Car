<?php
$message = "";
include '../../templates/sites/header.php';
?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2><?=$message?></h2>
            <form action="./logout.php" method="post" id="logoutform"> 
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>
        <div id="mainCont">
            <div></div>
        </div>
            <div id="navigationContainer">
                <button class="accordion"><a href="./administration.php">Vehicle Administration</a></button>
                <button class="accordion"><a href="./checkin.php">Check In</a></button>
                <button class="accordion"><a href="./checkout.php">Check Out</a></button>
                <button class="accordion"><a href="./rentstatistics.php">Rent Statistics</a></button>
            </div>
        <div id="rightCont"></div>
      
<?php include '../../templates/sites/footer.php';?>