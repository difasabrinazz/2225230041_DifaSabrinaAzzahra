<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body>
<h1 class="text-center">Data Hewan</h1>
    <div class="container" >
    <a class="btn btn-info" href="/hewan/create">Tambah Data</a>
<table border="1" class="table table-striped table-hover">
    <tr>
        <td>No </td>
        <td>Nama Hewan</td>
        <td>Jeni Hewan</td>
        <td>Spesies Hewan</td>
        <td>Warna Hewan</td>
        <td>Gender Hewan</td>
        <td>Aksi</td>
    </tr>
    @foreach($hewan as $hw)
    <tr>
        <td>{{$hw->id}}</td>
        <td>{{$hw->nama}}</td>
        <td>{{$hw->jenis}}</td>
        <td>{{$hw->spesies}}</td>
        <td>{{$hw->warna}}</td>
        <td>{{$hw->gender}}</td>
        <td>
            <a href ="/hewan/{{$hw->id}}/edit">Edit</a>
            <form action="/hewan/{{$hw->id}}" method="POST">
                @csrf  
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
