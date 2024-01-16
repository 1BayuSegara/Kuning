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

    <br>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="mobil">Pilih Mobil</label>
        <select name="mobil" id="mobil">
            <option value="">Ayla</option>
            <option value="">Avanza</option>
            <option value="">Terios</option>
        </select>
        <br>
        <br>
        <label for="jhari">Masukan Jumlah Hari</label>
        <input type="number" id="jhari" name="jhari">

        <br>
        <br>
        <button type="submit">Cek Harga</button>
    </form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $mobil = $_POST['mobil'];
    $jhari = $_POST['jhari'];

    if ($mobil = "Ayla") {
        $harga = 200000;
    } elseif ($mobil = "Avanza") {
        $harga = 250000;
    } else {
        $harga = 300000;
    }

    $hargatotal = $harga * $jhari;

    echo "Harga mobil adalah" . $hargatotal;
}
?>

</html>