<?php
include 'db.php';
if (isset($_POST["kirim"])) {
// menangkap data yang di kirim dari form
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$genre = $_POST['genre'];
$isbn = $_POST['isbn'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah_halaman = $_POST['jumlah_halaman'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO `buku` (`judul_buku`, `penulis`, `penerbit`, `genre`, `isbn`, `tahun_terbit`, `jumlah_halaman`)
   VALUES ('$judul_buku', '$penulis', '$penerbit', '$genre', '$isbn', '$tahun_terbit', '$jumlah_halaman')
  ";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}
?>