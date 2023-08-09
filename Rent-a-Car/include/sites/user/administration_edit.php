<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}

$id = ""; 
$make = "";
$model = "";
$plate ="";
$price ="";
$type = "Type";
$status = "Status";

$username = $_COOKIE['global-user'];

if(isset($_GET['edit'])){
    
    $id = $_GET['edit'];

    $query ="SELECT * FROM vehicledatabase WHERE ID = $id AND Username = '$username';";
    $result = mysqli_query($conn, $query);
 
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['ID'];
        $make = $row['Make'];
        $model = $row['Model'];
        $plate = $row['Plate'];
        $price = $row['Price'];
        $type = $row['Type'];
        $status = $row['IsActive'];
    }
}

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $makeupd = $_POST['makeupd'];
    $modelupd = $_POST['modelupd'];
    $plateupd = $_POST['plateupd'];
    $priceupd = $_POST['priceupd'];
    $statusupd = $_POST['statusupd'];
    $typeupd = $_POST['typeupd'];


    require_once '../../database/dbh.inc.php';

    if (checkInput($makeupd, $modelupd, $plateupd, $priceupd) !== false) {
        header("location: ../../../sites/user/administration.php?error=invalidinputupdate");
        exit();
    }

    if (checkPlate($conn, $plateupd, $id, $username) !== false) {
        header("location: ../../../sites/user/administration.php?error=plateexists");
        exit();
    }
    // if (checkActivity($conn, $plateupd, $username) !== false) {
    //     header("location: ../../../sites/user/administration.php?error=plateexistsotheruser");
    //     exit();
    // }

    if (updateVehicle($conn, $makeupd, $modelupd, $plateupd, $priceupd, $statusupd, $typeupd, $id) !== false) {
        header("location: ../../../sites/user/administration.php?error=invalidupdate");
        exit();
    }

    else{
        include_once '../../system/system.inc.php';

        $location = "Vehicle Administration";
        $systemChange = "UPDATE";
        $description = "Vehicle: {$id}";
        systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);
        
        header("location: ../../../sites/user/administration.php?error=none-update");
        exit();;
    }
}


function checkPlate($conn, $plateupd, $id, $username){
    

    $sql_exists = "SELECT * FROM vehicledatabase WHERE Plate = '$plateupd' AND ID ='$id';";
    $result_exists = mysqli_query($conn,$sql_exists);

    if (mysqli_num_rows($result_exists) > 0) { //Ako postoji, u redu je jer znaci da se plate nije minja u formi, nego osta isti.
        $result = false;
    }

    else{
        $sql = "SELECT * FROM vehicledatabase WHERE Plate = '$plateupd' AND Username = '$username';";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) { //Ako postoji, vec pripada nekom vozilu od korisnika
            $result = true;
        }
        else $result = false;
    }
    return $result;
}

function updateVehicle($conn, $makeupd, $modelupd, $plateupd, $priceupd, $statusupd, $typeupd, $id){
    $sql_update = "UPDATE vehicledatabase SET Make = '$makeupd', Model = '$modelupd', Plate = '$plateupd', Price = '$priceupd', IsActive = '$statusupd', Type ='$typeupd' WHERE ID = '$id';";

    $result_update = mysqli_query($conn, $sql_update);
    
    if($result_update){
        $result = false;
    }
    else $result = true;

    return $result;
}

function checkInput($makeupd, $modelupd, $plateupd, $priceupd){
    if (empty($makeupd) || !ctype_alpha($makeupd) || strlen($makeupd)<2 || empty($modelupd) || empty($plateupd) || empty($priceupd) || strlen($priceupd)<=0) {
        $result = true;
    }
    else $result = false;

    return $result;
}

// function checkActivity($conn, $plateupd, $username){ neradi trenutno, triba optimizirat

//     $sql_exists = "SELECT * FROM vehicledatabase WHERE Plate = '$plateupd' AND Username = '$username';";
//     $result_exists = mysqli_query($conn,$sql_exists);

//     if (mysqli_num_rows($result_exists) > 0) { //Ako postoji, kod usera je i uredu je
//         $result = false;
//     } 
//     else {
//         $sql_exists_other = "SELECT * FROM vehicledatabase WHERE Plate = '$plateupd' AND IsActive = 'Active' AND NOT Username = '$username';";
//         $result_exists_other = mysqli_query($conn,$sql_exists_other);

//         if (mysqli_num_rows($result_exists_other) > 0) { //Ako postoji, kod drugo suera je i aktivan je!
//             $result = true;
//         } 
//         else $result = false;
//     }

//     return $result;
// }