<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM produk WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harga_jual = $_POST['harga_jual'];
        $harga_beli = $_POST['harga_beli'];
        $stok = $_POST['stok'];
        $min_stok = $_POST['min_stok'];
        $deskripsi = $_POST['deskripsi'];
        $kategori_produk_id = $_POST['kategori_produk_id'];

        $sql = "UPDATE produk SET  kode = :kode, nama = :nama, harga_jual = :harga_jual, 
        harga_beli = :harga_beli, stok = :stok, min_stok = :min_stok, deskripsi = :deskripsi, kategori_produk_id = :kategori_produk_id WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':kode', $kode);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':harga_jual', $harga_jual);
        $stmt->bindParam(':harga_beli', $harga_beli);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':min_stok', $min_stok);
        $stmt->bindParam(':deskripsi', $deskripsi);
        $stmt->bindParam(':kategori_produk_id', $kategori_produk_id);

        $stmt->execute();

        header('Location: produk.php');


    }



    $sqljenis = "SELECT * FROM produk";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();

  
?>


<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <br>
    <label>Kode</label>
    <input type="text" name="kode" value="<?php echo $row['kode']; ?>">
    <br>
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
    <br>
    <label>Harga Jual</label>
    <input type="number" name="harga_jual" value="<?php echo $row['harga_jual']; ?>">
    <br>
    <label>Harga Beli</label>
    <input type="number" name="harga_beli" value="<?php echo $row['harga_beli']; ?>">
    <br>
    <label>Stok</label>
    <input type="number" name="stok" value="<?php echo $row['stok']; ?>">
    <br>
    <label>Min Stok</label>
    <input type="number" name="min_stok" value="<?php echo $row['min_stok']; ?>">
    <br>
    <label>Deskripsi</label>
    <input type="text" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
    <br>
    <label>ID Kategori Produk</label>
    <input type="number" name="kategori_produk_id" value="<?php echo $row['kategori_produk_id']; ?>">
    <br>
    <button type="submit" name="submit">Save</button>
</form>