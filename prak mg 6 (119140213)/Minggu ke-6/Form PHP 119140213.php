<?php

include "Form 119140213.html";
class pesanan{
    var $totalMangga, $totalJambu, $totalSalak;

    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }
    public function hargaMangga(){
        $this->totalMangga = $this->mangga * 15000;
        echo "<fieldset>";
        echo "<center><br> <b>Buah Mangga senilai:</b>";
         echo "Rp ".$this->totalMangga;
         echo "<br>";

    }

    public function hargaJambu(){
        $this->totalJambu = $this->jambu * 13000;
        echo "<br> <b>Buah Jambu senilai:</b>";
        echo "Rp ".$this->totalJambu;
        echo "<br>";
    }

    public function hargaSalak(){
        $this->totalSalak = $this->salak * 10000;
        echo "<br> <b>Buah Salak senilai:</b>";
        echo "Rp ".$this->totalSalak;
    }

    public function totalharga(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
        echo "</fieldset>";
        echo "<fieldset>";
        echo "<center><br><b>Total Harga Yang Harus di bayarkan: <b> Rp ". $total;
        echo "</fieldset>";
    }
}
$mangga = $_GET["mangga"];
$jambu = $_GET["jambu"];
$salak = $_GET["salak"];
echo "<br><legend> <center><b> Daftar Perhitungan Pesanan Buah Perkilogram: </b></center> </legend>";
$pesan = new pesanan($mangga, $jambu, $salak);
$pesan->hargaMangga();
$pesan->hargaJambu();
$pesan->hargaSalak();
$pesan->totalharga();
?>