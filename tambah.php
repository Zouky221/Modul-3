<?php include 'db.php'; ?>
<h2>Tambah Pegawai</h2>
<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Jenis Kelamin:
    <select name="jk">
        <option>Laki-laki</option>
        <option>Perempuan</option>
    </select><br>
    Tanggal Lahir: <input type="date" name="tgl_lahir"><br>
    Alamat: <input type="text" name="alamat"><br>
    Telepon: <input type="text" name="telepon"><br>
    Jabatan ID: <input type="number" name="jabatan"><br>
    Departemen ID: <input type="number" name="departemen"><br>
    Tanggal Masuk: <input type="date" name="tgl_masuk"><br>
    <button type="submit">Simpan</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "INSERT INTO pegawai (nama_pegawai, jenis_kelamin, tanggal_lahir, alamat, no_telepon, id_jabatan, id_departemen, tanggal_masuk)
            VALUES ('{$_POST['nama']}', '{$_POST['jk']}', '{$_POST['tgl_lahir']}', '{$_POST['alamat']}', '{$_POST['telepon']}', {$_POST['jabatan']}, {$_POST['departemen']}, '{$_POST['tgl_masuk']}')";
    $koneksi->query($sql);
    header("Location: index.php");
}
?>