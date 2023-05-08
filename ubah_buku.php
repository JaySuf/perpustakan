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
                                        $sql = "SELECT * FROM buku WHERE id='$id' limit 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?> 
   
   

                                     
<form action="./ubah_buku_action.php" method="post">
  <label for="fname">Judul Buku:</label>
  <input type="hidden" id="fname" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" id="fname" name="judul_buku" value="<?php echo $row['judul_buku']; ?>"><br><br>
  <label for="lname">Penulis:</label>
  <input type="text" id="lname" name="penulis" value="<?php echo $row['penulis']; ?>"><br><br>
  <label for="lname">Penerbit:</label>
  <input type="text" id="lname" name="penerbit" value="<?php echo $row['penerbit']; ?>"><br><br>
  <label for="lname">Genre:</label>
  <input type="text" id="lname" name="genre" value="<?php echo $row['genre']; ?>" ><br><br>
  <label for="lname">ISBN:</label>
  <input type="text" id="lname" name="isbn" value="<?php echo $row['isbn']; ?>"><br><br>
  <label for="lname">Tahun Terbit:</label>
  <input type="text" id="lname" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>"><br><br>
  <label for="lname">Jumlah Halaman:</label>
  <input type="text" id="lname" name="jumlah_halaman" value="<?php echo $row['jumlah_halaman']; ?>"><br><br>
  <button type="submit" class="btn btn-primary" name="kirim">Ubah Buku</button>
</form>
<?php
}
    }  ?>
     
     <a href="index_buku.php"> Halaman Buku</a>
    </html>

