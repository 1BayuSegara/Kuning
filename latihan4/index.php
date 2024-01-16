<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    p.identitas {
        font-size: 26px;
        text-align: center;
    }

    body {
        background-color: #ddd;
        width: 80%;
        margin: auto;
    }
</style>

<body>
    <div>
        <p class="identitas">Nama : Bayu Segara</p>
        <p class="identitas">Nim : 202151004</p>
        <p>Jasa Sewa Mobil</p>
    </div>
    <p>kalender jumlah hari tahun 2024</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table cellpadding="5" cellspacing="10">
            <tr>
                <td><label for="tanggal">masukan tanggal</label></td>
                <td> <input type="date" name="tanggal"></td>

                <td> : <button type="submit">cek jumlah hari</button></td>
            </tr>
        </table>
    </form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tanggal = $_POST['tanggal'];
    $tahun = date("y", strtotime($tanggal));
    $bulan = date("m", strtotime($tanggal));
    $hari = date("d", strtotime($tanggal));

    $tanggal_awal = strtotime("2024-01-01");
    $tanggal_masukan = strtotime($tanggal);
    $selisih_waktu = $tanggal_masukan - $tanggal_awal;
    $jhari = floor($selisih_waktu / (60 * 60 * 24));

    echo "jumlah hari tanggal hari ini adalah $jhari";
}
?>

</html>