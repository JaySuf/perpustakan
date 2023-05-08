<?php
include 'db.php';
if (isset($_POST["kirim"])) {
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat_email = $_POST['alamat_email'];
$instansi = $_POST['instansi'];

$id_anggota = $_POST['id_anggota'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO `data_peminjam` (`nama`, `nomor_telepon`, `alamat_email`, `instansi`, `id_anggota`)
   VALUES ('$nama', '$nomor_telepon', '$alamat_email', '$instansi', '$id_anggota')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:index_anggota.php"); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}
?>