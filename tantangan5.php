
<?php
$nama = "Budi";
$kelas = "XI RPL";
$jurusan = "Rekayasa Perangkat Lunak";
$umur = 17;
$nilai = 60;

echo "================================<br>";
echo "       KARTU PROFIL SISWA<br>";
echo "================================<br>";

printf("Nama     : %s<br>", $nama);
printf("Kelas    : %s<br>", $kelas);
printf("Jurusan  : %s<br>", $jurusan);
printf("Umur     : %d tahun<br>", $umur);
printf("Nilai    : %.2f<br>", $nilai);

echo "================================<br>";


if ($nilai >= 75) {
    echo "Status : " . "LULUS<br>";
} else {
    echo "Status : " . "TIDAK LULUS<br>";
}
