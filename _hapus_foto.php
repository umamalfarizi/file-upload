<?php

require_once("_connection.php");

// Menapatkan Data Kode barang
if ( isset($_GET["id"]) ) $id = $_GET["id"];
else {
    echo "Kode Barang Tidak Ditemukan <a href='_index.php'>Kembali</a>";
    exit();
}

// Query Get Data Barang
$query = "SELECT * FROM barang WHERE id_barang = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

// Fetching Data
foreach ( $result as $barang) {
    $foto = $barang["foto_barang"];
}

if ( !is_null($foto) && !empty($foto) ) {
    $remove = unlink($foto);

    if ( $remove ) {

        // Menyiapkan Query MySQL untuk Dieksekusi
        $query = 
        " UPDATE barang SET 
        foto_barang = NULL
        WHERE id_barang = '{$id}' ";

        // Mengeksekusi Query MySQL
        $insert = mysqli_query($mysqli, $query);
    }

}

header("Location: _form_edit.php?id={$id}");

?>