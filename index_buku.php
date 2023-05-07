<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

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
                                            
                                        </tr
         <?php                                
       
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
                                      
                                        ?>
  </tr>
</table>

<p>To understand the example better, we have added borders to the table.</p>

</body>
</html>

