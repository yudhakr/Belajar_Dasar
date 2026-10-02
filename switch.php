<?php
    $nilai = 55;

    switch($nilai) {
        case $nilai >= 90:
            echo "Nilai anda sangat memuaskan";
            break;
        case $nilai >=  80:
            echo "Nilai anda bagus";
            break;
        case $nilai >= 70:
            echo "Nilai anda cukup aja";
            break;
        case $nilai >= 60:
            echo "Nilai anda kurang memuaskan ";
        default:
            echo "remidi";
            break;
    }
?>