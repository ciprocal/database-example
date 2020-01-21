<?php
// Copy these from your database
$servername = "localhost";
$username = "id10906079_lmc";
$password = "thisismypassword";
$dbname = "id10906079_names";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Check all form inputs and assign them to PHP variables
$fname = $_POST['first'];
$lname = $_POST['last'];

// Inserting the names into the database
$sql = "INSERT INTO Names (FirstName, LastName) VALUES ('$fname', '$lname')";

header('Location: index.php');

if ($conn->query($sql) === TRUE) {
    echo "Query Casted";
    } else {
    echo "Error casting vote: " . $conn->error;
}
    $conn->close();

?>
