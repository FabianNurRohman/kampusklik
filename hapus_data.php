<?php
include "koneksi.php";

$idnya = $_GET['id'];

$proses = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $idnya") or die(mysqli_error($koneksi));

if ($proses) {
    echo "<script>
                alert('Data berhasil dihapus');
                window.location.href='form.php';
              </script>";
} else {
    echo "<script>
                alert('Data Gagal dihapus');
                window.location.href='form.php';
              </script>";
}