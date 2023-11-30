            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
                
                <title>Pengaturan</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f0f0f0;
                        margin: 0;
                        padding: 0;
                    }

                    header {
                        background-color: #333;
                        color: #fff;
                        padding: 20px;
                        text-align: center;
                    }

                    h1 {
                        margin: 0;
                    }

                    .container {
                        max-width: 600px;
                        margin: 20px auto;
                        padding: 20px;
                        background-color: #fff;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        border-radius: 5px;
                        height: 600px;

                    }
                    
                    label {
                        display: block;
                        margin-bottom: 10px;
                        font-weight: bold;
                        padding: 10px;
                    }

                    input[type="text"], input[type="password"], select {
                        width: 100%;
                        padding: 10px;
                        margin-bottom: 20px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                    }

                    button {
                        background-color: #212121;
                        color: #fff;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                        margin-top: 250px;
                    }

                    button:hover {
                        background-color: #555;
                    }
                </style>
            </head>
            <body>
                <header>
                    <h1>Pengaturan</h1>
                </header>
                <div class="container">
                    <form>
                        <label for="ambil coin"><i class="fa fa-gift">Ambil coin</i></label>
                        

                        <label for="apakah  anda suka aplikasi ini">apakah anda suka aplikasi ini
                            <input type="checkbox" name="checkbox">
                        </label>


                        <label for="logout"><i class="fa fa-home">Logout</i></label>

                        <label for="bahasa"><i class="fa fa-globe">bahasa</i></label>
                        <select id="bahasa" name="bahasa">
                            <option value="id">Bahasa Indonesia</option>
                            <option value="en">English</option>
                            
                        </select>
                        <hr>
                        <h5>panduan</h5>

                        <button type="kembali">Kembali</button>
                    </form>
                </div>
            </body>
            </html>


















                    

