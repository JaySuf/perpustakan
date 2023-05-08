<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<?php
  include 'db.php';
$id = $_GET['id'];
                                        $sql = "SELECT * FROM data_peminjam WHERE id='$id' limit 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?> 
   
   

                                     
<form action="./ubah_anggota_action.php" method="post">
  <label for="fname">Nama:</label>
  <input type="hidden" id="fname" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" id="fname" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
  <label for="lname">Nomor Telepon:</label>
  <input type="text" id="lname" name="nomor_telepon" value="<?php echo $row['nomor_telepon']; ?>"><br><br>
  <label for="lname">Alamat Email:</label>
  <input type="text" id="lname" name="alamat_email" value="<?php echo $row['alamat_email']; ?>"><br><br>
  <label for="lname">Instansi:</label>
  <input type="text" id="lname" name="instansi" value="<?php echo $row['instansi']; ?>" ><br><br>
  <label for="lname">ID Anggota:</label>
  <input type="text" id="lname" name="id_anggota" value="<?php echo $row['id_anggota']; ?>" ><br><br>
  <button type="submit" class="btn btn-primary" name="kirim">Ubah Buku</button>
</form>
<?php
}
    }  ?>
     
     <a href="index_anggota.php"> Halaman Anggota</a>
    </html>

