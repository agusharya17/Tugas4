<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $nama_barang = $_POST['nama_barang'];
    $keterangan = $_POST['keterangan'];
    $sql = "INSERT INTO barang (nama_barang, keterangan) VALUES ('$nama_barang', '$keterangan')";
    if(mysqli_query($conn, $sql)){
        echo "Data berhasil ditambahkan.";
    } else{
        echo "ERROR: Tidak dapat mengeksekusi $sql. " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>