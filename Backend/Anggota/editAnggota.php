
<?php
    include("../../Connect.php");

    if (isset($_POST['submit'])) {
        $id_anggota = $_POST['id_anggota'];

        $nama_lengkap=$_POST['nama_lengkap'];
        $username = $_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $id_telegram=$_POST['id_telegram'];
        $alamat=$_POST['alamat'];
        $foto=$_POST['foto'];

        $result = mysqli_query($conn, "UPDATE anggota SET nama_lengkap='$nama_lengkap',username='$username',email='$email',password='$password',id_telegram='$id_telegram,alamat='$alamat',foto='$foto' WHERE id_anggota = $id_anggota");
        
        if($result) {
          header("Location: /KyouCommunity/Pages/Anggota/index.php");
        } else {
          echo "Error: " . $result . "<br>" . $conn->error;
        }
    }
?>
