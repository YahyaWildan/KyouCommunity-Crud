
<?php
    include("../../Config.php");

    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $id_telegram = $_POST['id_telegram'];
    $foto = $_POST['foto'];

    $sql = "INSERT INTO anggota(nama_lengkap,username,email,password,alamat,id_telegram,foto) VALUES('$nama_lengkap','$username','$email','$password','$alamat','$id_telegram','$foto')";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo"<script>alert('Daftar Anggota Sukses!!!')</script>";
        echo"<script>top.location='../../Pages/Anggota/index.php'</script>";
    }else{
        echo"<script>alert('Daftar Angg Gagal!!!')</script>";
        echo"<script>top.location='../../Pages/Login/regis.php'</script>";
    }
?>