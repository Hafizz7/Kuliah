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
    <link rel="stylesheet" href="postes.css">
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
                <li ><a href="#" target="_self">Home</a></li>
                <li ><a href="Aboutme.php" target="_self">About Me</a></li>
                <li ><a href="#" target="_self">Top Seller</a></li>
                <li ><a href="#" target="_self">Login</a></li>
            </ul>
        </div>
        <div class="konten">
            <h1 id="color_txt" class="text-1">Cari Buku Yang Anda Ingin Baca</h1>
            <h4 class="text-2" onmousedown="turun(this)" onmouseup="naik(this)">Padahal, buku bukan hanya memberikan ilmu baru bagi para pembacanya. Namun, buku juga dapat menurunkan stres, kecemasan, dan depresi hingga meningkatkan kepercayaan diri dari pembacanya sendiri.
            </h4>
            <div class="konten-kiri">
                <h1 class="quotes">Membaca Dapat <br>Menghilangkan<br> Sedikit<br> Stress Mu</h1>
            </div>
            <div class="cari">
                <table class="cari-conten">
                    <td>
                        <td>
                            <input type="text" placeholder="Search" class="search">
                        </td>
                        <td>
                            <a href="#"><i class="material>"><img src="http://cdn.onlinewebfonts.com/svg/img_456268.png" height="25px"></i></a>
                        </td>
                    </td>
                </table>
            </div>
        </div>
        <div class="konten-bawah">
            <h4>Buku Unggulan</h4>
            <div class="flex-gambar">
                <div><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Sebuah-seni-untuk-bersikap-bodoh-amat.jpg"></a>
                    <p class="judul">Sebuah Seni Untuk Bersikap Bodo Amat</p>
                    <p class="nama-penerbit">Mark Manson</p>
                    <p class="harga">Rp.120.000</p>
                </div>
                <div><a href="#"><img src="https://ebooks.gramedia.com/ebook-covers/49184/image_highres/ID_AHPK2019MTH09AHP.jpg"></a>
                    <p class="judul">Atomic Habits</p>
                    <p class="nama-penerbit">James Clear</p>
                    <p class="harga">Rp.120.000</p>
                </div>
                <div><a href="#"><img src="https://ebooks.gramedia.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg"></a>
                    <p class="judul">Filosfi Teras</p>
                    <p class="nama-penerbit">Henry Menampiring</p>
                    <p class="harga">Rp.120.000</p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/9786020324784_Hujan-Cover-Baru-2018.jpg"></a>
                    <p class="judul">Hujan</p>
                    <p class="nama-penerbit">Tere Liye</p>
                    <p class="harga">Rp.120.000</p>
                </div>
                <div><a href="#"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1562976798l/49575986._SX0_SY0_.jpg"></a>
                    <p class="judul">Luka Kata</p>
                    <p class="nama-penerbit">Candra Malik</p>
                    <p class="harga">Rp.120.000</p>
                </div>
            </div>
        </div>
        <div id="seller" class="top-seller">
            <div><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1597998203l/52465880.jpg"></div>
            <div class="conten-seller"><p class="text-seller">Buku Yang Paling Laku <br>Di Bulan Ini</p>
                <p class="judul-seller">How To Respect My Self</p>
                <p class="build-book">Yoon Hong Gyun</p>
                <p class="harga-seller">Rp.120.000</p>
                <div class="beli-sekarang">
                    <p class="buy-now"><a href="beli_sekarang.php">Beli Sekarang</a></p>
                </div>
            </div>
        </div>
        <div class="konten-bawahlagi">
            <h1>Buku Popupeler</h1>
            <ul>
                <li><a href="#" target="_blank">ALL</a></li>
                <li><a href="#" target="_blank">Fiksi</a></li>
                <li><a href="#" target="_blank">Horor</a></li>
                <li><a href="#" target="_blank">Masak</a></li>
                <li><a href="#" target="_blank">Teknologi</a></li>
                <li><a href="#" target="_blank">Biografi</a></li>
                <li><a href="#" target="_blank">Kimia</a></li>
            </ul>
            <div id="buku-populer1" class="flex-buku-populer">
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.jpg"></a>
                    <p class="judul-1">Laut Bercerita</p>
                    <p class="pembuat-book-1">Leila S. Chudori</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/9786024242756_Pulang-New-C.jpg"width="160px"></a>
                    <p class="judul-1">Pulang</p>
                    <p class="pembuat-book-1">Leila S. Chudori</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/WhatsApp_Image_2022-07-19_at_3.51.07_PM.jpeg" width="160px"></a>
                    <p class="judul-1">Brianna</p>
                    <p class="pembuat-book-1">Leila S. Chudori</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2021/03/17161255/9786230012648_Kumpulan_Quotes_dari_Komik_si_bedil.jpg" width="160px"></a>
                    <p class="judul-1">Nak Bunda Rindu</p>
                    <p class="pembuat-book-1">Seto Buje</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/Saat_Saat_Jauh_cov.jpg"></a>
                    <p class="judul-1">Saat Saat Jauh</p>
                    <p class="pembuat-book-1">Lia Spelia</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/images/1/41905/image_highres/ID_BHIP2018MTH03CLAI.jpg"></a>
                    <p class="judul-1">Claires</p>
                    <p class="pembuat-book-1">Valerie Patkar</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
            </div>
            <!-- bawah -->
            <div class="flex-buku-populer">
                <div><a href="#"><img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2021/01/27164552/Filsafat-Ilmu-Orientasi-Ke-Arah-Pemahaman.jpg" width="155px"></a>
                    <p class="judul-1">Filsafat Ilmu</p>
                    <p class="pembuat-book-1">Prof. Dr. Mukhtar Latif</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/9786020613673_Lima_Cerita_C.jpg"width="160px"></a>
                    <p class="judul-1">Lima Cerita</p>
                    <p class="pembuat-book-1">Desi Anwar</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/sagaras.jpeg" width="160px"></a>
                    <p class="judul-1">Sagaras</p>
                    <p class="pembuat-book-1">Tere Lie</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/9786020729091_AYANGAN_PUTUS_dpn.jpg" width="160px"></a>
                    <p class="judul-1">Layangan Putus</p>
                    <p class="pembuat-book-1">Momy Asf</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/9786020523316_Melangkah_UV_Spot_R4-1.jpg" width="160px"></a>
                    <p class="judul-1">Melangkah</p>
                    <p class="pembuat-book-1">JS. Khairen</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
                <div><a href="#"><img src="https://cdn.gramedia.com/uploads/items/pulang-pergi_tere_liye.jpeg" width="160px"></a>
                    <p class="judul-1">Pulang-Pergi</p>
                    <p class="pembuat-book-1">Tere Lie</p>
                    <p class="harga-book-2">Rp.120.000</p>
                    <p class="buy-1"><a href="#">Beli Sekarang</a></p>
                    <p class="lihat-buku"><a href="#">Lihat Buku</a></p>
                </div>
            </div>
        </div>
        <div id="seller2" class="top-seller-2">
            <p class="topmarkotop">Best Seller</p>
            <div class="top1"><a href="#"><img src="https://upload.wikimedia.org/wikipedia/id/d/d2/CiL_%28sampul%29.jpg" height="360px"></a>
                <p class="judul-top-seller">Cantik Itu Luka</p>
                <p class="nama-top-seller">Eka Kurinawan</p>
                <p class="ringkas-buku">Menceritakan tentang masa kolonial atau penjajahan, saat seorang perempuan dipaksa untuk menjual diri. Perempuan tersebut memiliki 3 anak cantik, dan ia berharap anak yang terakhir memiliki wajah yang buruk 
                    rupa. Akhirnya anak terakhir lahir seperti yang ia harapkan, dan diberikan nama Cantik</p>
                <p id="selengkapnya1" style="display: none;">Adapun latar tempat dari novel ini yaitu Kota Halimunda merupakaan kota fiksi ciptaan Eka Kurnkiawan. Diceritakan juga dalam novel tersebut bahwa Dewi Ayu dianugrahi kecantikan dan kedewasaan berpikir diatas wanita seumurannya, hal ini membuat Dewi Ayu sangat menonjol dalam berbagai hal. Keputusan pertama yang membuat orang-orang terkejut adalah 
                    keputusan Dewi Ayu ingin menikahi Mak Gendik yang merupakan lelaki tua sebatang kara. </p>
                <button id="lihat_selengkapnya">Lihat Selengkapnya</button>
                <p class="harga-top-seler">Rp.130.000</p>
                <p class="buy-top-seller"><a href="#">Beli Sekarang</a></p>
            </div>
            <div class="top2">
                <p class="judul-top-seller-2">Kamu Terlalu Banyak Bercanda</p>
                <p class="nama-top-seller-2">Marchella FP</p>
                <p class="ringkas-buku-2"> Sebuah buku yang bisa menjadi motivasi bagi kamu dimanapun berada dan yang sedang 
                    dalam fase berjuang. </p>
                <p id="selengkapnya3" style="display: none;"> Uang investasi, keuangan pribadi, dan keputusan bisnis biasanya diajarkan sebagai bidang berbasis matematika, di mana data dan rumus memberi tahu kita apa yang harus dilakukan. Namun di dunia nyata, orang tidak membuat keputusan finansial di spreadsheet. <br>Seseorang yang mampu mengelola duit dengan bijak berarti orang tersebut memiliki kemampuan mengendalikan emosi, sehingga tidak menghabiskan duit secara cepat. Begitu juga sebaliknya, seseorang yang terlalu terbawa emosinya, maka akan sulit untuk mengatur keuangan yang dimiliki. Emosi dalam hal ini bisa diartikan sebagai ingin sekali membeli dan memiliki banyak barang, tetapi tidak menyimpan duit untuk masa depan. </p>
                <button id="lihat_selengkapnya3">Lihat Selengkapnya</button>
                <p class="harga-top-seler-2">Rp.130.000</p>
                <p class="buy-top-seller-2"><a href="#">Beli Sekarang</a></p>
                <a href="#"><img src="https://cdn.gramedia.com/uploads/items/img466_PWkp431.jpg" height="360px" width="270px"></a>
            </div>
            <div class="top3"><a href="#"><img src="https://cdn.gramedia.com/uploads/items/Psychology_Of_Money.jpg" height="360px" width="240px"></a>
                <p class="judul-top-seller">The Psychology of Money</p>
                <p class="nama-top-seller">Morgan Housel</p>
                <p class="ringkas-buku">Berhasil dengan uang belum tentu tentang apa yang Anda ketahui. Ini tentang bagaimana Anda berperilaku. Dan perilaku sulit untuk diajarkan, bahkan untuk orang yang sangat pintar.</p>
                <p id="selengkapnya2" style="display: none;">Adapun latar tempat dari novel ini yaitu Kota Halimunda merupakaan kota fiksi ciptaan Eka Kurnkiawan. Diceritakan juga dalam novel tersebut bahwa Dewi Ayu dianugrahi kecantikan dan kedewasaan berpikir diatas wanita seumurannya, hal ini membuat Dewi Ayu sangat menonjol dalam berbagai hal. Keputusan pertama yang membuat orang-orang terkejut adalah 
                    keputusan Dewi Ayu ingin menikahi Mak Gendik yang merupakan lelaki tua sebatang kara. </p>
                <button id="lihat_selengkapnya2">Lihat Selengkapnya</button>
                <p class="harga-top-seler">Rp.130.000</p>
                <p class="buy-top-seller"><a href="#">Beli Sekarang</a></p>
            </div>
        </div>
        <div class="footer">
            <h3>Muh. Hafiz</h3>
        </div>
    </div>
    <script src="addeventjs.js"></script>
</body>
<script src="postests.js"></script>
</html>