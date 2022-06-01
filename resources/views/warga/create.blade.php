<h1>Create New Data</h1>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama". placeholder="NAME"><br>
    <input type="text" name="nik". placeholder="NIK"><br>
    <input type="text" name="no_kk". placeholder="NO.KK"><br>
    <select name="jeniskelamin">
        <option value="">Choose Your Gender</option>
        <option value="L">Boys</option>
        <option value="P">Females</option>
    </select><br>
    <textarea name="alamat" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Save">
</form>