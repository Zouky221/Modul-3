<?php include 'db.php'; ?>
<h2>Data Pegawai</h2>
<a href="tambah.php">+ Tambah Pegawai</a>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th><th>Nama</th><th>Jabatan</th><th>Departemen</th>
        <th>Telepon</th><th>Aksi</th>
    </tr>
    <?php
    $sql = "SELECT p.id_pegawai, p.nama_pegawai, j.nama_jabatan, d.nama_departemen, p.no_telepon
            FROM pegawai p
            LEFT JOIN jabatan j ON p.id_jabatan = j.id_jabatan
            LEFT JOIN departemen d ON p.id_departemen = d.id_departemen";
    $result = $koneksi->query($sql);
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>$no</td>
            <td>{$row['nama_pegawai']}</td>
            <td>{$row['nama_jabatan']}</td>
            <td>{$row['nama_departemen']}</td>
            <td>{$row['no_telepon']}</td>
            <td>
                <a href='edit.php?id={$row['id_pegawai']}'>Edit</a> |
                <a href='hapus.php?id={$row['id_pegawai']}' onclick='return confirm(\"Hapus?\")'>Hapus</a>
            </td>
        </tr>";
        $no++;
    }
    ?>
</table>