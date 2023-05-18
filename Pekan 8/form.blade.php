<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form pemeriksaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"/>
</head>
<body>
    <div class="row mt-5 justify-content-center">
        <div class="col-6 justify-content-center">
            <div class="card mt-3 shadow-lg p-3 mb-2 bg-white rounded">
                <form>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                        </div> 
                        <input id="nama" name="nama" placeholder="Nama Pasien" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
                    <div class="col-8">
                    <input id="tanggal" name="tanggal" placeholder="Hari, Tanggal Bulan Tahun" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal lahir" class="col-4 col-form-label">Tanggal Lahir/Usia</label> 
                    <div class="col-8">
                    <input id="tanggal lahir" name="tanggal lahir" placeholder="Hari, Tanggal Bulan Tahun" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="lk" required="required"> 
                        <label for="jk_0" class="custom-control-label">Laki - Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="pr" required="required"> 
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
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
    <div class="row mt-5 justify-content-center">
        <div class="col-8 justify-content-center">
            <div class="card mt-3 shadow-lg p-3 mb-2 bg-white rounded">
                <table border="1">
                    <thead>
                        <tr>
                            <th scope="col">Jenis Tes</th>
                            <th scope="col">Hasil Pemeriksaan</th>
                            <th scope="col">Normal</th>
                        </tr>
                        <tr>
                            <td>Tekanan Darah </td>
                            <td> </td>
                            <td>120/80 mmhg </td>
                        </tr>
                        <tr>
                            <td>Asam Urat </td>
                            <td> </td>
                            <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl </td>
                        </tr>
                        <tr>
                            <td>Kolestrol Total  </td>
                            <td> </td>
                            <td>< 200 mg/dl </td>
                        </tr>
                        <tr>
                            <td>Gula Darah </td>
                            <td> </td>
                            <td>Puasa: 70-110 mg/dl
                                <br>2 jam setelah makan: 100-150 mg/dl
                                <br>Sewaktu/acak : 70-125 mg/dl </td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>