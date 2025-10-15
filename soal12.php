<?php
if (isset($_POST['cek'])) {
    $InputAngka1 = $_POST['angka1'];
    $InputAngka2 = $_POST['angka2'];
    $InputAngka3 = $_POST['angka3'];

    if ($InputAngka1 >= $InputAngka2 && $InputAngka1 >= $InputAngka3) {
        echo "Nilai Terbesar Angka 1 dengan nilai: " . $InputAngka1;
    } elseif ($InputAngka2 >= $InputAngka1 && $InputAngka2 >= $InputAngka3) {
        echo "Nilai Terbesar Angka 2 dengan nilai: " . $InputAngka2;
    } elseif ($InputAngka3 >= $InputAngka1 && $InputAngka3 >= $InputAngka2){
        echo "Nilai Terbesar Angka 3 dengan nilai: " . $InputAngka3;
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
        <label for="angka1">Input Angka 1</label>
        <input type="number" name="angka1" id="angka1" required>
        <label for="angka2">Input Angka 2</label>
        <input type="number" name="angka2" id="angka2" required>
        <label for="angka3">Input Angka 3</label>
        <input type="number" name="angka3" id="angka3" required>
        <button type="submit" name="cek">Cek</button>
    </form>
</body>

</html>