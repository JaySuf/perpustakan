<?php
include 'db.php';

// menangkap data yang di kirim dari form
$id = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "DELETE FROM `data_peminjam` WHERE `data_peminjam`.`id` = $id ";
  
  if ($conn->query($sql) === TRUE) {
    echo "data berhasil dihapus";
    header("location:index_anggota.php"); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
exit;
  $conn->close();

  
?>