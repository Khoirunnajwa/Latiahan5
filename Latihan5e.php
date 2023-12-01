<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php
    // Data username dan password yang benar
    $username = 'najwaa';
    $password = 'najwaa';

    // Memeriksa apakah ada data yang dikirimkan melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];

        // Memeriksa apakah username dan password yang dimasukkan benar
        if ($input_username === $username && $input_password === $password) {
            // Jika benar, redirect ke halaman admin
            header("Location: admin.php");
            exit();
        } else {
            // Jika salah, tampilkan pesan kesalahan
            echo "<p>Username atau password salah. Silakan coba lagi.</p>";
        }
    }
    ?>

    <h1>Login</h1>
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Menampilkan pesan selamat datang jika pengguna berhasil login
    if (isset($_GET['login']) && $_GET['login'] === 'success') {
        echo "<p>Selamat Datang, <br>Admin Ini adalah halaman admin<br>.</p>";
    }
    ?>
</body>
</html>