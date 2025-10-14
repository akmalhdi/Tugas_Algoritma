<?php
if (isset($_POST['hitung'])) {
    $UangSendiri = htmlspecialchars($_POST['sendiri']);
    $UangTeman = htmlspecialchars($_POST['teman']);
    $Jumlah = $UangSendiri+$UangTeman;
    echo "Rp" . number_format($Jumlah);
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