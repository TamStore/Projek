<?php
// Mengecek apakah tombol login ditekan
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Memeriksa username dan password (contoh: 'use' dan 'smk')
    if($username == 'use' && $password == 'smk') {
        // Jika username dan password cocok, tampilkan pesan sukses dan arahkan ke halaman home.php
        echo "<script>
            alert('Login Berhasil');
            window.location.href = 'homepage.php';
        </script>";
    } else {
        // Jika username atau password salah, tampilkan pesan gagal
        echo "<script>
            alert('Login Gagal');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Mengatur latar belakang body dengan gambar latar yang tembus pandang */
        body {
            background: url(apa.gif);
            background-position: center;
            background-size: cover;
        }
        /* Mengatur tampilan kotak login */
        .login-box {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Membuat latar belakang tembus pandang */
            border: 5px solid #ffff;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /* Mengatur tampilan logo */
        .logo {
            display: block;
            margin: 0 auto;
            width: 100px;
            height: auto;
            border-radius: 30px;
        }
        /* Mengatur tata letak ikon mata */
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        /* Mengatur tampilan ikon pengguna */
        .user-icon {
            position: absolute;
            left: -16px;
            top: 50%;
            transform: translateY(-50%);
            color: #333; /* Warna ikon */
        }
        /* Mengatur tampilan ikon gembok */
        .lock-icon {
            position: absolute;
            left: -16px;
            top: 50%;
            transform: translateY(-50%);
            color: #333; /* Warna ikon */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <img class="logo" src="logo.jpg" alt="Logo">
            <h3 class="text-center mt-4 mb-4">Selamat Datang Di<br>Life Connection</h3>
            <form action="" method="post">
                <div class="form-group position-relative">
                    <!-- Tambahkan ikon pengguna -->
                    <i class="fas fa-user user-icon"></i>
                    <input type="text" class="form-control transparent-input" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group position-relative">
                    <input type="password" class="form-control transparent-input" id="password" name="password" placeholder="Password" required>
                    <!-- Tambahkan tanda mata sebagai ikon -->
                    <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    <!-- Tambahkan ikon gembok -->
                    <i class="fas fa-lock lock-icon"></i>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="login" id="login">Login</button>
            </form>
            <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>

    <!-- Sumber library JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Script jQuery untuk mengubah tipe input password menjadi teks dan sebaliknya
        $(document).ready(function() {
            $('#togglePassword').click(function() {
                var passwordInput = $('#password');
                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    $(this).removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    $(this).removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });
    </script>
</body>
</html>
