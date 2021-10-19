<?php

require_once("_connection.php");

// Mendapatkan data Kode Barang
if ( isset($_GET["id"]) ) $id = $_GET["id"];
else {
    echo " Kode Barang tidak ditemmukan! <a href='_index.php'>Kembali</a>";
    exit();
}

// Query Get Data Barang
$query = "DELETE FROM barang WHERE id_barang = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
    echo ("Gagal menghapus data!");
}

header("Location: _index.php");

?>