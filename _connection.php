<?php

$mysqli = new mysqli ( "localhost", "root","", "db_toko");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Gagal menyambungkan ke MySQL: " > $mysqli -> connect_error;
    exit();
}

?>