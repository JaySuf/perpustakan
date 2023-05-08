<?php
include 'db.php';
if (isset($_POST["kirim"])) {
// menangkap data yang di kirim dari form
$isbn = $_POST['isbn'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_tenggat_pengembalian = $_POST['tanggal_tenggat_pengembalian'];
$tanggal_dikembalikan = $_POST['tanggal_dikembalikan'];
$id_peminjam = $_POST['id_peminjam'];

$id_anggota = $_POST['id_anggota'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO `transaksi_peminjaman` (`id`, `isbn`, `tanggal_pinjam`, `tanggal_tenggat_pengembalian`, `tanggal_dikembalikan`, `id_peminjam`) 
  VALUES (NULL, '$isbn', '$tanggal_pinjam', '$tanggal_tenggat_pengembalian', '$tanggal_dikembalikan', '$id_peminjam')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:index_peminjam.php"); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}
?>