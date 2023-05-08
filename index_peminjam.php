<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<form action="./simpan_peminjam.php" method="post">
  <label for="fname">isbn:</label>
  <select name="isbn" id="cars">
  <option>Silahkan Diplilh</option>
  <?php
  include 'db.php';
                                        $no = 1;
                                        $sql = "SELECT * FROM buku";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
     
     <option value="<?php echo $row['isbn']; ?>"><?php echo $row['isbn']; ?></option>
                                           

         <?php                                
       
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
                                      
                                        ?>
</select><br><br>
  <label for="lname">Tanggal Peminjam:</label>
  <input type="date" id="lname" name="tanggal_pinjam"><br><br>
  <label for="lname">Tanggal Tenggat Pengembalian:</label>
  <input type="date" id="lname" name="tanggal_tenggat_pengembalian"><br><br>
  <label for="lname">Tanggal Dikembalikan:</label>
  <input type="date" id="lname" name="tanggal_dikembalikan"><br><br>
  <label for="lname">ID Peminjam:</label>
  <select name="id_peminjam" id="cars">
  <option>Silahkan Diplilh</option>
  <?php
  include 'db.php';
                                        $no = 1;
                                        $sql = "SELECT * FROM data_peminjam";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
     
     <option value="<?php echo $row['id_anggota']; ?>"><?php echo $row['id_anggota']; ?>-<?php echo $row['nama']; ?></option>
                                           

         <?php                                
       
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
                                      
                                        ?>
</select><br><br>
   <button type="submit" class="btn btn-primary" name="kirim">Tambah Peminjam</button>
</form>
<h2>tabel peminjam</h2>

<table style="width:100%">
  <tr>
    <th>no</th>
    <th>isbn</th>
    <th>Tanggal Peminjam</th>
    <th>Tanggal Tenggat Pengembalian</th>
    <th>Tanggal Dikembalikan</th>
    <th>Nama Peminjam</th>
    <th>ID Peminjam</th>
    <th>aksi</th>
  </tr>
  <tr>
  <?php
  include 'db.php';
                                        $no = 1;
                                        $sql = "SELECT *,transaksi_peminjaman.id as idpim  FROM transaksi_peminjaman join data_peminjam on transaksi_peminjaman.id_peminjam=data_peminjam.id_anggota where status=0";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
     
     <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['isbn']; ?></td>
                                            <td><?php echo $row['tanggal_pinjam']; ?></td>
                                            <td><?php echo $row['tanggal_tenggat_pengembalian']; ?></td>
                                            <td><?php echo $row['tanggal_dikembalikan']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['id_peminjam']; ?></td>
                                            <td><a href="peminjam_action.php?id=<?php echo $row['idpim']; ?>">Pengembalian</a></td>
                                            
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

