<?php include('../config/db.php'); ?>
<?php include('../includes/header.php'); ?>

<h1>Our Services</h1>
<ul>
    <li>
        <strong>Consulting</strong>: We provide expert consulting services to help your business grow.
        <p>Contact us to learn more about our consulting packages.</p>
    </li>
    <li>
        <strong>Web Development</strong>: Our team specializes in building responsive and user-friendly websites.
        <p>We use the latest technologies to ensure your website stands out.</p>
    </li>
    <li>
        <strong>Digital Marketing</strong>: We help you increase your online presence through targeted marketing strategies.
        <p>Let us help you reach your target audience effectively.</p>
    </li>
    <li>
        <strong>Support Services</strong>: We offer 24/7 support to ensure your business runs smoothly.
        <p>Our support team is here to assist you anytime.</p>
    </li>
</ul>

<h2>Request a Quote</h2>
<form method="POST">
    <input type="text" name="service" placeholder="Service you are interested in"><br>
    <input type="text" name="details" placeholder="Additional details"><br>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service = $_POST['service'];
    $details = $_POST['details'];

    // Kerentanan: Tidak ada validasi input
    // Kerentanan: Data langsung dimasukkan ke dalam database tanpa sanitasi
    $sql = "INSERT INTO service_requests (service, details) VALUES ('$service', '$details')";
    mysqli_query($conn, $sql);
    echo "Your request has been submitted.";
}
?>

<?php include('../includes/footer.php'); ?>
