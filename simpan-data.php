<?php
// Menerima data yang dikirim melalui metode POST
$nama = $_POST['nama'];
$email = $_POST['email'];

// Menampilkan data yang diterima
echo "Nama: " . $nama . "<br>";
echo "Email: " . $email;

// Disini kamu dapat menyimpan data yang diterima ke dalam database atau melakukan hal lain yang kamu butuhkan
?>
