<?php
include_once("../../Config.php");
    if(isset($_POST['submit'])){
        $id_divisi = $_GET['id_divisi'];
        $nama_divisi=$_POST['nama_divisi'];
        $ketua_divisi=$_POST['ketua_divisi'];
        $deskripsi=$_POST['deskripsi'];
        
        $sql=mysqli_query($conn, "UPDATE divisi SET nama_divisi='$nama_divisi',ketua_divisi='$ketua_divisi',deskripsi='$deskripsi' WHERE id_divisi=$id_divisi");
        var_dump($sql);
        if($sql){
            header("Location: ../../Pages/Divisi/index.php");
        }
   } 
?>