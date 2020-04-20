
<?php
    include("../../Config.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id_anggota, username FROM anggota WHERE email='$email' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

    session_start();
    $_SESSION['id_anggota']=$data['id_anggota'];
    $_SESSION['username']=$data['username'];
    if($row==1){
        echo"<script>alert('Login Anggota Sukses!!!')</script>";
        echo"<script>top.location='../../Pages/Anggota/index.php'</script>";
    }else{
        echo"<script>alert('Login Anggota Gagal!!!')</script>";
        echo"<script>top.location='../../Pages/Login/index.php'</script>";
    }
?>