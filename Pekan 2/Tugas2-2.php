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
            <h4 class="mt-2 ml-4">Form Nilai Mahasiswa</h4>
            <hr color="bluegreen">
            <div class="row mt-5 justify-content-center">
                <div class="col-6">
                    <form method="POST" action="nilai_siswa.php">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label font-weight-bold">Nama Lengkap</label> 
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div> 
                                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label font-weight-bold">Mata Kuliah</label> 
                            <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="DDP">Dasar Dasar Pemograman</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                <option value="PemWeb">Pemograman Web</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uts" class="col-4 col-form-label font-weight-bold">Nilai UTS</label> 
                            <div class="col-8">
                            <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uas" class="col-4 col-form-label font-weight-bold">Nilai UAS</label> 
                            <div class="col-8">
                            <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tugas" class="col-4 col-form-label font-weight-bold">Nilai Tugas/Pratikum</label> 
                            <div class="col-8">
                            <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
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