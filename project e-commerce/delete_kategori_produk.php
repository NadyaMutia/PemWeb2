<?php

    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM kategori_produk WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header('Location: kategori_produk.php');
    }

?>