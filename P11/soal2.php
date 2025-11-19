<?php
echo "<h2>Pasangan x, y, z yang memenuhi x + y + z = 25</h2>";

$jumlah = 0;

for ($x = 1; $x < 25; $x++) {
    for ($y = 1; $y < 25; $y++) {
        for ($z = 1; $z < 25; $z++) {
            if ($x + $y + $z == 25) {
                echo "x = $x, y = $y, z = $z<br>";
                $jumlah++;
            }
        }
    }
}

echo "<h3>Jumlah pasangan solusi = $jumlah</h3>";
