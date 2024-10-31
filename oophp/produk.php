<?php

//Jualan produk
//komik
//game

class produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1 = new produk("naruto");
//$produk1->judul = "Naruto";
//var_dump($produk1);
//
//$produk2 = new produk("Uncharted");
//$produk2->judul = "Uncharted";
//$produk2->tambahProperty = "Hahahhaa";
//var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eiichiro Oda";
$produk3->penerbit = "Shueisha";
$produk3->harga = 50000;


$produk4 = new produk();
$produk4->judul = "Moon Knight: Fist of Khonshu (2024) #1";
$produk4->penulis = "Jed Mackay";
$produk4->penerbit = "Alessandro Cappuccio";
$produk4->harga = 250000;

echo "<br>";
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();