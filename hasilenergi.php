<?php
$massa= $_POST['massa'];
$kc= $_POST['kc'];
$tg= $_POST['tg'];

if($_POST["submit"]=="kinetik"){
    $hasil = 1/2*$massa*$kc*$kc;
    echo "Hasil Energi Kinetik = $hasil";
}
else if($_POST["submit"]=="potensial"){
    $hasil2= $massa*10*$tg;
    echo "Hasil Energi Potensial = $hasil2";
}
?>