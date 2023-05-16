<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM produk";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="card mt-3 border-info shadow-lg p-3 mb-2 bg-white rounded">
            <h4 class="mt-2 ml-4">Form Produk</h4>
			<a href="index.php" style="padding-left: 25px;">Home</a>
            <hr color="bluegreen">
            <div class="row mt-5 justify-content-center">
                <div class="col-6">
                    <form method="POST" action="pesanan.php">
                        <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label font-weight-bold">tanggal</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_pemesan" class="col-4 col-form-label font-weight-bold">nama_pemesan Produk</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input id="nama_pemesan" name="nama_pemesan" idplaceholder="nama_pemesan Produk" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_pemesan" class="col-4 col-form-label font-weight-bold">Harga Jual</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input id="alamat_pemesan" name="alamat_pemesan" idplaceholder="Harga Jual" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-4 col-form-label font-weight-bold">Harga Beli</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input id="no_hp" name="no_hp" idplaceholder="Harga Beli" type="number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label font-weight-bold">email</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input type="email" id="email" name="email" idplaceholder="Stok" type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah_pesanan" class="col-4 col-form-label font-weight-bold">Min Stok</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input type="number" id="jumlah_pesanan" name="jumlah_pesanan" idplaceholder="Min Stok" type="number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-4 col-form-label font-weight-bold">Deskripsi</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input type="text" id="deskripsi" name="deskripsi" idplaceholder="Deskripsi" type="number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label font-weight-bold">Produk</label> 
                            <div class="col-8">
                            <select type="text" id="produk_id" name="produk_id" placeholder="Your Order Product"required class="form-control">
									<option value="">Pick Product</option>
									<option value="AP101">Blackpink 2023 Hoodie</option>
									<option value="AP102">Blackpink Athletic Sweatpants	</option>
									<option value="AP103">Lovesick Girls Sweatpants</option>
									<option value="AP104">Shut Down Cropped Hoodie</option>
									<option value="AP105">Born Pink Sweat</option>
									<option value="AP106">Pink Venom T-Shirt</option>
									<option value="Mg01">Born Pink CD</option>
									<option value="Mg02">	Born Pink Vinyl</option>
									<option value="Mg03">	The Album (Version 1)</option>
									<option value="Mg04">	The Album (Version 2)</option>
									<option value="Mg05">The Album (Version 3)</option>
									<option value="Mg06">	Born Pink Exclusive Box Set	</option>
									<option value="AC101">	Blackpink Bucket Hat</option>
									<option value="AC102">Shut Down Necklace</option>
									<option value="AC103">Flower Heart Keychain</option>
									<option value="AC104">The Album Tote Bag</option>
									<option value="AC105">Blackpink Lightstick Keyring	</option>
									<option value="AC106">Shut Down Hat</option>
								</select>
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
        <div class="card text-center mt-3 bg-info border-primary">
            <a class="border-bottom py-2">&copy; Nadya Mutia Safira_TI13, All Right Reserved.</a>
        </div>
    </div>
</body>
</html>