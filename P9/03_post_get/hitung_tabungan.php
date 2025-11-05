<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil dan membersihkan input
    $saldo_awal = (float)str_replace('.', '', $_POST['saldo_awal']); // Menghapus tanda ribuan jika ada
    $bunga_per_bulan = (float)$_POST['bunga_per_bulan'];
    $lama_menabung = (int)$_POST['lama_menabung'];

    // Konversi persentase bunga menjadi desimal
    $bunga_decimal = $bunga_per_bulan / 100;
    $saldo_akhir = $saldo_awal;

    // Menghitung bunga majemuk
    for ($i = 1; $i <= $lama_menabung; $i++) {
        $bunga_bulan_ini = $saldo_akhir * $bunga_decimal;
        $saldo_akhir += $bunga_bulan_ini;
    }

    // Format output
    $saldo_akhir_format = number_format($saldo_akhir, 0, ',', '.');
    $saldo_awal_format = number_format($saldo_awal, 0, ',', '.');

    echo "<h2>Hasil Perhitungan Saldo Tabungan</h2>";
    echo "Saldo Awal: Rp. " . $saldo_awal_format . "<br>";
    echo "Bunga Bulanan: " . $bunga_per_bulan . "%<br>";
    echo "Lama Menabung: " . $lama_menabung . " Bulan<br>";
    echo "---<br>";
    echo "Saldo Akhir setelah " . $lama_menabung . " bulan adalah: <strong>Rp. " . $saldo_akhir_format . "</strong>";
} else {
    echo "Akses tidak sah.";
}
