<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "company_profile";

// Kerentanan: Database tidak menggunakan prepared statement dan enkripsi yang aman
$conn = mysqli_connect($host, $user, $pass, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
