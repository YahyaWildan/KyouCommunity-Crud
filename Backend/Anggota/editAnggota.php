<?php
include_once("../../Config.php");
    if(isset($_POST['submit'])){
        $id_anggota = $_GET['id_anggota'];
        $nama_lengkap=$_POST['nama_lengkap'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $id_telegram=$_POST['id_telegram'];
        $alamat=$_POST['alamat'];
        $foto=$_POST['foto'];
        
        $sql=mysqli_query($conn, "UPDATE anggota SET nama_lengkap='$nama_lengkap',email='$email',username='$username',password='$password',alamat='$alamat',id_telegram='$id_telegram',foto='$foto' WHERE id_anggota=$id_anggota");
        var_dump($sql);
        if($sql){
            header("Location: ../../Pages/Anggota/index.php");
        }
   } 
?>