<?php
//const phi
define("phi", 3.14);
echo "+++++++++PROGRAM MENGHITUNG BANGUN RUANG+++++++++++++\n";
// menghitung sisi miring c= sqrt a-b
$sisiMiring = 10;
$lebarSisi = 6;
$tinggiLimas = sqrt($sisiMiring-$lebarSisi);
echo "Tinggi Limas = ".round($tinggiLimas, 1)." m \n"; //hasilnya = 2

// menghitung volume limas segi empat 1/3 a*t
$sisi = 12;
$volumeLimas = (pow($sisi, 2)*$tinggiLimas)/3;
echo "Volume Limas = ".round($volumeLimas, 1)." m3 \n";

//menghitung luas lingkaran hilang
$r = 5.5;
$luasLingkaran = phi*pow($r,2);
echo "Luas Lingkaran = ".round($luasLingkaran, 1)." m2 \n";

// volume Tabung
$tinggiTabung = 8;
$volTabung = $luasLingkaran*$tinggiTabung;
echo "Volume Tabung = ".round($volTabung, 1)." m3 \n";

// luaslingkaran Hilang konversi ke m3
$luasLingkaranHilang = $luasLingkaran/100;
echo "Luas Lingkaran Hilang = ".round($luasLingkaranHilang, 1)." m3 \n";

// volume bangun ruang 
$totalBangunRuang = $volTabung+$volumeLimas-$luasLingkaranHilang;
echo "Volume Bangun Ruang = ".round($totalBangunRuang, 2)." m3 \n";
echo "+++++++++#######################+++++++++++++";
