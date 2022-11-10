@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="text-center mt-5 text-dark">
                <h1>DATA MENU</h1>
        </div>
<div class="row mt-5">
        <div class="col">
            <div class="col-md-3">
                <form action="" method="post">
                <div class="input-group me-auto">
                    <input type="text" class="form-control" placeholder="Cari Menu" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button class="input-group-text" type="submit" ><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
            </div>
        </div>
</div>

<table class="table mt-5">
    <thead>
      <tr>
        <th>Id_Menu</th>
        <th>Nama</th>
        <th>Tenan</th>
        <th>Harga</th>
        <th>Gambar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Bakso</td>
        <td>Tenan 2</td>
        <td>10.000</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Ayam Bakar</td>
        <td>Tenan 1</td>
        <td>16.000</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Pizza</td>
        <td>Tenan 3</td>
        <td>12.000</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Rawon</td>
        <td>Tenan 3</td>
        <td>12.000</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Penyetan</td>
        <td>Tenan 1</td>
        <td>15.000</td>
      </tr>

    </tbody>
  </table>
</div>
@endsection