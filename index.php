<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Data</title>
    </head>

    <body>
        <header>
            <h3>Pendaftara Data Baru</h3>
            <h1>029_Alvina</h1>
        </header>

        <h4>Menu</h4>
        <nav>
        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-data.php">Pendaftaran</a></li>
            </ul>
        </nav>

    </body>
</html>
