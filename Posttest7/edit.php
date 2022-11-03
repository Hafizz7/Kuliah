<?php
    include 'koneksi.php';
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM produk INNER JOIN buku ON produk.id_produk = buku.id_produk WHERE produk.id_produk='$id'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@600&family=Playfair+Display:ital,wght@1,800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- font -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="keranjang2.css">
    <link rel="stylesheet" href="beli_sekarang.css">
    <title>Muh.Hafiz</title>
</head>
<body>
    <div id="myDIV" class="semua">
        <div class="navbar">
            <div id="toggelid" class="toggle"> 
                <div id="circelid" class="circle"></div> 
            </div>
            <ul id="list_white" class="ulnav">
                <!-- <li ><img src=""></li> -->
                <li ><a href="index.php" target="_self">Home</a></li>
                <li ><a href="Aboutme.php" target="_self">About Me</a></li>
                <li ><a href="#" target="_self">Top Seller</a></li>
                <li ><a href="keranjang.php" target="_self">Keranjang</a></li>
                <li ><a href="login.php" target="_self">Login</a></li>
            </ul>
        </div>
        <div class="belisekarang">
            <form action="" method="post" enctype="multipart/form-data">
                <table border="0" align="center">
                <tr><td height=20px></tr>
                    <td>Input User</td>
                    <tr>
                        
                        <td><input type="hidden" name="id" value="<?= $data['id_produk']?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Input</td>
                        <td align="center">:</td>
                        <td><input type="date" name="tanggal_input" value="<?= $data['tanggal_input']?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Produk</td>
                        <td align="center">:</td>
                        <td><input type="text" name="nama_produk" value="<?= $data['nama_produk']?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis</td>
                        <td align="center">:</td>
                        <td><input type="text" name="jenis_produk" value="<?= $data['jenis_produk']?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td align="center">:</td>
                        <td><input type="text" name="nama_buku" value="<?= $data['nama_buku']?>"></td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td align="center">:</td>
                        <td><input type="text" name="pengarang_buku" value="<?= $data['pengarang_buku']?>"></td>
                    </tr>                    
                    <tr>
                        <td>Penerbit</td>
                        <td align="center">:</td>
                        <td><input type="text" name="penerbit_produk" value="<?= $data['penerbit_produk']?>"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td align="center">:</td>
                        <td><input type="number" name="harga_produk" value="<?= $data['harga_produk']?>"></td>
                    </tr>                    
                    <tr>
                        <td>Gambar</td>
                        <td align="center">:</td>
                        <td><input type="file" name="gambar" value="<?= $data['gambar_buku']?>"></td>
                    </tr>
                    
                </table>
                <input type="submit" value="Simpan">
            </from>  
            <?php
                include 'koneksi.php';
                if ($_POST){
                    $tanggal_input = $_POST['tanggal_input'];
                    $nama = $_POST['nama_buku'];

                    
                    $gambar = $_FILES['gambar']['name'];
                    $x = explode('.', $gambar);
                    $ekstensi = strtolower(end($x));
                    $gambar_baru = "$nama.$ekstensi";

                    $tmp = $_FILES['gambar']['tmp_name'];
                    move_uploaded_file($tmp, 'gambar_buku/' . $gambar_baru);


                    $sql = "UPDATE produk SET jenis_produk='{$_POST['jenis_produk']}',
                                            nama_produk='{$_POST['nama_produk']}',
                                            penerbit_produk='{$_POST['penerbit_produk']}',
                                            harga_produk='{$_POST['harga_produk']}'
                                            WHERE id_produk='{$_POST['id']}'";
                    $query = mysqli_query($conn, $sql);

                    $sql = "UPDATE buku SET nama_buku='$nama',pengarang_buku='{$_POST['pengarang_buku']}',
                                            gambar_buku='$gambar_baru', tanggal_input='$tanggal_input'
                                            WHERE id_produk='{$_POST['id']}'";
                    $query = mysqli_query($conn, $sql);
                    if ($query){
                        echo "data berhasil diubah";
                        header('Location: keranjang.php');
                    }
                    else{
                        echo "data gagal diubah".mysqli_error();
                    }                
            }

            ?>
    </div>
    </div>
    <!-- <script src="addeventjs.js"></script> -->
</body>
<script src="Aboutme.js"></script>
</html>