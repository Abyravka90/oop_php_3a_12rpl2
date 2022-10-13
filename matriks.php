<?php
echo 'Menu Matriks'."\n";
echo '1. penjumlahan'."\n";
echo '2. pengurangan'."\n";
echo '3. perkalian'."\n";
$menu = readline("Masukan Pilihan anda : ");
$matriksA = array();
$matriksB = array();
//Matriks C untuk menyimpan hasil penjumlahan antara Matriks A dan B
$matriksC = array();
 
//inisialiasi jumlah baris dan kolom. Untuk penjumlahan matriks jumlah baris dan kolom kedua-dua matriksnya harus sama
$baris = 2;
$kolom = 2;

//inisialisasi nilai masing-masing matriks A dan B
$matriksA[0][0] = 1;
$matriksA[0][1] = 2;
$matriksA[1][0] = 3;
$matriksA[1][1] = 4;
$matriksB[0][0] = 4;
$matriksB[0][1] = 3;
$matriksB[1][0] = 2;
$matriksB[1][1] = 1;
 switch ($menu){
    case 1:
        // mulai
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                $matriksC[$i][$j] = $matriksA[$i][$j] + $matriksB[$i][$j];
            endfor;
        endfor;
 
        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
            echo '|'.$matriksA[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;
        
        echo '+'."\n";

        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
            echo '|'.$matriksB[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;

        echo '='."\n";

        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                echo '|'.$matriksC[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;

        // akhir
        break;

        
    case 2:
        // mulai
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                $matriksC[$i][$j] = $matriksA[$i][$j] - $matriksB[$i][$j];
            endfor;
        endfor;
 
        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                echo '|'.$matriksA[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;
        
        echo '-'."\n";

        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                echo '|'.$matriksB[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;

        echo '='."\n";

        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                echo '|'.$matriksC[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;

        // akhir
        break;

    default:
        // mulai
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                $matriksC[$i][$j] = $matriksA[$i][$j] * $matriksB[$i][$j];
            endfor;
        endfor;
 
        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                echo '|'.$matriksA[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;
        
        echo '*'."\n";

        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                echo '|'.$matriksB[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;

        echo '='."\n";

        //Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
        for( $i = 0; $i < $baris; $i++ ) :
            for( $j = 0; $j < $kolom; $j++ ) :
                echo '|'.$matriksC[$i][$j].'|';
            endfor;
            echo "\n";
        endfor;

        // akhir
        break;


 }
