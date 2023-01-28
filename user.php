<?php

include "config.php";
session_start();
if ($_SESSION["admin"] == "") {
    header('location: welcome.php');
}

$menus = mysqli_query($connection,"select * from tb_menu");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-start">
            <div>
                <a href="../menu/create.php" class="btn btn-primary mb-3">Create Menu</a>
            </div>
            <?php while($row = mysqli_fetch_assoc($menus)):?>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/<?= $row['image_menu'] ?>" class="card-img-top p-2" alt="<?= $row['image_menu'] ?>">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title"><?= $row['name_menu'] ?></h5>
                        </div>
                        <div class="float-end text-center">
                            <h5 class="card-title">Rp<?= $row['price_menu'] ?></h5>
                        </div>
                        <div class="float-start">
                            <a href="../menu/update.php?id=<?= $row['id_menu'] ?>" class="btn btn-success">Edit</a>
                            <a href="../menu/delete.php?id=<?= $row['id_menu'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile?>
        </div>
    </div>
</body>

</html>