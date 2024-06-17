<?php
if (isset($_POST['submit'])) {
    $npmnya = $_POST['inputan_npm'];
    $nilainya = $_POST['inputan_nilai'];
    $perulangan = $_POST['inputan_ulangi'];

    if ($nilainya != "" && $perulangan != "") {
        if ($nilainya >= 85) {
            $mutunya = 'A';
        } elseif ($nilainya >= 75) {
            $mutunya = 'B';
        } elseif ($nilainya >= 65) {
            $mutunya = 'C';
        } else {
            $mutunya = 'E';
        }
    }

    for ($i = 1; $i <= $perulangan; $i++) {
        // echo "<script>alert('" . $npmnya . " Nilai mata kuliah anda adalah: " . $mutunya . "')</script>";
        echo $npmnya . ' Nilai mata kuliah anda adalah: ' . $mutunya . '<br>';
    }
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
</head>

<body>
    <div class="span9" id="content" bis_skin_checked="1">
        <!-- morris stacked chart -->
        <div class="row-fluid" bis_skin_checked="1">
            <!-- block -->
            <div class="block" bis_skin_checked="1">
                <div class="navbar navbar-inner block-header" bis_skin_checked="1">
                    <div class="muted pull-left" bis_skin_checked="1">Form Example</div>
                </div>
                <div class="block-content collapse in" bis_skin_checked="1">
                    <div class="span12" bis_skin_checked="1">
                        <form class="form-horizontal" action="" method="POST">
                            <fieldset>
                                <legend>Form Horizontal</legend>
                                <div class="control-group" bis_skin_checked="1">
                                    <label class="control-label" for="focusedInput">NPM</label>
                                    <div class="controls" bis_skin_checked="1">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" name="inputan_npm">
                                    </div>
                                </div>
                                <div class="control-group" bis_skin_checked="1">
                                    <label class="control-label" for="focusedInput">NILAI</label>
                                    <div class="controls" bis_skin_checked="1">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" name="inputan_nilai">
                                    </div>
                                </div>
                                <div class="control-group" bis_skin_checked="1">
                                    <label class="control-label" for="focusedInput">ULANGI</label>
                                    <div class="controls" bis_skin_checked="1">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" name="inputan_ulangi">
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
            <!-- /block -->
        </div>
    </div>
</body>


</html>