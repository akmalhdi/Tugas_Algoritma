<?php

$NilaiAwal = 75;
$NilaiPerbaikan = 80;
echo "Nilai Awal: " . $NilaiAwal;
echo "<br>";
echo "Nilai Perbaikan: " . $NilaiPerbaikan;
echo "<br><br>";

$SimpanNilai = $NilaiAwal;
$NilaiAwal = $SimpanNilai;
$NilaiAwal = $NilaiPerbaikan;
$NilaiPerbaikan = $SimpanNilai;

echo "Nilai Awal: " . $NilaiAwal;
echo "<br>";
echo "Nilai Perbaikan: " . $NilaiPerbaikan;
echo "<br><br>";

?>