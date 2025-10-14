<?php
if (isset($_POST['cek'])) {
    $InputAngka1 = htmlspecialchars($_POST['angka1']);
    $InputAngka2 = htmlspecialchars($_POST['angka2']);
    $InputAngka3 = htmlspecialchars($_POST['angka3']);

    if ($InputAngka1 >= $InputAngka2 && $InputAngka1 >= $InputAngka3) {
        echo "Terbesar " . $InputAngka1;
    } elseif ($InputAngka2 >= $InputAngka1 && $InputAngka2 >= $InputAngka3) {
        echo "Terbesar " . $InputAngka2;
    } elseif ($InputAngka3 >= $InputAngka1 && $InputAngka3 >= $InputAngka2){
        echo "Terbesar " . $InputAngka3;
    }
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
        <label for="angka1">Input Angka1</label>
        <input type="number" name="angka1" id="angka1" required>
        <label for="angka2">Input Angka2</label>
        <input type="number" name="angka2" id="angka2" required>
        <label for="angka3">Input Angka1</label>
        <input type="number" name="angka3" id="angka3" required>
        <button type="submit" name="cek">Cek</button>
    </form>
</body>

</html>