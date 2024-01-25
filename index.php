<?php 
    // Create database connection use file config
    include_once("config.php");

    // Fetch all data from database
    $result= mysqli_query($mysqli, "SELECT * FROM karyawan ORDER BY id ASC");
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>CRUD DATA KARYAWAN</h3>
    <a href="add.php">Tambah Data Karyawan</a>
    <br>
    <br>
    <table border="2" width="80%">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>TELEPON</th>
            <th>AKSI</th>
        </tr>
        <?php 
        while($karyawan = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$karyawan['id']."</td>";
            echo "<td>".$karyawan['nama']."</td>";
            echo "<td>".$karyawan['alamat']."</td>";
            echo "<td>".$karyawan['jenis_kelamin']."</td>";
            echo "<td>".$karyawan['no_hp']."</td>";
            echo "<td><a href='edit.php?id=$karyawan[id]'>Edit</a>  | <a href='delete.php?id=$karyawan[id]'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>