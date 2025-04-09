<?php
include 'db.php';
$id = $_GET['id'];
$koneksi->query("DELETE FROM pegawai WHERE id_pegawai = $id");
header("Location: index.php");
?>