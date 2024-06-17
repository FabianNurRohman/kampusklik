<?php
include "tampilkan_data.php";

$idnya = isset($_GET['id']) ? $_GET['id'] : "";
if (!empty($idnya)) {
    $get_data_by_id = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$idnya");
    $datanya_id = mysqli_fetch_assoc($get_data_by_id);

    $npm = $datanya_id["npm"];
    $nama_mahasiswa = $datanya_id["nama_mahasiswa"];
    $prodi = $datanya_id["prodi"];

    $status = "edit_data.php";
} else {
    $status = "proses.php";
    $npm = "";
    $nama_mahasiswa = "";
    $prodi = "";
}

$cari = isset($_GET['cari']) ? $_GET['cari'] : "";
if (!empty($cari)) {
    $get_data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama_mahasiswa LIKE '%$cari%' OR npm LIKE '%$cari%'OR prodi LIKE '%$cari%'");
} else {
    $get_data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row-fluid" bis_skin_checked="1">
        <div class="block" bis_skin_checked="1">
            <div class="navbar navbar-inner block-header" bis_skin_checked="1">
                <div class="muted pull-left" bis_skin_checked="1"></div>
                <div class="control-group" bis_skin_checked="1">
                    <form method="GET" action="">
                        <input type="text" name="cari" placeholder="Search" value="<?= htmlspecialchars($cari); ?>">
                        <button type="submit" value="cari">Search</button>
                    </form>
                    <?php 
                    if(!empty($cari)){
                        echo "<b>Hasil pencarian : ".htmlspecialchars($cari)."</b>";
                    }
                    ?>
                </div>
            </div>
            <div class="block-content collapse in" bis_skin_checked="1">
                <div class="span12" bis_skin_checked="1">
                    <form class="form-horizontal" action="<?= htmlspecialchars($status); ?>" method="POST">
                        <fieldset>
                            <legend>Form Horizontal</legend>
                            <input type="hidden" name="id" value="<?= htmlspecialchars($idnya); ?>">
                            <div class="control-group" bis_skin_checked="1">
                                <label class="control-label" for="focusedInput">NPM</label>
                                <div class="controls" bis_skin_checked="1">
                                    <input class="input-xlarge focused" id="focusedInput" type="number" name="inputan_npm" value="<?= htmlspecialchars($npm); ?>">
                                </div>
                            </div>
                            <div class="control-group" bis_skin_checked="1">
                                <label class="control-label" for="focusedInput">NAMA</label>
                                <div class="controls" bis_skin_checked="1">
                                    <input class="input-xlarge focused" id="focusedInput" type="text" name="inputan_nama" value="<?= htmlspecialchars($nama_mahasiswa); ?>">
                                </div>
                            </div>
                            <div class=" control-group" bis_skin_checked="1">
                                <label class="control-label" for="focusedInput">PRODI</label>
                                <div class="controls" bis_skin_checked="1">
                                    <input class="input-xlarge focused" id="focusedInput" type="text" name="inputan_prodi" value="<?= htmlspecialchars($prodi); ?>">
                                </div>
                            </div>
                            <div class="form-actions" bis_skin_checked="1">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid" bis_skin_checked="1">
        <div class="block" bis_skin_checked="1">
            <div class="navbar navbar-inner block-header" bis_skin_checked="1">
                <div class="muted pull-left" bis_skin_checked="1">Basic Table</div>
            </div>
            <div class="block-content collapse in" bis_skin_checked="1">
                <div class="span12" bis_skin_checked="1">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Mahasiswa</th>
                                <th>NPM Mahasiswa</th>
                                <th>Nama Mahasiswa</th>
                                <th>Prodi Mahasiswa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data = mysqli_fetch_assoc($get_data)) { ?>
                                <tr>
                                    <td><?= htmlspecialchars($data['id']) ?></td>
                                    <td><?= htmlspecialchars($data['npm']) ?></td>
                                    <td><?= htmlspecialchars($data['nama_mahasiswa']) ?></td>
                                    <td><?= htmlspecialchars($data['prodi']) ?></td>
                                    <td><a href="form.php?id=<?= htmlspecialchars($data['id']) ?>">Edit</a> | <a href="hapus_data.php?id=<?= htmlspecialchars($data['id']) ?>">Hapus</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>