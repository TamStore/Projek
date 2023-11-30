<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="footer-navbar.css">
    <title>Homepage</title>
</head>
<body>
    <div class="FContainer">
        <nav class="wrapper">
            <ul class="navigation">
                <li><img src="profil.png" alt="Profile Image"></li>
                <li><button class="logout-button" id="logout-button">Logout</button></li>
            </ul>
        </nav>
    </div>

    <div class="tambah-roda">
        <img src="tambah.png" alt="Tambah Roda Icon">
        <h2>Roda</h2>
    </div>

    <div class="ads">
        <img src="ads.png" alt="Ads Icon">
        <h2>Ads</h2>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <p class="modal-title">Konfirmasi Logout</p>
            <p class="modal-body">Apakah Anda ingin logout?</p>
            <div class="modal-buttons">
                <button class="cancel">Tidak</button>
                <button class="confirm">Ya</button>
            </div>
        </div>
    </div>

    <div class="footer-navbar">
        <ul>
            <li>
                <a href="homepage.php">
                    <img src="home.png" alt="Home Icon">
                </a>
                Home
            </li>
            <li>
                <a href="Store.php">
                    <img src="Store.png" alt="Store Icon">
                </a>
                Store
            </li>
            <li>
                <a href="pengaturan.php">
                    <img src="setting.png" alt="Setting Icon">
                </a>
                Setting
            </li>
        </ul>
    </div>

    <script>
        const modal = document.getElementById("myModal");
        const cancelButton = document.querySelector(".cancel");
        const confirmButton = document.querySelector(".confirm");
        const logoutButton = document.getElementById("logout-button");

        logoutButton.addEventListener("click", function() {
            modal.style.display = "flex";
        });

        cancelButton.addEventListener("click", function() {
            modal.style.display = "none";
        });

        confirmButton.addEventListener("click", function() {
            modal.style.display = "none";
            window.location.href = "login.php";
        });
    </script>
</body>
</html>
