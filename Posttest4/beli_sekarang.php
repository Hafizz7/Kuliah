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
                <li ><a href="#" target="_self">Login</a></li>
            </ul>
        </div>
        <div class="konten">
            <div class="belisekarang">
                <form method="post" action="post.php" enctype="multipart/form-data">
                    <table border="0" align="center">
                    <tr><td height=20px></tr>
                        <td>Input User</td>
                        <tr>
                            <td margin="410px">Nama</td>
                            <td align="center">:</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td align="center">:</td>
                            <td><input type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td align="center">:</td>
                            <td><input type="number" name="nomor"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Buku</td>
                            <td align="center">:</td>
                            <td><input type="number" name="jumlah"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td align="center">:</td>
                            <td><input type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td align="center">:</td>
                            <td><input type="password" name="sandi"></td>
                        </tr>
                        
                    </table>
                    <input type="submit" name="beli_sekarang" Value="Beli Sekarang">
                </from>  
            </div>
    </div>
    <script src="addeventjs.js"></script>
</body>
<script src="Aboutme.js"></script>
</html>