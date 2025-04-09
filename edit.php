<?php include 'db.php'; 
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM pegawai WHERE id_pegawai=$id")->fetch_assoc();
?>
<h2>Edit Pegawai</h2>
<form method="POST">
    Nama: <input type="text" name="nama" value="<?= $data['nama_pegawai'] ?>"><br>
    Jenis Kelamin:
    <select name="jk">
        <option <?= $data['jenis_kelamin']=='Laki-laki'?'selected':'' ?>>Laki-laki</option>
        <option <?= $data['jenis_kelamin']=='Perempuan'?'selected':'' ?>>Perempuan</option>
    </select><br>
    Tanggal Lahir: <input type="date" name="tgl_lahir" value="<?= $data['tanggal_lahir'] ?>"><br>
    Alamat: <input type="text" name="alamat" value="<?= $data['alamat'] ?>"><br>
    Telepon: <input type="text" name="telepon" value="<?= $data['no_telepon'] ?>"><br>
    Jabatan ID: <input type="number" name="jabatan" value="<?= $data['id_jabatan'] ?>"><br>
    Departemen ID: <input type="number" name="departemen" value="<?= $data['id_departemen'] ?>"><br>
    Tanggal Masuk: <input type="date" name="tgl_masuk" value="<?= $data['tanggal_masuk'] ?>"><br>
    <button type="submit">Update</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "UPDATE pegawai SET 
                nama_pegawai='{$_POST['nama']}',
                jenis_kelamin='{$_POST['jk']}',
                tanggal_lahir='{$_POST['tgl_lahir']}',
                alamat='{$_POST['alamat']}',
                no_telepon='{$_POST['telepon']}',
                id_jabatan={$_POST['jabatan']},
                id_departemen={$_POST['departemen']},
                tanggal_masuk='{$_POST['tgl_masuk']}'
            WHERE id_pegawai=$id";
    $koneksi->query($sql);
    header("Location: index.php");
}
?>