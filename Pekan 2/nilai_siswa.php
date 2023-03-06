<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"/>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        th{
            text-align: center;
        }
        td{
            text-align: center;
        }
    </style>
  </head>
  <body>
    <div class="card m-3 shadow-lg p-3 mb-2 bg-white rounded">
        <table class="table">
            <thead>
                <tr class="bg-info">
                    <th scope="col">No</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col">Nilai Tugas/Pratikum</th>
                    <th scope="col">Nilai Akhir</th>
                    <th scope="col">Lulus/Tidak Lulus</th>
                    <th scope="col">Grade Nilai</th>
                    <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;

                    $nilaiuts = (30/100) * $_POST['uts'];
                    $nilaiuas = (35/100) * $_POST['uas'];
                    $nilaitugas = (35/100) * $_POST['tugas'];
                    $nilaiakhir = $nilaiuts + $nilaiuas + $nilaitugas;

                    
                ?> 
                    <tr>
                        <td> <?= $nomor?> </td>
                        <td> <?= $_POST['nama']?> </td>
                        <td> <?= $_POST['matkul'] ?> </td>
                        <td> <?= $_POST['uts'] ?> </td>
                        <td> <?= $_POST['uas']?> </td>
                        <td> <?= $_POST['tugas']?> </td>
                        <td> <?= $nilaiakhir ?></td>

                    <?php 
                    if($nilaiakhir>55){
                        echo '<td> Lulus </td>';
                    } else {
                        echo '<td> Tidak Lulus </td>'; 
                    }
                    ?>
                    <?php
                    if($nilaiakhir>=0 && $nilaiakhir<=35.99){
                        echo '<td> E </td>';
                    } elseif($nilaiakhir>=36 && $nilaiakhir<=55.99){
                        echo '<td> D </td>';
                    } elseif($nilaiakhir>=56 && $nilaiakhir<=69.99){
                        echo '<td> C </td>';
                    } elseif($nilaiakhir>=70 && $nilaiakhir<=84.99){
                        echo '<td> B </td>';
                    } elseif ($nilaiakhir>=85 && $nilaiakhir<=100){
                        echo '<td> A </td>';
                    } else{
                        echo '<td> I </td>';
                    }
                    ?>
                    <?php 
                    switch($nilaiakhir){
                        case $nilaiakhir>=0 && $nilaiakhir<=35.99:
                        echo '<td> Sangat Kurang </td>';
                            break;
                        case $nilaiakhir>=36 && $nilaiakhir<=55.99:
                        echo '<td> Kurang </td>';
                            break;
                        case $nilaiakhir>=56 && $nilaiakhir<=69.99:
                        echo '<td> Cukup </td>';
                            break;
                        case $nilaiakhir>=70 && $nilaiakhir<=84.99:
                        echo '<td> Memuaskan  </td>';
                            break;
                        case $nilaiakhir>=85 && $nilaiakhir<=100:
                        echo '<td> Sangat Memuaskan </td>';
                            break;
                        default:
                        echo '<td> Tidak Ada </td>';
                    }
                    ?>
                    </tr>
                <?php
                    $nomor++;
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
