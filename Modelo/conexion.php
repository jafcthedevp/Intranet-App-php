<?php


// Replace with your Azure MySQL database details
$servername = "your_server_name";
$username = "Jesus105";
$password = 'joelito123!"#';
$dbname = "azureapp";

// Create connection
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>