<?php
if (isset($_POST['cek'])) {
    $InputAngka = $_POST['angka'];
    if ($InputAngka % 2 == 0) {
        echo $InputAngka . " Angka Genap";
    } else{
        echo $InputAngka . " Angka Ganjil";
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
        <label for="angka">Input Angka</label>
        <input type="number" name="angka" id="angka" required>
        <button type="submit" name="cek">Cek</button>
    </form>
</body>

</html>