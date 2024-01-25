<?php 
    // include database connection file
    include_once("config.php");

    // Get id from URL
    $id = $_GET['id'];

    // Delete karyawan rom from table based on given id
    $result = mysqli_query($mysqli, "DELETE FROM karyawan WHERE id=$id");

    // Redirect to home page if data karyawan deleted
    header("Location: index.php");
?>