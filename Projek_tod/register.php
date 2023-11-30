<?php
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password === $confirmPassword) {
        // Tampilkan konfirmasi sebelum mengarahkan ke halaman login
        echo "<script>
            if (confirm('Pendaftaran berhasil. Apakah Anda ingin login sekarang?')) {
                window.location.href = 'login.php'; // Redirect ke halaman login jika disetujui
            }
        </script>";
        exit;
    } else {
        echo "<script>
            alert('Password dan konfirmasi password tidak sesuai.');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Mengatur latar belakang halaman */
        body {
            background: url(apa.gif);
            background-position: center;
            background-size: cover;
        }
        /* Mengatur tampilan kotak pendaftaran */
        .register-box {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Membuat latar belakang tembus pandang */
            border: 5px solid #ffff;
            border-radius: 50px;
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
        .user-icon,
        .lock-icon {
            position: absolute;
            left: -16px; /* Jarak ikon dari kiri */
            top: 50%;
            transform: translateY(-50%);
            color: #333; /* Warna ikon */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-box">
            <img class="logo" src="logo.jpg" alt="Logo">
            <h3 class="text-center mt-4 mb-4">Daftar Di Life Connection</h3>
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
                <div class="form-group position-relative">
                    <input type="password" class="form-control transparent-input" id="confirmPassword" name="confirmPassword" placeholder="Konfirmasi Password" required>
                    <!-- Tambahkan tanda mata sebagai ikon -->
                    <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="register" id="register">Daftar</button>
            </form>
            <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </div>
    </div>

    <!-- Sumber library JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk mengubah tipe input password menjadi teks dan sebaliknya
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

            $('#toggleConfirmPassword').click(function() {
                var confirmPasswordInput = $('#confirmPassword');
                if (confirmPasswordInput.attr('type') === 'password') {
                    confirmPasswordInput.attr('type', 'text');
                    $(this).removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    confirmPasswordInput.attr('type', 'password');
                    $(this).removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });
    </script>
</body>
</html>
