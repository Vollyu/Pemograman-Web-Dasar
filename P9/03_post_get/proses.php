<?php
// Cegah akses langsung tanpa form
if (!isset($_GET['nama'])) {
    echo "Akses tidak sah! Silakan isi form terlebih dahulu.";
    exit;
}

$nama   = $_GET['nama'];
$tempat = $_GET['tempat_lahir'];
$tgl    = $_GET['tgl'] . "-" . $_GET['bln'] . "-" . $_GET['thn'];
$alamat = $_GET['alamat'];
$jk     = $_GET['jk'];
$asal   = $_GET['asal'];
$uan    = $_GET['uan'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Hasil Form Pendaftaran</title>
</head>

<body>
    <h2>Terimakasih <?php echo htmlspecialchars($nama); ?> sudah mengisi form pendaftaran.</h2>

    Nama Lengkap : <?php echo htmlspecialchars($nama); ?> <br>
    Tempat Lahir : <?php echo htmlspecialchars($tempat); ?> <br>
    Tanggal Lahir : <?php echo $tgl; ?> <br>
    Alamat Rumah : <?php echo nl2br(htmlspecialchars($alamat)); ?> <br>
    Jenis Kelamin : <?php echo $jk; ?> <br>
    Asal Sekolah : <?php echo htmlspecialchars($asal); ?> <br>
    Nilai UAN : <?php echo htmlspecialchars($uan); ?> <br>
</body>

</html>