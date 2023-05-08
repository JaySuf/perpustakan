<?php
include 'db.php';

// menangkap data yang di kirim dari form
$id = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "UPDATE `transaksi_peminjaman` SET `status` = '1' WHERE `transaksi_peminjaman`.`id` = $id";
  
  if ($conn->query($sql) === TRUE) {
    echo "data berhasil ";
    header("location:index_peminjam.php"); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
exit;
  $conn->close();

  
?>