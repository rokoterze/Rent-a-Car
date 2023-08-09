<?php include '../../templates/sites/header.php';?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2>System Logs</h2>
            <form action="./logout.php" method="post" id="logoutform">  
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>

        <div id="mainCont_syslogs">          
            <?php include '../../include/sites/admin/syslogs_table.php';?>
        </div>
        
        
        <div id="navigationContainer">
	        <button class="accordion"><a href="./accdb.php">Account Database</a></button>
	        <button class="accordion"><a href="./systracker.php">System Changes Tracker</a></button>
	        <button class="accordion"><a href="./sysconfig.php">System Configuration</a></button>
	        <button class="accordion" id="activeLink"><a href="./syslogs.php?page=1">System Logs</a></button>
        </div>
        <div id="rightCont"></div>
      
<?php include '../../templates/sites/footer.php';?>