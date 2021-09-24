<?php
/*
Ujang Fatah Abwaba Khoer
193040174
https://github.com/fatah666/prakweb2021_oophp_193040174.git
*/
// define('NAMA' , 'Ujang Fatah Abwabal Khoer');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Fatah';
// }

// echo Coba::NAMA;



// echo __FILE__;


// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
