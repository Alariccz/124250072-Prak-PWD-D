<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$capacity = $_POST['capacity'];
$package = $_POST['package'];
$member = $_POST['member'];

$paketList = [
    "Basic Monitoring",
    "Smart Bin + Sensor",
    "Full IoT Integration"
];

if ($capacity > 100) {
    $kategori = "High Waste Producer";
} else {
    $kategori = "Low Waste Producer";
}

if (!in_array($package, $paketList)) {
    $package = "Tidak valid";
}

header("Location: landing.php?nama=$nama&kategori=$kategori&paket=$package");
exit();
?>