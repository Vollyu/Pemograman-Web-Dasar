<!DOCTYPE html>
<html>

<head>
    <title>Hitung Saldo Bank</title>
</head>

<body>
    <h2>Hitung Saldo Tabungan Setelah N Bulan</h2>

    <form method="post">
        Saldo Awal: <input type="number" name="saldo" required><br><br>
        Jumlah Bulan (N): <input type="number" name="bulan" required><br><br>
        <input type="submit" value="Hitung">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $saldo = $_POST['saldo'];
        $bulan = $_POST['bulan'];

        for ($i = 1; $i <= $bulan; $i++) {
            // Tentukan bunga
            if ($saldo < 1100000) {
                $bunga = 0.03;
            } else {
                $bunga = 0.04;
            }

            // Hitung saldo bulan ini
            $saldo = $saldo + ($saldo * $bunga);
            $saldo = $saldo - 9000; // biaya admin
        }

        echo "<h3>Saldo akhir setelah $bulan bulan adalah: Rp " . number_format($saldo, 0, ',', '.') . "</h3>";
    }
    ?>
</body>

</html>