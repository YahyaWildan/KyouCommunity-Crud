<?php
    include_once('../../Config.php');
    $id_admin = $_GET['id_admin'];

    $sql=mysqli_query($conn, "DELETE FROM admin WHERE id_admin=$id_admin");
    // var_dump($sql);
    if($sql){
        header("location:../../Pages/Admin/index.php");
    }
?>