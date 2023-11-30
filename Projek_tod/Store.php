<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Gaya umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        /* Menonaktifkan scroll */
        html, body {
            overflow: hidden;
        }

        /* Gaya header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
        }

        /* Gaya foto profil */
        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
        }
        /* Gaya tombol log out */
        .logout-button {
            background-color: #dc3545;
            color: #fff;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Kontainer utama */
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Kolom dengan lebar minimal 300px, menyesuaikan layar */
            grid-gap: 20px; /* Jarak antara kolom */
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            overflow-y: scroll;
            max-height: calc(100vh - 100px);
        }

        /* Kolom produk */
        .col {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        /* Gaya tombol membeli */
        .buy-button {
            background-color: #007bff;
            color: #fff;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        /* Gaya footer */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 19px 150px;
            background-color: #333;
            color: #fff;
        }

        /* Gaya ikon putih */
        .footer i {
            color: #fff;
            cursor: pointer;
        }

        /* Media Query untuk layar berukuran kecil (di bawah 768px) */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr; /* Satu kolom pada layar kecil */
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <!-- Foto profil -->
        <img class="profile-img" src="logo.jpg" alt="Foto Profil" onclick="location.href='ganti-foto-profil.php';">
        <!-- Nama pengguna -->
        <span>Nama Pengguna</span>
        <!-- Tombol Log Out dengan Modal Konfirmasi -->
        <button class="logout-button" data-toggle="modal" data-target="#logoutModal">Log Out</button>
    </div>

    <!-- Konten Utama -->
    <div class="container">
        <!-- Kolom 1 -->
        <div class="col">
            <!-- Gambar produk -->
            <img class="product-img" src="baju1.jpg" alt="Baju 1">
            <!-- Nama produk -->
            <h3>Baju 1</h3>
            <!-- Harga produk -->
            <p>Harga: $50</p>
            <!-- Tombol membeli -->
            <button class="buy-button">Beli</button>
        </div>

        <!-- Kolom 2 -->
        <div class="col">
            <!-- Gambar produk -->
            <img class="product-img" src="baju2.jpg" alt="Baju 2">
            <!-- Nama produk -->
            <h3>Baju 2</h3>
            <!-- Harga produk -->
            <p>Harga: $40</p>
            <!-- Tombol membeli -->
            <button class="buy-button">Beli</button>
        </div>

        <!-- Kolom 3 -->
        <div class="col">
            <!-- Gambar produk -->
            <img class="product-img" src="baju3.jpg" alt="Baju 3">
            <!-- Nama produk -->
            <h3>Baju 3</h3>
            <!-- Harga produk -->
            <p>Harga: $60</p>
            <!-- Tombol membeli -->
            <button class="buy-button">Beli</button>
        </div>
                <!-- Kolom 1 -->
                <div class="col">
            <!-- Gambar produk -->
            <img class="product-img" src="baju1.jpg" alt="Baju 1">
            <!-- Nama produk -->
            <h3>Baju 1</h3>
            <!-- Harga produk -->
            <p>Harga: $50</p>
            <!-- Tombol membeli -->
            <button class="buy-button">Beli</button>
        </div>

        <!-- Kolom 2 -->
        <div class="col">
            <!-- Gambar produk -->
            <img class="product-img" src="baju2.jpg" alt="Baju 2">
            <!-- Nama produk -->
            <h3>Baju 2</h3>
            <!-- Harga produk -->
            <p>Harga: $40</p>
            <!-- Tombol membeli -->
            <button class="buy-button">Beli</button>
        </div>

        <!-- Kolom 3 -->
        <div class="col">
            <!-- Gambar produk -->
            <img class="product-img" src="baju3.jpg" alt="Baju 3">
            <!-- Nama produk -->
            <h3>Baju 3</h3>
            <!-- Harga produk -->
            <p>Harga: $60</p>
            <!-- Tombol membeli -->
            <button class="buy-button">Beli</button>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <!-- Simbol 2 (kiri) -->
        <a href="link_to_home.html"><i class="fas fa-home" style="cursor: pointer;"></i></a>
        <!-- Simbol 1 (Tengah) - Tautan ke halaman toko (store) -->
        <a href="link_to_store.html"><i class="fas fa-store" style="cursor: pointer;"></i></a>
        <!-- Simbol 2 (kanan) -->
        <a href="link_to_page_2.html"><i class="fas fa-cog" style="cursor: pointer;"></i></a>
    </div>

    <!-- Modal Konfirmasi Log Out -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Log Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin keluar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a href="login.php" class="btn btn-danger">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap JavaScript dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
