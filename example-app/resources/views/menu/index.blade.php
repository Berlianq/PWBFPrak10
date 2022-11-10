<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <thead>
            <td>No</td>
            <td>Nama Menu</td>
            <td>Stok</td>
            <td>Harga</td>
    </thead>
    <tbody>
            @foreach ($menu as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->nama_menu }}</td>
                <td>{{ $m->stok_menu }}</td>
                <td>{{ $m->harga }}</td>
            </tr>
            
            @endforeach
    </tbody>

</body>
</html>