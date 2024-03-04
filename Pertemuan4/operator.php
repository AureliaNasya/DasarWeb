<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
echo "Bilangan a : {$a} <br>";
echo "Bilangan b : {$b} <br>";
echo "Penjumlahan a dan b       : {$hasilTambah} <br>";
echo "Pengurangan a dan b       : {$hasilKurang} <br>";
echo "Perkalian a dan b         : {$hasilKali} <br>";
echo "Pembagian a dan b         : {$hasilBagi} <br>";
echo "Sisa pembagian a dan b    : {$sisaBagi} <br>";
echo "Hasil a pangkat b         : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "<br>";
echo "Hasil Perbandingan Sama : ($hasilSama) <br>";
echo "Hasil Perbandingan Tidak Sama : ($hasilTidakSama) <br>";
echo "Hasil Perbandingan a < b : ($hasilLebihKecil) <br>";
echo "Hasil Perbandingan a > b : ($hasilLebihBesar) <br>";
echo "Hasil Perbandingan a <= b : ($hasilLebihKecilSama) <br>";
echo "Hasil Perbandingan a >= b : ($hasilLebihBesarSama) <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "<br>";
echo "Hasil Logika AND : ($hasilAnd) <br>";
echo "Hasil Logika OR : ($hasilOr) <br>";
echo "Hasil Logika NOT A : ($hasilNotA) <br>";
echo "Hasil Logika NOT B : ($hasilNotB) <br>";

$hasilPenugasanPenjumlahan = $a += $b;
$hasilPenugasanPengurangan = $a -= $b;
$hasilPenugasanPerkalian = $a *= $b;
$hasilPenugasanPembagian = $a /= $b;
$hasilPenugasanModulo = $a %= $b;
echo "<br>";
echo "Hasil Penugasan dengan Penjumlahan : ($hasilPenugasanPenjumlahan) <br>";
echo "Hasil Penugasan dengan Penjumlahan : ($a += $b) <br>";
echo "Hasil Penugasan dengan Pengurangan : ($hasilPenugasanPengurangan) <br>";
echo "Hasil Penugasan dengan Pengurangan : ($a -= $b) <br>";
echo "Hasil Penugasan dengan Perkalian : ($hasilPenugasanPerkalian) <br>";
echo "Hasil Penugasan dengan Perkalian : ($a *= $b) <br>";
echo "Hasil Penugasan dengan Pembagian : ($hasilPenugasanPembagian) <br>";
echo "Hasil Penugasan dengan Pembagian : ($a /= $b) <br>";
echo "Hasil Penugasan dengan Modulo : ($hasilPenugasanModulo) <br>";
echo "Hasil Penugasan dengan Modulo : ($a %= $b) <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>";
echo "Hasil Operator Identik : ($hasilIdentik) <br>";
echo "Hasil Operator Tidak Identik : ($hasilTidakIdentik) <br>";

//Soal Cerita Praktikum
$kursi = 45;
$pesan = 28;
$kosong = $kursi - $pesan;
$persentaseKosong = ($kosong / $kursi) * 100;
echo "<br>";
echo "Jumlah Kursi yang Tersedia : $kursi buah <br>";
echo "Jumlah Kursi yang Dipesan : $pesan buah <br>";
echo "Presentase Kursi yang Belum Dipesan : $persentaseKosong % <br>";
?>