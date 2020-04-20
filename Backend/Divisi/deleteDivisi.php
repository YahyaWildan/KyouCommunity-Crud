<?php
    include_once('../../Config.php');
    $id_divisi = $_GET['id_divisi'];

    $sql=mysqli_query($conn, "DELETE FROM divisi WHERE id_divisi=$id_divisi");
    // var_dump($sql);
    if($sql){
        header("location:../../Pages/Divisi/index.php");
    }
?>