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
                <li ><a href="#" target="_self">Login</a></li>
            </ul>
        </div>
        <div class="belisekarang">
            <form method="post" action="">
                <table border="0" align="center">
                <tr><td height=20px></tr>
                    <td>Input User</td>
                    <tr>
                        <td margin="410px">Nama Produk</td>
                        <td align="center">:</td>
                        <td><input type="text" name="nama_produk"></td>
                    </tr>
                    <tr>
                        <td>Jenis</td>
                        <td align="center">:</td>
                        <td><input type="text" name="jenis_produk"></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td align="center">:</td>
                        <td><input type="text" name="nama_barang"></td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td align="center">:</td>
                        <td><input type="text" name="pengarang_buku"></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td align="center">:</td>
                        <td><input type="text" name="penerbit_produk"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td align="center">:</td>
                        <td><input type="number" name="harga_produk"></td>
                    </tr>
                    
                </table>
                <input type="submit" name="tambah_buku" Value="Tambah Buku"
                <input type="submit" name="tambah_buku" Value="Tambah Buku">
            </from>  
            <?php
                include 'koneksi.php';
                if ($_POST){
                    $sql = "INSERT INTO produk (nama_produk,jenis_produk,penerbit_produk, harga_produk) 
                    VALUES ('{$_POST['nama_produk']}','{$_POST['jenis_produk']}','{$_POST['penerbit_produk']}','{$_POST['harga_produk']}')";
                    $query = mysqli_query($conn, $sql);

                    $sql = "SELECT max(id_produk) AS last_id FROM produk LIMIT 1";
                    $query = mysqli_query($conn, $sql);

                    $data = mysqli_fetch_array($query);
                    $last_id = $data['last_id'];

                    $sql = "INSERT INTO buku (id_produk, nama_buku, pengarang_buku, penerbit_buku) VALUES('$last_id', '{$_POST['nama_barang']}',
                    '{$_POST['pengarang_buku']}','{$_POST['penerbit_buku']}')";
                    $query = mysqli_query($conn, $sql);

                    if ($query){
                        echo"OKEE DEKK";
                        header('Location: keranjang.php');
                    }
                    else{
                        echo"gagal".mysqli_error();
                    }
                }

            ?>
    </div>
    </div>
    <!-- <script src="addeventjs.js"></script> -->
</body>
<script src="Aboutme.js"></script>
</html>