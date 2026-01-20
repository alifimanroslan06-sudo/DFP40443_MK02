<?php
// Panggil fail biodata
include 'biodata.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Maklumat Diri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Maklumat Pelajar</h1>

<img src="profile.jpg" width="200" alt="Gambar Profil">

<p><strong>Nama:</strong> <?= $nama ?></p>
<p><strong>No Matrik:</strong> <?= $nomatrik ?></p>
<p><strong>Kelas:</strong> <?= $kelas ?></p>
<p><strong>Program:</strong> <?= $program ?></p>

</body>
</html>