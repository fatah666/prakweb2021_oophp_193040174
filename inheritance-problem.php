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
        $harga,
        $jmlHalaman,
        $waktumain,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlHalaman;
        $this->waktuMain = $waktumain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
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


$produk1 = new Produk("Hua huma hum", "Orang Dong", "Media Kita", "45000", 100, 0, "Komik");
$produk2 = new Produk("Masak Nih", "Pasti Orang", "Sony Computer", "50000", 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
