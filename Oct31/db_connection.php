<?php
// Database credentials
$host = 'studentdb-maria.gl.umbc.edu'; // Server hostname or IP address
$dbname = 'kpatel38'; // Replace with your database name
$username = 'kpatel38'; // Replace with your database username
$password = 'kpatel38'; // Replace with your database password

// Create a connection using MySQLi
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
