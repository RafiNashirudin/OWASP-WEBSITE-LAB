<?php include('../config/db.php'); ?>
<?php include('../includes/header.php'); ?>

<h1>Contact Us</h1>
<form method="POST">
    <input type="text" name="url" placeholder="Website URL to fetch"><br>
    <button type="submit">Fetch</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = $_POST['url'];

    // Kerentanan: SSRF (mengambil konten dari URL yang dimasukkan pengguna tanpa validasi)
    $content = file_get_contents($url);
    echo "<pre>$content</pre>";
}
?>

<?php include('../includes/footer.php'); ?>
