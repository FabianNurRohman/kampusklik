<?php
include "koneksi.php";

if (isset($_POST['id']) == '') {
    echo "";
} else {
$idnya = $_POST['id'];

$proses_ambil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $idnya") or die(mysqli_error($koneksi));

    $nama_mahasiswa = $_POST['inputan_nama'];
    $prodi_mahasiswa = $_POST['inputan_prodi'];
    $npm_mahasiswa = $_POST['inputan_npm'];

    $proses_update_data = mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa = '$nama_mahasiswa', prodi = '$prodi_mahasiswa', npm = '$npm_mahasiswa' WHERE id = $idnya");

    if ($proses_update_data) {
        echo "<script>
                alert('Data berhasil diedit');
                window.location.href='form.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal diedit');
                window.location.href='form.php';
              </script>";
    }
}