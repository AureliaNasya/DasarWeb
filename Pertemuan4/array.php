<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar Nilai Siswa yang Lulus : ". implode(', ', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br><br>";
echo "Daftar Karyawan dengan Pengalaman Kerja Lebih dari 5 Tahun : " . implode(', ', $karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ]
    ];
$mataKuliah = 'Fisika';
echo "<br><br>";
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah : <br>";
foreach($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama : {$nilai[0]}, Nilai : {$nilai[1]} <br>";
}

//Soal Cerita 5.4
$nilaiMat = array(
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
);
$rataRata = array_sum($nilaiMat) / count($nilaiMat);
echo "<br><br>";
echo "Daftar Nama dan Nilai Ujian Matematika <br>";
foreach($nilaiMat as $nama => $Mat) {
    echo "$nama mendapat nilai $Mat <br>";
}
echo "Rata-Rata Nilai Ujian Matematika : $rataRata <br>";
echo "Siswa dengan Nilai di Atas Rata-Rata :";
foreach($nilaiMat as $nama => $Mat) {
    if($Mat > $rataRata) {
        echo "$nama\n";
    }
}
?>