<?php
$nama = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$rating = $_POST['rating'];
$tanggal_pengisian = date( 'Y-m-d H:i:s');

$data = "$nama | $email | $message | $rating | $tanggal_pengisian\n";

file_put_contents("kehadiran.txt", $data, FILE_APPEND);

echo "Data berhasil disimpan!<br>";
echo "<a href='index.php'>Kembali</a>"; echo "<br>";
echo "<a href='view.php'>Lihat data</a>";
?>