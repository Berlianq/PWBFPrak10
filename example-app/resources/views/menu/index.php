<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "crud_laravel";

    $koneksi = mysqli_connect($server,$user,$pass,$database)or die(mysqli_error($koneksi));
?>





<!DOCTYPE html>
<html>
<head>
<title>crud 2020 php + Bootstrap </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <h1 class="text-center"> data ecanteen</h1>
        <h2 class="text-center"> 2022 </h2>

        <!----awal card form-->
        <div class="card mt-3">
    <div class="card-header bg-primary text-white">
        Form input data ecanteen
    </div>
    <div class="card-body">
       <form method="post" action="">
        <div class="form-group">
            <label>id_menu</label>
            <input type="text" name="tid_menu" class="form-control" placeholder="Input id-menu anda disini" required>
        </div>
        <div class="form-group mt-3">
            <label>Nama</label>
            <input type="text" name="tnama" class="form-control" placeholder="Input nama anda disini" required>
        </div>
        <div class="form-group mt-3">
            <label>Gambar</label>
            <input type="file" name="tgambar" class="form-control" placeholder="Input gambar anda disini" required>
        </div>
        <div class="form-group mt-3">
            <label>Tenan</label>
            <select class="form-control" name="tenan" >
                <option></option>
                <option value="Tenan 1">Tenan 1 </option>
                <option value="Tenan 2">Tenan 2</option>
                <option value="Tenan 3">Tenan 3</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Harga</label>
            <input type="text" name="tHarga" class="form-control" placeholder="Input Harga anda disini" required>
        <hr></hr>
        </div>
        <button type="submit" class="btn btn-success" name="bsimpan">simpan</button>
        <button type="reset" class="btn btn-danger" name="breset">kosongkan</button>
       </form>
    </div>
    </div>
    <!--akhir card form-->

        <!----awal card table-->
        <div class="card mt-3">
    <div class="card-header bg-success text-white">
        Form daftar menu
    </div>
    <div class="card-body">
    <table class="table table-bordered table-striped">
    <tr>
        <th>id_menu</th>
        <th>Nama</th>
        <th>Tenan</th>
        <th>Harga</th>
        <th>Gambar</th>
    </tr>
<?php
$no = 1;
$tampil = mysqli_query($koneksi,"select * from tmenu order by id-menu desc");
while($data = mysqli_fetch_array($tampil)) :
?>

    <tr>
        <td><?=$no++;?></td>
        <td><?=$data['menu_id']?></td>
        <td><?=$data['nama_menu']?></td>
        <td><?=$data['tenan']?></td>
        <td><?=$data['harga']?></td>
        <td><?=$data['gambar']?></td>
    </tr>
<?php endwhile;
?>
</table>

    </div>
    </div>
    <!--akhir card table-->
    </div>
<script type="text/javascript" src="js/bootstrap.min.js"> </script>
</body>
</html>