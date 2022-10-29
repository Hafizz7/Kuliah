<?php
    include 'koneksi.php';

    $id = (int) $_GET['id'];

    if($id){
        $sql = "DELETE FROM buku WHERE id_produk='{$id}'";
        $query = mysqli_query($conn, $sql);

        $sql = "DELETE FROM produkk WHERE id_produk='{$id}'";
        $query = mysqli_query($conn, $sql);
    }
    header('Location: keranjang.php'); 
    exit;
?>