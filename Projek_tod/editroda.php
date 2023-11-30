<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Roda</title>
    <style>
        /* CSS untuk desain */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .playerName {
            margin-right: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
            flex-direction: column;
            align-items: flex-start;
        }

        .wheel img {
            /* CSS untuk desain roda */
            width: 120px;
            height: 120px;
            background-color: #aaa;
            border-radius: 50%;
        }

        #questionInput {
            margin-top: 20px;
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #addQuestionBtn {
            margin-top: 10px;
            background-color: #212121;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #addQuestionBtn:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .questionList {
            margin-top: 20px;
        }

        .question {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="wheel">
            <img src="roda.jpg" alt="">
        </div>
        <div class="playerName">Nama Pemain</div>
    </header>
    <div class="container">
        <input type="text" id="questionInput" placeholder="Tambahkan pertanyaan">
        <button id="addQuestionBtn">Tambah</button>
        <div class="questionList" id="questionList">
            <!-- Daftar pertanyaan akan ditampilkan di sini -->
        </div>
    </div>
    <footer>
        Hak Cipta © 2023 - Nama Perusahaan
    </footer>

    <script>
        let currentLetter = 'A'; // Variabel untuk melacak huruf saat menambah pertanyaan
        document.getElementById('addQuestionBtn').addEventListener('click', function() {
            // Ketika tombol "Tambah" ditekan, pertanyaan baru akan ditambahkan ke daftar
            var questionInput = document.getElementById('questionInput');
            var questionList = document.getElementById('questionList');

            if (questionInput.value !== '') {
                var newQuestion = document.createElement('div');
                newQuestion.classList.add('question');
                newQuestion.textContent = currentLetter + ' - ' + questionInput.value; // Menambahkan huruf ke pertanyaan
                questionList.appendChild(newQuestion);
                questionInput.value = '';
                
                // Menambahkan huruf selanjutnya (A sampai D)
                currentLetter = String.fromCharCode(currentLetter.charCodeAt(0) + 1);
                if (currentLetter > 'D') {
                    currentLetter = 'A';
                }
            }
        });
    </script>
</body>
</html>
