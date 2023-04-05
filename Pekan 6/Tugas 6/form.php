<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM vendor";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"/>

</head>
<body>
	<div class="container-fluid">
        <div class="card mt-3 border-warning shadow-lg p-3 mb-2 bg-white rounded">
		<h2 class="mt-2 ml-4 text-center">Form Vendor</h4>
		<a href="index.php" class="col-2 card text-center border-warning p-2 bg-white rounded">Home</a>
			<div class="row mt-5 justify-content-center">
                <div class="col-6">
					<form method="post" action="index.php">
						<div class="form-group row">
                            <label for="nomor" class="col-4 col-form-label font-weight-bold">Nomor</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-user-o"></i>
                                        </div>
                                    </div> 
                                    <input id="nomor" name="nomor" placeholder="Nomor Vendor" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label font-weight-bold">Nama</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input id="nama" name="nama" placeholder="Nama Vendor" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="kota" class="col-4 col-form-label font-weight-bold">Kota</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                    </div> 
                                    <input id="kota" name="kota" placeholder="Kota Vendor" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="kontak" class="col-4 col-form-label font-weight-bold">Kontak</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-book"></i>
                                        </div>
                                    </div> 
                                    <input id="kontak" name="kontak" placeholder="Kontak Vendor" type="text" class="form-control">
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
	</div>
	<div class="card text-center mt-3 bg-warning border-white">
        <a class="border-bottom py-2">&copy; Nadya Mutia Safira_TI13, All Right Reserved.</a>
    </div>
</body>
</html>