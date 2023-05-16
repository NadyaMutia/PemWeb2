<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM pesanan WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $tanggal = $_POST['tanggal'];
        $nama_pemesan = $_POST['nama_pemesan'];
        $alamat_pemesan = $_POST['alamat_pemesan'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $jumlah_pesanan = $_POST['jumlah_pesanan'];
        $deskripsi = $_POST['deskripsi'];
        $produk_id = $_POST['produk_id'];

        $sql = "UPDATE pesanan SET  tanggal = :tanggal, nama_pemesan = :nama_pemesan, alamat_pemesan = :alamat_pemesan, 
        no_hp = :no_hp, email = :email, jumlah_pesanan = :jumlah_pesanan, deskripsi = :deskripsi, produk_id = :produk_id WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':nama_pemesan', $nama_pemesan);
        $stmt->bindParam(':alamat_pemesan', $alamat_pemesan);
        $stmt->bindParam(':no_hp', $no_hp);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':jumlah_pesanan', $jumlah_pesanan);
        $stmt->bindParam(':deskripsi', $deskripsi);
        $stmt->bindParam(':produk_id', $produk_id);

        $stmt->execute();

        header('Location: pesanan.php');


    }



    $sqljenis = "SELECT * FROM pesanan";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();

  
?>


<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <br>
    <label>Tanggal</label>
    <input type="text" name="tanggal" value="<?php echo $row['tanggal']; ?>">
    <br>
    <label>Nama Pemesan</label>
    <input type="text" name="nama_pemesan" value="<?php echo $row['nama_pemesan']; ?>">
    <br>
    <label>Alamat Pemesan </label>
    <input type="text" name="alamat_pemesan" value="<?php echo $row['alamat_pemesan']; ?>">
    <br>
    <label>No Hp</label>
    <input type="number" name="no_hp" value="<?php echo $row['no_hp']; ?>">
    <br>
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>">
    <br>
    <label>Jumlah Pesanan</label>
    <input type="number" name="jumlah_pesanan" value="<?php echo $row['jumlah_pesanan']; ?>">
    <br>
    <label>Deskripsi</label>
    <input type="text" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
    <br>
    <label>ID Produk</label>
    <input type="number" name="produk_id" value="<?php echo $row['produk_id']; ?>">
    <br>
    <button type="submit" name="submit">Save</button>
</form>