<?php include('config/db.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kerentanan: SQL Injection
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Login berhasil";
        // Kerentanan: Session hijacking
        session_start();
        $_SESSION['admin'] = $username;
        header("Location: admin/index.php");
        exit();
    } else {
        echo "Login gagal";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>
