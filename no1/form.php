<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Penambahan Data Barang</title>
</head>

<body>
    <form action="proses.php" method="post">
        <label for="nama_barang">Nama Barang:</label><br>
        <input type="text" id="nama_barang" name="nama_barang"><br>
        <label for="keterangan">Keterangan:</label><br>
        <textarea id="keterangan" name="keterangan"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>