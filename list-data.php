<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Baru</title>
</head>

<body>
    <header>
        <h3>Yang Sudah Terdaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tbl_alvina";
        $query = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['id_alvina']."</td>";
            echo "<td>".$data['nama_alvina']."</td>";
            echo "<td>".$data['email_alvina']."</td>";
            echo "<td>".$data['alamat_alvina']."</td>";
          

            echo "<td>";
            echo "<a href='form-edit.php?id_alvina=".$data['id_alvina']."'>Edit</a> | ";
            echo "<a href='hapus.php?id_alvina=".$data['id_alvina']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    

    </body>
</html>
