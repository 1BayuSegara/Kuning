<?php
$Nilai_akhir_mahasiswa = ($_POST['nilai_tugas'] * 0.3) + ($_POST['nilai_uts'] * 0.3) + ($_POST['nilai_uas'] * 0.4);

if ($Nilai_akhir_mahasiswa >= 90) {
    echo "b";
} else {
    echo "e";
}
