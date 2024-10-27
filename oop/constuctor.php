<?php

class produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}


$produk1 = new produk("One Piece", "Eiichiro Oda", "Shueisha", 50000);
$produk2 = new produk("Uncharteed", "Neil Druckmann", "Shounen Jump", 250000);
$produk3 = new produk("Moon Knight: Fist of Khonshu (2024) #1");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);