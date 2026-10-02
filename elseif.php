<?php
    $nilai = 80;

    if($nilai >= 90)
    {
        echo "Nilai Kamu A";
    }
    else if ($nilai >= 80 && $nilai < 90){
        echo "Nilai Kamu B";
    }
    else if ($nilai >= 70 && $nilai < 80){
        echo "Nilai Kamu C";
    }
    else {
        echo "Nilai Kamu D";
    }
?>  