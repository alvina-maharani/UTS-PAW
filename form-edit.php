<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_alvina']) ){
    header('Location: list-data.php');
}

//ambil id dari query string
$id = $_GET['id_alvina'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_alvina WHERE id_alvina=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);




?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit</title>
</head>

<body>
    <header>
        <h3>Formulir Edit </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_alvina" value="<?php echo $data['id_alvina'] ?>" />

        <p>
            <label for="nama_alvina">Nama: </label>
            <input type="text" name="nama_alvina" placeholder="nama lengkap" value="<?php echo $data['nama_alvina'] ?>" />
        </p>
        <p>
            <label for="email_alvina">Email: </label>
            <textarea name="email_alvina"><?php echo $data['email_alvina'] ?></textarea>
        </p>
        <p>
            <label for="alamat_alvina">Alamat: </label>
            <textarea name="alamat_alvina"><?php echo $data['alamat_alvina'] ?></textarea>
        </p>
       
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
