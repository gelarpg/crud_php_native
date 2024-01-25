<?php
    // include database connection file
    include_once("config.php");
    // Check if form submitted, insert form data into database
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        // Update data karyawan
        $result = mysqli_query($mysqli, "UPDATE karyawan SET nama='$nama', alamat='$alamat', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin' WHERE id=$id");

        // Redirect back to home page
        header("Location: index.php");
    }
?>

<?php
    // Display data karyawan based on id
    // Getting id from url
    $id = $_GET['id'];

    // Fetech karyawan based on id
    $result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id=$id");

    while ($karyawan = mysqli_fetch_array($result)) {
        $nama = $karyawan['nama'];
        $alamat = $karyawan['alamat'];
        $no_hp = $karyawan['no_hp'];
        $jenis_kelamin = $karyawan['jenis_kelamin'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Edit Karyawan</h4>
    <a href="index.php">kembali</a>
    <form action="edit.php" method="POST" name="update_user">
        <table width="25%">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td><input type="text" name="no_hp" value=<?php echo $no_hp; ?>></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value=<?php echo $jenis_kelamin; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td>
                    <input type="submit" name="update" value="Update">
                </td>
            </tr>
        </table>
    </form>


</body>

</html>