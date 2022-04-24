<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran </h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_alvina">Nama: </label>
            <input type="text" name="nama_alvina" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="email_alvina">Email: </label>
            <textarea name="email_alvina"></textarea>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat_alvina"></textarea>
        </p>
      
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
