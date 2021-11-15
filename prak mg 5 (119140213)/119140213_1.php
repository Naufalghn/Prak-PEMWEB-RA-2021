<?php
//Muhammad Naufal Ghani
//119140213

    function Tambah($r, $d){
        $hasil = $r + $d;
        echo "<h3> Penjumlahan </h3>";
        echo "Operator: +";
        echo "<br>";
        echo "Hasil = $hasil";
        }
    function Kurang($r, $d){
        $hasil = $r - $d;
        echo "<h3> Pengurangan </h3>";
        echo "Operator: -";
        echo "<br>";
        echo "Hasil = $hasil";
        }
    function Kali($r, $d){
        $hasil = $r * $d;
        echo "<h3> Perkalian</h3>";
        echo "Operator: *";
        echo "<br>";
        echo "Hasil = $hasil";
        }
    function Bagi($r, $d){
        $hasil = $r / $d;
        echo "<h3> Pembagian</h3>";
        echo "Operator: /";
        echo "<br>";
        echo "Hasil = $hasil";
        }
    function mod($r, $d){
        $hasil = $r % $d;
        echo "<h3> Modulo</h3>";
        echo "Operator: %";
        echo "<br>";
        echo "Hasil = $hasil";
        }
        echo "Bilangan 1 = 10";
        echo "<br>";
        echo "Bilangan 2 = 5";
        echo "<br>";
        echo "Berikut merupakan hasil dari operasi";
        echo "<br>";

        Tambah(10, 5);
        Kurang (10,5);
        Kali(10,5);
        Bagi (10,5);
        mod(10, 5);

?>