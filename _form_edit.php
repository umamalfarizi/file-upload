<?php

// Pemanggilan file koneksi
require_once("_connection.php");

// Status tidak error
$error = 0;

// Mendapatkan data Kode Barang
if ( isset($_GET["id"]) ) $id = $_GET["id"];
else echo "Kode barang tidak ditemukan! <a href='_index.php'>Kembali</a>";

$query = " SELECT * FROM barang WHERE id_barang = '{$id}'";

$result = mysqli_query( $mysqli, $query);

foreach ( $result as $barang) {

    $foto = $barang["foto_barang"];
    $id = $barang["id_barang"];
    $name = $barang["nama_barang"];
    $price = $barang["harga_barang"];

}

?>



<html>
  <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="_style.css" />

    <title>Edit Form</title>
  </head>
  <body>
  <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <!-- Navbar Brand -->
            <a class="navbar-brand" href="#">
                <img src="image/saya.jpg" />
            </a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="_index.php" class="nav-link" aria-current="page">Daftar Barang</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>

    <div id="form" class="pt-5">

        <div class="container">

            <div class="row d-flex justify-content-center">

                <div class="col col-6 p-4 bg-light">

                    <form action="_action_edit.php" method="POST" enctype="multipart/form-data">

                        <?php if ( !is_null($foto) && !empty($foto)) : ?>

                            <div class="form-group mb-2">
                                <img src="<?=$foto?>" alt="" class="preview">
                                <a href="_hapus_foto.php?id=<?=$id?>">Hapus Foto</a>
                            </div>
                            
                        <?php endif; ?>

                        <div class="form-group mb-2">
                            <label for="foto_barang">Foto</label>
                            <input name="foto" id="foto_barang" class="form-control" type="file" >
                        </div>

                        <div class="form-group mb-2">
                            <label for="id_barang">Kode Barang</label>
                            <input name="id" id="id_barang" value="<?=$id?>" class="form-control" type="text" placeholder="Kode Barang" readonly>
                        </div>

                        <div class="form-group mb-2">
                            <label for="nama_barang">Nama Barang</label>
                            <input name="name" id="nama_barang" value="<?=$name?>" class="form-control" type="text" placeholder="Nama Barang" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="harga_barang">Harga Barang</label>
                            <input name="price" id="harga_barang" value="<?=$price?>" class="form-control" type="number" placeholder="Harga Barang" required>
                        </div>

                        <input name="submit" type="submit" value="Kirim" class="btn btn-primary ">

                    </form>

                </div>

            </div>

        </div>

    </div>

  </body>
</html>