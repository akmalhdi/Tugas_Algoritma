<?php

$UangSendiri = 10000;
$DariTeman = 10000;
$Jumlah = $UangSendiri + $DariTeman;
echo "Uang Sendiri: Rp" . number_format($UangSendiri, 2, ",", ".");
echo "<br>";
echo "Uang Dari Teman: Rp" . number_format($DariTeman, 2, ",", ".");
echo "<br>";
echo "Uang Dijumlah: Rp" . number_format($Jumlah, 2, ",", ".");
echo "<br>";


?>