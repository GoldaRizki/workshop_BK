<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <?php 
    include_once("koneksi.php"); 
    ?>

</head>
<body>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php include("navbar.php") ?>

<!-- Bagian Menu Utama -->
<main role="main" class="container">
<?php
if (isset($_GET['page'])) {
    include($_GET['page'] . ".php");
} else {
    echo "<br><h2>Selamat Datang di Sistem Informasi Poliklinik";

    if (isset($_SESSION['username'])) {
        //jika sudah login tampilkan username
        echo ", " . $_SESSION['username'] . "</h2><hr>";
    } else {
        echo "</h2><hr>Silakan Login untuk menggunakan sistem. Jika belum memiliki akun silakan Register terlebih dahulu.";
    }
}
?>
</main>



</body>
</html>