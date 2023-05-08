<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>


<h2>tabel riwayat peminjam</h2>

<table style="width:100%">
  <tr>
    <th>no</th>
    <th>isbn</th>
    <th>Tanggal Peminjam</th>
    <th>Tanggal Tenggat Pengembalian</th>
    <th>Tanggal Dikembalikan</th>
    <th>Nama Peminjam</th>
    <th>ID Peminjam</th>
    <th>status</th>
  </tr>
  <tr>
  <?php
  include 'db.php';
                                        $no = 1;
                                        $sql = "SELECT *,transaksi_peminjaman.id as idpim  FROM transaksi_peminjaman join data_peminjam on transaksi_peminjaman.id_peminjam=data_peminjam.id_anggota";
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
                                            <td><?php
                                            if ($row['status']==0) {
                                              echo "Dipinjam";
                                            }else {
                                              echo "Dikembalikan";
                                            }
                                            ?>
                                            
                                            
                                           
                                            
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

