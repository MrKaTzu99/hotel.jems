<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data User</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data User</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM hotel where idUser='$_GET[edit]'");
                ?>
                <?php
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="idUser">ID User</label>

                            <input type="text" class="form-control mb-3" name="idUser" value="<?= $row['idUser'] ?>" readonly>

                        </div>

                        <div class="form-group">
                            <label for="Username">Username</label>

                            <input type="text" class="form-control mb-3" name="Username" value="<?= $row['Username'] ?>">

                        </div>

                        <div class="form-group">
                            <label for="Role">Role</label>

                            <input type="text" class="form-control mb-3" name="Role" value="<?= $row['Role'] ?>">

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