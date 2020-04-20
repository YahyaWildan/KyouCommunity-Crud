
<?php
    include("../../Config.php");

    $nama_divisi = $_POST['nama_divisi'];
    $ketua_divisi = $_POST['ketua_divisi'];
    $deskripsi = $_POST['deskripsi'];
 

    $sql = "INSERT INTO divisi(nama_divisi,ketua_divisi,deskripsi) VALUES('$nama_divisi','$ketua_divisi','$deskripsi')";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo"<script>alert('Daftar Divisi Sukses!!!')</script>";
        echo"<script>top.location='../../Pages/Divisi/index.php'</script>";
    }else{
        echo"<script>alert('Daftar Divisi Gagal!!!')</script>";
        echo"<script>top.location='../../Pages/Divisi/create.php'</script>";
    }
?>