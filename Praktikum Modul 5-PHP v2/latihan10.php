<?php
$ukuran_baju = "M"; // Ubah nilainya menjadi "S", "M", "L", atau "XL"

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran S (Small) → Untuk perempuan dengan lingkar tubuh sekitar 60–66 cm.";
        break;
    case "M":
        echo "Ukuran M (Medium) → Untuk perempuan dengan lingkar tubuh sekitar 63–69 cm.";
        break;
    case "L":
        echo "Ukuran L (Large) → Untuk perempuan dengan lingkar tubuh sekitar 69–75 cm.";
        break;
    case "XL":
        echo "Ukuran XL (Extra Large) → Untuk perempuan dengan lingkar tubuh sekitar 75–81 cm.";
        break;
    default:
        echo "Ukuran tidak tersedia dalam daftar.";
}
?>
