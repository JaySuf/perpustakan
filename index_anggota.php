<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<form action="./simpan_anggota.php" method="post">
  <label for="fname">Nama:</label>
  <input type="text" id="fname" name="nama"><br><br>
  <label for="lname">Nomor Telepon:</label>
  <input type="text" id="lname" name="nomor_telepon"><br><br>
  <label for="lname">Alamat Email:</label>
  <input type="text" id="lname" name="alamat_email"><br><br>
  <label for="lname">Instansi:</label>
  <input type="text" id="lname" name="instansi"><br><br>
  <label for="lname">ID Anggota:</label>
  <input type="text" id="lname" name="id_anggota"><br><br>

  <button type="submit" class="btn btn-primary" name="kirim">Tambah Anggota</button>
</form>
<h2>tabel buku</h2>

<table style="width:100%">
  <tr>
    <th>no</th>
    <th>Nama</th>
    <th>Nomor Telepon</th>
    <th>Alamat Email</th>
    <th>Instansi</th>
    <th>ID Anggota</th>
    <th>aksi</th>
  </tr>
  <tr>
  <?php
  include 'db.php';
                                        $no = 1;
                                        $sql = "SELECT * FROM `data_peminjam`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
     
     <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['nomor_telepon']; ?></td>
                                            <td><?php echo $row['alamat_email']; ?></td>
                                            <td><?php echo $row['instansi']; ?></td>
                                            <td><?php echo $row['id_anggota']; ?></td>
                                            
                    
                                            <td><a href="ubah_anggota.php?id=<?php echo $row['id']; ?>">edit</a></td>
                                            <td><a href="hapus_anggota_action.php?id=<?php echo $row['id']; ?>">hapus</a></td>
                                            
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

