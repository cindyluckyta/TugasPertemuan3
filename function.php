<?php
function tambah($a,$b){
    $hasil = $a + $b;
    echo "Hasil $a + $b = $hasil";
}
tambah(10,25);
echo "<hr />";
tambah(50,100);
echo "<hr />";
function kosong(){
    $isi = 100 * 200;
    echo $isi;
}
kosong();
echo "<hr />";
function coba(){
    $coba1 = "Ini isi coba 1";
    $coba2 = "Ini isi coba 2";
    return $coba2;
}

echo "Isi dari function coba adalah ".coba();
echo "<hr />";
function FormatRupiah($angka){
    $rupiah = "Rp.".number_format($angka,"2",",",".");
    return $rupiah;
} 