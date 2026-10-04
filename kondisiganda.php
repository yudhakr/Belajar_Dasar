<?php
$ukuran = "L";
$warnanya = "merah";
$harga = 100000;

if($ukuran == "XL" && $warnanya == "merah" ){
    $biaya_tambahan = 20000;
    $total_harga = $harga + $biaya_tambahan;
    echo "Total harga baju: " . $total_harga;
} else {
    echo "Biaya yang dikeluarkan adalah: " . $harga;
}
?>