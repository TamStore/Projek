<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style> 
        /* Mengubah warna latar belakang navbar menjadi SlateGray */
        .navbar {
            background-color: #708090;
        }
        /* Mengubah warna teks tautan di navbar */
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Hapus link logo -->
    <!-- Profil di Sebelah Kiri -->
    <div class="navbar-brand">
        <img src="profil.png" alt="Profil" class="img-fluid" style="width: 50px; height: 50px;">
        <span class="ml-2">Profil</span>
    </div>
    <!-- Tombol Log Out dengan Modal Konfirmasi -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <button class="btn btn-primary" data-toggle="modal" data-target="#confirmLogoutModal">Log Out</button>
        </li>
    </ul>
</nav>

<!-- Modal Konfirmasi Log Out -->
<div class="modal fade" id="confirmLogoutModal" tabindex="-1" role="dialog" aria-labelledby="confirmLogoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmLogoutModalLabel">Konfirmasi Log Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin log out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Log Out</button>
            </div>
        </div>
    </div>
</div>

<!-- Link ke Bootstrap JS dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
