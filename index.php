<?php

if ($_GET) {
    function polindrum() {
        $kata = $_GET['kata'];
        $sum = strlen($kata);
        
        for ($i = 0; $i < $sum; $i++) {
            // kata pertama
            $array1[] = substr($kata, $i, 1);
            $array2[] = substr($kata, $i, 1);
        }
        krsort($array2);
        foreach($array2 as $key){
            // kata kedua
            $array[] = $key;
        }
        for ($j=0; $j<$sum; $j++) {
            if ($array1[$j] != $array[$j]) {
                return '<h2 style="text-align: center; margin-bottom: 2px;">Bukan Polindrum</h2>';
            } else {
                return '<h2 style="text-align: center; margin-bottom: 2px;">Polindrum</h2>';
            }
        }
    }
    $pesan = polindrum();

} else {
    $pesan = '<h2 style="text-align: center; margin-bottom: 2px;">Masukan Kata Terlebih dahulu</h2>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Kerja | PT RAS Teknologi Indonesia</title>
</head>
<body>
    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
        <h1>Function Sederhana Menentukan kata Polindrum</h1>
        <?= $pesan; ?>
        <form action="index.php" method="GET">
            <input type="text" name="kata">
            <button type="submit">Cek</button>
        </form>
    </div>
</body>
</html>