<?php
    include 'dbconnect.php';
    if(isset($_GET['Name'])){
        $delete = mysqli_query($koneksi, "DELETE FROM city WHERE Name ='".$_GET['Name']."' ");
        header('location:index.php');
    }
?>