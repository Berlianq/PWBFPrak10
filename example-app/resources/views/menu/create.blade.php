<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
       <form method="post" action="{{ route('menu.store') }}">
        @csrf
        <div class="form-group">
            <label>id_menu</label>
            <input type="text" name="tid_menu" class="form-control" placeholder="Input id menu anda disini">
        </div>
        <div class="form-group mt-3">
            <label>Nama</label>
            <input type="text" name="nama_menu" class="form-control" placeholder="Input nama anda disini" required>
        </div>
        <div class="form-group mt-3">
            <label>Stok</label>
            <input type="text" name="stok_menu" class="form-control" placeholder="Input stok anda disini" required>
        </div>
        
        <div class="form-group mt-3">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Input Harga anda disini" required>
        <hr>
        </div>
        <button type="submit" class="btn btn-success" name="bsimpan">simpan</button>
        <button type="reset" class="btn btn-danger" name="breset">kosongkan</button>
       </form>
    </div>
    </div>
    <!--akhir card form-->

      
<script type="text/javascript" src="js/bootstrap.min.js"> </script>
</body>
</html>