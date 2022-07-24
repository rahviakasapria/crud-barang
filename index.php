<div class="box-title bg-info">
    <h4></h4>
</div>
<div id="box">
<?php
if (isset ($_SESSION['username']) == ""){ ?>
    <div class="pesan">
    <p>Masuk dengan <b>akun</b> terlebih dahulu sebelum mulai belanja, belum punya akun ?
    <a href="daftar.php" style="padding:0.4% 0.8%;background-color:#696969;color:#fff;border-radius:2px;text-decoration:none;">Yuk Daftar</a></p>
    </div>
<?php } ?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Halaman Data Barang</title>
</head>
<body>
<div class="container">
<center> <h1>DATA BARANG</h1> </center> 
<a href="form-input.php" style="padding:0.4% 0.8%;background-color:#0000FF;color:#fff;border-radius:2px;text-decoration:none;">Tambah Data</a><br><br>
<nav class="navbar navbar-light bg-light">
<div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-success" type="submit">Search</button>
    </form>
</div>
</nav>
<table width="100%" class="table table-bordered table-striped table-hover dataTable loadPelangganData">
</div>
    <tr style="text-align:center;font-weight:bold; background-color:#F0F8FF;">
        <td>No</td>
        <td>Kode Barang</td>
        <td>Nama Barang</td>
        <td>Merk</td>
        <td>Harga</td>
        <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $select = mysqli_query($conn, "SELECT * FROM tb_barang");
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
    <tr style="text-align:center;">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil['Kode_barang'] ?></td>
        <td><?php echo $hasil['Nama_barang'] ?></td>
        <td><?php echo $hasil['Merk'] ?></td>
        <td><?php echo $hasil['Harga'] ?></td>
        <td>
            <button class="btn btn-outline-danger"><a href="form-edit.php?kode_barang=<?php echo $hasil['Kode_barang'] ?>">Edit</a></button></button>
            <button class="btn btn-outline-warning"><a href="delete.php?Kode_barang=<?php echo $hasil['Kode_barang'] ?>">Hapus</a></button></button>
        </td>
    </tr>
    <?php }}else{ ?>
    <tr>
        <td colspan="6" align="center">Data Kosong</td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
