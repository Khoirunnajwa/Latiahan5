<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h2, p, a {
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc; /* Properti untuk bingkai */
            border-radius: 5px; /* Sudut melengkung pada bingkai */
            margin: 5px; /* Jarak antar elemen */
        }

        .profil-picture {
            display: flex;
            justify-content: center; /* Menengahkan horizontal */
            align-items: center; /* Menengahkan vertikal */
            border-radius: 1%;
            overflow: hidden;
            width: 50%; /* Atur lebar sesuai kebutuhan */
            margin: 10px; /* Atur jarak dari elemen lain */
        }

        .profil-picture img {
            max-width: 20%; /* Mengisi lebar kontainer */
            height: auto; /* Memastikan gambar proporsional */
        }
    </style>
</head>
<body>

<h2>Profil Mahasiswa</h2>

<div class="profil-picture">
    <?php
    $gambarProfilPath = "WhatsApp Image 2023-11-19 at 20.40.09.jpeg";
    echo "<img src='FOTOSAYA.jpg' alt='Gambar Profil.jpg'>";
    ?>
</div>

<p><strong>Nama:</strong> Khoirun Najwa</p>
<p><strong>Email:</strong> Khairunnajwa880@gmail.com</p>
<p><strong>prodi:</strong> sistem informasi</p>
<p><strong>Universitas:</strong> UIN JAMBI</p>

<br>
<a href="latihan5b.php">Kembali</a>

</body>
</html>
