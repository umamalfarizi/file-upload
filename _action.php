<?php

require_once ("_connection.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['id']) ) $id = $_POST['id'];
else $error = 1;

if ( isset($_POST['name']) ) $name = $_POST['name'];
else $error = 1;

if ( isset($_POST['price']) ) $price = $_POST['price'];
else $error = 1;

// Mengatasi jika terjadi error pada input
if ( $error == 1 )  {
    echo "Terjadi kesalahan pada proses input data";
    exit();
}

// Mengambil data file upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

// Menangani file upload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];
    $upload = move_uploaded_file($files["tmp_name"], $filepath);
}
else {
    $filepath = "";
    $upload = false;
}

// Menangani error saat mengupload
if ( $upload != true && $filepath != "") {
    exit("Gagal mengupload file <a href='_form_barang.php'>Kembali</a>");
}

// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    INSERT INTO barang
    (id_barang, nama_barang, harga_barang, foto_barang)
    VALUES
    ('{$id}', '{$name}', '{$price}', '{$filepath}');";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika ada error pada saat eksekusi query
if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href ='_index.php'>Kembali</a>";
}
else {
    header("Location: _index.php");
}

?>