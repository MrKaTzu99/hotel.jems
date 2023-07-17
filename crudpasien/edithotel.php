<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Pengunjung</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pengunjung</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM hotel where idPengunjung='$_GET[edit]'");
                ?>
                <?php
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="idPengunjung">ID Pengunjung</label>

                            <input type="text" class="form-control mb-3" name="idPengunjung" value="<?= $row['idPengunjung'] ?>" readonly>

                        </div>

                        <div class="form-group">
                            <label for="noKamar">No Kamar</label>

                            <input type="text" class="form-control mb-3" name="noKamar" value="<?= $row['noKamar'] ?>">

                        </div>

                        <div class="form-group">
                            <label for="nmPengunjung">Nama Pengunjung</label>

                            <input type="text" class="form-control mb-3" name="nmPengunjung" value="<?= $row['nmPengunjung'] ?>">

                        </div>

                        <div class="form-group">

                            <div class="form-group mt-3">

                                <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>