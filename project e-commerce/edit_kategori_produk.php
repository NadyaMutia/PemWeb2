<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM kategori_produk WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $sql = "UPDATE kategori_produk SET nama = :nama WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama', $nama);

        $stmt->execute();

        header('Location: kategori_produk.php');


    }



    $sqljenis = "SELECT * FROM kategori_produk";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();

  
?>


<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <br>
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
    <br>
    <button type="submit" name="submit">Save</button>
</form>
