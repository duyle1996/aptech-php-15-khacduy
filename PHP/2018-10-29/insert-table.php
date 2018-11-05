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

$sql = "INSERT INTO users (Fistname,email, password)
VALUES ('John','john@example.com','123456'),
('Le', 'duyle@gmail.com','12345676'),('Ngoc', 'NgocLien@hotmail.com','ad156'),
('Tran', 'tranhe@resolutioninc.com','3345df6'),('Hunter', 'ch.pageworth@pageworth.com','sdf234')
";

if (mysqli_query($conn, $sql)) {
    echo " successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>