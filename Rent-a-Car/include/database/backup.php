<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rent-a-car";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
////////////////////////////////////////////////////////////
$tables = array();
$sql = "SHOW TABLES";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_row($result)) {
$tables[] = $row[0];
}

////////////////////////////////////////////////////////////
$sqlScript = "";
foreach ($tables as $table) { 
// Prepare SQLscript for creating table structure
$query = "SHOW CREATE TABLE $table";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_row($result);

$sqlScript .= "\n\n" . $row[1] . ";\n\n";

$query = "SELECT * FROM $table";
$result = mysqli_query($conn, $query);

$columnCount = mysqli_num_fields($result); 


for ($i = 0; $i < $columnCount; $i ++) {
while ($row = mysqli_fetch_row($result)) {
$sqlScript .= "INSERT INTO $table VALUES(";
for ($j = 0; $j < $columnCount; $j ++) {
// $row[$j] = $row[$j];

if (isset($row[$j])) {
$sqlScript .= '"' . $row[$j] . '"';
} else {
$sqlScript .= '""';
}
if ($j < ($columnCount - 1)) {
$sqlScript .= ',';
}
}
$sqlScript .= ");\n";
}
}
$sqlScript .= "\n"; 
}
////////////////////////////////////////////////////////////
$database_name = "rent-a-car";

include_once '../system/system.inc.php';
$location = "System Configuration";
$systemChange = "BACKUP";
$description = "Database downloaded: {$database_name}";
systemChanges($conn, $location, $systemChange, $description, $timeUnix, $dateTime);



if(!empty($sqlScript))
{
$backup_file_name = $database_name . '_backup_' . time() . '.sql';
$fileHandler = fopen($backup_file_name, 'w+');
$number_of_lines = fwrite($fileHandler, $sqlScript);
fclose($fileHandler);


header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($backup_file_name));
ob_clean();
flush();
readfile($backup_file_name);
exec('rm ' . $backup_file_name); 


}