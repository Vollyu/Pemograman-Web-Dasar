<!DOCTYPE html>
<html>

<head>
    <title>Hasil Pecahan Uang</title>
</head>

<body>
    <h1>Rincian Pecahan Uang</h1>

    <?php
    if (isset($_POST['submit'])) {
        $uang = (int)$_POST['jumlah_uang']; // Konversi ke integer
        $sisa = $uang;

        // Definisikan pecahan uang yang berlaku
        $pecahan = array(100000, 50000, 20000, 5000, 100, 50);
        $hasil_pecahan = array();

        echo "Jumlah Uang yang diambil : **Rp. " . number_format($uang, 0, ',', '.') . ",-**<br><br>";

        echo "<h2>Rincian Pecahan:</h2>";

        foreach ($pecahan as $nilai) {
            if ($sisa >= $nilai) {
                // Hitung banyaknya pecahan
                $jumlah = intdiv($sisa, $nilai);

                // Sisa uang setelah diambil pecahan
                $sisa = $sisa % $nilai;

                // Simpan hasil
                $hasil_pecahan["Rp. " . number_format($nilai)] = $jumlah;

                echo "* Pecahan Rp. " . number_format($nilai, 0, ',', '.') . ",- : **{$jumlah} lembar/keping** <br>";
            } else {
                echo "* Pecahan Rp. " . number_format($nilai, 0, ',', '.') . ",- : **0 lembar/keping** <br>";
            }
        }

        if ($sisa > 0) {
            echo "<br>Sisa Uang yang tidak dapat dipecah: **Rp. {$sisa},-**";
        }

        // Contoh kasus dari soal: Rp. 1.575.250,-
        // Hasil harusnya: 100000 x 15, 50000 x 1, 20000 x 1, 5000 x 1, 100 x 2, 50 x 1.
    } else {
        echo "Tidak ada data yang dikirim.";
    }
    ?>
    <br><br>
    <a href="pecahan_input.html">Hitung Lagi</a>
</body>

</html>