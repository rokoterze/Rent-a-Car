<?php include '../../templates/sites/header.php';?>
<?php include '../../include/sites/admin/accdb.inc.php';?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2>Account Database</h2>
            <form action="./logout.php" method="post" id="logoutform"> 
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>
        <div id="mainCont_accdb">
        <div id="table">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Account Type</th>
                    <th>Date of Creation</th>
                    <th>Verification Code</th>
                    <th>Status</th>
                    <th>Status 2</th>
                    <th>Edit</th>
                </tr>
                <?php include '../../include/sites/admin/accdb_table.php'; ?>
            </table>
            </div>
            <div id="form">
                <div id="form-child">
                <?php include '../../include/sites/admin/errors.php';?>
                
                <form action="../../include/sites/admin/accdb.inc.php" method="post" name="updateform" id="updateform">
                    <input type="text" placeholder=" Username" name="username" id="username" class="input-form" value="<?php echo $username?>" readonly>
                    <br>
                    <label for="name">Name</label><br>
                    <input type="text" onkeydown="return /[a-z]/i.test(event.key)" placeholder=" *Name" name="name" id="name" class="input-form" value="<?php echo $name?>" onblur="isNameEmpty();">
                    <br><span id="namespan" class="error-span"></span><br>

                    <label for="surname">Surname</label><br>
                    <input type="text" onkeydown="return /[a-z]/i.test(event.key)"  placeholder=" *Surname" name="surname" id="surname" class="input-form" value="<?php echo $surname?>" onblur="isSurnameEmpty();">
                    <br><span id="surnamespan" class="error-span"></span><br>

                    <label for="email">Email</label><br>
                    <input type="text" placeholder=" *Email" name="email" id="email" class="input-form" value="<?php echo $email?>" onblur="emailValidation();">
                    <br><span id="emailspan" class="error-span"></span><br>
                    <br>
                    <select name="accounttype" id="accounttype">
                        <option selected hidden><?php echo $accounttype?></option>    
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                    
                    <select name="activestatus" id="activestatus">
                        <option selected hidden><?php echo $activestatus?></option>    
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>

                    <select name="lockstatus" id="lockstatus">
                        <option selected hidden><?php echo $lockstatus?></option>
                        <option value="Locked">Locked</option>
                        <option value="Unlocked">Unlocked</option>
                    </select><br>

                    <input type="submit" name="update" id="update" value="Update">
                </form>
                </div>
                
            </div>
                    
        </div>
        <div id="navigationContainer">
	        <button class="accordion" id="activeLink"><a href="./accdb.php">Account Database</a></button>
	        <button class="accordion"><a href="./systracker.php">System Changes Tracker</a></button>
	        <button class="accordion"><a href="./sysconfig.php">System Configuration</a></button>
	        <button class="accordion"><a href="./syslogs.php?page=1">System Logs</a></button>
        </div>
        <div id="rightCont"></div>
      
<?php include'../../templates/sites/footer.php';?>