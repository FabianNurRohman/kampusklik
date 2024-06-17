<?php
include "koneksi.php";

//if (isset($_POST['submit'])) {
    $npmnya = $_POST['inputan_npm'];
    $namanya = $_POST['inputan_nama'];
    $prodinya = $_POST['inputan_prodi'];

    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (npm, nama_mahasiswa, prodi) VALUES ('$npmnya', '$namanya', '$prodinya')") or die(mysqli_error($koneksi));

    if ($proses) {
        echo "<script>
                alert('Data berhasil disimpan');
                window.location.href='form.php';
              </script>";
    } else {
    echo "<script>
                alert('Data Gagal disimpan');
                window.location.href='form.php';
              </script>";
    }
    
    // if ($nilainya != "" && $perulangan != "") {
    //     if ($nilainya >= 85) {
    //         $mutunya = 'A';
    //     } elseif ($nilainya >= 75) {
    //         $mutunya = 'B';
    //     } elseif ($nilainya >= 65) {
    //         $mutunya = 'C';
    //     } else {
    //         $mutunya = 'E';
    //     }
    // }

    // for ($i = 1; $i <= $perulangan; $i++) {
    //     // echo "<script>alert('" . $npmnya . " Nilai mata kuliah anda adalah: " . $mutunya . "')</script>";
    //     echo $npmnya . ' Nilai mata kuliah anda adalah: ' . $mutunya . '<br>';
    // }
//}