<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">GUDANG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>

                <?php
                if (empty($_SESSION['email'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">Login</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php">Tambah Data</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?php
            include 'alert.php';
        ?>
        <h1>Login</h1>
        <form action="prosesLogin.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control mb-3">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control mb-3">

            <button type="submit" class="btn btn-success" name="button">Login</button>
        </form>
    </div>
</body>
</html>