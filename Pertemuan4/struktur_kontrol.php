<?php
$nilaiNumerik = 92;
echo "Nilai Numerik : $nilaiNumerik <br>";
if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf : D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 km. <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "<br>";
echo "Jumlah Buah yang Akan Dipanen Adalah : $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "<br>";
echo "Skor Ujian : $skorUjian[0], $skorUjian[1], $skorUjian[2], $skorUjian[3], $skorUjian[4] <br>";
echo "Total Skor Ujian Adalah : $totalSkor <br>";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (TIDAK LULUS) <br>";
        continue;
    } echo "Nilai : $nilai (LULUS) <br>";
}
echo "<br>";

//Soal Cerita 4.6
$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
sort($nilai_siswa);
$nilaiDihilangkan = array_slice($nilai_siswa, 2, -2);
$total_nilai = array_sum($nilaiDihilangkan);
$jumlah_siswa = count($nilaiDihilangkan);
$rataRata = $total_nilai / $jumlah_siswa;
echo "Total nilai setelah ada nilai yang dihilangkan : $total_nilai <br>";
echo "Jumlah siswa setelah ada nilai yang dihilangkan : $jumlah_siswa <br>";
echo "Rata-rata setelah ada nilai yang dihilangkan : $rataRata <br>";

//Soal Cerita 4.7
$harga = 120000;
if ($harga > 100000) {
    $diskon = 20 / 100 * $harga;
    $hargaAkhir = $harga - $diskon;
    echo "<br>";
    echo "Harga Barang : Rp. $harga <br>";
    echo "Diskon : Rp. $diskon <br>";
    echo "Harga yang Harus Dibayar : Rp. $hargaAkhir <br>";
} else {
    echo "<br>";
    echo "Maaf Anda Tidak Mendapat Diskon <br>";
}

//Soal Cerita 4.8
$skor = 700;
$hadiah = ($skor > 500)? "YA":"TIDAK";
echo "<br>";
echo "Poin Pemain : $skor <br>";
echo "Apakah Pemain Medapat Hadiah Tambahan ? $hadiah<br>";
?>