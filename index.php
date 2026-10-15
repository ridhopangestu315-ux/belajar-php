<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--tampilan login -->

    <div class="login-container">
        <div class="login-box">
            <div id="loginPage">

            <h1>Selamat Datang!</h1>
            <p class="subtitle">Silakan masuk ke akunmu</p>

            <form id="loginForm" action="login.php" method="POST">

                <div class="input-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                    >
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                    >
                </div>

                <button type="submit" id="btnLogin">
                    Masuk
                </button>

                <p id="pesan"></p>

            </form>

            <p class="register">
                Belum punya akun? <a href="#" id="linkDaftar">Daftar</a>
            </p>

            </div>
            
             <form id="registerPage" style="display: none;">

            <h1>Buat Akun</h1>
            <p class="subtitle">Daftar untuk mulai menggunakan aplikasi</p>

            <div class="input-group">
                <label for="nama">Nama lengkap</label>
                <input type="text" id="nama"
                    placeholder="Masukkan nama lengkap">
            </div>

            <div class="input-group">
                <label for="regUsername">Username</label>
                <input type="text" id="regUsername"
                    placeholder="Buat username">
            </div>

            <div class="input-group">
                <label for="regPassword">Password</label>
                <input type="password" id="regPassword"
                    placeholder="Buat password">
            </div>

            <button type="submit">Daftar Sekarang</button>

            <p id="pesanDaftar"></p>

            <p class="register">
                Sudah punya akun?
                <a href="#" id="linkLogin">Masuk</a>
            </p>

        </form>

        </div>
    </div>

</body>

<script src="script.js"></script>
</html>
