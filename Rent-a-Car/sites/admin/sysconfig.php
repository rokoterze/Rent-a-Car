<?php include '../../templates/sites/header.php';?>
<?php include '../../include/sites/admin/sysconfig.inc.php';?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2>System Configuration</h2>
            <form action="./logout.php" method="post" id="logoutform">  
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>
        <div id="mainCont_sysconfig">
        
        <form action="../../include/sites/admin/sysconfig.inc.php" method="post">
        <br><?php include '../../include/sites/admin/errors.php';?>
            <br><br>
            <label for="loginattempt">Login Attempts</label><br>
            <input type="text" onkeyup="this.value=this.value.replace(/[^\d]/,'')" id="loginattempt" name="loginattempt" class="config-input" value="<?php echo $loginattempts?>"><br>
            
            <label for="page">Table results per page</label><br>
            <input type="text" onkeyup="this.value=this.value.replace(/[^\d]/,'')" id="page" name="page" class="config-input" value="<?php echo $pagination?>"><br>

            <label for="cookietime">Cookie Lifetime [Days]</label><br>
            <input type="text" onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="cookietime" id="cookietime" class="config-input" value="<?php echo $cookie_days?>">
            
            <br>
            <button type="submit" name="submit" class="submit">Update</button>
            
        </form>
        
        </div>
        
        <div id="navigationContainer">
	        <button class="accordion"><a href="./accdb.php">Account Database</a></button>
	        <button class="accordion"><a href="./systracker.php">System Changes Tracker</a></button>
	        <button class="accordion" id="activeLink"><a href="./sysconfig.php">System Configuration</a></button>
	        <button class="accordion"><a href="./syslogs.php?page=1">System Logs</a></button>
        </div>
        <div id="rightCont">
            <form action="../../include/database/backup.php" method="post">
                <button class="accordion" type="submit" name="backup" id="backup">Download Database Backup</button>
            </form>
                <?php include '../../include/database/backup_upload.php' ?>
        </div>
      
<?php include'../../templates/sites/footer.php';?>