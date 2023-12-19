<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Lama</title>
</head>
<body>
<h1>Edit Data</h1>
<form action="/hewan/{{$hewan->id}}" method="post">
    <fieldset>
        @method('put')
        @csrf 
        <div class="mb-3">
        <label for="nama" class="form-label">No Induk</label>
        <input type="text" id="nama" class="form-control" placeholder="nama" value="{{$hewan->nama}}">
        </div>
        <div class="mb-3">
        <label for="jenis" class="form-label">Jenis Hewan</label>
        <input type="text" id="jenis" class="form-control" placeholder="jenis Hewan" value="{{$hewan->jenis}}">
        </div>
        <div class="mb-3">
        <label for="spesies" class="form-label">Spesies Hewan</label>
        <input type="text" id="spesies" class="form-control" placeholder="Spesies Hewan" value="{{$hewan->spesies}}">
        </div>
        <div class="mb-3">
        <label for="warna" class="form-label">warna</label>
        <input type="text" id="warna" class="form-control" placeholder="program studi" value="{{$hewan->warna}}">
        </div>
        <div class="mb-3">
        <label for="gender" class="form-label">Jenis Kelamin</label>
        <select id="gender" class="form-select">
            <option value="L" @if ($hewan->gender == "J") selected @endif>Jantan</option>
            <option value="P" @if ($hewan->gender == "B") selected @endif>Betina</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>
</body>