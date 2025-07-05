<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik";
$kalimat_kapital = strtoupper($kalimat);

echo "Panjang kalimat: " . strlen($kalimat_kapital) . "<br>";
echo "Jumlah kata: " . str_word_count($kalimat_kapital) . "<br>";
echo "Mengganti kata: " . str_replace("TERBAIK", "FAVORIT", $kalimat_kapital);
?>
