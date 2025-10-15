<!-- intval : untuk merubah value inputan menjadi int -->
<!-- floatval : untuk merubah value inputan menjadi float -->
<!-- htmlspecialchars : untuk merubah value inputan menjadi html -->


<?php
if (isset($_POST['hitung'])) {
    $UangSendiri = floatval($_POST['sendiri']);
    $UangTeman = floatval($_POST['teman']);
    $Jumlah = 0;
    $Jumlah = $UangSendiri + $UangTeman;
    echo "Jumlah Uang: <br>";
    echo "Rp" . number_format($Jumlah, 2, ",", ".");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <br>
        <label for="sendiri">Uang Sendiri</label>
        <input type="number" name="sendiri" id="sendiri" required>
        <label for="teman">Uang Dari Teman</label>
        <input type="number" name="teman" id="teman" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>
</body>

</html>