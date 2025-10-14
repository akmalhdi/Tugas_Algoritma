<?php
    if (isset($_POST['send'])){
        $NamaDepan = htmlspecialchars($_POST['depan']);
        $NamaTengah = htmlspecialchars($_POST['tengah']);
        $NamaBelakang = htmlspecialchars($_POST['belakang']);
        echo $NamaDepan . $NamaTengah . $NamaBelakang;
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
        <label for="depan">Nama Depan</label>
        <input type="text" name="depan" id="depan" required>
        <label for="tengah">Nama Tengah</label>
        <input type="text" name="tengah" id="tengah" required>
        <label for="depan">Nama Belakang</label>
        <input type="text" name="belakang" id="belakang" required>
        <button type="submit" name="send">Kirim</button>
    </form>
</body>
</html>