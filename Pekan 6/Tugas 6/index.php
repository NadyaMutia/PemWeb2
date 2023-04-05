<?php
    require_once 'dbkoneksi.php' ;

    $sql = " SELECT * FROM Vendor";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if(isset($_POST['submit'])){
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $kontak = $_POST['kontak'];

    $sql = "INSERT INTO vendor (nomor, nama, kota, kontak) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nomor, $nama, $kota, $kontak]);

    header("Location: index.php");   
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"/>
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
<div class="container-fluid">
        <div class="card mt-3 border-warning shadow-lg p-3 mb-2 bg-white rounded">
            <h2 class="mt-2 ml-4 text-center">List Vendor</h4>
            <a href="form.php" class="col-2 card text-center border-warning p-2 bg-white rounded">Tambah Vendor</a>
            <hr>
            <table border="1">
                <thead>
                    <tr class="bg-warning">
                        <th>NO</th>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>Kontak</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $number = 1;
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                    ?>

                    <tr>
                        <td> <?=  $number           ?>                            </td>
                        <td> <?=  $row['nomor']      ?>                            </td>
                        <td> <?=  $row['nama']      ?>                            </td>
                        <td> <?=  $row['kota']        ?>                            </td>
                        <td> <?=  $row['kontak'] ?>,  </td>
                        <td>
                            <a href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                            <a href="delete.php?id=<?= $row['id'] ?>"  
                                onclick="if(!confirm('Anda Yakin Hapus Data <?=$row['nama']?>?')) {return false}"
                            >
                                HAPUS
                            </a>
                        </td>
                    </tr>

                    <?php   
                        $number++;
                        endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card text-center mt-3 bg-warning border-white">
        <a class="border-bottom py-2">&copy; Nadya Mutia Safira_TI13, All Right Reserved.</a>
    </div>
</body>
</html>