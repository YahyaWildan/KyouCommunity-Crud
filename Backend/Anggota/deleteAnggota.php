<?php
    include_once('../../Config.php');
    $id_anggota = $_GET['id_anggota'];

    $sql=mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota=$id_anggota");
    // var_dump($sql);
    if($sql){
        header("location:../../Pages/Anggota/index.php");
    }
?>