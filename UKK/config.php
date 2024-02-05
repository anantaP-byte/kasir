<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kasir2";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Error failed to connect to MySQL: " . $conn->connect_error);
} else {
    return $conn;
}
?>