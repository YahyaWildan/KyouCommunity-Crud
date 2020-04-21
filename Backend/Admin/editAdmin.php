<?php
include_once("../../Config.php");
    if(isset($_POST['submit'])){
        $id_admin = $_GET['id_admin'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_telegram=  $_POST['id_telegram'];
        // $foto=$_POST['foto'];
        
        $sql=mysqli_query($conn, "UPDATE admin SET nama_lengkap='$nama_lengkap',username='$username',password='$password',id_telegram='$id_telegram' WHERE id_admin=$id_admin");
        var_dump($sql);
        if($sql){
            header("Location: ../../Pages/Admin/index.php");

        }
   } 
?>