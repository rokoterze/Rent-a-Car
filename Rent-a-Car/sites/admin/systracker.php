<?php
$message = "";
include '../../templates/sites/header.php';
?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2>System Changes Tracker</h2>
            <form action="./logout.php" method="post" id="logoutform"> 
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>
        <div id="mainCont_systracker">
            <div id="main">
                <label for="search" style="color: white;">Search: </label>
                <input type="text" id="search" placeholder=" Search by Location or Username..">
                <br>

                <table>
                <thead>
                    <tr>
                        <th width="20%">Location</th>
                        <th width="10%">Action</th>
                        <th width="35%">Description</th>
                        <th width="25%">Date and Time</th>
                        <th width="10%">Username</th>
                    </tr>
                </thead>
                  <tbody id="output"></tbody>
                </table>
            </div>    
        </div>
        <div id="navigationContainer">
	        <button class="accordion"><a href="./accdb.php">Account Database</a></button>
	        <button class="accordion" id="activeLink"><a href="./systracker.php">System Changes Tracker</a></button>
	        <button class="accordion"><a href="./sysconfig.php">System Configuration</a></button>
	        <button class="accordion"><a href="./syslogs.php?page=1">System Logs</a></button>
        </div>
        <div id="rightCont"></div>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $("#search").keypress(function(){
                    $.ajax({
                        type: 'POST',
                        url: '../../include/sites/admin/systracker_search.php',
                        data:{
                            name: $("#search").val(),
                        },
                        success: function(data){
                            $("#output").html(data);
                        }
                    });
                });
            });
        </script> 
      
<?php include '../../templates/sites/footer.php';?>