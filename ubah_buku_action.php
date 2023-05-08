<?php
include 'db.php';
if (isset($_POST["kirim"])) {
// menangkap data yang di kirim dari form
$id = $_POST['id'];
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
  
  $sql = "UPDATE `buku` SET `judul_buku` = '$judul_buku', `penulis` = '$penulis', `penerbit` = '$penerbit', `genre` = '$genre', `isbn` = '$isbn', `tahun_terbit` = '$tahun_terbit', `jumlah_halaman` = '$jumlah_halaman' WHERE `buku`.`id` = '$id';
  ";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}
?>