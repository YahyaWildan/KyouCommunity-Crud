<?php
    include('../../Config.php');

    $id_anggota = $_GET['id_anggota'];
    $anggotas = mysqli_query($conn,"DELETE FROM anggota WHERE id_anggota='$id_anggota");
    // var_dump($id_anggota);

    header("Location:../../Pages/Anggota/index.php");
?>