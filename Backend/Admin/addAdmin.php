<?php
    include('../../Config.php');

    $nama_lengkap=$_POST['nama_lengkap'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_telegram=$_POST['id_telegram'];

    $sql = "INSERT INTO admin(nama_lengkap, username, password, id_telegram)VALUES('$nama_lengkap','$username','$password','$id_telegram')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script>alert('Daftar Admin Sukses!!!')</script>";
        echo "<script>top.location='../../Pages/Admin/index.php'</script>";
    }else{
        echo "<script>alert('Daftar Admin Gagal!!!')</script>";
        echo "<script>top.location='../../Pages/Admin/create.php'</script>";
    }
?>