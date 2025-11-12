<!DOCTYPE html>
<html>

<head>
    <title>Jumlah Hari dalam Bulan</title>
</head>

<body>
    <h2>Jumlah Hari dalam Bulan</h2>

    <?php
    $bulan = date("n"); // ambil bulan saat ini (1-12)
    $tahun = date("Y");

    switch ($bulan) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $hari = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $hari = 30;
            break;
        case 2:
            // cek kabisat
            $hari = (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) ? 29 : 28;
            break;
    }

    echo "<p>Bulan sekarang: " . date("F Y") . "</p>";
    echo "<p>Jumlah hari: $hari</p>";
    ?>
</body>

</html>