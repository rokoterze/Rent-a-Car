<table>
    <tr>
        <th width='25%'>Username</th>
        <th width='25%'>Login Time</th>
        <th width='25%'>Logout Time</th>
        <th width='25%'>Session Duration</th>
    </tr>
<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

$sql = "SELECT * FROM syslogs";
$rs_result = mysqli_query($conn,$sql);
$num_per_page = getPageNumber($conn);

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} 
else {
    $page = 1;
}

$start_from = ($page - 1) * $num_per_page;

$sql = "SELECT * FROM syslogs ORDER BY ID DESC LIMIT $start_from, $num_per_page ";
$rs_result = mysqli_query($conn, $sql);

    while ($rows = mysqli_fetch_array($rs_result)){?>
    <?php
    if ($rows['LogoutTimeUnix'] =="") {
        ?>
        <tr>
            <td><?php echo $rows['Username'];?></td>
            <td><?php echo $rows['LoginDateTime'];?></td>
            <td><?php echo "None";?></td>
            <td><?php echo "Active";?></td>
        </tr>   
        <?php
    }
    else{
        ?>
        <tr>
            <td><?php echo $rows['Username'];?></td>
            <td><?php echo $rows['LoginDateTime'];?></td>
            <td><?php echo $rows['LogoutDateTime'];?></td>
            <td><?php echo gmdate("H:i:s",($rows['LogoutTimeUnix']-$rows['LoginTimeUnix']));?></td>
        </tr>
    <?php 
    }}?>
    </table>

    <br><br>
    <div id="pagination">
        <div id = "pagination-child">
            
            <?php
            $sql = "SELECT * FROM syslogs";
            $rs_result = mysqli_query($conn,$sql);

            $total_records = mysqli_num_rows($rs_result);   
            $total_pages = ceil($total_records / $num_per_page);
            
            for ($i = 1; $i <= $total_pages; $i++) {
                
                $page = $_GET["page"] ?? '';
                if (!$page) {
                    header("location: ./syslogs.php?page=1");
                }

                if ($page == $i) {
                    echo "<a href='syslogs.php?page=".$i."' class='paginationnumber' style='background-color: white; color:black;'>".$i."</a>";
                }

                if ($page != $i) {
                    echo "<a href='syslogs.php?page=" . $i . "' class='paginationnumber'>" . $i . "</a>";
                }
            }?>
        </div>
    </div>