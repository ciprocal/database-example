<?php
// Copy these from your database
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "TRUNCATE TABLE Names";
header('Location: index.php');

if ($conn->query($sql) === TRUE) {
    echo "Query Casted";
    
} else {
    echo "Error casting vote: " . $conn->error;
}

$conn->close();
?>
