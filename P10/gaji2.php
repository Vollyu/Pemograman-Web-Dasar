<!DOCTYPE html>
<html>

<head>
    <title>Hitung Upah Berdasarkan Golongan</title>
</head>

<body>
    <h2>Hitung Upah Mingguan Berdasarkan Golongan</h2>
    <form method="POST" action="">
        Jumlah jam kerja: <input type="number" name="jam" required><br><br>
        Pilih golongan:
        <select name="golongan" required>
            <option value="A">A (Rp 4.000/jam)</option>
            <option value="B">B (Rp 5.000/jam)</option>
            <option value="C">C (Rp 6.000/jam)</option>
            <option value="D">D (Rp 7.500/jam)</option>
        </select>
        <br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['jam'])) {
        $jam = $_POST['jam'];
        $gol = $_POST['golongan'];
        $upah_lembur = 3000;

        switch ($gol) {
            case 'A':
                $upah = 4000;
                break;
            case 'B':
                $upah = 5000;
                break;
            case 'C':
                $upah = 6000;
                break;
            case 'D':
                $upah = 7500;
                break;
        }

        if ($jam > 48) {
            $lembur = $jam - 48;
            $total = (48 * $upah) + ($lembur * $upah_lembur);
        } else {
            $total = $jam * $upah;
        }

        echo "<p>Total upah golongan $gol: Rp " . number_format($total, 0, ',', '.') . "</p>";
    }
    ?>
</body>

</html>