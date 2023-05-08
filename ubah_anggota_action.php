<?php
include 'db.php';
if (isset($_POST["kirim"])) {
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat_email = $_POST['alamat_email'];
$instansi = $_POST['instansi'];
$id_anggota = $_POST['id_anggota'];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "UPDATE `data_peminjam` SET `nama` = '$nama', `nomor_telepon` = '$nomor_telepon', `alamat_email` = '$alamat_email', `instansi` = '$instansi', `id_anggota` = '$id_anggota' WHERE `data_peminjam`.`id` = '$id';
  ";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:index_anggota.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}
?>