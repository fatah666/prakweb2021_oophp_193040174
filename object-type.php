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
    public  $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Hua huma hum", "Orang Dong", "Media Kita", "45000");
$produk2 = new Produk("Masak Nih", "Pasti Orang", "Sony Computer", "50000");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
