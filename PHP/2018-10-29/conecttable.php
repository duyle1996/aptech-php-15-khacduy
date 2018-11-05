<?php
$servername = "localhost";
$username = "root";
$password = "0905326520";
$dbname = "aptech_php_15_ss4";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Fistname VARCHAR(255) NOT NULL,
email VARCHAR(255),
password varchar(255)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>