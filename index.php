<?php

class Hewan {
    public $jumlahKaki, $bisa_terbang ="Bisa terbang", $bersuara;
    }

class Kucing extends Hewan {
    public $bisa_terbang = "Tidak bisa terbang";

    function jumlahKaki(){
        return $this->jumlahKaki;
    }
    
    public function terbang() {
        return $this->bisa_terbang;
    }

    public function bersuara() {
        return "meong";
    }
}

class Anjing extends Hewan {
    public $bisa_terbang = "Tidak bisa terbang";

    function jumlahKaki() {
        return $this->jumlahKaki;
    }

    public function terbang() {
        return $this->bisa_terbang;
    }

    public function bersuara(){
        return "guk guk";
    }
}

class Elang extends Hewan {
    function jumlahKaki() {
        return $this->jumlahKaki;
    }
    
    public function terbang() {
        return $this->bisa_terbang;
    }

    public function bersuara() {
        return "miiiiip";
    }
}

class Angsa extends Hewan {
    function jumlahKaki(){
        return $this->jumlahKaki;
    }

    public function terbang() {
        return $this->bisa_terbang;
    }

    public function bersuara() {
        return "kwaaak";
    }
}

$chimo = new Kucing;
$chimo->jumlah_kaki = 4;
echo "Chimo adalah Kucing <br>";
echo "Punya kaki sebanyak :".$chimo->jumlah_kaki."<br>";
echo $chimo->bisa_terbang."<br>";
echo "Suaranya :".$chimo->bersuara()."<br>";

echo "<hr><hr>";

$doggy = new Anjing;
$doggy->jumlah_kaki = 4;
echo "Doggy adalah Anjing <br>";
echo "Punya kaki sebanyak :".$doggy->jumlah_kaki."<br>";
echo $doggy->bisa_terbang."<br>";
echo "Suaranya :".$doggy->bersuara()."<br>";

echo "<hr><hr>";

$jojo = new Elang;
$jojo->jumlah_kaki = 2;
echo "jojo adalah Elang <br>";
echo "Punya kaki sebanyak :".$jojo->jumlah_kaki."<br>";
echo $jojo->bisa_terbang."<br>";
echo "Suaranya :".$jojo->bersuara()."<br>";

echo "<hr><hr>";

$shasa = new Angsa;
$shasa->jumlah_kaki = 2;
echo "Shasa adalah Angsa <br>";
echo "Punya kaki sebanyak :".$shasa->jumlah_kaki."<br>";
echo $shasa->bisa_terbang."<br>";
echo "Suaranya :".$shasa->bersuara()."<br>";

echo "<hr><hr>";



?>