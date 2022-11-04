<?php
session_start();
include 'koneksi.php';
if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
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
            <h1 class="login2">LOGIN</h1>
            <div class="login">
                <form method="POST" >
                    <h2 class="name_pw" id="username1">Username</h2>
                    <input type="text" name="username" placeholder="Input username" class="nama"> <br><br>
                    <h2 class="name_pw">Password</h2>
                    <input type="password" name="password_kamu" placeholder="Input password" class="nama"> <br><br>
                    
                    <input type="submit" name="masuk" value="LOGIN" class="login1"><br><br>
                    <input type="submit" name="regis" value="REGISTRASI" class="login1">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    include 'koneksi.php';
    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password_kamu = $_POST['password_kamu'];
        $query = mysqli_query($conn, "SELECT * from loginn WHERE username = '$username'");
        if(mysqli_num_rows($query) === 1){
            $row = mysqli_fetch_assoc($query);
            if(password_verify($password_kamu, $row['password2'])){
                $_SESSION['login'] = true;
                echo "<script>
                        alert('Login Berhasil')
                        document.location.href = 'index.php'
                        </script>";
            }else{
                echo "
                <script>
                    alert(' PASSWORD SALAH ... !! ');
                </script>
            ";
            }

        }else{
            echo "
                <script>
                    alert(' USERNAME TIDAK TERDAFTAR..!! ');
                </script>
            ";
        }
    }
    if(isset($_POST['regis'])){
        header('Location: regis.php');
    }
    

 ?>