<?php
// Connection configuration
$host = 'localhost';
$username = 'root';
$password = ''; // No password for default XAMPP setup
$database = 'admin'; // Replace with your actual database name

// Create connection
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";
?>

<?php 
// include 'confiq.php'; 
// include 'header.php';
// include 'sidebar.php';
?> 

<?php 
// include 'footer.php'; 
?>