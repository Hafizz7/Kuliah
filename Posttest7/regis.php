<?php
    include 'koneksi.php';
    if(isset($_POST['masuk'])){
        $username1 = $_POST['username'];
        $password_kamu2 = $_POST['password_kamu'];
        $cpassword_kamu2 = $_POST['cpassword_kamu2'];
        if ($password_kamu2 === $cpassword_kamu2){
            $password_kamu2 = password_hash($password_kamu2, PASSWORD_DEFAULT);
            $query = mysqli_query($conn, "SELECT username from loginn WHERE username = '$username1'");
        
            if(mysqli_fetch_assoc($query)){
                echo"<script>
                    alert('Username telah digunakan');
                    </script>";
            }
            else{
                $sql = "INSERT INTO loginn(username, password2) VALUES ('$username1', '$password_kamu2')";
                $query = mysqli_query($conn, $sql);
                if(mysqli_affected_rows($conn) > 0){
                    echo "<script>
                        alert('Registrasi Berhasil');
                        document.location.href = 'login.php'
                        </script>";
                        
                }
                else{
                    echo "<script>
                        alert('Registrasi Gagal');
                        document.location.href = 'regis.php'
                        </script>";
                }
            }
        }
        else{
            echo"<script>
                alert('Konfimasi Password Anda Tidak Sesuai');
                </script>";
        }
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@600&family=Playfair+Display:ital,wght@1,800&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="Login2.css">
</head>
<body>
    <div class="semua">
        <div class="case">
            <h1 class="login2">REGISTRASI</h1>
            <div class="login">
                <form method="POST" >
                    <h2 class="name_pw" id="username1">Username</h2>
                    <input type="text" name="username" placeholder="Input username" class="nama"> <br><br>
                    <h2 class="name_pw">Password</h2>
                    <input type="password" name="password_kamu" placeholder="Input password" class="nama"> <br><br>
                    <h2 class="name_pw">Konfirmasi Password</h2>
                    <input type="password" name="cpassword_kamu2" placeholder="Confrim password" class="nama"> <br><br>
                    <input type="submit" name="masuk" value="LOGIN" class="login1">
                </form>
            </div>
        </div>
    </div>
</body>
</html>