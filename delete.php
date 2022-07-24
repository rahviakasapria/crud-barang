<?php
include 'koneksi.php';
if(isset($_GET['Kode_barang'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_barang WHERE Kode_barang = '".$_GET['Kode_barang']."' ");
    header('location:index.php');
}
?>