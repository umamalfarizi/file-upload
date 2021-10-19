<?php

require_once("_connection.php");

// Mendapatkan data Kode Barang
if ( isset($_POST["id"]) ) $id = $_POST["id"];
else {
    echo "Kode Barang tidak Ditemukan! <a href='_index.php'></a>";
    exit();
}

// Query Get Data Barang
$query = "SELECT * FROM barang WHERE id_barang = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

// Fetching Data
foreach ( $result as $barang ) {
    $foto = $barang["foto_barang"];
    $name = $barang["nama_barang"];
    $price = $barang["harga_barang"];
}

if ( isset($_POST['name']) ) $name = $_POST['name'];

if ( isset($_POST['price']) ) $price = $_POST['price'];

// Mengambil Data File Upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

// Menangani File Uplload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];

    $upload = move_uploaded_file($files["tmp_name"], $filepath);

    if ( $upload ) {
        unlink($foto);
    }

}
else {
    $filepath = $foto;
    $upload = false;
}

// Mengangani error saat mengupload
if ( $upload != true && $filepath != $foto ) {
    exit("Gagal Mengupload File <a href='_form_edit.php?id={$id}'>Kembali</a>");
}

// Menyiapkan Query MySQL untuk diekseekusi
$query = "
    UPDATE barang SET
        nama_barang = '{$name}',
        harga_barang = '{$price}',
        foto_barang = '{$filepath}'
    WHERE id_barang = '{$id}';";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli,$query);

// Menangani ketika ada error ketika eksekusi query
if ( $insert == false ) {
    echo "Error dalam mengubah data. <a href='_index.php'>Kembali</a>";
}
else {
    header("Location: _index.php");
}


?>