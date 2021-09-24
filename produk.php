<?php
/*
Ujang Fatah Abwaba Khoer
193040174
https://github.com/fatah666/prakweb2021_oophp_193040174.git
*/
// Jualan Produk
// Komik
// Game
class Produk
{
    public  $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Hua huma hum";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Masak Nih";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

// contoh Property
$produk3 = new Produk();
$produk3->judul = "Hua huma hum";
$produk3->penulis = "Orang Dong";
$produk3->penerbit = "Media Kita";
$produk3->harga = 45000;


$produk4 = new Produk();
$produk4->judul = "Masak Nih";
$produk4->penulis = "Pasti Orang";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 50000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
