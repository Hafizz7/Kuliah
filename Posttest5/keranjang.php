<?php
    include 'koneksi.php';
    $sql = "SELECT * FROM produk INNER JOIN buku ON produk.id_produk = buku.id_produk";
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
                <li ><a href="#" target="_self">Login</a></li>
            </ul>
        </div>
        <div class="keranjang">
            <table border="1" width="1000px" align="center">
                <tr>
                    <!-- <th>Jenis Produk</th> -->
                    <th>Jenis Produk</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Harga</th>
                    <th colspan="2">Kelola</th>
                </tr>
        </div>
        <?php
        while ($data = mysqli_fetch_array($query)){
            ?>
            <div class="keranjang">
                <tr>
                    <th><?php echo $data['jenis_produk']?></th>
                    <th><?php echo $data['nama_buku']?></th>
                    <th><?php echo $data['pengarang_buku']?></th>
                    <th><?php echo $data['penerbit_produk']?></th>
                    <th><?php echo $data['harga_produk']?></th>
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