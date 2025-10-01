<?php
echo "<h3>Daftar Kehadiran</h3>";
if (file_exists("kehadiran.txt")) {
  $data = file("kehadiran.txt");
  echo "<ul>";
  foreach ($data as $baris) {
    echo "<li>" . htmlspecialchars($baris) . "</li>";
  }
  echo "</ul>";
  echo "<br>";
} else {
  echo "Belum ada data kehadiran.";
}
?>