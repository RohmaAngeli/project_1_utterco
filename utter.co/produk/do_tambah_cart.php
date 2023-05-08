<?php

    include "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM tbl_produk WHERE id_produk=".$id;
    $query = mysqli_query($db_koneksi, $sql);
    $hasil = mysqli_fetch_object($query);

    $_SESSION["cart"][$id] = [
        "nama" => $hasil->nama_produk, 
        "kategori" => $hasil->kategori_produk,
        "harga" => $hasil->harga_produk,
        // "jumlah" => 1
    ];

    header("location:?page=keranjang");

?>