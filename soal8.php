<?php
if (isset($_POST['konversi'])) {
    $NilaiKm = htmlspecialchars($_POST['km']);
    $Jumlah = $NilaiKm * 0.621371;
    echo $Jumlah;
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
        <label for="km">Nilai Kilometer</label>
        <input type="number" name="km" id="km" required>
        <button type="submit" name="konversi">Konversi</button>
    </form>
</body>

</html>