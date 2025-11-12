<!DOCTYPE html>
<html>

<head>
    <title>Hitung Upah Mingguan</title>
</head>

<body>
    <h2>Hitung Upah Mingguan</h2>
    <form method="POST" action="">
        Jumlah jam kerja seminggu: <input type="number" name="jam" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['jam'])) {
        $jam = $_POST['jam'];
        $upah_per_jam = 2000;
        $upah_lembur = 3000;
        $total = 0;

        if ($jam > 48) {
            $lembur = $jam - 48;
            $total = (48 * $upah_per_jam) + ($lembur * $upah_lembur);
        } else {
            $total = $jam * $upah_per_jam;
        }

        echo "<p>Total upah: Rp " . number_format($total, 0, ',', '.') . "</p>";
    }
    ?>
</body>

</html>