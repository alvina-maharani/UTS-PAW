<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id_alvina'];
    $nama = $_POST['nama_alvina'];
    $email = $_POST['email_alvina'];
    $alamat = $_POST['alamat_alvina'];
   

    // buat query update
    $sql = "UPDATE tbl_alvina SET nama_alvina='$nama', email_alvina='$email', alamat_alvina='$alamat' WHERE id_alvina=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-data.php
        header('Location: list-data.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>
