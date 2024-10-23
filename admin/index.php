<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}

echo "Selamat datang di halaman admin";
?>

<a href="../logout.php">Logout</a>
