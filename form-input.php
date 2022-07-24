<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Data</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<title>Ubah Warna Background</title>
</head>
<body bgcolor="#ff9966">

</body>
</html>
    <h2>Input Data Barang</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#0000FF;color:#fff;border-radius:2px;text-decoration:none;">Data Barang</a><br><br>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Kode Barang</td>
            <td>:</td>
            <td><input type= "text" name="kode barang" placeholder="Kode Barang" required></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type= "text" name="nama barang" placeholder="Nama Barang" required></td>
        </tr>
        <tr>
            <td>Merk</td>
            <td>:</td>
            <td><input type= "text" name="merk" placeholder="Merk" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type= "text" name="harga" placeholder="Harga" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type= "submit" style="padding:0.4% 0.8%;background-color:#FF0000;color:#fff;border-radius:2px;text-decoration:none" name="simpan" value="Simpan"></td>
        </tr>
    </Table>
</form>
<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
$insert = mysqli_query($conn, "INSERT INTO tb_barang VALUES 
                        ('".$_POST['kode_barang']."',
                        '".$_POST['nama_barang']."',
                        '".$_POST['merk']."',
                        '".$_POST['harga']."')");
    if($insert){
        echo 'berhasil disimpan';
    }else{
        echo 'gagal disimpan'.mysqli_error($conn);
    }
}
?>
</body>
</html>