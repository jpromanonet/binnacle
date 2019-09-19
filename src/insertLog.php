<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include("connDB.php");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Request user info
$logDate = date('Y-m-d H:i:s');
$inputLog = $conn->real_escape_string($_REQUEST['inputLog']);
 
// Attempt insert query execution
$sql = "INSERT INTO logBinnacle (dateLog, inputLog) VALUES ('$logDate','$inputLog')";
if($conn->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
 
// Close connection
$conn->close();
?>