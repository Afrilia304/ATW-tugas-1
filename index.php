<?php

include "Animal.php";

class Hewan {
    public $kucing, $anjing, $elang, $angsa, $jumlah_kaki, $nama, $bisa_terbang, $suara;

    public function cetakNama(){
        return $this->nama;
    }
    
}

class Kucing extends Hewan {
    public $jumlah_kaki, $nama, $suara;

    public function cetakNama(){
        return $this->nama;
    }
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah Kucing <br>";
echo "Punya kaki sebanyak :".$momo->jumlah_kaki."<br>";
echo $momo->bisa_terbang."<br>";
echo "Suaranya :".$momo->besuara()."<br>";

echo "<hr>";

$doggo = new Anjing;
$dogo->jumlah_kaki = 4;
echo "Doggo adalah Anjing <br>";
echo "Punya kaki sebanyak :".$doggo->jumlah_kaki."<br>";
echo $doggo->bisa_terbang."<br>";
echo "Suaranya :".$doggo->besuara()."<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya adalah Elang <br>";
echo "Punya kaki sebanyak :".$zya->jumlah_kaki."<br>";
echo $zya->bisa_terbang."<br>";
echo "Suaranya :".$zya->besuara()."<br>";

echo "<hr>";

$masya = new Angsa;
$masya->jumlah_kaki = 2;
echo "Masya adalah Angsa <br>";
echo "Punya kaki sebanyak :".$masya->jumlah_kaki."<br>";
echo $masya->bisa_terbang."<br>";
echo "Suaranya :".$masya->besuara()."<br>";

echo "<hr>";

echo " kucing ".$kucing->cetakNama();




?>