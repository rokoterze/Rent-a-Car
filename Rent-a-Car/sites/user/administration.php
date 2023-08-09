<?php
$message = "";
include '../../templates/sites/header.php';
?>

<body>
    <div class="gridCont">
        <div id="headerCont">
            <h2>Vehicle Administration</h2>
            <form action="./logout.php" method="post" id="logoutform"> 
                <button type="submit" name="logout" id="logoutbtn"><img src="../../resources/icons/logout.png" alt="logout" id="logouticon"></button>
            </form>
        </div>

        <div id="mainCont_administration">
            <div id="form_administration">
                <div id="form_administration_add">
                    <form action="../../include/sites/user/administration.inc.php" method="post">
                        <h2>Add New Vehicle</h2>
                        <br>
                        <label for="make"><span class='asterix'>*</span>Make</label><br>
                        <input type="text" placeholder=" *Make" name="make" id="make" class="input-form" onblur="isMakeEmpty();">
                        <br><span id="makespan" class="error-span"></span>

                        <label for="model"><span class='asterix'>*</span>Model</label><br>
                        <input type="text" placeholder=" *Model" name="model" id="model" class="input-form" onblur="isModelEmpty();">
                        <br><span id="modelspan" class="error-span"></span>

                        <label for="plate"><span class='asterix'>*</span>Plate</label><br>
                        <input type="text" placeholder=" *Plate" name="plate" id="plate" class="input-form" onblur="isPlateEmpty();">
                        <br><span id="platespan" class="error-span"></span>

                        <label for="price"><span class='asterix'>*</span>Price per day</label><br>
                        <input type="number" placeholder="€" name="price" id="price" class="input-form inputint" onblur="isPriceEmpty();" min="0">
                        <br><span id="pricespan" class="error-span"></span>

                        <label for="cars"><span class='asterix'>*</span>Select a type:</label>
                        <select name="type" id="type">
                            <option value="Car">Car</option>
                            <option value="Bicycle">Bicycle</option>
                            <option value="Scooter">Scooter</option>
                        </select><br><br>
                        <input type="submit" name="submit" id="submit" value="Save">
                    </form>
                </div>

                
                <div id="form_administration_edit">
                    <form action="../../include/sites/user/administration_edit.php" method="post">
                        
                        <?php include '../../include/sites/user/administration_edit.php';?>
                        
                        <!-- <h2>Select and Update</h2>
                        <br> -->
                        
                        <input type="text" placeholder=" ID" name="id" id="id" class="input-form display" readonly value="<?php echo $id?>"><br>
                        
                        <label for="makeupd"><span class='asterix'>*</span>Make</label><br>
                        <input type="text" placeholder=" *Make" name="makeupd" id="makeupd" class="input-form" value="<?php echo $make?>" onblur="isMakeUpdEmpty();"><br>

                        <label for="modelupd"><span class='asterix'>*</span>Model</label><br>
                        <input type="text" placeholder=" *Model" name="modelupd" id="modelupd" class="input-form" value="<?php echo $model?>" onblur="isModelUpdEmpty();"><br>

                        <label for="plateupd"><span class='asterix'>*</span>Plate</label><br>
                        <input type="text" placeholder=" *Plate" name="plateupd" id="plateupd" class="input-form" value="<?php echo $plate?>" onblur="isPlateUpdEmpty();"><br>
                        
                        <label for="priceupd"><span class='asterix'>*</span>Price</label><br>
                        <input type="number" placeholder="€" name="priceupd" id="priceupd" class="input-form inputint" value="<?php echo $price?>" onblur="isPriceUpdEmpty();" min="0"><br>

                        <select name="statusupd" id="statusupd">
                            <option selected hidden><?php echo $status?></option>    
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>

                        <select name="typeupd" id="typeupd">
                            <option selected hidden><?php echo $type?></option>
                            <option value="Car">Car</option>
                            <option value="Bicycle">Bicycle</option>
                            <option value="Scooter">Scooter</option>
                        </select><br>
                        <input type="submit" name="update" id="update" value="Update">
                    </form>
                </div> 
            </div>
            <div id ="errordiv">
            <?php include '../../include/sites/user/errors.php'; ?>
            </div>
            <div id="table_administration"> 
                <div id="main">
                    <label for="search" style="color: white;">Search: </label>
                    <input type="text" name="search" id="search" placeholder=" Search by Plate or Type..">
                    <br>
                    <table>
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="15%">Make</th>
                            <th width="10%">Model</th>
                            <th width="10%">Plate</th>
                            <th width="10%">Price /day</th>
                            <th width="10%">Type</th>
                            <th width="15%">Created On</th>
                            <th width="10%">Status</th>
                            <th width="10%">Availability</th>
                            <th width="5%">Select</th>
                    </thead>
                    <tbody id="output"></tbody>
                    </table>
                </div>    
            </div> 
        </div>
            <div id="navigationContainer">
                <button class="accordion" id="activeLink"><a href="./administration.php">Vehicle Administration</a></button>
                <button class="accordion"><a href="./checkin.php">Check In</a></button>
                <button class="accordion"><a href="./checkout.php">Check Out</a></button>
                <button class="accordion"><a href="./rentstatistics.php">Rent Statistics</a></button>
            </div>

        <div id="rightCont"></div>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#search").keypress(function(){
                    $.ajax({
                        type: 'POST',
                        url: '../../include/sites/user/administration_search.php',
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
