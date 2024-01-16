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
         <p>Nilai Mahasiswa</p>
     </div>

     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <table>
             <tr>
                 <td><label for="Nama_mahasiswa">Masukan Nama </label></td>

                 <td>: <input type="text" id="Nama-mahasiswa" name="Nama_mahasiswa"></td>
             </tr>
             <tr>
                 <td><label for="nilai_tugas">Masukan Nilai tugas </label></td>
                 <td>: <input type="number" id="nilai_tugas" name="nilai_tugas"></td>
             </tr>


             <tr>
                 <td> <label for="nilai_uts">Masukan Nilai UTS </label></td>

                 <td>: <input type="Number" id="nilai_uts" name="nilai_uts"></td>
             </tr>

             <tr>
                 <td><label for="nilai_uas">Masukan Nilai UAS </label></td>
                 <td>: <input type="number" id="nilai_uas" name="nilai_uas"></td>

                 <td><button type="submit">Hasil</button></td>

             </tr>


         </table>
     </form>
     <br>
     <br>



 </body>

 <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Nilai_akhir_mahasiswa = ($_POST['nilai_tugas'] * 0.3) + ($_POST['nilai_uts'] * 0.3) + ($_POST['nilai_uas'] * 0.4);
        $Nama = ($_POST['Nama_mahasiswa']);

        if ($Nilai_akhir_mahasiswa >= 90) {
            $grade = "A";
        } elseif ($Nilai_akhir_mahasiswa >= 70) {
            $grade = "B";
        } elseif ($Nilai_akhir_mahasiswa >= 50) {
            $grade = "C";
        } elseif ($Nilai_akhir_mahasiswa >= 40) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        echo "Nilai akhir dari mahasiswa atas nama $Nama adalah $Nilai_akhir_mahasiswa <br> nilai tersebut dalam karakter adalah $grade";
    }








    ?>



 </html>