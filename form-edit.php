<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="#ff9966">

</body>
</html>
<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM tb_barang where Kode_barang = '".$_GET['kode_barang']."'");
$result = mysqli_fetch_array($data_edit);

if(is_array($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Barang</title>
</head>
<body>
    <h2>Edit Data Barang</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#0000FF;color:#fff;border-radius:2px;text-decoration:none;">Data Barang</a><br><br>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Kode Barang</td>
            <td>:</td>
            <td><input type= "text" name="kode_barang" value="<?php echo $result['Kode_barang'] ?>" required></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type= "text" name="nama barang" value="<?php echo $result['Nama_barang'] ?>" required></td>
        </tr>
        <tr>
            <td>Merk</td>
            <td>:</td>
            <td><input type= "text" name="merk" value="<?php echo $result['Merk'] ?>" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type= "text" name="harga" value="<?php echo $result['Harga'] ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type= "submit" style="padding:0.4% 0.8%;background-color:#FF0000;color:#fff;border-radius:2px;text-decoration:none" name="edit" value="Simpan"></td>
        </tr>
    </Table>
</form>
<?php
} else {
    echo 'data tidak ditemukan';
}
?>

<?php
include 'koneksi.php';
if(isset($_POST['edit'])) {
    $update = mysqli_query($conn, "UPDATE tb_barang SET 
    Nama_Barang = '".$_POST['nama_barang']."', Merk = '".$_POST['merk']."', Harga = '".$_POST['harga']."', Kode_Barang = '".$_POST['kode_barang']."' where kode_barang = '".$_GET['kode_barang']."'");
                        
        if($update){
            echo 'berhasil diedit';
        }else{
            echo 'gagal diedit'.mysqli_error($conn);
        }
}
?>

</body>
</html>