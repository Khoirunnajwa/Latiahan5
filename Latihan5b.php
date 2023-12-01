<?php
$mahasiswa = array(
    array(
        'nama' => 'Khoirun Najwa',
        'email' => 'Khoirunnajwa880@gmail.com',
        'prodi' => 'sistem informasi',
        'universitas' => 'UIN JAMBI'
    ),
  
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li><a href="http://localhost/Pertemuan8/Latihan5c.php?nama=<?php echo $mhs['nama']; ?>&email=<?php echo $mhs['email']; ?>&prodi=<?php echo $mhs['prodi']; ?>&universitas=<?php echo $mhs['universitas']; ?>"><?php echo $mhs['nama']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>