<?php
if (isset($_POST['cek'])) {
    $InputAngka = $_POST['angka'];
    if(!is_numeric($InputAngka)){
        echo "Harap Masukan Angka";
    }elseif($InputAngka > 0){
        echo "Angka Positif";
    }elseif($InputAngka == 0){
        echo "Angka 0";
    }else{
        echo "Angka Negatif";
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
        <input type="text" name="angka" id="angka">
        <button type="submit" name="cek">Cek</button>
    </form>
</body>

</html>