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
        <p>Input Tiga Nilai</p>
    </div>

    <br>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
            <tr>
                <td><label for="angka1">Masukan angka pertama</label></td>
                <td>: <input type="number" id="angka1" name="angka1"></td>

            </tr>
            <tr>
                <td><label for="angka2">Masukan angka ke dua</label></td>
                <td>: <input type="number" id="angka2" name="angka2"></td>
            </tr>
            <tr>
                <td><label for="angka3">masukan angka ke 3</label></td>
                <td>: <input type="number" id="angka3" name="angka3"></td>

                <td> <button type="submit">kirim</button></td>
            </tr>
        </table>
    </form>
    <br>
    <br>


</body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $angka1 = ($_POST['angka1']);
    $angka2 = ($_POST['angka2']);
    $angka3 = ($_POST['angka3']);


    $angkaMin = min($angka1, $angka2, $angka3);
    $angkaMax = max($angka1, $angka2, $angka3);

    echo "angka terendah adalah $angkaMin <br>";
    echo "angka tertinggi adalah $angkaMax";
}

?>

</html>