
    <h1>Tambah Data Hewan</h1>
<form action="/hewan/store" method="post">
    @csrf 
    <label for="nama">Nama Hewan</label>
    <input type="text" id="nama" name="nama"><br><br>
    <label for="jenis">Jenis</label>
    <input type="text" id="jenis" name="jenis"><br><br>
    <label for="spesies">Spesies</label>
    <input type="text" id="spesies" name="spesies"><br><br>
    <label for="warna">Warna</label>
    <input type="text" id="warna" name="warna"><br><br>
    <select name="gender">
        <option value="">Pilih jenis kelamin</option>
        <option value="J">Jantan</option>
        <option value="B">Betina</option>
    </select><br><br>
    <input type="submit" nama="submit" value="save">
</form>
</body>