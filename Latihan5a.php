<?php

$rows = isset($_GET['rows']) ? $_GET['rows'] : 10;

for ($i = $rows; $i >= 1; $i--) {
    // Loop untuk mencetak angka
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>



