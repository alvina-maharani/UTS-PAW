<?php

include("config.php");

if( isset($_GET['id_alvina']) ){

    // ambil id dari query string
    $id = $_GET['id_alvina'];

    // buat query hapus
    $sql = "DELETE FROM tbl_alvina WHERE id_alvina=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-data.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
