<?php
    include('../../Config.php');

    $admins = mysqli_query($conn, 'SELECT * FROM admin');
?>