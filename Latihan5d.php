<!DOCTYPE html>
<html>
<head>
    <title>Display Numbers</title>
</head>
<body>
    <form method="post">
        <label for="rows">Masukkan jumlah baris:</label>
        <input type="text" id="rows" name="rows"><br><br>
        <input type="submit" value="Tampilkan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = isset($_POST['rows']) ? $_POST['rows'] : 10;

        for ($i = $rows; $i >= 1; $i--) {
            // Loop untuk mencetak angka
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
