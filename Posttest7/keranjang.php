<?php
    include 'koneksi.php';
    $sql = "SELECT * FROM produk INNER JOIN buku ON produk.id_produk = buku.id_produk";
    // $sql = "SELECT * FROM produk INNER JOIN buku ON produk.id_produk = gambar.id_produk";
    $query = mysqli_query($conn, $sql)


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
    <link rel="stylesheet" href="keranjang3.css">
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
                <li ><a href="tambah.php" target="_self">Tambah Data</a></li>
                <li ><a href="login.php" target="_self">Login</a></li>
            </ul>
        </div>
        <div class="keranjang">
            <table border="0" width="1000px" align="center">
                <form action="" method="GET">                
                    <tr>
                        <th>Cari</th>
                        <th>
                        <div class="cariko">
                            <input type="text" name="tulisan" placeholder="cari judul buku" id="tulisan">
                        </th>
                        <div class="carieh">
                            <button type="submit" name="cari">
                                <img src="http://cdn.onlinewebfonts.com/svg/img_456268.png">
                            </button>
                        </div>
                    </tr>
                <form>
                <tr class="jamuhijau">
                    <!-- <th>Jenis Produk</th> -->
                    <th class="jamuhijau">Jenis Produk</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Tanggal Input</th>
                    <th colspan="2  ">Kelola</th>
                </tr>
        </div>
        <?php
        if(isset($_GET['cari'])){
            $tulisan = $_GET['tulisan'];
            $sql = "SELECT * FROM produk INNER JOIN buku ON produk.id_produk = buku.id_produk WHERE nama_buku LIKE '%".$tulisan."%'";
            $query = mysqli_query($conn, $sql);
        }
        else{
            $sql = "SELECT * FROM produk INNER JOIN buku ON produk.id_produk = buku.id_produk";
        }
        
        while ($data = mysqli_fetch_array($query)){
            ?>
            <div class="keranjang">
                <tr>
                    <th><?php echo $data['jenis_produk']?></th>
                    <th><?php echo $data['nama_buku']?></th>
                    <th><?php echo $data['pengarang_buku']?></th>
                    <th><?php echo $data['penerbit_produk']?></th>
                    <th><?php echo $data['harga_produk']?></th>
                    <th><img src="gambar_buku/<?=$data['gambar_buku']?>" alt="" width="100px"></th>
                    <th><?php echo $data['tanggal_input']?></th>
                    <th><a href="edit.php?id=<?= $data['id_produk']?>"><img src="https://iili.io/t8cA8b.png"></a></th>
                    <th><a href="hapus.php?id=<?= $data['id_produk']?>"><img src="https://iili.io/t8c59j.png"></a></th>
                </tr>
            </div>
        <?php
        }
        ?>
        </table>
    </div>
    <!-- <script src="addeventjs.js"></script> -->
</body>
<script src="Aboutme.js"></script>
</html>