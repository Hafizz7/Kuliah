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
    <link rel="stylesheet" href="post.css">
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
        <?php
        if(isset($_POST['beli_sekarang'])){
            echo '<div class="semua_php">';
            echo '<div class="jawa">'.'<br>';
            echo '<div class="bg0">'.'Nama: '.$_POST['nama'].'<br>';
            echo '<div class="bg1">'.'Alamat:'.$_POST['alamat'].'<br>';
            echo '<div class="bg2">'.'Nomor Hp:'.$_POST['nomor'].'<br>';
            echo '<div class="bg3">'.'Jumlah: '.$_POST['jumlah'].'<br>';
            echo '<div class="bg4">'.'Email: '.$_POST['email'].'<br>';
            echo '<div class="bg5">'.'Buku yang dibeli: ';
            echo '<div class="top_php">';
            echo '<img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1597998203l/52465880.jpg">';
        }
        ?>
        </div>
    </div>
</body>
<script src="Aboutme.js"></script>
</html>