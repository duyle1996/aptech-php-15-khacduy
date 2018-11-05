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

$email =$_POST['email'];
$password = $_POST['password'];
$sql = "select * from users where email = '$email' and password = '$password' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "dang nhap thanh cong";
    else{
        echo "dang nhap that bai";
    }
}
?>