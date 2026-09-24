<?php
// function jumlah(){
//     $angka1 = 20;
//     $angka2 = 13;
//     echo "penjumlahan ";

//     echo $angka1 + $angka2;
// }
// jumlah();

// function kurang(){
//     $a = 20.5;
//     $d = 3.2;
//     echo "pengurangan ";
//     echo $a - $d;
// }
// kurang();

// $buah =[
//     "apel",
//     "jeruk",
//     "mangga",
//     "pisang", 200, 1000, 2.5, 3.5
// ];
// echo $buah[2];
// echo $buah[6];

// $mahasiswa = [
//     "nama" => "Aditya",
//     "umur" => 24,
//     "Hobi" => "Main game",
//     "Warna kesukaan" => "Biru"
// ];

// echo $mahasiswa["Hobi"];

$mahasiswa = [
    ["Aditya", 24, "Informatika"],
    ["Fakhri", 25, "Teknik Sipil"],
    ["Riansyah", 26, "Bisnis"]
];

echo $mahasiswa[1][0];
?>