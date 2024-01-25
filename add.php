<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Tambah Karyawan</h4>
    <a href="index.php">kembali</a>
    <form action="add.php" method="POST" name="form1">
        <table width="25%">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="Submit" value="Add">
                </td>
            </tr>
        </table>
    </form>

    <?php 
    // Check if form submitted, insert form data into database
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        // include database connection file
        include_once("config.php");

        // include user data into table
        $result = mysqli_query($mysqli, "INSERT INTO karyawan(nama, alamat, no_hp, jenis_kelamin) VALUES('$nama', '$alamat', '$no_hp', '$jenis_kelamin')");

        // Show message when user added
        echo "New record is inserted sucessfully";
    }
    ?>
</body>
</html>