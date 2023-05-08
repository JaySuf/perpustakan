<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<form action="./simpan_buku.php" method="post">
  <label for="fname">Judul Buku:</label>
  <input type="text" id="fname" name="judul_buku"><br><br>
  <label for="lname">Penulis:</label>
  <input type="text" id="lname" name="penulis"><br><br>
  <label for="lname">Penerbit:</label>
  <input type="text" id="lname" name="penerbit"><br><br>
  <label for="lname">Genre:</label>
  <input type="text" id="lname" name="genre"><br><br>
  <label for="lname">ISBN:</label>
  <input type="text" id="lname" name="isbn"><br><br>
  <label for="lname">Tahun Terbit:</label>
  <input type="text" id="lname" name="tahun_terbit"><br><br>
  <label for="lname">Jumlah Halaman:</label>
  <input type="text" id="lname" name="jumlah_halaman"><br><br>
  <button type="submit" class="btn btn-primary" name="kirim">Tambah Buku</button>
</form>
<h2>tabel buku</h2>

<table style="width:100%">
  <tr>
    <th>no</th>
    <th>Judul Buku</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Genre</th>
    <th>ISBN</th>
    <th>Tahun Terbit</th>
    <th>Jumlah Halaman</th>
    <th>aksi</th>
  </tr>
  <tr>
  <?php
  include 'db.php';
                                        $no = 1;
                                        $sql = "SELECT * FROM buku";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
     
     <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['judul_buku']; ?></td>
                                            <td><?php echo $row['penulis']; ?></td>
                                            <td><?php echo $row['penerbit']; ?></td>
                                            <td><?php echo $row['genre']; ?></td>
                                            <td><?php echo $row['isbn']; ?></td>
                                            <td><?php echo $row['tahun_terbit']; ?></td>
                                            <td><?php echo $row['jumlah_halaman']; ?></td>
                                            <td><a href="ubah_buku.php?id=<?php echo $row['id']; ?>">edit</a></td>
                                            <td><a href="hapus_buku_action.php?id=<?php echo $row['id']; ?>">hapus</a></td>
                                            
    </tr>
         <?php                                
       
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
                                      
                                        ?>
  </tr>
</table>
<a href="index.php"> Halaman Utama</a>
    </html>

