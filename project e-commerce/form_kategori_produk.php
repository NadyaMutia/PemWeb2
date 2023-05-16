<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM kategori_produk";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kategori Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/png" href="images/bp/fav.ico">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"/>
</head>
<body>
    <div class="container-fluid">
        <div class="card mt-3 border-info shadow-lg p-3 mb-2 bg-white rounded">
            <h4 class="mt-2 ml-4">Form Kategori Produk</h4>
            <a href="index.php" style="padding-left: 25px;">Home</a>
            <hr color="bluegreen">
            <div class="row mt-5 justify-content-center">
                <div class="col-6">
                    <form method="POST" action="kategori_produk.php">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label font-weight-bold">Nama</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input id="nama" name="nama" idplaceholder="Nama Produk" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card text-center mt-3 bg-info border-success">
            <a class="border-bottom py-2">&copy; Nadya Mutia Safira_TI13, All Right Reserved.</a>
        </div>
    </div>
</body>
</html>